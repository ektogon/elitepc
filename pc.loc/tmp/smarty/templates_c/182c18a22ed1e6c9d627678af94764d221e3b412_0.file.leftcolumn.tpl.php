<?php
/* Smarty version 4.5.2, created on 2024-04-29 21:16:06
  from 'D:\OSPanel\domains\pc.loc\views\default\leftcolumn.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_662fe3e6440684_43410322',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '182c18a22ed1e6c9d627678af94764d221e3b412' => 
    array (
      0 => 'D:\\OSPanel\\domains\\pc.loc\\views\\default\\leftcolumn.tpl',
      1 => 1714414564,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_662fe3e6440684_43410322 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="leftColumn">
		<div id="leftMenu">
			<div class="menuCaption"><a href="/">Каталог</a></div>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsCategories']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
				<a><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a><br>
				<?php if ((isset($_smarty_tpl->tpl_vars['item']->value['children']))) {?>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['children'], 'itemChild');
$_smarty_tpl->tpl_vars['itemChild']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['itemChild']->value) {
$_smarty_tpl->tpl_vars['itemChild']->do_else = false;
?>
				--<a href="/category/<?php echo $_smarty_tpl->tpl_vars['itemChild']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['itemChild']->value['name'];?>
</a><br>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				<?php }?>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</div>
	</div><?php }
}
