<?php
/* Smarty version 3.1.33, created on 2020-06-15 12:17:44
  from '/home/admin/domains/rainpolska.gevax.pl/public_html/admin018190xeu/themes/default/template/helpers/view/view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ee74ac84668d0_42298858',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '69ac5eed652ddf88d1e730b824a64d6535d4928b' => 
    array (
      0 => '/home/admin/domains/rainpolska.gevax.pl/public_html/admin018190xeu/themes/default/template/helpers/view/view.tpl',
      1 => 1587040546,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee74ac84668d0_42298858 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<div class="leadin"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13361025675ee74ac845e0a9_86450488', "leadin");
?>
</div>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13111049325ee74ac845e989_93604116', "override_tpl");
?>


<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAdminView'),$_smarty_tpl ) );?>

<?php if (isset($_smarty_tpl->tpl_vars['name_controller']->value)) {?>
	<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'hookName', 'hookName', null);?>display<?php echo ucfirst($_smarty_tpl->tpl_vars['name_controller']->value);?>
View<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>$_smarty_tpl->tpl_vars['hookName']->value),$_smarty_tpl ) );?>

<?php } elseif (isset($_GET['controller'])) {?>
	<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'hookName', 'hookName', null);?>display<?php echo htmlentities(ucfirst($_GET['controller']));?>
View<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>$_smarty_tpl->tpl_vars['hookName']->value),$_smarty_tpl ) );?>

<?php }
}
/* {block "leadin"} */
class Block_13361025675ee74ac845e0a9_86450488 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'leadin' => 
  array (
    0 => 'Block_13361025675ee74ac845e0a9_86450488',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "leadin"} */
/* {block "override_tpl"} */
class Block_13111049325ee74ac845e989_93604116 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'override_tpl' => 
  array (
    0 => 'Block_13111049325ee74ac845e989_93604116',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "override_tpl"} */
}
