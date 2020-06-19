<?php
/* Smarty version 3.1.33, created on 2020-06-15 12:40:47
  from '/home/admin/domains/rainpolska.gevax.pl/public_html/themes/Electon/templates/customer/_partials/login-form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ee7502f050408_19333944',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '59ce358fb91dd6e3afee51e831e06d18bc98ce60' => 
    array (
      0 => '/home/admin/domains/rainpolska.gevax.pl/public_html/themes/Electon/templates/customer/_partials/login-form.tpl',
      1 => 1591953612,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/form-errors.tpl' => 1,
  ),
),false)) {
function content_5ee7502f050408_19333944 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4720458585ee7502f0387e5_34303717', 'login_form');
?>

<?php }
/* {block 'login_form_errors'} */
class Block_1675045035ee7502f038d09_71635868 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:_partials/form-errors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('errors'=>$_smarty_tpl->tpl_vars['errors']->value['']), 0, false);
?>
  <?php
}
}
/* {/block 'login_form_errors'} */
/* {block 'login_form_actionurl'} */
class Block_4040608585ee7502f03d992_31922115 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'login_form_actionurl'} */
/* {block 'form_field'} */
class Block_15787829145ee7502f049940_12915826 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['form_field'][0], array( array('field'=>$_smarty_tpl->tpl_vars['field']->value),$_smarty_tpl ) );?>

          <?php
}
}
/* {/block 'form_field'} */
/* {block 'login_form_fields'} */
class Block_1222329075ee7502f03e933_84738570 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['formFields']->value, 'field');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
?>
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15787829145ee7502f049940_12915826', 'form_field', $this->tplIndex);
?>

        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      <?php
}
}
/* {/block 'login_form_fields'} */
/* {block 'form_buttons'} */
class Block_18644041245ee7502f04f483_07533149 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <button id="submit-login" class="btn btn-primary" data-link-action="sign-in" type="submit" class="form-control-submit">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign in','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

          </button>
        <?php
}
}
/* {/block 'form_buttons'} */
/* {block 'login_form_footer'} */
class Block_9511236165ee7502f04f061_75538659 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="form-footer text-sm-center clearfix">
        <input type="hidden" name="submitLogin" value="1">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18644041245ee7502f04f483_07533149', 'form_buttons', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'login_form_footer'} */
/* {block 'login_form'} */
class Block_4720458585ee7502f0387e5_34303717 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'login_form' => 
  array (
    0 => 'Block_4720458585ee7502f0387e5_34303717',
  ),
  'login_form_errors' => 
  array (
    0 => 'Block_1675045035ee7502f038d09_71635868',
  ),
  'login_form_actionurl' => 
  array (
    0 => 'Block_4040608585ee7502f03d992_31922115',
  ),
  'login_form_fields' => 
  array (
    0 => 'Block_1222329075ee7502f03e933_84738570',
  ),
  'form_field' => 
  array (
    0 => 'Block_15787829145ee7502f049940_12915826',
  ),
  'login_form_footer' => 
  array (
    0 => 'Block_9511236165ee7502f04f061_75538659',
  ),
  'form_buttons' => 
  array (
    0 => 'Block_18644041245ee7502f04f483_07533149',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1675045035ee7502f038d09_71635868', 'login_form_errors', $this->tplIndex);
?>


  <form id="login-form" action="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4040608585ee7502f03d992_31922115', 'login_form_actionurl', $this->tplIndex);
?>
" method="post">

    <section>
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1222329075ee7502f03e933_84738570', 'login_form_fields', $this->tplIndex);
?>

      <div class="forgot-password">
        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['password'], ENT_QUOTES, 'UTF-8');?>
" rel="nofollow">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Forgot your password?','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

        </a>
      </div>
    </section>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9511236165ee7502f04f061_75538659', 'login_form_footer', $this->tplIndex);
?>


  </form>
<?php
}
}
/* {/block 'login_form'} */
}
