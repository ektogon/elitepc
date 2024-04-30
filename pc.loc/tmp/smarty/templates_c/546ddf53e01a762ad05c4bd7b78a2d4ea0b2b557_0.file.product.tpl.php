<?php
/* Smarty version 4.5.2, created on 2024-04-30 15:09:52
  from 'D:\OSPanel\domains\pc.loc\views\default\product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_6630df90cd8ff2_61433046',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '546ddf53e01a762ad05c4bd7b78a2d4ea0b2b557' => 
    array (
      0 => 'D:\\OSPanel\\domains\\pc.loc\\views\\default\\product.tpl',
      1 => 1714478991,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6630df90cd8ff2_61433046 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
    <div class="flex url">
        <a href="/">Каталог</a>
        <a>></a>
        <a href="/category/<?php echo $_smarty_tpl->tpl_vars['rsCategory']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['rsCategory']->value['name'];?>
</a>
        <a>></a>
        <a><?php echo $_smarty_tpl->tpl_vars['rsProducts']->value['name'];?>
</a>
    </div>
    <div class="flex product">
        <div class="box">
            <img src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
/img/goods/<?php echo $_smarty_tpl->tpl_vars['rsProducts']->value['link_img'];?>
" alt="">
        </div>
        <div class="text">
            <h1><?php echo $_smarty_tpl->tpl_vars['rsProducts']->value['name'];?>
</h1>
            <h2><?php echo $_smarty_tpl->tpl_vars['rsProducts']->value['description'];?>
</h2>
            <hr>
            <div class="flex j">
                <div class="flex">
                    <div class="headd">
                        <p>Цена <?php echo $_smarty_tpl->tpl_vars['rsProducts']->value['price'];?>
 ₽</p>
                        <h2>Рассрочка</h2>
                    </div>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['rsProducts']->value['in_stock'] != 0) {?>
                <a href="#">
                    <button class="flex add_to_cart" data-id="<?php echo $_smarty_tpl->tpl_vars['rsProducts']->value['id'];?>
">
                        <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="7.3" cy="17.3" r="1.4"></circle>
                            <circle cx="13.3" cy="17.3" r="1.4"></circle>
                            <polyline fill="none" stroke="#000" points="0 2 3.2 4 5.3 12.5 16 12.5 18 6.5 8 6.5">
                            </polyline>
                        </svg>
                        <h3 style="color: #000; padding-left:5px">Купить</h3>
                    </button>
                </a>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['rsProducts']->value['in_stock'] == 0) {?>
                <a href="#">
                    <button class="flex add_to_cart" data-id="<?php echo $_smarty_tpl->tpl_vars['rsProducts']->value['id'];?>
">
                        <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="7.3" cy="17.3" r="1.4"></circle>
                            <circle cx="13.3" cy="17.3" r="1.4"></circle>
                            <polyline fill="none" stroke="#000" points="0 2 3.2 4 5.3 12.5 16 12.5 18 6.5 8 6.5">
                            </polyline>
                        </svg>
                        <h3 style="color: #000; padding-left:5px">Заказать</h3>
                    </button>
                </a>
                <?php }?>
            </div>
        </div>
    </div>
</div><?php }
}
