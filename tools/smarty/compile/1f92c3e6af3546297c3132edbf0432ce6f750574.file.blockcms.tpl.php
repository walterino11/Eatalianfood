<?php /* Smarty version Smarty-3.0.7, created on 2012-02-04 13:24:17
         compiled from "/web/htdocs/www.eatalianfood.com/home/themes/papple_w1.3.2/modules/blockcms/blockcms.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6461883384f2d77d11d6486-05000851%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1f92c3e6af3546297c3132edbf0432ce6f750574' => 
    array (
      0 => '/web/htdocs/www.eatalianfood.com/home/themes/papple_w1.3.2/modules/blockcms/blockcms.tpl',
      1 => 1328378970,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6461883384f2d77d11d6486-05000851',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include '/web/htdocs/www.eatalianfood.com/home/tools/smarty/plugins/modifier.escape.php';
?>

<?php if ($_smarty_tpl->getVariable('block')->value==1){?>
	<!-- Block CMS module -->
	<?php  $_smarty_tpl->tpl_vars['cms_title'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['cms_key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('cms_titles')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['cms_title']->key => $_smarty_tpl->tpl_vars['cms_title']->value){
 $_smarty_tpl->tpl_vars['cms_key']->value = $_smarty_tpl->tpl_vars['cms_title']->key;
?>
		<div id="informations_block_left_<?php echo $_smarty_tpl->tpl_vars['cms_key']->value;?>
" class="block informations_block_left">
			<h4><a href="<?php echo $_smarty_tpl->tpl_vars['cms_title']->value['category_link'];?>
"><?php if (!empty($_smarty_tpl->tpl_vars['cms_title']->value['name'])){?><?php echo $_smarty_tpl->tpl_vars['cms_title']->value['name'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['cms_title']->value['category_name'];?>
<?php }?></a></h4>
			<ul class="block_content">
				<?php  $_smarty_tpl->tpl_vars['cms_page'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cms_title']->value['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['cms_page']->key => $_smarty_tpl->tpl_vars['cms_page']->value){
?>
					<?php if (isset($_smarty_tpl->tpl_vars['cms_page']->value['link'])){?><li class="bullet"><b style="margin-left:2em;">
					<a href="<?php echo $_smarty_tpl->tpl_vars['cms_page']->value['link'];?>
" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['cms_page']->value['name'],'html','UTF-8');?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['cms_page']->value['name'],'html','UTF-8');?>
</a>
					</b></li><?php }?>
				<?php }} ?>
				<?php  $_smarty_tpl->tpl_vars['cms_page'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cms_title']->value['cms']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['cms_page']->key => $_smarty_tpl->tpl_vars['cms_page']->value){
?>
					<?php if (isset($_smarty_tpl->tpl_vars['cms_page']->value['link'])){?><li><a href="<?php echo $_smarty_tpl->tpl_vars['cms_page']->value['link'];?>
" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['cms_page']->value['meta_title'],'html','UTF-8');?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['cms_page']->value['meta_title'],'html','UTF-8');?>
</a></li><?php }?>
				<?php }} ?>
				<?php if ($_smarty_tpl->tpl_vars['cms_title']->value['display_store']){?><li><a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('stores.php');?>
" title="<?php echo smartyTranslate(array('s'=>'Our stores','mod'=>'blockcms'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Our stores','mod'=>'blockcms'),$_smarty_tpl);?>
</a></li><?php }?>
			</ul>
		</div>
	<?php }} ?>
	<!-- /Block CMS module -->
<?php }else{ ?>
	<!-- MODULE Block footer -->
	<ul class="block_various_links" id="block_various_links_footer">
		<?php if (!$_smarty_tpl->getVariable('PS_CATALOG_MODE')->value){?><li class="first_item"><a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('prices-drop.php');?>
" title="<?php echo smartyTranslate(array('s'=>'Specials','mod'=>'blockcms'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Specials','mod'=>'blockcms'),$_smarty_tpl);?>
</a></li><?php }?>
		<li class="<?php if ($_smarty_tpl->getVariable('PS_CATALOG_MODE')->value){?>first_<?php }?>item"><a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('new-products.php');?>
" title="<?php echo smartyTranslate(array('s'=>'New products','mod'=>'blockcms'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'New products','mod'=>'blockcms'),$_smarty_tpl);?>
</a></li>
		<?php if (!$_smarty_tpl->getVariable('PS_CATALOG_MODE')->value){?><li class="item"><a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('best-sales.php');?>
" title="<?php echo smartyTranslate(array('s'=>'Top sellers','mod'=>'blockcms'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Top sellers','mod'=>'blockcms'),$_smarty_tpl);?>
</a></li><?php }?>
		<?php if ($_smarty_tpl->getVariable('display_stores_footer')->value){?><li class="item"><a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('stores.php');?>
" title="<?php echo smartyTranslate(array('s'=>'Our stores','mod'=>'blockcms'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Our stores','mod'=>'blockcms'),$_smarty_tpl);?>
</a></li><?php }?>
		<li class="item"><a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('contact-form.php',true);?>
" title="<?php echo smartyTranslate(array('s'=>'Contact us','mod'=>'blockcms'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Contact us','mod'=>'blockcms'),$_smarty_tpl);?>
</a></li>
		<?php  $_smarty_tpl->tpl_vars['cmslink'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('cmslinks')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['cmslink']->key => $_smarty_tpl->tpl_vars['cmslink']->value){
?>
			<?php if ($_smarty_tpl->tpl_vars['cmslink']->value['meta_title']!=''){?>
				<li class="item"><a href="<?php echo addslashes($_smarty_tpl->tpl_vars['cmslink']->value['link']);?>
" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['cmslink']->value['meta_title'],'htmlall','UTF-8');?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['cmslink']->value['meta_title'],'htmlall','UTF-8');?>
</a></li>
			<?php }?>
		<?php }} ?>
	</ul>
	<p>
		<?php echo smartyTranslate(array('s'=>'Powered by','mod'=>'blockcms'),$_smarty_tpl);?>
 <a href="http://www.prestashop.com">PrestaShop</a>&trade;. Designed by  <a href="http://www.prestalive.com">Prestalive</a>
	</p>
	<!-- /MODULE Block footer -->
<?php }?>
