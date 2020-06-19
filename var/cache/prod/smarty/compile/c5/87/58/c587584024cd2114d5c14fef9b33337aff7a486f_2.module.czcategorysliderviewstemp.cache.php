<?php
/* Smarty version 3.1.33, created on 2020-06-15 12:17:50
  from 'module:czcategorysliderviewstemp' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ee74ace269359_49499714',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c587584024cd2114d5c14fef9b33337aff7a486f' => 
    array (
      0 => 'module:czcategorysliderviewstemp',
      1 => 1591953611,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/product.tpl' => 1,
  ),
),false)) {
function content_5ee74ace269359_49499714 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '21070661385ee74ace2100c2_06861484';
?>

<div id="czcategorytabs" class="tabs products_block clearfix"> 
	<div class="container">
		<h2 class="h1 products-section-title text-uppercase"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Popular Products','mod'=>'cz_categoryslider'),$_smarty_tpl ) );?>
</h2>
		<div class="czcategory-tab">
			<ul id="czcategory-tabs" class="nav nav-tabs clearfix">
				<?php $_smarty_tpl->_assignInScope('count', 0);?>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['czcategorysliderinfos']->value, 'czcategorysliderinfo');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['czcategorysliderinfo']->value) {
?>
					<li class="nav-item">
						<a href="#tab_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['czcategorysliderinfo']->value['id'], ENT_QUOTES, 'UTF-8');?>
" data-toggle="tab" class="nav-link <?php if ($_smarty_tpl->tpl_vars['count']->value == 0) {?>active<?php }?>">
						<span class="category-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['czcategorysliderinfo']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span>
						</a>
					</li>
					<?php $_smarty_tpl->_assignInScope('count', $_smarty_tpl->tpl_vars['count']->value+1);?>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</ul>
		</div> 
		
		<div class="tab-content">
			<?php $_smarty_tpl->_assignInScope('tabcount', 0);?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['czcategorysliderinfos']->value, 'czcategorysliderinfo');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['czcategorysliderinfo']->value) {
?>
				<div id="tab_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['czcategorysliderinfo']->value['id'], ENT_QUOTES, 'UTF-8');?>
" class="tab-pane <?php if ($_smarty_tpl->tpl_vars['tabcount']->value == 0) {?>active<?php }?>">
					<?php if (isset($_smarty_tpl->tpl_vars['czcategorysliderinfo']->value['product']) && $_smarty_tpl->tpl_vars['czcategorysliderinfo']->value['product']) {?>
						<?php $_smarty_tpl->_assignInScope('sliderFor', 6);?>
						<?php $_smarty_tpl->_assignInScope('productCount', count($_smarty_tpl->tpl_vars['czcategorysliderinfo']->value['product']));?>
					
						<div class="products row">
							<?php if ($_smarty_tpl->tpl_vars['slider']->value == 1 && $_smarty_tpl->tpl_vars['productCount']->value >= $_smarty_tpl->tpl_vars['sliderFor']->value) {?>
								<ul id="czcategory<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['czcategorysliderinfo']->value['id'], ENT_QUOTES, 'UTF-8');?>
-carousel" class="cz-carousel product_list product_slider_grid" data-catid="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['czcategorysliderinfo']->value['id'], ENT_QUOTES, 'UTF-8');?>
">
							<?php } else { ?>
								<ul id="czcategory<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['czcategorysliderinfo']->value['id'], ENT_QUOTES, 'UTF-8');?>
" class="product_list grid row gridcount product_slider_grid" data-catid="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['czcategorysliderinfo']->value['id'], ENT_QUOTES, 'UTF-8');?>
">
							<?php }?>
							
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['czcategorysliderinfo']->value['product'], 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
									<li class="<?php if ($_smarty_tpl->tpl_vars['slider']->value == 1 && $_smarty_tpl->tpl_vars['productCount']->value >= $_smarty_tpl->tpl_vars['sliderFor']->value) {?>item<?php } else { ?>product_item col-xs-12 col-sm-6 col-md-4 col-lg-3<?php }?>">
									<?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
									</li>
								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</ul>
							
							<?php if ($_smarty_tpl->tpl_vars['slider']->value == 1 && $_smarty_tpl->tpl_vars['productCount']->value >= $_smarty_tpl->tpl_vars['sliderFor']->value) {?>
								<div class="customNavigation">
									<a class="btn prev czcategory_prev">&nbsp;</a>
									<a class="btn next czcategory_next">&nbsp;</a>
								</div>
							<?php }?>
							
							<?php if ($_smarty_tpl->tpl_vars['slider']->value == 0 && $_smarty_tpl->tpl_vars['productCount']->value >= $_smarty_tpl->tpl_vars['sliderFor']->value) {?>
								<div class="view_more">
									<a class="all-product-link" href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_smarty_tpl->tpl_vars['czcategorysliderinfo']->value['id']),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
										<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View All Products','mod'=>'cz_categoryslider'),$_smarty_tpl ) );?>

									</a>
								</div>
							<?php }?>
											
						</div>
					<?php } else { ?>
						<div class="alert alert-info"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No Products in current category at this time.','mod'=>'cz_categoryslider'),$_smarty_tpl ) );?>
</div>
					<?php }?>	
			</div> 
			<?php $_smarty_tpl->_assignInScope('tabcount', $_smarty_tpl->tpl_vars['tabcount']->value+1);?>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</div>
	</div> 
</div><?php }
}
