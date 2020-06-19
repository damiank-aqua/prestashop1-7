<?php
/* Smarty version 3.1.33, created on 2020-06-15 12:17:50
  from 'module:czoffercmsblockviewstempl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ee74ace2a25f5_30325525',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99e1f77515dacb4a3ea877266cdabfe9dade12ec' => 
    array (
      0 => 'module:czoffercmsblockviewstempl',
      1 => 1591953611,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee74ace2a25f5_30325525 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '17904235325ee74ace29e114_58772968';
?>

<?php if ($_smarty_tpl->tpl_vars['czoffercmsblockinfos']->value['text']) {?>
<div id="czoffercmsblock" class="block czoffer-cms"> 
	<?php echo $_smarty_tpl->tpl_vars['czoffercmsblockinfos']->value['text'];?>

</div>
<?php }
}
}
