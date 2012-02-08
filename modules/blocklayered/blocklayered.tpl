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
*  @version  Release: $Revision: 9944 $
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registred Trademark & Property of PrestaShop SA
*}

<!-- Block layered navigation module -->
{if $nbr_filterBlocks != 0}
<script type="text/javascript">
current_friendly_url = '#{$current_friendly_url}';
</script>
<div id="layered_block_left" class="block">
	<h4>{l s='Catalog' mod='blocklayered'}</h4>
	<div class="block_content">
		<form action="#" id="layered_form">
			<div>
				{if isset($selected_filters) && $n_filters > 0}
				<div id="enabled_filters">
					<span class="layered_subtitle" style="float: none;">{l s='Enabled filters:' mod='blocklayered'}</span>
					<ul>
					{foreach from=$selected_filters key=filter_type item=filter_values}
						{foreach from=$filter_values key=filter_key item=filter_value name=f_values}
							{foreach from=$filters item=filter}
								{if $filter.type == $filter_type && isset($filter.values)}
									{if isset($filter.slider) && $smarty.foreach.f_values.first}
										<li>
											<a href="#" rel="layered_{$filter.type}_slider" title="{l s='Cancel' mod='blocklayered'}">x</a>
											{$filter.name|escape:html:'UTF-8'}{l s=':'} 
											{$filter.values[0]|escape:html:'UTF-8'}{$filter.unit|escape:html:'UTF-8'} - 
											{$filter.values[1]|escape:html:'UTF-8'}{$filter.unit|escape:html:'UTF-8'}
										</li>
									{else}
										{foreach from=$filter.values key=id_value item=value}
											{if $id_value == $filter_key && !is_numeric($filter_value) && ($filter.type eq 'id_attribute_group' || $filter.type eq 'id_feature') || $id_value == $filter_value && $filter.type neq 'id_attribute_group' && $filter.type neq 'id_feature'}
												<li>
													<a href="#" rel="layered_{$filter.type_lite}_{$id_value}" title="{l s='Cancel' mod='blocklayered'}">x</a>
													{$filter.name|escape:html:'UTF-8'}{l s=':'} {$value.name|escape:html:'UTF-8'}
												</li>
											{/if}
										{/foreach}
									{/if}
								{/if}
							{/foreach}
						{/foreach}
					{/foreach}
					</ul>
				</div>
				{/if}
				{foreach from=$filters item=filter}
					{if isset($filter.values)}
						{if isset($filter.slider)}
						<div class="layered_{$filter.type}" style="display: none;">
						{else}
						<div>
						{/if}
						<span class="layered_subtitle">{$filter.name|escape:html:'UTF-8'}</span>
						<span class="layered_close"><a href="#" rel="ul_layered_{$filter.type}_{$filter.id_key}">v</a></span>
						<div class="clear"></div>
						<ul id="ul_layered_{$filter.type}_{$filter.id_key}">
						{if !isset($filter.slider)}
							{foreach from=$filter.values key=id_value item=value}
								<li class="nomargin">
								{if isset($filter.is_color_group) && $filter.is_color_group}
									<input type="button" name="layered_{$filter.type_lite}_{$id_value}" rel="{$id_value}_{$filter.id_key}" id="layered_id_attribute_group_{$id_value}" {if !$value.nbr} value="X" disabled="disabled"{/if} style="background: {if isset($value.color)}{$value.color}{else}#CCC{/if}; margin-left: 0; width: 16px; height: 16px; padding:0; border: 1px solid {if isset($value.checked) && $value.checked}red{else}#666{/if};" />
									{if isset($value.checked) && $value.checked}<input type="hidden" name="layered_{$filter.type_lite}_{$id_value}" value="{$id_value}" />{/if}
								{else}
									<input type="checkbox" class="checkbox" name="layered_{$filter.type_lite}_{$id_value}" id="layered_{$filter.type_lite}{if $id_value || $filter.type == 'quantity'}_{$id_value}{/if}" value="{$id_value}{if $filter.id_key}_{$filter.id_key}{/if}"{if isset($value.checked)} checked="checked"{/if}{if !$value.nbr} disabled="disabled"{/if} /> 
								{/if}
									<label for="layered_{$filter.type_lite}_{$id_value}"{if !$value.nbr} class="disabled"{else}{if isset($filter.is_color_group) && $filter.is_color_group} name="layered_{$filter.type_lite}_{$id_value}" class="layered_color" rel="{$id_value}_{$filter.id_key}"{/if}{/if}>
										{if !$value.nbr}
										{$value.name|escape:html:'UTF-8'}{if $layered_show_qties}<span> (0)</span>{/if}</a>
										{else}
										<a href="{$value.link}" rel="{$value.rel}">{$value.name|escape:html:'UTF-8'}{if $layered_show_qties}<span> ({$value.nbr})</span>{/if}</a>
										{/if}
									</label>
								</li>
							{/foreach}
						{else}
							<label for="{$filter.type}">{l s='Range:' mod='blocklayered'}</label> <span id="layered_{$filter.type}_range"></span>
							<div style="margin: 6px 0 6px 6px; width: 93%;">
								<div style="margin-top:5px;" class="layered_slider" id="layered_{$filter.type}_slider"></div>
							</div>
							<script type="text/javascript">
							{literal}
								addSlider('{/literal}{$filter.type}{literal}',{
									range: true,
									min: {/literal}{$filter.min}{literal},
									max: {/literal}{$filter.max}{literal},
									values: [ {/literal}{$filter.values[0]}{literal}, {/literal}{$filter.values[1]}{literal}],
									slide: function( event, ui ) {
										$('#layered_{/literal}{$filter.type}{literal}_range').html(ui.values[ 0 ] + '{/literal}{$filter.unit}{literal}' + ' - ' + ui.values[ 1 ] + '{/literal}{$filter.unit}{literal}');
									},
									stop: function () {
										reloadContent();
									}
								}, '{/literal}{$filter.unit}{literal}');
								$(document).ready(function()
								{
									$('.layered_{/literal}{$filter.type}{literal}').show();
								});
							{/literal}
							</script>
						{/if}
						</ul>
					</div>
					{/if}
				{/foreach}
			</div>
			<input type="hidden" name="id_category_layered" value="{$id_category_layered}" />
			{foreach from=$filters item=filter}
				{if $filter.type_lite == 'id_attribute_group' && isset($filter.is_color_group) && $filter.is_color_group}
					{foreach from=$filter.values key=id_value item=value}
						{if isset($value.checked)}
							<input type="hidden" name="layered_id_attribute_group_{$id_value}" value="{$id_value}_{$filter.id_key}" />
						{/if}
					{/foreach}
				{/if}
			{/foreach}
		</form>
	</div>
	<div id="layered_ajax_loader" style="display: none;">
		<p style="margin: 20px 0; text-align: center;"><img src="{$img_ps_dir}loader.gif" alt="" /><br />{l s='Loading...' mod='blocklayered'}</p>
	</div>
</div>
{else}
<div id="layered_block_left" class="block">
	<div class="block_content">
		<form action="#" id="layered_form">
			<input type="hidden" name="id_category_layered" value="{$id_category_layered}" />
		</form>
	</div>
	<div id="layered_ajax_loader" style="display: none;">
		<p style="margin: 20px 0; text-align: center;"><img src="{$img_ps_dir}loader.gif" alt="" /><br />{l s='Loading...' mod='blocklayered'}</p>
	</div>
</div>
{/if}
<!-- /Block layered navigation module -->