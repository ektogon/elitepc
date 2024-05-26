<?php

/**
 * Контроллер для работы с корзиной 
 */
include_once '../models/CategoriesModel.php';
include_once '../models/ProductsModel.php';
include_once '../models/OrdersModel.php';
include_once '../models/PurchaseModel.php';

include_once '../config/db.php';

/**
 * Добавляем продукт в корзину
 */
function addtocartAction()
{
    $itemId = isset($_GET['id']) ? intval($_GET['id']) : null;
    if (!$itemId) return false;


    $resData = array();

    //Если значение не найдено, то добавляем
    if (isset($_SESSION['cart']) && array_search($itemId, $_SESSION['cart']) === false) {
        $_SESSION['cart'][] = $itemId;
        $resData['cntItems'] = count($_SESSION['cart']);
        $resData['success'] = 1;
    } else {
        $resData['success'] = 0;
    }
    // unset($_SESSION['cart']);
    echo json_encode($resData);
}

/**
 * Удаление продукта из корзины
 */
function removefromcartAction()
{
    $itemId = isset($_GET['id']) ? intval($_GET['id']) : null;
    if (!$itemId) return false;

    $resData = array();

    $key = array_search($itemId, $_SESSION['cart']);
    if ($key !== false) {
        unset($_SESSION['cart'][$key]);
        $resData['cntItems'] = count($_SESSION['cart']);
        $resData['success'] = 1;
    } else {
        $resData['success'] = 0;
    }
    echo json_encode($resData);
}


/**
 * Формирование Страницы корзины
 */
function indexAction($smarty)
{
    $itemsIds = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();
    $rsCategories = getAllMainCatsWithChildren();
    $rsProducts = null;
   
    if ($itemsIds) {
        $rsProducts = getProductsFromArray($itemsIds);
        
    }
    $smarty->assign('pageTitle', 'Корзина');
    $smarty->assign('rsProducts', $rsProducts);
   

    $smarty->assign('rsCategories', $rsCategories);

    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'cart');
}
/**
 * Формирование страницы заказа
 *
 * @param [type] $smarty
 * @return void
 */
function orderAction($smarty)
{
    //получаем массив идентификаторов (ID) продуктов корзины
    $itemsIds = isset($_SESSION['cart']) ? $_SESSION['cart'] : null;
    //если корзина пуста то возвращаем в корзину
    if (!$itemsIds) {
        header("Location: /cart/");
        return;
    }

    $itemsCnt = array();
    foreach ($itemsIds as $item) {
        //Формируем ключ для массива POST
        $postVar = 'itemCnt_' . $item;
        //создаем элемент массива колитчества покупаемого товара
        //ключ массива - ID товара, значение массива - количество товара
        //$itemCnt[1] = 3; Товар с ID == 1 Покупаю 3 шт
        $itemsCnt[$item] = isset($_POST[$postVar]) ? $_POST[$postVar] : null;
    }
    $rsProducts = getProductsFromArray($itemsIds);
    //Добавляем каждому продукту дополнителное поле 
    //"realPrice = количество продуктов * на цену прод."
    //"cnt" - количество покупаемого товара

    //$item - для того чтобы при изменении переменной $item 
    //Менялся и элемент массива $rsProducts
    $i = 0;
    $sum = 0;
    foreach ($rsProducts as &$item) {
        $item['cnt'] = isset($itemsCnt[$item['id']]) ? $itemsCnt[$item['id']] : null;
        if ($item['cnt']) {
            $item['realPrice'] = $item['cnt'] * $item['price'];
            $sum+= $item['realPrice'];
        } else {
            unset($rsProducts[$i]);
        }
        $i++;
    }
    if (!$rsProducts) {
        echo "Корзина пуста";
        return;
    }
    

    //Полученный массив покупаемых товаров помещаем в сессионную переменную
    $_SESSION['saleCart'] = $rsProducts;

    if (!isset($_SESSION['user'])) {
        $smarty->assign('hideLoginBox', 1);
    }

    $rsCategories = getAllMainCatsWithChildren();

    $smarty->assign('pageTitle', 'Заказы');
    $smarty->assign('rsProducts', $rsProducts);
    $smarty->assign('sum', $sum);

    $smarty->assign('rsCategories', $rsCategories);


    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'order');
}


function saveorderAction()
{
    //получаем массив покупаемых товаров
    $cart = isset($_SESSION['saleCart']) ? $_SESSION['saleCart'] : null;

    //если корзина пуста, то формируется ответ с ошибкой, отдаем его в формате 
    //json и выходим из функции
    if (!$cart) {
        $resData['success'] = 0;
        $resData['message'] = 'Нет товаров для заказа';
        echo json_encode($resData);
        return;
    }

    $name = $_SESSION['user']['name'];
    $email = $_SESSION['user']['email'];

    //создаем заказ и получаем его ID
    $orderId = makeNewOrder($name, $email);

    //если заказ не создан, то выдает ошибку и завершает функцию
    if (!$orderId) {
        $resData['success'] = 0;
        $resData['message'] = 'Ошибка создания заказа';
        echo json_encode($resData);
        return;
    }

    //сохраняем товары для созданного заказа
    $res = setPurchaseForOrder($orderId, $cart);
    
    if ($res) {
        $resData['success'] = 1;
        $resData['message'] = 'Заказ сохранен';
        unset($_SESSION['saleCart']);
        unset($_SESSION['cart']);
    } else {
        $resData['success'] = 0;
        $resData['message'] = 'Ошибка внесения заказа № ' . $orderId;
    }

    echo json_encode($resData);
}
