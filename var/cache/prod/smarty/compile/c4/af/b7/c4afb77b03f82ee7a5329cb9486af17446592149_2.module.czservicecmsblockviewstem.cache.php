<?php
/* Smarty version 3.1.33, created on 2020-06-15 12:17:50
  from 'module:czservicecmsblockviewstem' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ee74ace6b50c3_95373839',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c4afb77b03f82ee7a5329cb9486af17446592149' => 
    array (
      0 => 'module:czservicecmsblockviewstem',
      1 => 1591953611,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee74ace6b50c3_95373839 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '17666910235ee74ace6b3ad3_14433913';
?>

<?php if ($_smarty_tpl->tpl_vars['czservicecmsblockinfos']->value['text']) {?>
	<div id="czservicecmsblock">
		<div class="service_container container">
			<?php echo $_smarty_tpl->tpl_vars['czservicecmsblockinfos']->value['text'];?>

		</div>
	</div>
<?php }
}
}
