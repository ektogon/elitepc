<?php


function loadPage($smarty,$controllerName, $actionName = 'index'){
	include PathPrefix . $controllerName . PathPostfix;
    $function = $actionName.'Action';
    $function($smarty);
}

function loadTemplate($smarty, $templateName){
    $name = $templateName. TemplatePostfix;
    $smarty->display($name);
}

function d($value = null,$die = 1){
    echo 'Debug: <br> <pre>';
    print_r($value);
    echo '<pre>';
    if($die) die;
}
/**
 * Преобразование результата работы функции выборки в фссоциативный массив
 * 
 * @param $rs набор строк - результат работы SELECT
 * @return array
 */
function createSmartyRsArray($rs){
    if(!$rs) return false;

    $smartyRs = array();
    while($row = mysqli_fetch_assoc($rs)){
        $smartyRs[] = $row;
    }
    return $smartyRs;
}