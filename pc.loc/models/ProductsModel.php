<?php
/**
 * Вывод последние $limit товаров на главную 
 * страницу списка товаров 
 * */
function getLastProducts($limit = null) {
    include '../config/db.php';
    $sql = "SELECT * 
    FROM `goods` ORDER BY `in_stock` DESC ";
    if($limit){
        $sql .= " LIMIT {$limit}";
    }
    $rs = mysqli_query($db,$sql);
    return createSmartyRsArray($rs);
}

/**
 * Получить продукты для категории $itemId
 */
function getProductByCat($itemId){
    include '../config/db.php';
    $itemId = intval($itemId);
    $sql = "SELECT*FROM `goods` WHERE `type_of_product` = '{$itemId}'";

    $rs = mysqli_query($db,$sql);
    return createSmartyRsArray($rs);
}

/**
 * Получить данные продукта по ID
 */
function getProductById($itemId) {
    include '../config/db.php';
    $itemId = intval($itemId);
    $sql="SELECT*FROM `goods` WHERE `id` = '{$itemId}'";
    $rs = mysqli_query($db,$sql);
    return mysqli_fetch_assoc($rs);
}