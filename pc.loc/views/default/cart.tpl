<div class="limiter">
    <div class="container-table">
        <h4>Корзина</h4>
        {if ! $rsProducts}
        В корзине пусто
        {else}
        <form action="/cart/order/" method="POST">
            <div class="wrap-table">
                <table>
                    <thead>
                        <tr class="table-head">
                            <th></th>
                            <th>Товар</th>
                            <th>Наличие</th>
                            <th>Количество</th>
                            <th>Цена</th>
                            <th></th>
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
                                {if $item['in_stock'] != 0}
                                <div class="headd">
                                    <h2>В наличии</h2>
                                </div>
                                {/if}
                                {if $item['in_stock'] == 0}
                                <div class="headd">
                                    <h1>Под заказ</h1>
                                    <p>Наличие уточняйте</p>
                                </div>
                                {/if}
                            </td>
                            <td>
                                <input type="button" class="counter_btn" id="BtnPlus_{$item['id']}"
                                    onmouseover="counter({$item['id']})" value="+">
                                <input name="itemCnt_{$item['id']}" id="itemCnt_{$item['id']}"
                                    class="counter_value_{$item['id']}" value="1"
                                    onchange="conversionPrice({$item['id']});" readonly>
                                <input type="button" class="counter_btn" id="BtnMinus_{$item['id']}"
                                    onmouseover="counter({$item['id']})" value="-">
                            </td>
                            <td>
                                <span id="itemRealPrice_{$item['id']}">
                                </span>
                                <span id="itemPrice_{$item['id']}" value="{$item['price']}">
                                    {$item['price']} ₽/шт.
                                </span>
                            </td>
                            <td>
                                <a id="removeCart_{$item['id']}" href="#"
                                    onClick="removeFromCart({$item['id']}); window.location.reload(); return false;">
                                    <svg width="32" enable-background="new 0 0 32 32" id="Editable-line" version="1.1"
                                        viewBox="0 0 32 32" xml:space="preserve">
                                        <path fill="#BD1C1C"
                                            d="  M25,10H7v17c0,1.105,0.895,2,2,2h14c1.105,0,2-0.895,2-2V10z" fill="none"
                                            id="XMLID_129_" stroke="#000000" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" />
                                        <path fill="#BD1C1C"
                                            d="  M20,7h-8V5c0-1.105,0.895-2,2-2h4c1.105,0,2,0.895,2,2V7z" fill="none"
                                            id="XMLID_145_" stroke="#000000" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" />
                                        <path fill="#BD1C1C"
                                            d="  M28,10H4V8c0-0.552,0.448-1,1-1h22c0.552,0,1,0.448,1,1V10z" fill="none"
                                            id="XMLID_146_" stroke="#000000" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" />
                                        <line fill="none" id="XMLID_148_" stroke="#000000" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" x1="16"
                                            x2="16" y1="15" y2="24" />
                                        <line fill="none" id="XMLID_147_" stroke="#000000" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" x1="12"
                                            x2="12" y1="15" y2="24" />
                                        <line fill="none" id="XMLID_149_" stroke="#000000" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" x1="20"
                                            x2="20" y1="15" y2="24" />
                                    </svg>
                                </a>
                            </td>
                        </tr>
                        {/foreach}
                    </tbody>
                </table>
                {if !isset($user)}
                <span style="margin-top: 30px;">Для начала <a onclick="show('auth','block')">авторизируйтесь</a></span>
                {else}
                <input class="btn_or" type="submit" value="Оформить заказ">
                {/if}
            </div>
        </form>
        {/if}
    </div>
</div>
<script type="text/javascript" src="/www/js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="/www/js/main.js"></script>
</body>

</html>