<?php
/* Smarty version 3.1.33, created on 2020-06-15 12:17:50
  from '/home/admin/domains/rainpolska.gevax.pl/public_html/themes/Electon/templates/_partials/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ee74ace695772_37945269',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cfe7dbc53ee078e63a5fe99153b061303740af47' => 
    array (
      0 => '/home/admin/domains/rainpolska.gevax.pl/public_html/themes/Electon/templates/_partials/footer.tpl',
      1 => 1591953612,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee74ace695772_37945269 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="footer-before">
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11219695005ee74ace68e0c1_00706086', 'hook_footer_before');
?>

</div>
<div class="footer-container">
  <div class="container">
    <div class="row footer">
      	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2368223785ee74ace68ed57_40773257', 'hook_footer');
?>

    </div>      
    </div>
  </div>

<div class="footer-after">
  <div class="container">
	
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14282262325ee74ace68f771_03626368', 'hook_footer_after');
?>

    
  </div>

	<div class="copyright">
	<div class="container">
		  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16902053575ee74ace690423_03381381', 'copyright_link');
?>

		</div>
	</div>
</div>

<a class="top_button" href="#" style="">&nbsp;</a>
<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCzCookie'),$_smarty_tpl ) );
}
/* {block 'hook_footer_before'} */
class Block_11219695005ee74ace68e0c1_00706086 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_before' => 
  array (
    0 => 'Block_11219695005ee74ace68e0c1_00706086',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterBefore'),$_smarty_tpl ) );?>

		<?php
}
}
/* {/block 'hook_footer_before'} */
/* {block 'hook_footer'} */
class Block_2368223785ee74ace68ed57_40773257 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer' => 
  array (
    0 => 'Block_2368223785ee74ace68ed57_40773257',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	  		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooter'),$_smarty_tpl ) );?>

		<?php
}
}
/* {/block 'hook_footer'} */
/* {block 'hook_footer_after'} */
class Block_14282262325ee74ace68f771_03626368 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_after' => 
  array (
    0 => 'Block_14282262325ee74ace68f771_03626368',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterAfter'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'hook_footer_after'} */
/* {block 'copyright_link'} */
class Block_16902053575ee74ace690423_03381381 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'copyright_link' => 
  array (
    0 => 'Block_16902053575ee74ace690423_03381381',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			  <a class="_blank" href="http://www.prestashop.com" target="_blank">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%copyright% %year% - Ecommerce software by %prestashop%','sprintf'=>array('%prestashop%'=>'PrestaShop™','%year%'=>date('Y'),'%copyright%'=>'©'),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

			  </a>
		  <?php
}
}
/* {/block 'copyright_link'} */
}
