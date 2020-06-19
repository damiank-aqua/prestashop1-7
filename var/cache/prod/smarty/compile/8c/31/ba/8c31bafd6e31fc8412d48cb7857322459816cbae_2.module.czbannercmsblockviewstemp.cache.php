<?php
/* Smarty version 3.1.33, created on 2020-06-15 12:17:50
  from 'module:czbannercmsblockviewstemp' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ee74ace31dff8_30559086',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8c31bafd6e31fc8412d48cb7857322459816cbae' => 
    array (
      0 => 'module:czbannercmsblockviewstemp',
      1 => 1591953610,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee74ace31dff8_30559086 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '10013671115ee74ace31b231_30258446';
?>

<?php if ($_smarty_tpl->tpl_vars['czbannercmsblockinfos']->value['text']) {?>
<div id="czbannercmsblock" class="block czbanners"> 
	<div class="czbanner_container container">
		<?php echo $_smarty_tpl->tpl_vars['czbannercmsblockinfos']->value['text'];?>

	</div> 
</div>
<?php }
}
}
