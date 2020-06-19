<?php
/* Smarty version 3.1.33, created on 2020-06-15 12:18:49
  from '/home/admin/domains/rainpolska.gevax.pl/public_html/themes/Electon/templates/errors/not-found.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ee74b091f9041_36519434',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '111c59e2b9576017db1eae89c3ba27845f9dee37' => 
    array (
      0 => '/home/admin/domains/rainpolska.gevax.pl/public_html/themes/Electon/templates/errors/not-found.tpl',
      1 => 1591953612,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee74b091f9041_36519434 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<section id="content" class="page-content page-not-found">
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16357991725ee74b091f5433_19346398', 'page_content');
?>

</section>
<?php }
/* {block 'search'} */
class Block_7439768915ee74b091f62a0_54307399 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displaySearch'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'search'} */
/* {block 'hook_not_found'} */
class Block_2114822475ee74b091f84b0_55978184 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNotFound'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'hook_not_found'} */
/* {block 'page_content'} */
class Block_16357991725ee74b091f5433_19346398 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_16357991725ee74b091f5433_19346398',
  ),
  'search' => 
  array (
    0 => 'Block_7439768915ee74b091f62a0_54307399',
  ),
  'hook_not_found' => 
  array (
    0 => 'Block_2114822475ee74b091f84b0_55978184',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sorry for the inconvenience.','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</h4>
    <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search again what you are looking for','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</p>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7439768915ee74b091f62a0_54307399', 'search', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2114822475ee74b091f84b0_55978184', 'hook_not_found', $this->tplIndex);
?>


  <?php
}
}
/* {/block 'page_content'} */
}
