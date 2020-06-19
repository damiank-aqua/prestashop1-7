<?php
/* Smarty version 3.1.33, created on 2020-06-15 12:17:50
  from '/home/admin/domains/rainpolska.gevax.pl/public_html/themes/Electon/templates/layouts/layout-both-columns.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ee74ace462ca0_27847805',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7cf6759adac22205928a432655b52bc1cb8a00b1' => 
    array (
      0 => '/home/admin/domains/rainpolska.gevax.pl/public_html/themes/Electon/templates/layouts/layout-both-columns.tpl',
      1 => 1591953612,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/head.tpl' => 1,
    'file:catalog/_partials/product-activation.tpl' => 1,
    'file:_partials/header.tpl' => 1,
    'file:_partials/notifications.tpl' => 1,
    'file:_partials/footer.tpl' => 1,
    'file:_partials/javascript.tpl' => 1,
  ),
),false)) {
function content_5ee74ace462ca0_27847805 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">

	<head>
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8967469625ee74ace449ba7_58802361', 'head');
?>

	</head>

	<body id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page_name'], ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value['body_classes'] )), ENT_QUOTES, 'UTF-8');?>
">
	
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11053551845ee74ace44cc94_66717720', 'hook_after_body_opening_tag');
?>


		<main id="page">
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16759838945ee74ace44e4a6_64087332', 'product_activation');
?>

			
			<header id="header">
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14209598835ee74ace44f833_47673192', 'header');
?>

			</header>
	  		
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15977016185ee74ace450ae3_86993900', 'notifications');
?>

				
			<section id="wrapper">
<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayWrapperTop"),$_smarty_tpl ) );?>
		  
			<div class="container">
				
				<div id="columns_inner">
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7390010315ee74ace4532b2_94384872', "left_column");
?>

	
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1217092175ee74ace457570_37524545', "content_wrapper");
?>

	
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6758016665ee74ace45a595_77869455', "right_column");
?>

				</div>
			</div>
<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayWrapperBottom"),$_smarty_tpl ) );?>

			</section>

			<footer id="footer">
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7689467555ee74ace45e560_31471501', "footer");
?>

			</footer>
		
		</main>

		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2346637025ee74ace45fec4_41947744', 'javascript_bottom');
?>


		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10026217525ee74ace461c07_96627887', 'hook_before_body_closing_tag');
?>

	
	</body>
</html>
<?php }
/* {block 'head'} */
class Block_8967469625ee74ace449ba7_58802361 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_8967469625ee74ace449ba7_58802361',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<?php $_smarty_tpl->_subTemplateRender('file:_partials/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		<?php
}
}
/* {/block 'head'} */
/* {block 'hook_after_body_opening_tag'} */
class Block_11053551845ee74ace44cc94_66717720 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_after_body_opening_tag' => 
  array (
    0 => 'Block_11053551845ee74ace44cc94_66717720',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAfterBodyOpeningTag'),$_smarty_tpl ) );?>

		<?php
}
}
/* {/block 'hook_after_body_opening_tag'} */
/* {block 'product_activation'} */
class Block_16759838945ee74ace44e4a6_64087332 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_activation' => 
  array (
    0 => 'Block_16759838945ee74ace44e4a6_64087332',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-activation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
			<?php
}
}
/* {/block 'product_activation'} */
/* {block 'header'} */
class Block_14209598835ee74ace44f833_47673192 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_14209598835ee74ace44f833_47673192',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<?php $_smarty_tpl->_subTemplateRender('file:_partials/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
				<?php
}
}
/* {/block 'header'} */
/* {block 'notifications'} */
class Block_15977016185ee74ace450ae3_86993900 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications' => 
  array (
    0 => 'Block_15977016185ee74ace450ae3_86993900',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<?php $_smarty_tpl->_subTemplateRender('file:_partials/notifications.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
			<?php
}
}
/* {/block 'notifications'} */
/* {block "left_column"} */
class Block_7390010315ee74ace4532b2_94384872 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left_column' => 
  array (
    0 => 'Block_7390010315ee74ace4532b2_94384872',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<div id="left-column" class="col-xs-12" style="width:17.82%">
							<?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'product') {?>
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayLeftColumnProduct'),$_smarty_tpl ) );?>

							<?php } else { ?>
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayLeftColumn"),$_smarty_tpl ) );?>

							<?php }?>
						</div>
					<?php
}
}
/* {/block "left_column"} */
/* {block "content"} */
class Block_19060504865ee74ace458827_12672163 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

								<p>Hello world! This is HTML5 Boilerplate.</p>
							<?php
}
}
/* {/block "content"} */
/* {block "content_wrapper"} */
class Block_1217092175ee74ace457570_37524545 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
    0 => 'Block_1217092175ee74ace457570_37524545',
  ),
  'content' => 
  array (
    0 => 'Block_19060504865ee74ace458827_12672163',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<div id="content-wrapper" class="left-column right-column">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperTop"),$_smarty_tpl ) );?>

							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19060504865ee74ace458827_12672163', "content", $this->tplIndex);
?>

				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperBottom"),$_smarty_tpl ) );?>

						</div>
					<?php
}
}
/* {/block "content_wrapper"} */
/* {block "right_column"} */
class Block_6758016665ee74ace45a595_77869455 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_column' => 
  array (
    0 => 'Block_6758016665ee74ace45a595_77869455',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<div id="right-column" class="col-xs-12"  style="width:17.82%">
							<?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'product') {?>
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayRightColumnProduct'),$_smarty_tpl ) );?>

							<?php } else { ?>
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayRightColumn"),$_smarty_tpl ) );?>

							<?php }?>
						</div>
					<?php
}
}
/* {/block "right_column"} */
/* {block "footer"} */
class Block_7689467555ee74ace45e560_31471501 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_7689467555ee74ace45e560_31471501',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<?php $_smarty_tpl->_subTemplateRender("file:_partials/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
				<?php
}
}
/* {/block "footer"} */
/* {block 'javascript_bottom'} */
class Block_2346637025ee74ace45fec4_41947744 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript_bottom' => 
  array (
    0 => 'Block_2346637025ee74ace45fec4_41947744',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<?php $_smarty_tpl->_subTemplateRender("file:_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['bottom']), 0, false);
?>
		<?php
}
}
/* {/block 'javascript_bottom'} */
/* {block 'hook_before_body_closing_tag'} */
class Block_10026217525ee74ace461c07_96627887 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_before_body_closing_tag' => 
  array (
    0 => 'Block_10026217525ee74ace461c07_96627887',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBeforeBodyClosingTag'),$_smarty_tpl ) );?>

		<?php
}
}
/* {/block 'hook_before_body_closing_tag'} */
}
