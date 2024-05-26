<?php



function makeNewOrder($name, $email)
{
    include '../config/db.php';

    $userID = $_SESSION['user']['id'];
    $comment = "id пользователя: {$userID}<br/>
                Имя: {$name}<br/>
                Почта: {$email}<br/>";
    $dateCreated = date("Y-m-d H:i:s");
    $userIp = $_SERVER['REMOTE_ADDR'];

    $sql = "INSERT INTO 
    `orders` (`user_id`,`date_created`,`date_payment`,`status`,`comment`,`user_ip`)
    VALUES ('{$userID}','{$dateCreated}',null,0,'{$comment}','{$userIp}')";

    $rs = mysqli_query($db, $sql);

    if ($rs) {

        $sql = "SELECT `id` FROM `orders` ORDER BY `id` DESC LIMIT 1";
        $rs = mysqli_query($db, $sql);
        $rs = createSmartyRsArray($rs);

        if (isset($rs[0])) {
            return $rs[0]['id'];
        }
    }
    return false;
}


function getOrdersWithProductsByUser($userId)
{
    include '../config/db.php';
    $userId = intval($userId);
    $sql = "SELECT * FROM `orders`
    WHERE `user_id` = '{$userId}'
    ORDER BY id DESC";

    $rs = mysqli_query($db, $sql);

    $smartyRs = array();
    while ($row = mysqli_fetch_assoc($rs)) {
        $rsChildren = getPurchaseForOrder($row["id"]);

        if ($rsChildren) {
            $row['children'] = $rsChildren;
            $smartyRs[] = $row;
        }
    }
    return $smartyRs;
}


function delOrder( $orderID ){
    include '../config/db.php';
    $orderID = intval($orderID);
    $sql = "DELETE FROM `orders` WHERE `id` = '{$orderID}';
    DELETE FROM `purchase` WHERE `order_id` = '{$orderID}'";
    $rs = mysqli_multi_query($db, $sql);
    
    if ($rs) {
        $resData['success' ] = true;
        $resData['message'] = "Заказ успешно удален";
    }
    else {
        $resData["success"] = false;
        $resData["message"] = "Ошибка в удалении заказа";
    }
    return $resData;
}
