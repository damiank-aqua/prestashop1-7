<?php
/* Smarty version 3.1.33, created on 2020-06-15 12:17:50
  from '/home/admin/domains/rainpolska.gevax.pl/public_html/themes/Electon/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ee74ace3cfc00_28617959',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'daadf282251c27163c5499af559506a06ae355f7' => 
    array (
      0 => '/home/admin/domains/rainpolska.gevax.pl/public_html/themes/Electon/templates/index.tpl',
      1 => 1591953612,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee74ace3cfc00_28617959 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4820088225ee74ace3c3c59_80337648', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_13496338905ee74ace3c5020_56488159 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_13185590635ee74ace3ccde0_26591292 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

			<?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_996767045ee74ace3cc1a9_24470570 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		  	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13185590635ee74ace3ccde0_26591292', 'hook_home', $this->tplIndex);
?>

		<?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_4820088225ee74ace3c3c59_80337648 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_4820088225ee74ace3c3c59_80337648',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_13496338905ee74ace3c5020_56488159',
  ),
  'page_content' => 
  array (
    0 => 'Block_996767045ee74ace3cc1a9_24470570',
  ),
  'hook_home' => 
  array (
    0 => 'Block_13185590635ee74ace3ccde0_26591292',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<section id="content" class="page-home">
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13496338905ee74ace3c5020_56488159', 'page_content_top', $this->tplIndex);
?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayTopColumn'),$_smarty_tpl ) );?>

		
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayHomeTop'),$_smarty_tpl ) );?>

	
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_996767045ee74ace3cc1a9_24470570', 'page_content', $this->tplIndex);
?>

		
	</div>
</section>
<?php
}
}
/* {/block 'page_content_container'} */
}
