<?php
/* Smarty version 3.1.33, created on 2020-06-15 12:18:49
  from '/home/admin/domains/rainpolska.gevax.pl/public_html/themes/Electon/templates/catalog/listing/category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ee74b091230b2_22565821',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a4d696de9865adbee438065192500272bc627f5' => 
    array (
      0 => '/home/admin/domains/rainpolska.gevax.pl/public_html/themes/Electon/templates/catalog/listing/category.tpl',
      1 => 1591953613,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee74b091230b2_22565821 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20013866365ee74b091160a3_31574070', 'product_list_header');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'catalog/listing/product-list.tpl');
}
/* {block 'product_list_header'} */
class Block_20013866365ee74b091160a3_31574070 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_list_header' => 
  array (
    0 => 'Block_20013866365ee74b091160a3_31574070',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	
<input id="getCartLink" name="getCartLink" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['cart'], ENT_QUOTES, 'UTF-8');?>
" type="hidden">
<input id="getTokenId" name="getTokenId" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['static_token']->value, ENT_QUOTES, 'UTF-8');?>
" type="hidden">

<div class="block-category card card-block ">
		<?php if ($_smarty_tpl->tpl_vars['category']->value['image']['large']['url']) {?>
			<div class="category-cover">
				<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['image']['large']['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php if (!empty($_smarty_tpl->tpl_vars['category']->value['image']['legend'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['image']['legend'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8');
}?>">
			</div>
		<?php }?>
		<h1 class="h1"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8');?>
</h1>
		<?php if ($_smarty_tpl->tpl_vars['category']->value['description']) {?>
			<div id="category-description"><?php echo $_smarty_tpl->tpl_vars['category']->value['description'];?>
</div>
		<?php }?>
	</div>
	
    <?php if ($_smarty_tpl->tpl_vars['subcategories']->value) {?>
		<div id="subcategories">
			<p class="subcategory-heading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Subcategories'),$_smarty_tpl ) );?>
</p>
			<ul class="clearfix">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['subcategories']->value, 'subcategory');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['subcategory']->value) {
?>
					<li>
						<div class="subcategory-image">
							<a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_smarty_tpl->tpl_vars['subcategory']->value['id_category'],$_smarty_tpl->tpl_vars['subcategory']->value['link_rewrite']),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['subcategory']->value['name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="img">
								<?php if ($_smarty_tpl->tpl_vars['subcategory']->value['id_image']) {?>
									<img class="replace-2x" src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getCatImageLink($_smarty_tpl->tpl_vars['subcategory']->value['link_rewrite'],$_smarty_tpl->tpl_vars['subcategory']->value['id_image'],'category_thumb_default'),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['subcategory']->value['name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"/>
								<?php } else { ?>
									<img class="replace-2x" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['img_cat_dir']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['lang_iso']->value, ENT_QUOTES, 'UTF-8');?>
-default-category_default.jpg" alt="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['subcategory']->value['name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"/>
								<?php }?>
							</a>
						</div>
						<h5><a class="subcategory-name" href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_smarty_tpl->tpl_vars['subcategory']->value['id_category'],$_smarty_tpl->tpl_vars['subcategory']->value['link_rewrite']),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['subcategory']->value['name'],25,'...' )),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</a></h5>
											</li>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</ul>
		</div>
	<?php }
}
}
/* {/block 'product_list_header'} */
}
