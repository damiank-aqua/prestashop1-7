<?php
/* Smarty version 3.1.33, created on 2020-06-15 12:17:50
  from 'module:czverticalmenuviewstempla' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ee74ace5edd53_08560569',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fbfafc7ea0d0d0dbe62e36ca5b9cb5929b68ccd2' => 
    array (
      0 => 'module:czverticalmenuviewstempla',
      1 => 1591953611,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee74ace5edd53_08560569 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'verticalmenu' => 
  array (
    'compiled_filepath' => '/home/admin/domains/rainpolska.gevax.pl/public_html/var/cache/prod/smarty/compile/fb/fa/fc/fbfafc7ea0d0d0dbe62e36ca5b9cb5929b68ccd2_2.module.czverticalmenuviewstempla.php',
    'uid' => 'fbfafc7ea0d0d0dbe62e36ca5b9cb5929b68ccd2',
    'call_name' => 'smarty_template_function_verticalmenu_18684318495ee74ace5dec92_24624964',
  ),
));
?>


<div class="menu vertical-menu js-top-menu position-static hidden-md-down">
    <div id="czverticalmenublock" class="block verticalmenu-block">		
		<h4 class="expand-more title h3 block_title" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="verticalmenu-dropdown">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All Departments','mod'=>'cz_verticalmenu'),$_smarty_tpl ) );?>

			<span class="dropdown-arrow"></span>
		</h4>
		<div class="block_content verticalmenu_block dropdown-menu" aria-labelledby="verticalmenu-dropdown" id="_desktop_top_menu">
			<?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'verticalmenu', array('nodes'=>$_smarty_tpl->tpl_vars['verticalmenu']->value['children']), true);?>

		</div>
	</div>
</div>
<?php }
/* smarty_template_function_verticalmenu_18684318495ee74ace5dec92_24624964 */
if (!function_exists('smarty_template_function_verticalmenu_18684318495ee74ace5dec92_24624964')) {
function smarty_template_function_verticalmenu_18684318495ee74ace5dec92_24624964(Smarty_Internal_Template $_smarty_tpl,$params) {
$params = array_merge(array('nodes'=>array(),'depth'=>0,'parent'=>null), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <?php if (count($_smarty_tpl->tpl_vars['nodes']->value)) {?><ul class="top-menu" <?php if ($_smarty_tpl->tpl_vars['depth']->value == 0) {?>id="top-menu"<?php }?> data-depth="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['depth']->value, ENT_QUOTES, 'UTF-8');?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['nodes']->value, 'node');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['node']->value) {
?><li class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['type'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['node']->value['current']) {?> current<?php }?>" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['page_identifier'], ENT_QUOTES, 'UTF-8');?>
"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="<?php if ($_smarty_tpl->tpl_vars['depth']->value >= 0) {?>dropdown-item<?php }
if ($_smarty_tpl->tpl_vars['depth']->value === 1) {?> dropdown-submenu<?php }?>" data-depth="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['depth']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['node']->value['open_in_new_window']) {?> target="_blank" <?php }?>><?php if (count($_smarty_tpl->tpl_vars['node']->value['children'])) {?>			  <?php $_smarty_tpl->_assignInScope('_expand_id', mt_rand(10,100000));?><span class="pull-xs-right hidden-lg-up"><span data-target="#top_sub_menu_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
" data-toggle="collapse" class="navbar-toggler collapse-icons"><i class="fa-icon add">&nbsp;</i><i class="fa-icon remove">&nbsp;</i></span></span><?php if ($_smarty_tpl->tpl_vars['depth']->value == 0) {?> <span class="pull-xs-right sub-menu-arrow"></span><?php }
}
echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['label'], ENT_QUOTES, 'UTF-8');
if (count($_smarty_tpl->tpl_vars['node']->value['children'])) {?><span class="dropdown-arrow sub-menu-arrow">&nbsp;</span><?php }?></a><?php if (count($_smarty_tpl->tpl_vars['node']->value['children'])) {?>			  <div <?php if ($_smarty_tpl->tpl_vars['depth']->value === 0) {?> class="popover sub-menu js-sub-menu collapse"<?php } else { ?> class="collapse"<?php }?> id="top_sub_menu_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'verticalmenu', array('nodes'=>$_smarty_tpl->tpl_vars['node']->value['children'],'depth'=>$_smarty_tpl->tpl_vars['node']->value['depth']), true);?>
<div class="menu-images-container"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['node']->value['image_urls'], 'image_url');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['image_url']->value) {
?><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_url']->value, ENT_QUOTES, 'UTF-8');?>
"><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div></div><?php }?></li><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul><?php }
}}
/*/ smarty_template_function_verticalmenu_18684318495ee74ace5dec92_24624964 */
}
