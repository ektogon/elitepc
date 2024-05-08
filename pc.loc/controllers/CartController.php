<?php

/**
 * Контроллер для работы с корзиной 
 */
include_once '../models/CategoriesModel.php';
include_once '../models/ProductsModel.php';
include_once '../config/db.php';  

/**
 * Добавляем продукт в корзину
 */
function addtocartAction()
{
    $itemId = isset($_GET['id']) ? intval($_GET['id']) : null;
    if (!$itemId) return false;


    $resData = array();

    //Если значение не найдено, то добавляем
    if (isset($_SESSION['cart']) && array_search($itemId, $_SESSION['cart']) === false) {
        $_SESSION['cart'][] = $itemId;
        $resData['cntItems'] = count($_SESSION['cart']);
        $resData['success'] = 1;
    } else {
        $resData['success'] = 0;
    }
    // unset($_SESSION['cart']);
    echo json_encode($resData);
}

/**
 * Удаление продукта из корзины
 */
function removefromcartAction()
{
    $itemId = isset($_GET['id']) ? intval($_GET['id']) : null;
    if (!$itemId) return false;

    $resData = array();

    $key = array_search($itemId, $_SESSION['cart']);
    if ($key !== false) {
        unset($_SESSION['cart'][$key]);
        $resData['cntItems'] = count($_SESSION['cart']);
        $resData['success'] = 1;
    } else {
        $resData['success'] = 0;
    }
    echo json_encode($resData);
}


/**
 * Формирование Страницы корзины
 */
function indexAction($smarty){
    $itemsIds = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();
    $rsCategories = getAllMainCatsWithChildren();
    $rsProducts = null;
    if($itemsIds){
        $rsProducts = getProductsFromArray($itemsIds);
    }
    $smarty->assign('pageTitle', 'Корзина');
    $smarty->assign('rsCategory', $rsCategories);
    $smarty->assign('rsProducts', $rsProducts);

    $smarty->assign('rsCategories', $rsCategories);
    

    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'cart');
}