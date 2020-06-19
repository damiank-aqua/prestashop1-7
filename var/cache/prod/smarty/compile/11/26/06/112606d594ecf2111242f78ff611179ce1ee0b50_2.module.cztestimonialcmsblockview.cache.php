<?php
/* Smarty version 3.1.33, created on 2020-06-15 12:17:50
  from 'module:cztestimonialcmsblockview' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ee74ace637c56_76548204',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '112606d594ecf2111242f78ff611179ce1ee0b50' => 
    array (
      0 => 'module:cztestimonialcmsblockview',
      1 => 1591953611,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee74ace637c56_76548204 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '2015532715ee74ace634a33_67953503';
if ($_smarty_tpl->tpl_vars['cztestimonialcmsblockinfos']->value['text']) {
if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'index') {?>
<div id="cztestimonialcmsblock" class="block testimonial-block">
	<h4 class="block_title hidden-md-down"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"What's People says",'mod'=>'cz_testimonialcmsblock'),$_smarty_tpl ) );?>
</h4>
	<h4 class="block_title hidden-lg-up" data-target="#testimonial_toggle" data-toggle="collapse">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Whats People says','mod'=>'cz_testimonialcmsblock'),$_smarty_tpl ) );?>

		<span class="pull-xs-right">
		  <span class="navbar-toggler collapse-icons">
			<i class="fa-icon add"></i>
			<i class="fa-icon remove"></i>
		  </span>
		</span>
	</h4>
	<div id="testimonial_toggle" class="block_content collapse">
		<?php echo $_smarty_tpl->tpl_vars['cztestimonialcmsblockinfos']->value['text'];?>

	</div>
</div>
<?php }
}
}
}
