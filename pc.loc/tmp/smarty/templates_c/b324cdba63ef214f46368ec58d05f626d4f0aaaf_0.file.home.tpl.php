<?php
/* Smarty version 4.5.2, created on 2024-05-08 21:58:19
  from 'D:\OSPanel\domains\pc.loc\views\default\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_663bcb4beeaf56_00635720',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b324cdba63ef214f46368ec58d05f626d4f0aaaf' => 
    array (
      0 => 'D:\\OSPanel\\domains\\pc.loc\\views\\default\\home.tpl',
      1 => 1715194696,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_663bcb4beeaf56_00635720 (Smarty_Internal_Template $_smarty_tpl) {
?></body>

<body style="background-color: #0E5A6E; ">
    <div class="slider middle">
        <div class="slides">
            <input type="radio" name="r" id="r1" checked>
            <input type="radio" name="r" id="r2" checked>
            <!-- <input type="radio" name="r" id="r3" checked>
            <input type="radio" name="r" id="r4" checked> -->

            <div class="slide s1"><img src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
img/slide1.jpg" align="center" alt=""></div>
            <div class="slide"><img src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
img/slide2.jpg" align="center" alt=""></div>
            <!-- <div class="slide"><img src="img/cyber.jpg" alt=""></div>
            <div class="slide"><img src="img/cyber2.jpg" alt=""></div> -->
        </div>
        <div class="navigation">
            <label for="r1" class="bar"></label>
            <label for="r2" class="bar"></label>
            <!-- <label for="r3" class="bar"></label>
            <label for="r4" class="bar"></label> -->
        </div>
    </div>
    <div class="cont_home">

        <div class="headd">
            <p class="pc">КОМПЬЮТЕРЫ В НАЛИЧИИ</p>
            <p>Создаём компьютеры, которые будут дарить геймерам<br>
                и творческим профессионалам удовольствие от использования</p>
        </div>
        <ol>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsPc']->value, 'data', false, NULL, 'products', array (
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']++;
?>
            <div class="item_config">
                <img class="im" src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;
echo $_smarty_tpl->tpl_vars['data']->value['link_img'];?>
" alt="">
                <div class="head">
                    <div class="name">
                        <h1><?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>
</h1>
                        <p><?php echo $_smarty_tpl->tpl_vars['data']->value['level'];?>
</p>
                    </div>
                    <div class="price">
                        <h1><?php echo $_smarty_tpl->tpl_vars['data']->value['price'];?>
</h1>
                        <p><?php echo $_smarty_tpl->tpl_vars['data']->value['credit'];?>
</p>
                    </div>
                </div>
                <hr>
                <ul>
                    <li>
                        <div class="icon">
                            <svg fill="none" stroke="#fff" width="20" height="20" viewBox="0 0 20 20">
                                <path d="M2,4V3H0V4H1V16H2V15H20V4ZM19,14H2V5H19Z"></path>
                                <path
                                    d="M14.5,12A2.5,2.5,0,1,0,12,9.5,2.51,2.51,0,0,0,14.5,12Zm0-4A1.5,1.5,0,1,1,13,9.5,1.5,1.5,0,0,1,14.5,8Z">
                                </path>
                                <rect x="4" y="17" width="7" height="1"></rect>
                                <rect x="4" y="7" width="1" height="5"></rect>
                                <rect x="8" y="7" width="1" height="5"></rect>
                            </svg>
                        </div>
                        <p>Графические карты <?php echo $_smarty_tpl->tpl_vars['data']->value['gpu'];?>
</p>
                    </li>
                    <li>
                        <div class="icon">
                            <svg fill="none" stroke="#fff" width="24" height="24" viewBox="0 0 20 20">
                                <rect x="18" y="14" width="2" height="1"></rect>
                                <rect x="18" y="11" width="2" height="1"></rect>
                                <rect x="18" y="8" width="2" height="1"></rect>
                                <rect x="18" y="5" width="2" height="1"></rect>
                                <rect y="14" width="2" height="1"></rect>
                                <rect y="11" width="2" height="1"></rect>
                                <rect y="8" width="2" height="1"></rect>
                                <rect y="5" width="2" height="1"></rect>
                                <rect x="5" y="18" width="1" height="2"></rect>
                                <rect x="8" y="18" width="1" height="2"></rect>
                                <rect x="11" y="18" width="1" height="2"></rect>
                                <rect x="14" y="18" width="1" height="2"></rect>
                                <rect x="5" width="1" height="2"></rect>
                                <rect x="8" width="1" height="2"></rect>
                                <rect x="11" width="1" height="2"></rect>
                                <rect x="14" width="1" height="2"></rect>
                                <path d="M3,17H17V3H3ZM4,4H16V16H4Z"></path>
                                <path d="M6,14h8V6H6ZM7,7h6v6H7Z"></path>
                            </svg>
                        </div>
                        <p>Процессоры <br><?php echo $_smarty_tpl->tpl_vars['data']->value['cpu'];?>
</p>
                    </li>
                    <li>
                        <div class="icon">
                            <svg fill="none" stroke="#fff" width="24" height="24" viewBox="0 0 20 20">
                                <path d="M0,3V15H20V3ZM19,14H1V4H19Z"></path>
                                <rect x="2" y="17" width="16" height="1"></rect>
                                <rect x="3" y="7" width="2" height="4"></rect>
                                <rect x="7" y="7" width="2" height="4"></rect>
                                <rect x="15" y="7" width="2" height="4"></rect>
                                <rect x="11" y="7" width="2" height="4"></rect>
                            </svg>
                        </div>
                        <p>Оперативная память <br><?php echo $_smarty_tpl->tpl_vars['data']->value['ozu'];?>
</p>
                    </li>
                    <li>
                        <div class="icon">
                            <svg fill="none" stroke="#fff" width="20" height="20" viewBox="0 0 20 20">
                                <path d="M2,0V20H18V0ZM3,1H5V3H6V1H8V3H9V1h2V3h1V1h2V3h1V1h2V5H3ZM17,19H3V6H17Z"></path>
                                <rect x="6" y="9" width="3" height="1"></rect>
                                <rect x="6" y="12" width="3" height="1"></rect>
                                <rect x="6" y="15" width="3" height="1"></rect>
                                <rect x="11" y="9" width="3" height="1"></rect>
                                <rect x="11" y="12" width="3" height="1"></rect>
                                <rect x="11" y="15" width="3" height="1"></rect>
                            </svg>
                        </div>
                        <p>Накопители <br><?php echo $_smarty_tpl->tpl_vars['data']->value['storage'];?>
</p>
                        </p>
                    </li>
                    <li class="configure">
                        <div class="icon">
                            <svg width="20" height="20" viewBox="0 0 20 20">
                                <circle fill="none" stroke="#fff" cx="9.997" cy="10" r="3.31"></circle>
                                <path fill="none" stroke="#fff"
                                    d="M18.488,12.285 L16.205,16.237 C15.322,15.496 14.185,15.281 13.303,15.791 C12.428,16.289 12.047,17.373 12.246,18.5 L7.735,18.5 C7.938,17.374 7.553,16.299 6.684,15.791 C5.801,15.27 4.655,15.492 3.773,16.237 L1.5,12.285 C2.573,11.871 3.317,10.999 3.317,9.991 C3.305,8.98 2.573,8.121 1.5,7.716 L3.765,3.784 C4.645,4.516 5.794,4.738 6.687,4.232 C7.555,3.722 7.939,2.637 7.735,1.5 L12.263,1.5 C12.072,2.637 12.441,3.71 13.314,4.22 C14.206,4.73 15.343,4.516 16.225,3.794 L18.487,7.714 C17.404,8.117 16.661,8.988 16.67,10.009 C16.672,11.018 17.415,11.88 18.488,12.285 L18.488,12.285 Z">
                                </path>
                            </svg>
                        </div>
                        <a href="#">
                            <p>Конфигурировать</p>
                        </a>
                    </li>
                </ul>
            </div>
            <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration'] : null) % 3 == 0) {?>
        </ol>
        <ol>
            <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ol>
        <div class="headd">
            <p class="pc">ПЕРИФЕРИЯ</p>
        </div>
        <ol>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsCat']->value, 'periphery');
$_smarty_tpl->tpl_vars['periphery']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['periphery']->value) {
$_smarty_tpl->tpl_vars['periphery']->do_else = false;
?>
            <a href="/category/<?php echo $_smarty_tpl->tpl_vars['periphery']->value['id'];?>
/">
                <div class="periphery">
                    <img class="imp" src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
img/<?php echo $_smarty_tpl->tpl_vars['periphery']->value['link_image'];?>
">
                    <p><?php echo $_smarty_tpl->tpl_vars['periphery']->value['name'];?>
</p>
                </div>
            </a>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ol>
        <div class="headd">
            <p class="pc">Услуги</p>
        </div>
        <ol>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsServices']->value, 'data');
$_smarty_tpl->tpl_vars['data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->do_else = false;
?>
            <div class="service">
                <img src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;
echo $_smarty_tpl->tpl_vars['data']->value['image'];?>
">
                <p style="font-size: 24px; color:#fff;"><?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>
</p>
                <p><?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
</p>
                <ul><?php echo $_smarty_tpl->tpl_vars['data']->value['list'];?>
</ul>
                <h1><?php echo $_smarty_tpl->tpl_vars['data']->value['go'];?>
</h1>
            </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ol>
        <div class="headd">
            <p class="pc">Отзывы наших клиентов</p>
        </div>
        <div class="rewiews">
            <div class="">
                <div>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
/img/star.svg">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
/img/star.svg">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
/img/star.svg">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
/img/star.svg">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
/img/star.svg">
                </div>
                <p>98% покупателей<br>купили бы здесь снова</p>
            </div>
            <div class="">
                <h1>1357</h1>
                <p>Положительных оценок<br>за все время работы</p>
            </div>
            <div class="">
                <h1>5.0</h1>
                <p>Общий рейтинг магазина за<br>последние 3 месяца</p>
            </div>
        </div>
    </div><?php }
}
