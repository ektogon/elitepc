<?php
/* Smarty version 4.5.2, created on 2024-05-08 22:11:20
  from 'D:\OSPanel\domains\pc.loc\views\default\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_663bce58bf8d71_39620350',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c7dbce96966d3c8a8ed6d63a74745a497c21107' => 
    array (
      0 => 'D:\\OSPanel\\domains\\pc.loc\\views\\default\\index.tpl',
      1 => 1715195479,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_663bce58bf8d71_39620350 (Smarty_Internal_Template $_smarty_tpl) {
?>        <div class="contain">
            <ol>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsProducts']->value, 'data', false, NULL, 'products', array (
));
$_smarty_tpl->tpl_vars['data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->do_else = false;
?>
                <div class="item">
                    <a href="/category/<?php echo $_smarty_tpl->tpl_vars['data']->value['type_of_product'];?>
/product/<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
/"><img src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
/img/goods/<?php echo $_smarty_tpl->tpl_vars['data']->value['link_img'];?>
"
                            alt=""></a>
                    <div class="headd">
                        <a href="/category/<?php echo $_smarty_tpl->tpl_vars['data']->value['type_of_product'];?>
/product/<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
/">
                            <p><?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>
</p>
                        </a>
                    </div>
                    <?php if ($_smarty_tpl->tpl_vars['data']->value['in_stock'] != 0) {?>
                    <div class="headd">
                        <h2>В наличии</h2>
                    </div>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['data']->value['in_stock'] == 0) {?>
                    <div class="headd">
                        <h1>Под заказ</h1>
                    </div>
                    <?php }?>
                    <div class="flex">
                        <div class="headd">
                            <h3>Цена <?php echo $_smarty_tpl->tpl_vars['data']->value['price'];?>
 ₽</h3>
                            <h4>Рассрочка</h4>
                        </div>
                        <?php if (in_array($_smarty_tpl->tpl_vars['data']->value['id'],$_smarty_tpl->tpl_vars['inCart']->value)) {?>
                        <a id="removeCart_<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
" <?php if (!in_array($_smarty_tpl->tpl_vars['data']->value['id'],$_smarty_tpl->tpl_vars['inCart']->value)) {?>class="hideme"<?php }?> href="#" onClick="removeFromCart(<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
); window.location.reload(); return false;">
                            <button class="flex add_to_cart">
                                <h3 style="color: #000; padding-left:5px">Удалить из корзины</h3>
                            </button>
                        </a>
                        <?php } else { ?>
                        <a id="addCart_<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
" <?php if (in_array($_smarty_tpl->tpl_vars['data']->value['id'],$_smarty_tpl->tpl_vars['inCart']->value)) {?>class="hideme"<?php }?> href="#" onClick="addToCart(<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
); window.location.reload(); return false;">
                            <button class="flex add_to_cart">
                                <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="7.3" cy="17.3" r="1.4"></circle>
                                    <circle cx="13.3" cy="17.3" r="1.4"></circle>
                                    <polyline fill="none" stroke="#000" points="0 2 3.2 4 5.3 12.5 16 12.5 18 6.5 8 6.5">
                                    </polyline>
                                </svg>
                                <h2 style="color: #000; padding-left:5px">Купить</h2>
                            </button>
                        </a>
                        <?php }?>

                        
                    </div>
                </div>
                
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ol>
        </div><?php }
}
