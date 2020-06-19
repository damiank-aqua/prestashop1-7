<?php
/* Smarty version 3.1.33, created on 2020-06-15 12:17:50
  from 'module:czsubbannercmsblockviewst' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ee74ace676597_20296734',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bbb9a2995496eaf21b23a5bb8b104dfe4a75e0f8' => 
    array (
      0 => 'module:czsubbannercmsblockviewst',
      1 => 1591953611,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee74ace676597_20296734 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '17459267645ee74ace674ca9_52476276';
if ($_smarty_tpl->tpl_vars['czsubbannercmsblockinfos']->value['text']) {?>
<div id="czsubbannercmsblock" class="block czsubbanners"> 
	<div class="czsubbanner_container container">
		<?php echo $_smarty_tpl->tpl_vars['czsubbannercmsblockinfos']->value['text'];?>

	</div> 
</div>
<?php }
}
}
