<?php
/* Smarty version 3.1.33, created on 2020-06-15 12:52:16
  from '/home/admin/domains/rainpolska.gevax.pl/public_html/admin018190xeu/themes/new-theme/template/components/layout/confirmation_messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ee752e0e06ba9_96704296',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7acc91ea1d23a548a4b0cec7d3e3292f3fdeadb5' => 
    array (
      0 => '/home/admin/domains/rainpolska.gevax.pl/public_html/admin018190xeu/themes/new-theme/template/components/layout/confirmation_messages.tpl',
      1 => 1587040546,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee752e0e06ba9_96704296 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['confirmations']->value) && count($_smarty_tpl->tpl_vars['confirmations']->value) && $_smarty_tpl->tpl_vars['confirmations']->value) {?>
  <div class="bootstrap">
    <div class="alert alert-success" style="display:block;">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['confirmations']->value, 'conf');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['conf']->value) {
?>
        <?php echo $_smarty_tpl->tpl_vars['conf']->value;?>

      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
  </div>
<?php }
}
}
