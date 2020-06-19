<?php
/* Smarty version 3.1.33, created on 2020-06-15 12:17:50
  from 'module:pssocialfollowpssocialfol' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ee74ace800255_56838041',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '80ac9ddb06fe7b43ffdd2f5cd1185536480d2577' => 
    array (
      0 => 'module:pssocialfollowpssocialfol',
      1 => 1591953612,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee74ace800255_56838041 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '12584254085ee74ace7fc8f1_45703515';
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11019126845ee74ace7fd550_25353924', 'block_social');
?>

<?php }
/* {block 'block_social'} */
class Block_11019126845ee74ace7fd550_25353924 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'block_social' => 
  array (
    0 => 'Block_11019126845ee74ace7fd550_25353924',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="block-social">
  	<h3 class="block-social-title title"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Follow Us','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span></h3>
    <ul>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['social_links']->value, 'social_link');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['social_link']->value) {
?>
        <li class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['social_link']->value['class'], ENT_QUOTES, 'UTF-8');?>
"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['social_link']->value['url'], ENT_QUOTES, 'UTF-8');?>
" target="_blank"><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['social_link']->value['label'], ENT_QUOTES, 'UTF-8');?>
</span></a></li>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
  </div>
<?php
}
}
/* {/block 'block_social'} */
}
