<?php
/* Smarty version 3.1.33, created on 2020-06-15 12:52:45
  from '/home/admin/domains/rainpolska.gevax.pl/public_html/themes/Electon/templates/errors/404.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ee752fd4e13a8_03671252',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8571412ecefa22920797097a93e05fa6c3363828' => 
    array (
      0 => '/home/admin/domains/rainpolska.gevax.pl/public_html/themes/Electon/templates/errors/404.tpl',
      1 => 1591953612,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:errors/not-found.tpl' => 1,
  ),
),false)) {
function content_5ee752fd4e13a8_03671252 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12279898185ee752fd4d65c7_74695584', 'page_title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16774814955ee752fd4dc8f2_74067077', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_title'} */
class Block_12279898185ee752fd4d65c7_74695584 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_title' => 
  array (
    0 => 'Block_12279898185ee752fd4d65c7_74695584',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['title'], ENT_QUOTES, 'UTF-8');?>

<?php
}
}
/* {/block 'page_title'} */
/* {block 'page_content_container'} */
class Block_16774814955ee752fd4dc8f2_74067077 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_16774814955ee752fd4dc8f2_74067077',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender('file:errors/not-found.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'page_content_container'} */
}
