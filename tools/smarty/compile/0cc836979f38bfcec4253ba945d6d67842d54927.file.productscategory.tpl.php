<?php /* Smarty version Smarty-3.0.7, created on 2012-02-07 16:29:47
         compiled from "/web/htdocs/www.eatalianfood.com/home/modules/productscategory/productscategory.tpl" */ ?>
<?php /*%%SmartyHeaderCode:378573564f3197cbaca607-82825363%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0cc836979f38bfcec4253ba945d6d67842d54927' => 
    array (
      0 => '/web/htdocs/www.eatalianfood.com/home/modules/productscategory/productscategory.tpl',
      1 => 1328408386,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '378573564f3197cbaca607-82825363',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_math')) include '/web/htdocs/www.eatalianfood.com/home/tools/smarty/plugins/function.math.php';
if (!is_callable('smarty_modifier_escape')) include '/web/htdocs/www.eatalianfood.com/home/tools/smarty/plugins/modifier.escape.php';
?>

<?php if (count($_smarty_tpl->getVariable('categoryProducts')->value)>0&&$_smarty_tpl->getVariable('categoryProducts')->value!==false){?>
	<h2 class="productscategory_h2"><?php echo count($_smarty_tpl->getVariable('categoryProducts')->value);?>
 <?php echo smartyTranslate(array('s'=>'other products in the same category:','mod'=>'productscategory'),$_smarty_tpl);?>
</h2>
	<div id="<?php if (count($_smarty_tpl->getVariable('categoryProducts')->value)>5){?>productscategory<?php }else{ ?>productscategory_noscroll<?php }?>">
	<?php if (count($_smarty_tpl->getVariable('categoryProducts')->value)>5){?><a id="productscategory_scroll_left" title="<?php echo smartyTranslate(array('s'=>'Previous','mod'=>'productscategory'),$_smarty_tpl);?>
" href="javascript:{}"><?php echo smartyTranslate(array('s'=>'Previous','mod'=>'productscategory'),$_smarty_tpl);?>
</a><?php }?>
	<div id="productscategory_list">
		<ul <?php if (count($_smarty_tpl->getVariable('categoryProducts')->value)>5){?>style="width: <?php echo smarty_function_math(array('equation'=>"width * nbImages",'width'=>107,'nbImages'=>count($_smarty_tpl->getVariable('categoryProducts')->value)),$_smarty_tpl);?>
px"<?php }?>>
			<?php  $_smarty_tpl->tpl_vars['categoryProduct'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('categoryProducts')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['categoryProduct']->key => $_smarty_tpl->tpl_vars['categoryProduct']->value){
?>
			<li <?php if (count($_smarty_tpl->getVariable('categoryProducts')->value)<6){?>style="width: <?php echo smarty_function_math(array('equation'=>"width / nbImages",'width'=>94,'nbImages'=>count($_smarty_tpl->getVariable('categoryProducts')->value)),$_smarty_tpl);?>
%"<?php }?>>
				<a href="<?php echo $_smarty_tpl->getVariable('link')->value->getProductLink($_smarty_tpl->tpl_vars['categoryProduct']->value['id_product'],$_smarty_tpl->tpl_vars['categoryProduct']->value['link_rewrite'],$_smarty_tpl->tpl_vars['categoryProduct']->value['category'],$_smarty_tpl->tpl_vars['categoryProduct']->value['ean13']);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['categoryProduct']->value['name']);?>
"><img src="<?php echo $_smarty_tpl->getVariable('link')->value->getImageLink($_smarty_tpl->tpl_vars['categoryProduct']->value['link_rewrite'],$_smarty_tpl->tpl_vars['categoryProduct']->value['id_image'],'medium');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['categoryProduct']->value['name']);?>
" /></a><br/>
				<a href="<?php echo $_smarty_tpl->getVariable('link')->value->getProductLink($_smarty_tpl->tpl_vars['categoryProduct']->value['id_product'],$_smarty_tpl->tpl_vars['categoryProduct']->value['link_rewrite'],$_smarty_tpl->tpl_vars['categoryProduct']->value['category'],$_smarty_tpl->tpl_vars['categoryProduct']->value['ean13']);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['categoryProduct']->value['name']);?>
">
				<?php echo smarty_modifier_escape(smarty_modifier_truncate($_smarty_tpl->tpl_vars['categoryProduct']->value['name'],15,'...'),'htmlall','UTF-8');?>

				</a><br />
				<?php if ($_smarty_tpl->getVariable('ProdDisplayPrice')->value&&$_smarty_tpl->tpl_vars['categoryProduct']->value['show_price']==1&&!isset($_smarty_tpl->getVariable('restricted_country_mode',null,true,false)->value)&&!$_smarty_tpl->getVariable('PS_CATALOG_MODE')->value){?>
					<span class="price_display">
						<span class="price"><?php echo Product::convertPrice(array('price'=>$_smarty_tpl->tpl_vars['categoryProduct']->value['displayed_price']),$_smarty_tpl);?>
</span>
					</span><br />
				<?php }else{ ?>
					<br />
				<?php }?>
				<a title="<?php echo smartyTranslate(array('s'=>'View','mod'=>'productscategory'),$_smarty_tpl);?>
" href="<?php echo $_smarty_tpl->getVariable('link')->value->getProductLink($_smarty_tpl->tpl_vars['categoryProduct']->value['id_product'],$_smarty_tpl->tpl_vars['categoryProduct']->value['link_rewrite'],$_smarty_tpl->tpl_vars['categoryProduct']->value['category'],$_smarty_tpl->tpl_vars['categoryProduct']->value['ean13']);?>
" class="button_small"><?php echo smartyTranslate(array('s'=>'View','mod'=>'productscategory'),$_smarty_tpl);?>
</a><br />
			</li>
			<?php }} ?>
		</ul>
	</div>
	<?php if (count($_smarty_tpl->getVariable('categoryProducts')->value)>5){?><a id="productscategory_scroll_right" title="<?php echo smartyTranslate(array('s'=>'Next','mod'=>'productscategory'),$_smarty_tpl);?>
" href="javascript:{}"><?php echo smartyTranslate(array('s'=>'Next','mod'=>'productscategory'),$_smarty_tpl);?>
</a><?php }?>
	</div>
	<script type="text/javascript">
		$('#productscategory_list').trigger('goto', [<?php echo $_smarty_tpl->getVariable('middlePosition')->value;?>
-3]);
	</script>
<?php }?>
