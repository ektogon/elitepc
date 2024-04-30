<div class="container">
    <div class="flex url">
        <a href="/">Каталог</a>
        <a>></a>
        <a href="/category/{$rsCategory['id']}/">{$rsCategory['name']}</a>
        <a>></a>
        <a>{$rsProducts['name']}</a>
    </div>
    <div class="flex product">
        <div class="box">
            <img src="{$teplateWebPath}/img/goods/{$rsProducts['link_img']}" alt="">
        </div>
        <div class="text">
            <h1>{$rsProducts['name']}</h1>
            <h2>{$rsProducts['description']}</h2>
            <hr>
            <div class="flex j">
                <div class="flex">
                    <div class="headd">
                        <p>Цена {$rsProducts['price']} ₽</p>
                        <h2>Рассрочка</h2>
                    </div>
                </div>
                {if $rsProducts['in_stock'] != 0}
                <a href="#">
                    <button class="flex add_to_cart" data-id="{$rsProducts['id']}">
                        <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="7.3" cy="17.3" r="1.4"></circle>
                            <circle cx="13.3" cy="17.3" r="1.4"></circle>
                            <polyline fill="none" stroke="#000" points="0 2 3.2 4 5.3 12.5 16 12.5 18 6.5 8 6.5">
                            </polyline>
                        </svg>
                        <h3 style="color: #000; padding-left:5px">Купить</h3>
                    </button>
                </a>
                {/if}
                {if $rsProducts['in_stock'] == 0}
                <a href="#">
                    <button class="flex add_to_cart" data-id="{$rsProducts['id']}">
                        <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="7.3" cy="17.3" r="1.4"></circle>
                            <circle cx="13.3" cy="17.3" r="1.4"></circle>
                            <polyline fill="none" stroke="#000" points="0 2 3.2 4 5.3 12.5 16 12.5 18 6.5 8 6.5">
                            </polyline>
                        </svg>
                        <h3 style="color: #000; padding-left:5px">Заказать</h3>
                    </button>
                </a>
                {/if}
            </div>
        </div>
    </div>
</div>