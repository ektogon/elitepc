<?php
/* Smarty version 4.5.2, created on 2024-05-07 10:21:55
  from 'D:\OSPanel\domains\pc.loc\views\default\leftcolumn.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_6639d6935063e6_68083334',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '182c18a22ed1e6c9d627678af94764d221e3b412' => 
    array (
      0 => 'D:\\OSPanel\\domains\\pc.loc\\views\\default\\leftcolumn.tpl',
      1 => 1715066514,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6639d6935063e6_68083334 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="leftColumn">
	<div id="leftMenu">
		<div class="menuCaption"><a href="/list/">Каталог</a></div>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsCategories']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
		<a>&nbsp; <?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a><br>
		<?php if ((isset($_smarty_tpl->tpl_vars['item']->value['children']))) {?>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['children'], 'itemChild');
$_smarty_tpl->tpl_vars['itemChild']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['itemChild']->value) {
$_smarty_tpl->tpl_vars['itemChild']->do_else = false;
?>
		<a href="/category/<?php echo $_smarty_tpl->tpl_vars['itemChild']->value['id'];?>
/">&nbsp; &nbsp; &nbsp; <?php echo $_smarty_tpl->tpl_vars['itemChild']->value['name'];?>
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
