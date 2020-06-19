<?php
/* Smarty version 3.1.33, created on 2020-06-15 15:43:41
  from '/home/admin/domains/rainpolska.gevax.pl/public_html/modules/cz_verticalmenu/views/templates/admin/_configure/helpers/list/list_content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ee77b0dee6189_24351757',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd6f63c5ed72e2b40c33a118f3cea959cda2d9113' => 
    array (
      0 => '/home/admin/domains/rainpolska.gevax.pl/public_html/modules/cz_verticalmenu/views/templates/admin/_configure/helpers/list/list_content.tpl',
      1 => 1591953611,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee77b0dee6189_24351757 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4102174185ee77b0ded8d28_50679063', "td_content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/list/list_content.tpl");
}
/* {block "td_content"} */
class Block_4102174185ee77b0ded8d28_50679063 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'td_content' => 
  array (
    0 => 'Block_4102174185ee77b0ded8d28_50679063',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if (isset($_smarty_tpl->tpl_vars['params']->value['type']) && $_smarty_tpl->tpl_vars['params']->value['type'] == 'link') {?>
		<a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value],'html','UTF-8' ));?>
" target="_blank"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value],'html','UTF-8' ));?>
</a>
	<?php } else { ?>
		<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

	<?php }
}
}
/* {/block "td_content"} */
}
