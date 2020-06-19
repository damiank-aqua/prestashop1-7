<?php
/* Smarty version 3.1.33, created on 2020-06-15 12:17:50
  from '/home/admin/domains/rainpolska.gevax.pl/public_html/themes/Electon/templates/layouts/layout-left-column.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ee74ace420a27_38084475',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b1ff05b613b8e6b8836ebfef4fef33aa812f25ec' => 
    array (
      0 => '/home/admin/domains/rainpolska.gevax.pl/public_html/themes/Electon/templates/layouts/layout-left-column.tpl',
      1 => 1591953612,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/breadcrumb.tpl' => 1,
  ),
),false)) {
function content_5ee74ace420a27_38084475 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_605185815ee74ace4195f0_84875175', 'right_column');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15764711325ee74ace419ef7_07973977', 'content_wrapper');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/layout-both-columns.tpl');
}
/* {block 'right_column'} */
class Block_605185815ee74ace4195f0_84875175 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_column' => 
  array (
    0 => 'Block_605185815ee74ace4195f0_84875175',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'right_column'} */
/* {block 'breadcrumb'} */
class Block_10933479355ee74ace41a3c8_45160620 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<?php $_smarty_tpl->_subTemplateRender('file:_partials/breadcrumb.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<?php
}
}
/* {/block 'breadcrumb'} */
/* {block 'content'} */
class Block_19925761165ee74ace41bb92_94944633 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <p>Hello world! This is HTML5 Boilerplate.</p>
    <?php
}
}
/* {/block 'content'} */
/* {block 'content_wrapper'} */
class Block_15764711325ee74ace419ef7_07973977 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
    0 => 'Block_15764711325ee74ace419ef7_07973977',
  ),
  'breadcrumb' => 
  array (
    0 => 'Block_10933479355ee74ace41a3c8_45160620',
  ),
  'content' => 
  array (
    0 => 'Block_19925761165ee74ace41bb92_94944633',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div id="content-wrapper" class="left-column col-xs-12 col-sm-8 col-md-9" style="width:82.18%">
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10933479355ee74ace41a3c8_45160620', 'breadcrumb', $this->tplIndex);
?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperTop"),$_smarty_tpl ) );?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19925761165ee74ace41bb92_94944633', 'content', $this->tplIndex);
?>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperBottom"),$_smarty_tpl ) );?>

  </div>
<?php
}
}
/* {/block 'content_wrapper'} */
}
