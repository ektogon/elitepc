<?php
include_once '../models/CategoriesModel.php';
include_once '../models/ProductsModel.php';
include_once '../models/HomeModel.php';
include_once '../config/db.php'; 

function indexAction($smarty){
    $rsCategories = null;
    $rsServices = null;
    $rsPc = null;

    $rsCategories = getAllMainCatsWithChildren();
    $rsCat = getPeriphery();
    $rsServices = getServices();

    $rsPc = getPc();
    
    $smarty->assign('pageTitle', 'Главная страница ');
    $smarty->assign('rsCategories', $rsCategories);
    $smarty->assign('rsServices', $rsServices);
    $smarty->assign('rsPc', $rsPc);
    $smarty->assign('rsCat', $rsCat);

    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'home');
    loadTemplate($smarty, 'footer');

}