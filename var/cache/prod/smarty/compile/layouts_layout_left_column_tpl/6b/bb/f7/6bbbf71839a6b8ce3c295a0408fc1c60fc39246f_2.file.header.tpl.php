<?php
/* Smarty version 3.1.33, created on 2020-06-15 12:47:48
  from '/home/admin/domains/rainpolska.gevax.pl/public_html/themes/Electon/templates/_partials/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ee751d4aa9a79_90037930',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6bbbf71839a6b8ce3c295a0408fc1c60fc39246f' => 
    array (
      0 => '/home/admin/domains/rainpolska.gevax.pl/public_html/themes/Electon/templates/_partials/header.tpl',
      1 => 1592218066,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee751d4aa9a79_90037930 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4872238805ee751d4a98813_24062980', 'header_banner');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19223281085ee751d4aa18f6_82980293', 'header_nav');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6965096635ee751d4aa2a48_07657685', 'header_top');
}
/* {block 'header_banner'} */
class Block_4872238805ee751d4a98813_24062980 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_banner' => 
  array (
    0 => 'Block_4872238805ee751d4a98813_24062980',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="header-banner">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBanner'),$_smarty_tpl ) );?>

  </div>
<?php
}
}
/* {/block 'header_banner'} */
/* {block 'header_nav'} */
class Block_19223281085ee751d4aa18f6_82980293 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_nav' => 
  array (
    0 => 'Block_19223281085ee751d4aa18f6_82980293',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<nav class="header-nav">
	<div class="container">
        
					<div class="left-nav">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav1'),$_smarty_tpl ) );?>

			</div>
			
			<div class="right-nav">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav2'),$_smarty_tpl ) );?>

			</div>
				
		        
	</div>
</nav>
<?php
}
}
/* {/block 'header_nav'} */
/* {block 'header_top'} */
class Block_6965096635ee751d4aa2a48_07657685 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_top' => 
  array (
    0 => 'Block_6965096635ee751d4aa2a48_07657685',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="header-top">
		<div class="header-inner-top">
			<div class="container">
				<div class="header-inner-content">
					<div class="header_logo">
						<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
">
						<img class="logo img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
						</a>
					</div>
					<div class="header-right">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayTop'),$_smarty_tpl ) );?>
	
					</div>
				</div>				
			</div>
		</div>
		<div class="header-top-inner">
			<div class="container">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNavFullWidth'),$_smarty_tpl ) );?>

			</div>
		</div>
	</div>	
<?php
}
}
/* {/block 'header_top'} */
}
