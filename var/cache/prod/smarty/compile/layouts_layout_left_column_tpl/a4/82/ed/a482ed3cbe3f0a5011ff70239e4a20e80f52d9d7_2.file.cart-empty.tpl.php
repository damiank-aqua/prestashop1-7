<?php
/* Smarty version 3.1.33, created on 2020-06-15 12:40:19
  from '/home/admin/domains/rainpolska.gevax.pl/public_html/themes/Electon/templates/checkout/cart-empty.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ee7501361b752_23963033',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a482ed3cbe3f0a5011ff70239e4a20e80f52d9d7' => 
    array (
      0 => '/home/admin/domains/rainpolska.gevax.pl/public_html/themes/Electon/templates/checkout/cart-empty.tpl',
      1 => 1591953612,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee7501361b752_23963033 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17359626735ee7501360d544_77522475', 'content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4469112775ee75013612478_86684559', 'continue_shopping');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6012935935ee75013619960_70381864', 'cart_actions');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19141324005ee7501361a4b4_70151287', 'continue_shopping');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7880527145ee7501361aa74_57519160', 'cart_voucher');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1475762185ee7501361b115_34345131', 'display_reassurance');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'checkout/cart.tpl');
}
/* {block 'content'} */
class Block_17359626735ee7501360d544_77522475 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_17359626735ee7501360d544_77522475',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCrossSellingShoppingCart'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'content'} */
/* {block 'continue_shopping'} */
class Block_4469112775ee75013612478_86684559 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'continue_shopping' => 
  array (
    0 => 'Block_4469112775ee75013612478_86684559',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <a class="label" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <i class="material-icons">chevron_left</i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Continue shopping','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

  </a>
<?php
}
}
/* {/block 'continue_shopping'} */
/* {block 'cart_actions'} */
class Block_6012935935ee75013619960_70381864 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cart_actions' => 
  array (
    0 => 'Block_6012935935ee75013619960_70381864',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="checkout text-sm-center card-block">
    <button type="button" class="btn btn-primary disabled" disabled><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Checkout','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</button>
  </div>
<?php
}
}
/* {/block 'cart_actions'} */
/* {block 'continue_shopping'} */
class Block_19141324005ee7501361a4b4_70151287 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'continue_shopping' => 
  array (
    0 => 'Block_19141324005ee7501361a4b4_70151287',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'continue_shopping'} */
/* {block 'cart_voucher'} */
class Block_7880527145ee7501361aa74_57519160 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cart_voucher' => 
  array (
    0 => 'Block_7880527145ee7501361aa74_57519160',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'cart_voucher'} */
/* {block 'display_reassurance'} */
class Block_1475762185ee7501361b115_34345131 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'display_reassurance' => 
  array (
    0 => 'Block_1475762185ee7501361b115_34345131',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'display_reassurance'} */
}
