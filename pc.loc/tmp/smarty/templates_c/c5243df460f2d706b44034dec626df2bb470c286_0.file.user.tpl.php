<?php
/* Smarty version 4.5.2, created on 2024-05-24 19:17:48
  from 'D:\OSPanel\domains\pc.loc\views\default\user.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_6650bdac1d1d13_99331849',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c5243df460f2d706b44034dec626df2bb470c286' => 
    array (
      0 => 'D:\\OSPanel\\domains\\pc.loc\\views\\default\\user.tpl',
      1 => 1716567462,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6650bdac1d1d13_99331849 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="limiter">
    <div class="container-table">
        <div class="wrap-table">
            <div class="user-item">
                <div class="name-user">
                    <p><?php echo $_smarty_tpl->tpl_vars['user']->value['login'];?>
</p>
                    <h1><?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
</h1>
                </div>
                <ul class="user_info">
                    <li><label for="">Почта</label><input type="email" maxlength="100" placeholder="<?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
"
                            id="newEmail" ></li>
                    <li><label for="">Имя</label><input type="text" maxlength="15" placeholder="<?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
"
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
            <?php if (!$_smarty_tpl->tpl_vars['rsUserOrders']->value) {?>
            Нет заказов
            <?php } else { ?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsUserOrders']->value, 'item', false, NULL, 'orders', array (
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
            <div class="user-item">

                <div class="user-item-head">
                    <h1 class="date">Заказ от <?php echo $_smarty_tpl->tpl_vars['item']->value['date_created'];?>
</h1>
                    <h2 id="order-number">№ <?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
</h2>

                </div>
                <div class="user-goods">
                    <?php $_smarty_tpl->_assignInScope('sum', 0);?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['children'], 'itemChild', false, NULL, 'products', array (
));
$_smarty_tpl->tpl_vars['itemChild']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['itemChild']->value) {
$_smarty_tpl->tpl_vars['itemChild']->do_else = false;
?>
                    <a href="/category/<?php echo $_smarty_tpl->tpl_vars['itemChild']->value['type_of_product'];?>
/product/<?php echo $_smarty_tpl->tpl_vars['itemChild']->value['id'];?>
/">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
/img/goods/<?php echo $_smarty_tpl->tpl_vars['itemChild']->value['link_img'];?>
">
                        <p><?php echo $_smarty_tpl->tpl_vars['itemChild']->value['amount'];?>
</p>
                    </a><?php $_smarty_tpl->_assignInScope('sum', $_smarty_tpl->tpl_vars['sum']->value+$_smarty_tpl->tpl_vars['itemChild']->value['amount']*$_smarty_tpl->tpl_vars['itemChild']->value['price']);?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
                <div class="flex user-item-head">
                    <h1><?php if ($_smarty_tpl->tpl_vars['item']->value['status'] == 0) {?>
                        К оплате <?php echo $_smarty_tpl->tpl_vars['sum']->value;?>
 ₽
                        <?php } else { ?>
                        Оплачено <?php echo $_smarty_tpl->tpl_vars['sum']->value;?>
 ₽
                        <?php }?>
                    </h1>
                    <button class="flex add_to_cart" id="delete-btn">
                        <h1>Отмена заказа</h1>
                    </button>
                </div>
            </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
