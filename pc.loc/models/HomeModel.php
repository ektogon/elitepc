<?php


function getServices(){
    include '../config/db.php';
    $sql = "SELECT * FROM services";

    $rs = mysqli_query($db,$sql);

    return createSmartyRsArray($rs);
}

function getPc(){
    include '../config/db.php';
    $sql = "SELECT * FROM pc";

    $rs = mysqli_query($db,$sql);

    return createSmartyRsArray($rs);
}

function getPeriphery(){
    include '../config/db.php';
    $sql = "SELECT*FROM `categories` WHERE `parent_id` = 1";

    $rs = mysqli_query($db,$sql);

    return createSmartyRsArray($rs);
}