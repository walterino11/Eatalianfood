{*
* 2007-2011 PrestaShop 
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
*  @copyright  2007-2011 PrestaShop SA
*  @version  Release: $Revision: 6594 $
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

<!-- MODULE Home Featured Products -->
<div id="featured-products_block_center" class="block products_block">
	<h4>{l s='Featured products' mod='homefeatured'}</h4>
	{if isset($products) AND $products}
		<div class="block_content">
			{assign var='liHeight' value=342}
			{assign var='nbItemsPerLine' value=3}
			{assign var='nbLi' value=$products|@count}
			{math equation="nbLi/nbItemsPerLine" nbLi=$nbLi nbItemsPerLine=$nbItemsPerLine assign=nbLines}
			{math equation="nbLines*liHeight" nbLines=$nbLines|ceil liHeight=$liHeight assign=ulHeight}
			<ul style="height:{$ulHeight}px;">
			{foreach from=$products item=product name=homeFeaturedProducts}
				<li class="ajax_block_product {if $smarty.foreach.homeFeaturedProducts.first}first_item{elseif $smarty.foreach.homeFeaturedProducts.last}last_item{else}item{/if} {if $smarty.foreach.homeFeaturedProducts.iteration%$nbItemsPerLine == 0}last_item_of_line{elseif $smarty.foreach.homeFeaturedProducts.iteration%$nbItemsPerLine == 1}clear{/if} {if $smarty.foreach.homeFeaturedProducts.iteration > ($smarty.foreach.homeFeaturedProducts.total - ($smarty.foreach.homeFeaturedProducts.total % $nbItemsPerLine))}last_line{/if}">
					<a href="{$product.link}" title="{$product.name|escape:html:'UTF-8'}" class="product_image"><img src="{$link->getImageLink($product.link_rewrite, $product.id_image, 'home')}" height="{$homeSize.height}" width="{$homeSize.width}" alt="{$product.name|escape:html:'UTF-8'}" /></a>
					<h5><a href="{$product.link}" title="{$product.name|truncate:32:'...'|escape:'htmlall':'UTF-8'}">{$product.name|truncate:27:'...'|escape:'htmlall':'UTF-8'}</a></h5>
					<div class="product_desc"><a href="{$product.link}" title="{l s='More' mod='homefeatured'}">{$product.description_short|strip_tags|truncate:130:'...'}</a></div>
					
					<div class="line_last">
						{if $product.show_price AND !isset($restricted_country_mode) AND !$PS_CATALOG_MODE}<p class="price_container"><span class="price">{if !$priceDisplay}{convertPrice price=$product.price}{else}{convertPrice price=$product.price_tax_exc}{/if}</span></p>{else}<div style="height:21px;"></div>{/if}
						
						{if ($product.id_product_attribute == 0 OR (isset($add_prod_display) AND ($add_prod_display == 1))) AND $product.available_for_order AND !isset($restricted_country_mode) AND $product.minimal_quantity == 1 AND $product.customizable != 2 AND !$PS_CATALOG_MODE}
							{if ($product.quantity > 0 OR $product.allow_oosp)}
							<a class="btn_cart ajax_add_to_cart_button" rel="ajax_id_product_{$product.id_product}" href="{$link->getPageLink('cart.php')}?qty=1&amp;id_product={$product.id_product}&amp;token={$static_token}&amp;add" title="{l s='Add to cart' mod='homefeatured'}">{l s='Add to cart' mod='homefeatured'}</a>
							{else}
							<span class="exclusive">{l s='Add to cart' mod='homefeatured'}</span>
							{/if}
						{else}
							<div style="height:23px;"></div>
						{/if}
						<a class="btn_more" href="{$product.link}" title="{l s='View' mod='homefeatured'}">{l s='View' mod='homefeatured'}</a>
						<div class="clear_both"><span>&nbsp;</span></div>
					</div>
				</li>
			{/foreach}
			</ul>
			<div class="clear_both"><span>&nbsp;</span></div>
		</div>
	{else}
		<p>{l s='No featured products' mod='homefeatured'}</p>
	{/if}
</div>
<!-- /MODULE Home Featured Products -->
