{**
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
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2016 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
{if $cztestimonialcmsblockinfos.text}
{if $page.page_name == 'index'}
<div id="cztestimonialcmsblock" class="block testimonial-block">
	<h4 class="block_title hidden-md-down">{l s="What's People says" mod='cz_testimonialcmsblock'}</h4>
	<h4 class="block_title hidden-lg-up" data-target="#testimonial_toggle" data-toggle="collapse">
		{l s='Whats People says' mod='cz_testimonialcmsblock'}
		<span class="pull-xs-right">
		  <span class="navbar-toggler collapse-icons">
			<i class="fa-icon add"></i>
			<i class="fa-icon remove"></i>
		  </span>
		</span>
	</h4>
	<div id="testimonial_toggle" class="block_content collapse">
		{$cztestimonialcmsblockinfos.text nofilter}
	</div>
</div>
{/if}
{/if}