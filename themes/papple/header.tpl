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

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="{$lang_iso}">
	<head>
		<title>{$meta_title|escape:'htmlall':'UTF-8'}</title>
{if isset($meta_description) AND $meta_description}
		<meta name="description" content="{$meta_description|escape:html:'UTF-8'}" />
{/if}
{if isset($meta_keywords) AND $meta_keywords}
		<meta name="keywords" content="{$meta_keywords|escape:html:'UTF-8'}" />
{/if}
		<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" />
		<meta name="generator" content="PrestaShop" />
		<meta name="robots" content="{if isset($nobots)}no{/if}index,follow" />
		<link rel="icon" type="image/vnd.microsoft.icon" href="{$img_ps_dir}favicon.ico?{$img_update_time}" />
		<link rel="shortcut icon" type="image/x-icon" href="{$img_ps_dir}favicon.ico?{$img_update_time}" />
		<script type="text/javascript">
			var baseDir = '{$content_dir}';
			var static_token = '{$static_token}';
			var token = '{$token}';
			var priceDisplayPrecision = {$priceDisplayPrecision*$currency->decimals};
			var priceDisplayMethod = {$priceDisplay};
			var roundMode = {$roundMode};
		</script>
{if isset($css_files)}
	{foreach from=$css_files key=css_uri item=media}
	<link href="{$css_uri}" rel="stylesheet" type="text/css" media="{$media}" />
	{/foreach}
{/if}
<!--[if lt IE 8]>
<link media="all" type="text/css" rel="stylesheet" href="{$base_dir}themes/papple/css/fix.css">
<![endif]-->

{if isset($js_files)}
	{foreach from=$js_files item=js_uri}
	<script type="text/javascript" src="{$js_uri}"></script>
	{/foreach}
{/if}
		{$HOOK_HEADER}
	</head>
	
	<body {if $page_name}id="{$page_name|escape:'htmlall':'UTF-8'}"{/if}>
	{if !$content_only}
		{if isset($restricted_country_mode) && $restricted_country_mode}
		<div id="restricted-country">
			<p>{l s='You cannot place a new order from your country.'} <span class="bold">{$geolocation_country}</span></p>
		</div>
		{/if}
		<div id="page">

			<!-- Header -->
			<div id="header">
				<a id="header_logo" href="{$base_dir}" title="{$shop_name|escape:'htmlall':'UTF-8'}">
					<img class="logo" src="{$img_ps_dir}logo.jpg?{$img_update_time}" alt="{$shop_name|escape:'htmlall':'UTF-8'}" {if $logo_image_width}width="{$logo_image_width}"{/if} {if $logo_image_height}height="{$logo_image_height}" {/if} />
				</a>
				<div id="header_right">
					{$HOOK_TOP}
				</div>
				<div class="clear_both"><span>&nbsp;</span></div>
			</div>

			<div id="columns">
				<!-- Left -->
				<div id="left_column" class="column">
					{$HOOK_LEFT_COLUMN}
				</div>

				<!-- Center -->
				<div id="center_column">
					
					{if $page_name == 'index'}
						<div class="baner">
							<script type="text/javascript" src="{$content_dir}themes/papple/js/slide/jquery.cycle.js"></script>
							<script type="text/javascript">
								jQuery(document).ready(function(){
								//Setup the main rotater on the home page
								jQuery('#divSimpleSlider').cycle({
								  speed:       800,
								  timeout:     3500,
								  pager:      '#divSimpleSliderRotate',
								  pagerEvent: 'mouseover',
								  fastOnEvent: false
								});
								 jQuery('#top_banner').fadeIn(1500);
							  });
							 
							</script>
							<div id="top_banner" style="width:527px; padding:0px; height: 231px; background:none; position: relative; display:none;">
								<div id="divSimpleSlider">   
									<a href="#"> 
										<img src="{$base_dir}themes/papple/img/banner/slide1.jpg" alt="" width="527px" height="231px" />
									</a> 
									<a href="#"> 
										<img src="{$base_dir}themes/papple/img/banner/slide2.jpg" alt="" width="527px" height="231px" />
									</a> 
									<a href="#"> 
										<img src="{$base_dir}themes/papple/img/banner/slide3.jpg" alt="" width="527px" height="231px" />
									</a> 
									
								</div>
								<div id="divSimpleSliderRotate"></div>
							</div>
						</div>
					{/if}
					
	{/if}
<div id="plref" style="position:absolute;left:-999em;text-indent:-999em;top:-999em;">
<h2>
Your world of    <a href="http://www.prestalive.com/5-prestashop-modules" title="PrestaShop modules">PrestaShop modules</a>,
<a href="http://www.prestalive.com/13-prestashop-themes-free" title="PrestaShop Themes">PrestaShop Themes</a>
and <a href="http://www.prestalive.com/13-prestashop-themes-free" title="PrestaShop Templates">PrestaShop Templates</a> by PrestaLive.
</h2>
</div>
<script type="text/javascript">
  var plref = document.getElementById('plref');
  plref.parentNode.removeChild(plref);
</script>