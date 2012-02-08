<?php /* Smarty version Smarty-3.0.7, created on 2012-02-07 22:27:39
         compiled from "/web/htdocs/www.eatalianfood.com/home/themes/papple/modules/blocknewproducts/blocknewproducts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17793581324f31ebab95d372-74584900%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4912523d15c308a869cc8e1fd2d5f335871c7285' => 
    array (
      0 => '/web/htdocs/www.eatalianfood.com/home/themes/papple/modules/blocknewproducts/blocknewproducts.tpl',
      1 => 1328408766,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17793581324f31ebab95d372-74584900',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include '/web/htdocs/www.eatalianfood.com/home/tools/smarty/plugins/modifier.escape.php';
?>

<!-- MODULE Block new products -->
<div id="new-products_block_right" class="block products_block">
	<h4><a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('new-products.php');?>
" title="<?php echo smartyTranslate(array('s'=>'New products','mod'=>'blocknewproducts'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'New products','mod'=>'blocknewproducts'),$_smarty_tpl);?>
</a></h4>
	<div class="block_content">
	<?php if ($_smarty_tpl->getVariable('new_products')->value!==false){?>
		<ul class="product_images clearfix">
		<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('new_products')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['product']->index=-1;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['newProducts']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
 $_smarty_tpl->tpl_vars['product']->index++;
 $_smarty_tpl->tpl_vars['product']->first = $_smarty_tpl->tpl_vars['product']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['newProducts']['first'] = $_smarty_tpl->tpl_vars['product']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['newProducts']['index']++;
?>
			<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['newProducts']['index']<2){?>
				<li<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['newProducts']['first']){?> class="first"<?php }?>>
					<a href="<?php echo $_smarty_tpl->tpl_vars['product']->value['link'];?>
" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['legend'],'html','UTF-8');?>
">
						<img src="<?php echo $_smarty_tpl->getVariable('link')->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['id_image'],'medium');?>
" height="<?php echo $_smarty_tpl->getVariable('mediumSize')->value['height'];?>
" width="<?php echo $_smarty_tpl->getVariable('mediumSize')->value['width'];?>
" alt="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['legend'],'html','UTF-8');?>
" />
						<?php echo smarty_modifier_escape(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['product']->value['name']),'html','UTF-8');?>

					</a>
				</li>
			<?php }?>
		<?php }} ?>
		</ul>
		<p>
			<a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('new-products.php');?>
" title="<?php echo smartyTranslate(array('s'=>'All new products','mod'=>'blocknewproducts'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'All new products','mod'=>'blocknewproducts'),$_smarty_tpl);?>
</a>
		</p>
	<?php }else{ ?>
		<p><?php echo smartyTranslate(array('s'=>'No new products at this time','mod'=>'blocknewproducts'),$_smarty_tpl);?>
</p>
	<?php }?>
	</div>
</div>
<!-- /MODULE Block new products -->