<?php
/* Smarty version 3.1.33, created on 2020-06-15 12:17:50
  from 'module:czblockpaymentlogoviewste' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ee74ace877c07_22717426',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1fdafa859e2284f4fee23ec9572b9ebd1862379f' => 
    array (
      0 => 'module:czblockpaymentlogoviewste',
      1 => 1591953611,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee74ace877c07_22717426 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1132688615ee74ace875c33_37926426';
?>

<!-- Block payment logo module -->
<div id="payement_logo_block_left" class="payement_logo_block">
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getCMSLink($_smarty_tpl->tpl_vars['czblockpaymentlogo']->value), ENT_QUOTES, 'UTF-8');?>
">
		<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_url']->value, ENT_QUOTES, 'UTF-8');?>
/visa.png" alt="visa" width="34" height="23" />
		<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_url']->value, ENT_QUOTES, 'UTF-8');?>
/discover.png" alt="discover" width="34" height="23" />
		<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_url']->value, ENT_QUOTES, 'UTF-8');?>
/american_express.png" alt="american_express" width="34" height="23" />
		<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_url']->value, ENT_QUOTES, 'UTF-8');?>
/master_card.png" alt="master_card" width="34" height="23" />
		<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_url']->value, ENT_QUOTES, 'UTF-8');?>
/paypal.png" alt="paypal" width="34" height="23" />
			</a>
</div>
<!-- /Block payment logo module --><?php }
}
