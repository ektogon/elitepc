<?php
/* Smarty version 4.5.2, created on 2024-05-08 08:59:06
  from 'D:\OSPanel\domains\pc.loc\views\default\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_663b14aac5f413_09548107',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '25a4d5c11107375ed589d89414a0d78c2d4eef44' => 
    array (
      0 => 'D:\\OSPanel\\domains\\pc.loc\\views\\default\\header.tpl',
      1 => 1715147944,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_663b14aac5f413_09548107 (Smarty_Internal_Template $_smarty_tpl) {
?><html>

<head>

	<title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
css/main.css" type="text/css" />
</head>

<header id="header">
	<nav>
		<ul>
			<a href="/">
				<img class="logo" src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
img/logo.png" alt="logo">
			</a>
			<li><a href="/list/">Каталог</a>
				<ul>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsCategories']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
					<li><a><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a>
						<ul>
							<?php if ((isset($_smarty_tpl->tpl_vars['item']->value['children']))) {?>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['children'], 'itemChild');
$_smarty_tpl->tpl_vars['itemChild']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['itemChild']->value) {
$_smarty_tpl->tpl_vars['itemChild']->do_else = false;
?>
							<li><a href="/category/<?php echo $_smarty_tpl->tpl_vars['itemChild']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['itemChild']->value['name'];?>
</a></li>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							<?php }?>
						</ul>
					</li>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</ul>
			</li>
			<li><a href="#">Конфигуратор</a></li>
			<li><a href="#">Услуги</a></li>
			<li>
				<ol>
					<li>
						<a href="/cart/"><img class="profile" src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
img/korzina.png"></a>
						<div id="cartCntItems">

							<?php if ($_smarty_tpl->tpl_vars['cartCntItems']->value > 0) {?>
							<p><?php echo $_smarty_tpl->tpl_vars['cartCntItems']->value;?>
</p>
							<?php } else { ?>
							<?php }?>
						</div>
					</li>
					<?php if (!$_smarty_tpl->tpl_vars['_SESSION']->value['user']['name']) {?>
					<li><a href="#"><img class="profile" src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
/img/profile.png"></a>
						<ul>
							<li><a onclick="show('auth','block')">Войти</a></li>
							<li><a onclick="show('reg','block')">Зарегистрироваться</a></li>
						</ul>
					</li>
					<?php } else { ?>
					<li>
						<a href="/user/">Привет,
							<?php echo $_smarty_tpl->tpl_vars['_SESSION']->value['user']['name'];?>

						</a>
					</li>
					<li>
						<a href="/user/logout/">
							<img class="profile" src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
/img/exit.png">
						</a>
					</li>
					<?php }?>
					<li><a href="tel:+79999999999"><img class="profile" src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
img/phone.png"></a></li>
				</ol>
			</li>
		</ul>
	</nav>
</header>

<body>
	<div id="gray" onclick="show('0','none')"></div>
	<div id="reg">
		<form>
			<label>Имя</label>
			<input type="text" name="name" placeholder="Введите Имя">
			<label>Логин</label>
			<input type="text" name="login" placeholder="Введите логин">
			<label>Почта</label>
			<input type="email" name="email" placeholder="Введите адрес почты">
			<label>Пароль</label>
			<input type="password" name="pwd1" placeholder="Введите пароль">
			<label>Подтверждение пароля</label>
			<input type="password" name="pwd2" placeholder="Подтвердите пароль">
			<button type="submit" id="register-btn">Зарегистрироваться</button>
			<p>
				У вас уже есть аккаунт? - <a onclick="show('auth','block')">авторизируйтесь</a>!
			</p>
			<p class="msg none"></p>

		</form>
	</div>
	<div id="auth">
		<form>
			<label>Логин</label>
			<input type="text" name="loginn" placeholder="Введите свой логин">
			<label>Пароль</label>
			<input type="password" name="password" placeholder="Введите пароль">
			<button type="submit" id="login-btn">Войти</button>
			<p>
				У вас нет аккаунта? - <a onclick="show('reg','block')">зарегистрируйтесь</a>!
			</p>
			<p class="msg none"></p>
		</form>
	</div><?php }
}
