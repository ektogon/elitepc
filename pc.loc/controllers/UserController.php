<?php
include_once '../models/CategoriesModel.php';
include_once '../models/UsersModel.php';
include_once '../models/OrdersModel.php';
include_once '../models/PurchaseModel.php';

/**
 * Регистрация нового пользователя
 *  вызывается из main.js 
 * @return void json массив c статусом регистрации, сообщением ошибки
 */
function registerAction()
{
    session_start();
    include '../config/db.php';

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

    $login = trim(htmlspecialchars((mysqli_real_escape_string($db, $_POST['login']))));
    $password = md5(trim(htmlspecialchars((mysqli_real_escape_string($db, $_POST['password'])))));

    $resData = checkLoginParams($login, $password);

    if ($resData['status'] == false) {
        echo json_encode($resData);
        die();
    }

    $resData = login($login, $password);
    echo json_encode($resData);
}

/**
 * Выход из аккаунта
 *
 * @return void
 */
function logoutAction()
{
    unset($_SESSION['user']);
    header("Location: /");
}


function indexAction($smarty)
{

    if (!isset($_SESSION['user'])) {
        header("Location: /");
    }

    $rsCategories = getAllMainCatsWithChildren();
    $rsUserOrders = getAllUserOrders();
    
    $smarty->assign('pageTitle', 'Страница пользователя');
    $smarty->assign('rsCategories', $rsCategories);
    $smarty->assign('rsUserOrders', $rsUserOrders);
    // d($rsUserOrders);
    
    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'user');
}

/**
 * Обновление данных пользователя
 *
 * @param [type] $smarty
 * @return void
 */
function updateAction($smarty)
{

    if (!isset($_SESSION['user'])) {
        header("Location: /");
    }
    $resData = array();

    $name = isset($_POST['name']) ? $_POST['name'] : null;
    $email = isset($_POST['email']) ? $_POST['email'] : null;
    $pwd1 = isset($_POST['pwd1']) ? $_POST['pwd1'] : null;
    $pwd2 = isset($_POST['pwd2']) ? $_POST['pwd2'] : null;
    $curpwd = isset($_POST['curpwd']) ? $_POST['curpwd'] : null;

    $curpwdmd5 = md5($curpwd);

    if (!$curpwd || ($_SESSION['user']['password'] != $curpwdmd5)) {
        $resData['success'] = false;
        $resData['message'] = 'Текущий пароль не верный';
        echo json_encode($resData);
        die();
    }

    $res = updateUserData($email, $name, $pwd1, $pwd2, $curpwdmd5);

    if ($res) {
        $resData['success'] = true;
        $resData['message'] = 'Данные сохранены';
        $resData['userName'] = $name;

        $newpwd = $_SESSION['user']['password'];
        if ($pwd1 && ($pwd1 == $pwd2)) {
            $newpwd = md5(trim($pwd1));
        }

        $_SESSION['user']['password'] = $newpwd;
        $_SESSION['user']['name'] = $name;
        $_SESSION['user']['email'] = $email;
    } else {
        $resData['success'] = false;
        $resData['message'] = 'Ошибка сохранения данных';
    }
    echo json_encode($resData);
    die();
}

function deleteorderAction($smarty)
{
    $orderID = $_POST['orderID'];
    $resData = delOrder( $orderID );
    echo json_encode($resData);
    die();
}