<div class="limiter">
    <div class="container-table">
        <h4>Данные заказа</h4>
        <form id="frmOrder" action="/cart/saveorder/" method="POST">
            <div class="wrap-table">
                <table>
                    <thead>
                        <tr class="table-head">
                            <th></th>
                            <th>Товар</th>
                            <th>Количество</th>
                            <th>Цена</th>
                        </tr>
                    </thead>
                    <tbody>
                        {foreach $rsProducts as $item name=products}
                        <tr>
                            <td>{$smarty.foreach.products.iteration}</td>
                            <td class="flex cart_item">
                                <a href="/category/{$item['type_of_product']}/product/{$item['id']}/">
                                    <img src="{$teplateWebPath}/img/goods/{$item['link_img']}">
                                </a>
                                <a href="/category/{$item['type_of_product']}/product/{$item['id']}/">
                                    <p>{$item['name']}</p>
                                </a>
                            </td>
                            <td>
                                <span id="itemCnt_{$item['id']}">
                                    <input type="hidden" name="itemCnt_{$item['id']}" value="{$item['cnt']}">
                                    {$item['cnt']}
                                </span>
                            </td>
                            <td>
                                {if $item['cnt']>1}
                                <span id="itemRealPrice_{$item['id']}">
                                    <input type="hidden" name="itemRealPrice_{$item['id']}"
                                        value="{$item['realPrice']}">
                                    {$item['realPrice']} ₽
                                </span>
                                {/if}
                                <span id="itemPrice_{$item['id']}" value="{$item['price']}">
                                    <input type="hidden" name="itemPrice_{$item['id']}" value="{$item['price']}">
                                    {$item['price']} ₽/шт.
                                </span>
                            </td>
                        </tr>
                        {/foreach}
                    </tbody>
                </table>
                <table class="res">
                    <tr>
                        <th class="table-head">Итого </th>
                        <td>{$sum} ₽</td>
                    </tr>
                </table>
            </div>
        </form>
        <ul class="user_info">
            <h4>Данные пользователя</h4>
            <li><label for="">Почта</label><input type="email" maxlength="100" placeholder="{$user['email']}"
                    id="newEmail"></li>
            <li><label for="">Имя</label><input type="text" maxlength="15" placeholder="{$user['name']}" id="newName">
            </li>
        </ul>
        <input class="btn_or" id="btnSaveOrder" type="button" value="Оформить заказ" onclick="saveOrder();">
    </div>
</div>
<script type="text/javascript" src="/www/js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="/www/js/main.js"></script>
</body>

</html>