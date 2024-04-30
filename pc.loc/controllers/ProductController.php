<?php
/**
 * Контроллер страницы товара
 */
include_once '../models/ProductsModel.php';
include_once '../models/CategoriesModel.php';

// /**
//  * Формирование главной страницы сайта
//  * 
//  * @param object $smarty шаблонизатор
//  */ 

function indexAction($smarty)
{
    $itemId = isset($_GET['id']) ? $_GET['id'] : null;
    if (!$itemId) exit();
    $catId = isset($_GET['i']) ? $_GET['i'] : null;
    $rsCategory = getCatById($catId);

    $rsProducts = getProductById($itemId);
    
	$rsCategories = getAllMainCatsWithChildren();
    // 
	$smarty->assign('pageTitle', 'Главная страница');
	$smarty->assign('rsCategories', $rsCategories);
	$smarty->assign('rsProducts', $rsProducts);
    $smarty->assign('rsCategory', $rsCategory);


    loadTemplate($smarty, 'linksProduct');
	loadTemplate($smarty, 'header');
	loadTemplate($smarty, 'product');
	loadTemplate($smarty, 'footer');
}
