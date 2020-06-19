<?php
/* Smarty version 3.1.33, created on 2020-06-15 12:17:50
  from 'module:psemailsubscriptionviewst' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ee74ace7c9511_43743535',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '307dc6bd4724d29d1572cc301dd7148e962604ef' => 
    array (
      0 => 'module:psemailsubscriptionviewst',
      1 => 1591953612,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee74ace7c9511_43743535 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="block_newsletter">
  <div class="row">
    <h4 class="sub_heading title"><span class="news1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Join Our Mailing List','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span></h4>
    <div class="sub-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There are many variations of passages of Lorem Ipsum available','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</div>
    <div class="block_content">
      <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
#footer" method="post">
          <div class="newsletter-form">
            <input
              class="btn btn-primary pull-xs-right hidden-xs-down"
              name="submitNewsletter"
              type="submit"
              value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Subscribe','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
"
            >
            <input
              class="btn btn-primary pull-xs-right hidden-sm-up"
              name="submitNewsletter"
              type="submit"
              value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'OK','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
"
            >
            <div class="input-wrapper">
              <input
                name="email"
                type="text"
                value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
"
                placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enter Your Email','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>
"
              >
            </div>
            <input type="hidden" name="action" value="0">
            <div class="clearfix"></div>
          </div>
          <?php if ($_smarty_tpl->tpl_vars['msg']->value) {?>
			<p class="alert <?php if ($_smarty_tpl->tpl_vars['nw_error']->value) {?>alert-danger<?php } else { ?>alert-success<?php }?>">
			  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['msg']->value, ENT_QUOTES, 'UTF-8');?>

			</p>
		  <?php }?>
		  <div class="newsletter-message">
              <?php if ($_smarty_tpl->tpl_vars['conditions']->value) {?>
                <p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['conditions']->value, ENT_QUOTES, 'UTF-8');?>
</p>
              <?php }?>
          </div>
		  <?php if (isset($_smarty_tpl->tpl_vars['id_module']->value)) {?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayGDPRConsent','id_module'=>$_smarty_tpl->tpl_vars['id_module']->value),$_smarty_tpl ) );?>

              <?php }?>
      </form>
    </div>
  </div>
</div>
<?php }
}
