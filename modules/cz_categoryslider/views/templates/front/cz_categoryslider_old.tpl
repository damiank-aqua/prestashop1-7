{*
* 2007-2016 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author    PrestaShop SA <contact@prestashop.com>
*  @copyright 2007-2016 PrestaShop SA
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

<div id="czcategorytabs" class="tabs products_block clearfix">
	<div class="container">
		<div class="categorytab block">
		
		<div class="tab-content">
			{foreach from=$czcategorysliderinfos item=czcategorysliderinfo}
				<div id="tab_{$czcategorysliderinfo.id}" class="tab-item">
					{if isset($czcategorysliderinfo.product) && $czcategorysliderinfo.product}
						{assign var='sliderFor' value=5}
						{assign var='productCount' value=count($czcategorysliderinfo.product)}
						
						<h2 class="h1 products-section-title text-uppercase">{$czcategorysliderinfo.name}</h2>
							
						<div class="products row"> 
							{if $slider == 1 && $productCount >= $sliderFor}
								<ul id="czcategory{$czcategorysliderinfo.id}-carousel" class="cz-carousel product_list product_slider_grid" data-catid="{$czcategorysliderinfo.id}">
							{else}
								<ul id="czcategory{$czcategorysliderinfo.id}" class="product_list grid row gridcount product_slider_grid" data-catid="{$czcategorysliderinfo.id}">
							{/if}

								{foreach from=$czcategorysliderinfo.product item='product'}

									<li class="{if $slider == 1 && $productCount >= $sliderFor}item{else}product_item col-xs-12 col-sm-6 col-md-4 col-lg-3{/if}">
									{include file="catalog/_partials/miniatures/product.tpl" product=$product}
									</li>
								{/foreach}
							</ul>
							
							{if $slider == 1 && $productCount >= $sliderFor}
								<div class="customNavigation">
									<a class="btn prev czcategory_prev">&nbsp;</a>
									<a class="btn next czcategory_next">&nbsp;</a>
								</div>
							{/if}
							
							{if $slider == 0 && $productCount >= $sliderFor}
								<div class="view_more">
									<a class="all-product-link" href="{$link->getCategoryLink($czcategorysliderinfo.id, $czcategorysliderinfo.link_rewrite)|escape:'html':'UTF-8'}">
										{l s='View All Products' mod='cz_categoryslider'}
									</a>
								</div>
							{/if}
											
						</div>
					{else}
						<div class="alert alert-info">{l s='No Products in current category at this time.' mod='cz_categoryslider'}</div>
					{/if}	
			</div> 
			 
			{/foreach}
		</div>
	</div> 
</div>
</div>