<?php
/* Smarty version 3.1.33, created on 2020-06-15 12:40:19
  from '/home/admin/domains/rainpolska.gevax.pl/public_html/themes/Electon/templates/checkout/cart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ee7501363caa5_48671427',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b4b75d6db22ecaf44d233c3ea3d9521fad22b4eb' => 
    array (
      0 => '/home/admin/domains/rainpolska.gevax.pl/public_html/themes/Electon/templates/checkout/cart.tpl',
      1 => 1591953612,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:checkout/_partials/cart-detailed.tpl' => 1,
    'file:checkout/_partials/cart-detailed-totals.tpl' => 1,
    'file:checkout/_partials/cart-detailed-actions.tpl' => 1,
  ),
),false)) {
function content_5ee7501363caa5_48671427 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7746104615ee75013631654_25935626', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'cart_overview'} */
class Block_8322320975ee750136324a1_06871353 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-detailed.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cart'=>$_smarty_tpl->tpl_vars['cart']->value), 0, false);
?>
          <?php
}
}
/* {/block 'cart_overview'} */
/* {block 'continue_shopping'} */
class Block_1895486525ee750136375a0_25747552 extends Smarty_Internal_Block
{
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
/* {block 'hook_shopping_cart_footer'} */
class Block_8884644295ee75013638997_29540480 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayShoppingCartFooter'),$_smarty_tpl ) );?>

        <?php
}
}
/* {/block 'hook_shopping_cart_footer'} */
/* {block 'hook_shopping_cart'} */
class Block_12598391655ee75013639711_38212085 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayShoppingCart'),$_smarty_tpl ) );?>

            <?php
}
}
/* {/block 'hook_shopping_cart'} */
/* {block 'cart_totals'} */
class Block_3427923375ee7501363a136_38918609 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-detailed-totals.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cart'=>$_smarty_tpl->tpl_vars['cart']->value), 0, false);
?>
            <?php
}
}
/* {/block 'cart_totals'} */
/* {block 'cart_actions'} */
class Block_12006109535ee7501363b036_89760463 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-detailed-actions.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cart'=>$_smarty_tpl->tpl_vars['cart']->value), 0, false);
?>
            <?php
}
}
/* {/block 'cart_actions'} */
/* {block 'cart_summary'} */
class Block_11223297865ee75013639372_56665214 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <div class="card cart-summary">

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12598391655ee75013639711_38212085', 'hook_shopping_cart', $this->tplIndex);
?>


            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3427923375ee7501363a136_38918609', 'cart_totals', $this->tplIndex);
?>


            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12006109535ee7501363b036_89760463', 'cart_actions', $this->tplIndex);
?>


          </div>
        <?php
}
}
/* {/block 'cart_summary'} */
/* {block 'hook_reassurance'} */
class Block_2988706465ee7501363bde0_67500795 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayReassurance'),$_smarty_tpl ) );?>

        <?php
}
}
/* {/block 'hook_reassurance'} */
/* {block 'content'} */
class Block_7746104615ee75013631654_25935626 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_7746104615ee75013631654_25935626',
  ),
  'cart_overview' => 
  array (
    0 => 'Block_8322320975ee750136324a1_06871353',
  ),
  'continue_shopping' => 
  array (
    0 => 'Block_1895486525ee750136375a0_25747552',
  ),
  'hook_shopping_cart_footer' => 
  array (
    0 => 'Block_8884644295ee75013638997_29540480',
  ),
  'cart_summary' => 
  array (
    0 => 'Block_11223297865ee75013639372_56665214',
  ),
  'hook_shopping_cart' => 
  array (
    0 => 'Block_12598391655ee75013639711_38212085',
  ),
  'cart_totals' => 
  array (
    0 => 'Block_3427923375ee7501363a136_38918609',
  ),
  'cart_actions' => 
  array (
    0 => 'Block_12006109535ee7501363b036_89760463',
  ),
  'hook_reassurance' => 
  array (
    0 => 'Block_2988706465ee7501363bde0_67500795',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">
    <div class="cart-grid row">

      <!-- Left Block: cart product informations & shpping -->
      <div class="cart-grid-body col-xs-12 col-lg-8">

        <!-- cart products detailed -->
        <div class="card cart-container">
          <div class="card-block">
            <h1 class="h3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shopping Cart','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</h1>
          </div>
          <hr class="separator">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8322320975ee750136324a1_06871353', 'cart_overview', $this->tplIndex);
?>

        </div>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1895486525ee750136375a0_25747552', 'continue_shopping', $this->tplIndex);
?>


        <!-- shipping informations -->
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8884644295ee75013638997_29540480', 'hook_shopping_cart_footer', $this->tplIndex);
?>

      </div>

      <!-- Right Block: cart subtotal & cart total -->
      <div class="cart-grid-right col-xs-12 col-lg-4">

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11223297865ee75013639372_56665214', 'cart_summary', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2988706465ee7501363bde0_67500795', 'hook_reassurance', $this->tplIndex);
?>


      </div>

    </div>
  </section>
<?php
}
}
/* {/block 'content'} */
}
