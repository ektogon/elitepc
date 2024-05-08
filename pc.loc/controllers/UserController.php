<?php
include_once '../models/CategoriesModel.php';
include_once '../models/UsersModel.php';

/**
 * Регистрация нового пользователя
 *  вызывается из main.js 
 * @return void json массив c статусом регистрации, сообщением ошибки
 */
function registerAction()
{
    session_start();
    include '../config/db.php';
    unset($resData);

    $name = trim(htmlspecialchars((mysqli_real_escape_string($db, $_POST['name']))));
    $email = trim(htmlspecialchars((mysqli_real_escape_string($db, $_POST['email']))));
    $login = trim(htmlspecialchars((mysqli_real_escape_string($db, $_POST['login']))));
    $pwd1 = trim(htmlspecialchars((mysqli_real_escape_string($db, $_POST['pwd1']))));
    $pwd2 = trim(htmlspecialchars((mysqli_real_escape_string($db, $_POST['pwd2']))));

    $resData = checkRegisterParams($email, $pwd1, $pwd2, $login, $name);

    if ($resData['status'] == false) {
        echo json_encode($resData);
        die();
    }

    if ($pwd1 === $pwd2) {
        $pwd1 = md5($pwd1);
        $res = newuser($email, $pwd1, $login, $name);
        echo json_encode($res);
        die();
    } else {
        $res = [
            "status" => false,
            "message" => "Пароли не совпадают"
        ];
        echo json_encode($res);
        die();
    }
}


/**
 * Авторизация пользователя
 *
 * @return void json массив c статусом регистрации, сообщением ошибки
 */
function authorizationAction()
{
    session_start();
    include '../config/db.php';

    $login = $_POST['login'];
    $password = md5($_POST['password']);

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

        echo json_encode($response);

        die();
    }

    $check_user = mysqli_query($db, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");
    if (mysqli_num_rows($check_user) > 0) {

        $user = mysqli_fetch_assoc($check_user);

        $_SESSION['user'] = [
            "id" => $user['id'],
            "name" => $user['name'],
            "email" => $user['email']
        ];
        $response = [
            "status" => true
        ];
        echo json_encode($response);
    } else {

        $response = [
            "status" => false,
            "message" => 'Не верный логин или пароль'
        ];
        echo json_encode($response);
    }
}

/**
 * Выход из аккаунта
 *
 * @return void
 */
function logoutAction()
{
    unset($_SESSION['user']);
    unset($_SESSION['cart']);
    header("Location: /");
}


function indexAction($smarty){
    
    if(!isset($_SESSION['user'])){
        header("Location: /");
    }

    $rsCategories = getAllMainCatsWithChildren();

    $smarty->assign('pageTitle', 'Страница пользователя');
    $smarty->assign('rsCategories',$rsCategories); 

    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'user');
}