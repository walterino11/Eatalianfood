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

<!-- Block permanent links module HEADER -->
<ul id="header_links">
	<li class="first" id="log_link">
		<strong>{l s='Welcome' mod='blockuserinfo'}{if $cookie->isLogged()}, {$cookie->customer_firstname} {$cookie->customer_lastname}{/if}</strong>
		{if $cookie->isLogged()}
			<a href="{$link->getPageLink('index.php')}?mylogout" title="{l s='Log me out' mod='blockuserinfo'}">{l s='Log out' mod='blockuserinfo'}</a>
		{else}
			<a href="{$link->getPageLink('my-account.php', true)}">{l s='Log in' mod='blockuserinfo'}</a>
		{/if}
	</li>
	<li id="header_link_contact"><a href="{$link->getPageLink('contact-form.php', true)}" title="{l s='contact' mod='blockpermanentlinks'}">{l s='contact' mod='blockpermanentlinks'}</a></li>
	
	<li id="header_link_sitemap"><a href="{$link->getPageLink('sitemap.php')}" title="{l s='sitemap' mod='blockpermanentlinks'}">{l s='sitemap' mod='blockpermanentlinks'}</a></li>
	
	<li id="header_link_bookmark">
	 
		<script type="text/javascript">writeBookmarkLink('{$come_from}', '{$meta_title|addslashes|addslashes}', '{l s='bookmark' mod='blockpermanentlinks'}');</script>
	</li>
</ul>
<!-- /Block permanent links module HEADER -->
