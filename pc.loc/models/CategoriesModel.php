<?php
/*
    Модель для таблицы категорий
*/



/**
 * Получить дочернии категории для категории $catId
 */
function getChildrenForCat($catId){
    include '../config/db.php';
    $sql = "SELECT*FROM `categories` WHERE `parent_id` = '$catId' ";

    $rs = mysqli_query($db,$sql);

    return createSmartyRsArray($rs);
}


/**
 * Получить главные категории с привязками дочерних
 */
function getAllMainCatsWithChildren(){
    include '../config/db.php';
    $sql = "SELECT*FROM `categories` WHERE `parent_id` = 0";

    $rs = mysqli_query($db,$sql);

    $smartyRs = array();
    
    while($row = mysqli_fetch_assoc($rs)){
        $rsChildren = getChildrenForCat($row['id']);

        if($rsChildren) $row['children'] = $rsChildren;
        $smartyRs[] = $row;
    }
    return $smartyRs;
}


/** 
 * Получить данные категории по id
 * 
*/

function getCatById($catId){
    include '../config/db.php';
    $catId = intval($catId);
    $sql = "Select*FROM `categories` WHERE `id` = '{$catId}'";

    $rs = mysqli_query($db,$sql);

    return mysqli_fetch_assoc($rs);
}