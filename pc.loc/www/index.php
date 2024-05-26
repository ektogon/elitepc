<?php
session_start();
error_reporting(0);

//Создаем корзину если ее нет
if(! isset($_SESSION['cart'])){
    $_SESSION['cart'] = array();
}


include_once '../config/config.php';        // Инициализация настроек
include_once '../config/db.php';            // Инициализация БД
include_once '../library/mainFunctions.php'; // Основные функции

// определяем с каким контроллером будем работать
$controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'Home';

// определяем с какой функцией будем работать
$actionName = isset($_GET['action']) ? $_GET['action'] : 'index';


//если в сессии есть данные об авторизированном пользователе, то передаем их в шаблон
if(isset($_SESSION['user'])){
    $smarty->assign('user', $_SESSION['user']);
}
//Количество элементов в корзине
$smarty->assign('cartCntItems', count($_SESSION['cart']));

loadPage($smarty,$controllerName, $actionName);