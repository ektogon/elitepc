<?php

$db = mysqli_connect('localhost', 'root', '', 'pc');

if (!$db) {
    die('Error connect to DataBase');
}

mysqli_set_charset($db,'utf8');
