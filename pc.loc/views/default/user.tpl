<div class="limiter">
    <div class="container-table">
        <div class="wrap-table">
            <div class="user-item">
                <div class="name-user">
                    <p>{$user['login']}</p>
                    <h1>{$user['name']}</h1>
                </div>
                <ul class="user_info">
                    <li><label for="">Почта</label><input type="email" maxlength="100" placeholder="{$user['email']}"
                            id="newEmail" ></li>
                    <li><label for="">Имя</label><input type="text" maxlength="15" placeholder="{$user['name']}"
                            id="newName"></li>
                    <li><label for="">Новый пароль</label><input maxlength="20" type="password" id="newpwd1"></li>
                    <li><label for="">Повтор пароля</label><input maxlength="20" type="password" id="newpwd2"></li>
                    <li><label for="">Текущий пароль</label><input type="password"
                            id="curpwd"></li>
                    <li><input class="btn" type="button" value="Сохранить изменения" onclick="updateUserData();"></li>
                    <li>
                        <p class="msg none mes"></p>
                    </li>
                </ul>
            </div>
            <div class="name-user">
                <p>Заказы</p>
            </div>
            {if ! $rsUserOrders}
            Нет заказов
            {else}
            {foreach $rsUserOrders as $item name = orders}
            <div class="user-item">

                <div class="user-item-head">
                    <h1 class="date">Заказ от {$item['date_created']}</h1>
                    <h2 id="order-number">№ {$item['id']}</h2>

                </div>
                <div class="user-goods">
                    {$sum = 0}
                    {foreach $item['children'] as $itemChild name=products}
                    <a href="/category/{$itemChild['type_of_product']}/product/{$itemChild['id']}/">
                        <img src="{$teplateWebPath}/img/goods/{$itemChild['link_img']}">
                        <p>{$itemChild['amount']}</p>
                    </a>{$sum =$sum + $itemChild['amount']*$itemChild['price']}
                    {/foreach}
                </div>
                <div class="flex user-item-head">
                    <h1>{if $item['status'] == 0}
                        К оплате {$sum} ₽
                        {else}
                        Оплачено {$sum} ₽
                        {/if}
                    </h1>
                    <button class="flex add_to_cart" id="delete-btn">
                        <h1>Отмена заказа</h1>
                    </button>
                </div>
            </div>
            {/foreach}
            {/if}
        </div>
    </div>
    <script type="text/javascript" src="/www/js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="/www/js/main.js"></script>
    </body>

    </html>