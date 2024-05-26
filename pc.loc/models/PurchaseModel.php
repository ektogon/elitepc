<?php



function setPurchaseForOrder($orderId, $cart)
{
    include '../config/db.php';

    $sql = "INSERT INTO `purchase`
     (order_id,product_id,price,amount)
     VALUES";
    
    $values = array();
    foreach ($cart as $item) {
        $values[] = "('{$orderId}','{$item['id']}','{$item['price']}','{$item['cnt']}')";
    }
    $sql .= implode(", ", $values);
    
    $rs = mysqli_query($db, $sql);
 
    return $rs;
}

function getPurchaseForOrder($orderId)
{
    include '../config/db.php';

    $sql = "SELECT `pe`.*, `g`.*
    FROM `purchase` as `pe` 
    JOIN `goods` as `g` ON `pe`.product_id = `g`.id 
    WHERE `pe`.order_id = {$orderId}";

    $rs = mysqli_query($db, $sql);
    return createSmartyRsArray($rs);
}
