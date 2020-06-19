<?php
/* Smarty version 3.1.33, created on 2020-06-15 12:17:50
  from 'module:czblocklinkviewstemplates' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ee74ace828629_18249171',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f0beff05d94fbd118054211fa781a4f8bf91ced2' => 
    array (
      0 => 'module:czblocklinkviewstemplates',
      1 => 1591953611,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee74ace828629_18249171 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '19098299615ee74ace823139_62594847';
?>

<!-- Block links module -->
<div id="links_block_left" class="col-md-4 links block">
		<h3 class="h3 title_block hidden-md-down">
		<?php if ($_smarty_tpl->tpl_vars['url']->value) {?>
			<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['url']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
</a>
		<?php } else { ?>
			<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>

		<?php }?>
	</h3>
	
	<div class="title h3 block_title hidden-lg-up" data-target="#cz_blocklink" data-toggle="collapse">
		<span class="main-title">
			<?php if ($_smarty_tpl->tpl_vars['url']->value) {?>
				<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['url']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
</a>
			<?php } else { ?>
				<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>

			<?php }?>
		</span>
		<span class="pull-xs-right">
		  <span class="navbar-toggler collapse-icons">
			<i class="fa-icon add"></i>
			<i class="fa-icon remove"></i>
		  </span>
		</span>
	</div>
	
		
	<ul class="blocklink collapse" id="cz_blocklink" class="block_content">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cz_blocklink_links']->value, 'cz_blocklink_link');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cz_blocklink_link']->value) {
?>
		<?php if (isset($_smarty_tpl->tpl_vars['cz_blocklink_link']->value[$_smarty_tpl->tpl_vars['lang']->value])) {?> 
			<li>
				<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cz_blocklink_link']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cz_blocklink_link']->value[$_smarty_tpl->tpl_vars['lang']->value], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['cz_blocklink_link']->value['newWindow']) {?> onclick="window.open(this.href);return false;"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cz_blocklink_link']->value[$_smarty_tpl->tpl_vars['lang']->value], ENT_QUOTES, 'UTF-8');?>
</a></li>
		<?php }?>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ul>
</div>
<!-- /Block links module -->
<?php }
}
