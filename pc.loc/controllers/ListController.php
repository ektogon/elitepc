<?php

/**
 *  Контроллер главной страницы
 * 
 */

include_once '../models/CategoriesModel.php';
include_once '../models/ProductsModel.php';

function testAction()
{
	echo 'IndexController.php > testAction';
}

/**
 * Формирование главной страницы сайта
 * 
 * @param object $smarty шаблонизатор
 */ 

function indexAction($smarty)
{
	$rsCategories = getAllMainCatsWithChildren();
	$rsProducts = getLastProducts(32);

	$smarty->assign('pageTitle', 'Каталог');
	$smarty->assign('rsCategories', $rsCategories);
	$smarty->assign('rsProducts', $rsProducts);
	//
    $inCart = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();

    $smarty->assign('inCart',$inCart);
    //

	loadTemplate($smarty, 'header');
	loadTemplate($smarty, 'leftcolumn');
	loadTemplate($smarty, 'index');
	loadTemplate($smarty, 'footer');
}
