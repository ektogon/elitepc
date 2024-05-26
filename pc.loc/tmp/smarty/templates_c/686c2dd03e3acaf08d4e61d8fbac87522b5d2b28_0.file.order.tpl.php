<?php
/* Smarty version 4.5.2, created on 2024-05-18 11:03:12
  from 'D:\OSPanel\domains\pc.loc\views\default\order.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_664860c094fbd7_68551157',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '686c2dd03e3acaf08d4e61d8fbac87522b5d2b28' => 
    array (
      0 => 'D:\\OSPanel\\domains\\pc.loc\\views\\default\\order.tpl',
      1 => 1716019374,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_664860c094fbd7_68551157 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="limiter">
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
                                <span id="itemCnt_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
                                    <input type="hidden" name="itemCnt_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['cnt'];?>
">
                                    <?php echo $_smarty_tpl->tpl_vars['item']->value['cnt'];?>

                                </span>
                            </td>
                            <td>
                                <?php if ($_smarty_tpl->tpl_vars['item']->value['cnt'] > 1) {?>
                                <span id="itemRealPrice_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
                                    <input type="hidden" name="itemRealPrice_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"
                                        value="<?php echo $_smarty_tpl->tpl_vars['item']->value['realPrice'];?>
">
                                    <?php echo $_smarty_tpl->tpl_vars['item']->value['realPrice'];?>
 ₽
                                </span>
                                <?php }?>
                                <span id="itemPrice_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
">
                                    <input type="hidden" name="itemPrice_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
">
                                    <?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
 ₽/шт.
                                </span>
                            </td>
                        </tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </tbody>
                </table>
                <table class="res">
                    <tr>
                        <th class="table-head">Итого </th>
                        <td><?php echo $_smarty_tpl->tpl_vars['sum']->value;?>
 ₽</td>
                    </tr>
                </table>
            </div>
        </form>
        <ul class="user_info">
            <h4>Данные пользователя</h4>
            <li><label for="">Почта</label><input type="email" maxlength="100" placeholder="<?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
"
                    id="newEmail"></li>
            <li><label for="">Имя</label><input type="text" maxlength="15" placeholder="<?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
" id="newName">
            </li>
        </ul>
        <input class="btn_or" id="btnSaveOrder" type="button" value="Оформить заказ" onclick="saveOrder();">
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
