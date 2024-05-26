<?php


 /**
  * Проверка введенных данных
  *
  * @param [type] $email
  * @param [type] $pwd1
  * @param [type] $pwd2
  * @param [type] $login
  * @param [type] $name
  * @return void  массив c статусом регистрации, сообщением ошибки
  */
function checkRegisterParams($email, $pwd1, $pwd2, $login, $name)
{
    include '../config/db.php';
    $check_login = mysqli_query($db, "SELECT*FROM `users` WHERE `login` = '$login'");
    if (mysqli_num_rows($check_login) > 0) {
        $response = [
            "status" => false,
            "type" => 1,
            "message" => "Такой логин уже занят!",
            "fields" => ['login']
        ];
        return $response;
    }

    $error_fields = [];

    if ($login === '') $error_fields[] = 'login';

    if ($pwd1 === '') $error_fields[] = 'password';

    if ($name === '') $error_fields[] = 'name';

    if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) $error_fields[] = 'email';

    if ($pwd2 === '') $error_fields[] = 'repeat_pass';

    if (!empty($error_fields)) {
        $response = [
            "status" => false,
            "type" => 1,
            "message" => "Проверьте правильность полей",
            "fields" => $error_fields
        ];
        return $response;
    }
    $response['status'] = true;
    return $response;
}



function checkLoginParams($login,$password){
    $error_fields = [];

    if ($login === '') {
        $error_fields[] = 'login';
    }

    if ($password === '') {
        $error_fields[] = 'password';
    }

    if (!empty($error_fields)) {
        $response = [
            "status" => false,
            "type" => 1,
            "message" => "Проверьте правильность полей",
            "fields" => $error_fields
        ];
        return $response;
    }
    $response['status'] = true;
    return $response;
}

/**
 * Добавление нового пользователя в бд
 *
 * @param [type] $email
 * @param [type] $pwd1
 * @param [type] $login
 * @param [type] $name
 * @return void
 */
function newuser($email, $pwd1, $login, $name)
{
    include '../config/db.php';
    mysqli_query($db, "INSERT INTO `users` 
    (`id`, `name`, `email`, `login`, `password`) 
    VALUES (NULL, '$name', '$email', '$login','$pwd1')");
    $response = [
        "status" => true,
        "message" => "Регистрация прошла успешно!"
    ];
    return $response;
}



function login($login,$password){
    include '../config/db.php';
    $check_user = mysqli_query($db, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");
    if (mysqli_num_rows($check_user) > 0) {

        $user = mysqli_fetch_assoc($check_user);
        $_SESSION['user'] = [
            "id" => $user['id'],
            "name" => $user['name'],
            "email" => $user['email'],
            "login" => $user['login'],
            "password" => $user['password']
        ];

        $response = [
            "status" => true
        ];
    } else {

        $response = [
            "status" => false,
            "message" => 'Неверный логин или пароль'
        ];
    }
    return $response;
}

/**
 * Изменение данных пользователя
 *
 * @param [type] $email
 * @param [type] $name
 * @param [type] $pwd1
 * @param [type] $pwd2
 * @param [type] $curpwd
 * @return void
 */
function updateUserData($email,$name,$pwd1,$pwd2,$curpwd){
    include '../config/db.php';
    $name = trim(htmlspecialchars((mysqli_real_escape_string($db, $name))));
    $email = trim(htmlspecialchars((mysqli_real_escape_string($db, $email))));
    $login = trim(htmlspecialchars((mysqli_real_escape_string($db, $_SESSION['user']['login']))));
    $curpwd = trim(htmlspecialchars((mysqli_real_escape_string($db, $curpwd))));
    $pwd1 = trim($pwd1);
    $pwd2 = trim($pwd2);

    $newpwd = null;
    if($pwd1 && ($pwd1 == $pwd2)){
        $newpwd = md5($pwd1);
    }

    $sql = "UPDATE `users` SET ";
    
    if($newpwd) $sql .= "`password` = '{$newpwd}' ";
    
    if($email){
        if($newpwd) $sql .= ", ";
        $sql .= "`email` = '{$email}' ";
    } 

    if($name){
        if($email) $sql .= ", ";
        $sql .= "`name` = '{$name}' ";
    } 

    $sql .= " WHERE `login` = '{$login}' 
             AND `password` = '{$curpwd}'
             LIMIT 1";
             
    $response = mysqli_query($db, $sql);
    return $response;
}


function getAllUserOrders(){
    
    $userId = isset($_SESSION['user']['id']) ? $_SESSION['user']['id'] :0;
    $rs = getOrdersWithProductsByUser($userId);
    return $rs;
}