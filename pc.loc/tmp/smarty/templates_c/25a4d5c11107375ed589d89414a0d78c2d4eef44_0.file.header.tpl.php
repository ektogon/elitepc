<?php
/* Smarty version 4.5.2, created on 2024-04-30 12:27:07
  from 'D:\OSPanel\domains\pc.loc\views\default\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_6630b96b342e29_89508014',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '25a4d5c11107375ed589d89414a0d78c2d4eef44' => 
    array (
      0 => 'D:\\OSPanel\\domains\\pc.loc\\views\\default\\header.tpl',
      1 => 1714469215,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6630b96b342e29_89508014 (Smarty_Internal_Template $_smarty_tpl) {
?>
<header id="header">
	<nav>
		<ul>
			<a href="#">
				<li>
					<img class="logo" src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
img/logo.png" alt="logo">
				</li>
			</a>
			<li><a href="#">Каталог</a>
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
					<li><a href="#"><img class="profile" src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
img/korzina.png"></a></li>
					<!-- <?php echo '<?php'; ?>

					error_reporting(0);
					if (!$_SESSION['user']['name']) : <?php echo '?>'; ?>

						<li><a href="#"><img class="profile" src="../img/profile.png"></a>
							<ul>
								<li><a href="buyer/authorization.php">Войти</a></li>
								<li><a href="buyer/reg.php">Зарегистрироваться</a></li>
							</ul>
						</li>
					<?php echo '<?'; ?>
 else : <?php echo '?>'; ?>

						<li><a>Привет, <?php echo '<?'; ?>
= $_SESSION['user']['name'] <?php echo '?>'; ?>
</a></li>
						<li>
							<a href="../models/logout.php">
								<img class="profile" src="../img/exit.png">
							</a>
						</li>
					<?php echo '<?'; ?>
 endif <?php echo '?>'; ?>
 -->
					<li><a href="tel:+79999999999"><img class="profile" src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
img/phone.png"></a></li>
				</ol>
			</li>
		</ul>
	</nav>
</header>

<body>
<?php }
}
