<?php
/* Smarty version 4.5.2, created on 2024-05-19 17:01:38
  from 'D:\OSPanel\domains\pc.loc\views\default\cart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_664a06420b7932_22520599',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5704845167773f2d5cc5fb93cc3a2f301a9957a5' => 
    array (
      0 => 'D:\\OSPanel\\domains\\pc.loc\\views\\default\\cart.tpl',
      1 => 1716127296,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_664a06420b7932_22520599 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="limiter">
    <div class="container-table">
        <h4>Корзина</h4>
        <?php if (!$_smarty_tpl->tpl_vars['rsProducts']->value) {?>
        В корзине пусто
        <?php } else { ?>
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
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsProducts']->value, 'item', false, NULL, 'products', array (
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']++;
?>
                        <tr>
                            <td><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration'] : null);?>
</td>
                            <td class="flex cart_item">
                                <a href="/category/<?php echo $_smarty_tpl->tpl_vars['item']->value['type_of_product'];?>
/product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/">
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
/img/goods/<?php echo $_smarty_tpl->tpl_vars['item']->value['link_img'];?>
">
                                </a>
                                <a href="/category/<?php echo $_smarty_tpl->tpl_vars['item']->value['type_of_product'];?>
/product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/">
                                    <p><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</p>
                                </a>
                            </td>
                            <td>
                                <?php if ($_smarty_tpl->tpl_vars['item']->value['in_stock'] != 0) {?>
                                <div class="headd">
                                    <h2>В наличии</h2>
                                </div>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['item']->value['in_stock'] == 0) {?>
                                <div class="headd">
                                    <h1>Под заказ</h1>
                                    <p>Наличие уточняйте</p>
                                </div>
                                <?php }?>
                            </td>
                            <td>
                                <input type="button" class="counter_btn" id="BtnPlus_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"
                                    onmouseover="counter(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
)" value="+">
                                <input name="itemCnt_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" id="itemCnt_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"
                                    class="counter_value_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="1"
                                    onchange="conversionPrice(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
);" readonly>
                                <input type="button" class="counter_btn" id="BtnMinus_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"
                                    onmouseover="counter(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
)" value="-">
                            </td>
                            <td>
                                <span id="itemRealPrice_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
                                </span>
                                <span id="itemPrice_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
">
                                    <?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
 ₽/шт.
                                </span>
                            </td>
                            <td>
                                <a id="removeCart_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" href="#"
                                    onClick="removeFromCart(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
); window.location.reload(); return false;">
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
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </tbody>
                </table>
                <?php if (!(isset($_smarty_tpl->tpl_vars['user']->value))) {?>
                <span style="margin-top: 30px;">Для начала <a onclick="show('auth','block')">авторизируйтесь</a></span>
                <?php } else { ?>
                <input class="btn_or" type="submit" value="Оформить заказ">
                <?php }?>
            </div>
        </form>
        <?php }?>
    </div>
</div>
<?php echo '<script'; ?>
 type="text/javascript" src="/www/js/jquery-3.4.1.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="/www/js/main.js"><?php echo '</script'; ?>
>
</body>

</html><?php }
}
