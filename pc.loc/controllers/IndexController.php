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

// /**
//  * Формирование главной страницы сайта
//  * 
//  * @param object $smarty шаблонизатор
//  */ 

function indexAction($smarty)
{
	$rsCategories = getAllMainCatsWithChildren();
	$rsProducts = getLastProducts(32);

	$smarty->assign('pageTitle', 'Главная страница');
	$smarty->assign('rsCategories', $rsCategories);
	$smarty->assign('rsProducts', $rsProducts);

	loadTemplate($smarty, 'linksList');
	loadTemplate($smarty, 'header');
	loadTemplate($smarty, 'leftcolumn');
	loadTemplate($smarty, 'index');
	loadTemplate($smarty, 'footer');
}
