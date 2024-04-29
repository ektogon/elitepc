        <div class="contain">
            <ol>
                {foreach $rsProducts as $data name=products}
                <div class="item">
                    <a href="/category/{$data['type_of_product']}/product/{$data['id']}/"><img src="{$teplateWebPath}/img/goods/{$data['link_img']}"
                            alt=""></a>
                    <div class="headd">
                        <a href="/category/{$data['type_of_product']}/product/{$data['id']}/">
                            <p>{$data['name']}</p>
                        </a>
                    </div>
                    {if $data['in_stock'] != 0}
                    <div class="headd">
                        <h2>В наличии</h2>
                    </div>
                    {/if}
                    {if $data['in_stock'] == 0}
                    <div class="headd">
                        <h1>Под заказ</h1>
                    </div>
                    {/if}
                    <div class="flex">
                        <div class="headd">
                            <h3>Цена {$data['price']} ₽</h3>
                            <h4>Рассрочка</h4>
                        </div>
                        <a href="#">
                            <button class="flex add_to_cart" data-id="{$data['id']}">
                                <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="7.3" cy="17.3" r="1.4"></circle>
                                    <circle cx="13.3" cy="17.3" r="1.4"></circle>
                                    <polyline fill="none" stroke="#000" points="0 2 3.2 4 5.3 12.5 16 12.5 18 6.5 8 6.5">
                                    </polyline>
                                </svg>
                                <p style="color: #000; padding-left:5px">Купить
                                <p>
                            </button>
                        </a>
                    </div>
                </div>
                {if $smarty.foreach.products.iteration mod 3 ==0}
            </ol>
            <ol>
                {/if}
                {/foreach}
            </ol>
        </div>