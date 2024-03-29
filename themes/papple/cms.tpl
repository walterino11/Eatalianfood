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
{if isset($cms) && $cms->id != $cgv_id}
	{include file="$tpl_dir./breadcrumb.tpl"}
{/if}
<div class="pl_category">
{if isset($cms) && !isset($category)}
	<div class="pl_ct">
		{if !$cms->active}
			<br />
			<div id="admin-action-cms">
				<p>{l s='This CMS page is not visible to your customers.'}
				<input type="hidden" id="admin-action-cms-id" value="{$cms->id}" />
				<input type="submit" value="{l s='Publish'}" class="exclusive" onclick="submitPublishCMS('{$base_dir}{$smarty.get.ad}', 0)"/>			
				<input type="submit" value="{l s='Back'}" class="exclusive" onclick="submitPublishCMS('{$base_dir}{$smarty.get.ad}', 1)"/>			
				</p>
				<div class="clear" ></div>
				<p id="admin-action-result"></p>
				</p>
			</div>
		{/if}
		<div class="rte{if $content_only} content_only{/if}">
			{$cms->content}
		</div>
	</div>
{elseif isset($category)}
	<div>
		<h1>{$category->name|escape:'htmlall':'UTF-8'}</h1>
		<div class="pl_ct">
			{if isset($sub_category) & !empty($sub_category)}	
				<h4>{l s='List of sub categories in '}{$category->name}{l s=':'}</h4>
				<ul class="bullet">
					{foreach from=$sub_category item=subcategory}
						<li>
							<a href="{$link->getCMSCategoryLink($subcategory.id_cms_category, $subcategory.link_rewrite)|escape:'htmlall':'UTF-8'}">{$subcategory.name|escape:'htmlall':'UTF-8'}</a>
						</li>
					{/foreach}
				</ul>
			{/if}
			{if isset($cms_pages) & !empty($cms_pages)}
			<h4>{l s='List of pages in '}{$category->name}{l s=':'}</h4>
				<ul class="bullet">
					{foreach from=$cms_pages item=cmspages}
						<li>
							<a href="{$link->getCMSLink($cmspages.id_cms, $cmspages.link_rewrite)|escape:'htmlall':'UTF-8'}">{$cmspages.meta_title|escape:'htmlall':'UTF-8'}</a>
						</li>
					{/foreach}
				</ul>
			{/if}
		</div>
	</div>
{else}
	<div class="pl_ct">
		{l s='This page does not exist.'}
	</div>
{/if}
</div>
<br />