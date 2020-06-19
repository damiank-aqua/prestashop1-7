<?php
/* Smarty version 3.1.33, created on 2020-06-15 12:17:50
  from 'module:czfootercmsblockviewstemp' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ee74ace858239_44883326',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc4615098a1b5369f78949bff43869f40de69c9d' => 
    array (
      0 => 'module:czfootercmsblockviewstemp',
      1 => 1591953611,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee74ace858239_44883326 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '16204617965ee74ace856711_18342834';
?>

<?php if ($_smarty_tpl->tpl_vars['czfootercmsblockinfos']->value['text']) {?>
<div id="czfootercmsblock" class="footer-cms-block col-md-4 links block">  
	<div id="footerlogo">
		<?php echo $_smarty_tpl->tpl_vars['czfootercmsblockinfos']->value['text'];?>
 
	</div>
</div>
<?php }
}
}
