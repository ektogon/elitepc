<?php

/**
 * Контроллер страниц категорий
 */
include_once '../models/CategoriesModel.php';
include_once '../models/ProductsModel.php';
/**
 * Формирование страницы категории
 */
function indexAction($smarty)
{
    $catId = isset($_GET['id']) ? $_GET['id'] : null;
    if (!$catId) exit();
    $rsCategory = null;
    $rsProducts = null;

    $rsCategory = getCatById($catId);

    $rsProducts = getProductByCat($catId);

    $rsCategories = getAllMainCatsWithChildren();
   
    $smarty->assign('pageTitle', 'Товары категории ' . $rsCategory['name']);
    $smarty->assign('rsCategory', $rsCategory);
    $smarty->assign('rsProducts', $rsProducts);

    $smarty->assign('rsCategories', $rsCategories);

    $inCart = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();

    $smarty->assign('inCart',$inCart);

    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'leftcolumn');
    loadTemplate($smarty, 'index');
    loadTemplate($smarty, 'footer');
}
