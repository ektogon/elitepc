<?php
/* Smarty version 4.5.2, created on 2024-04-29 21:15:27
  from 'D:\OSPanel\domains\pc.loc\views\default\product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_662fe3bf4bdba3_84873158',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '546ddf53e01a762ad05c4bd7b78a2d4ea0b2b557' => 
    array (
      0 => 'D:\\OSPanel\\domains\\pc.loc\\views\\default\\product.tpl',
      1 => 1714414525,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_662fe3bf4bdba3_84873158 (Smarty_Internal_Template $_smarty_tpl) {
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
</div>

       <?php }
}
