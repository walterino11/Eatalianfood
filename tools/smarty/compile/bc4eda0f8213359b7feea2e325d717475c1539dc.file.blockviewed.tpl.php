<?php /* Smarty version Smarty-3.0.7, created on 2012-02-07 22:27:37
         compiled from "/web/htdocs/www.eatalianfood.com/home/modules/blockviewed/blockviewed.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2403774424f31eba9ae0501-92577230%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc4eda0f8213359b7feea2e325d717475c1539dc' => 
    array (
      0 => '/web/htdocs/www.eatalianfood.com/home/modules/blockviewed/blockviewed.tpl',
      1 => 1328407915,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2403774424f31eba9ae0501-92577230',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include '/web/htdocs/www.eatalianfood.com/home/tools/smarty/plugins/modifier.escape.php';
?>

<!-- Block Viewed products -->
<div id="viewed-products_block_left" class="block products_block">
	<h4><?php echo smartyTranslate(array('s'=>'Viewed products','mod'=>'blockviewed'),$_smarty_tpl);?>
</h4>
	<div class="block_content">
		<ul class="products clearfix">
			<?php  $_smarty_tpl->tpl_vars['viewedProduct'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('productsViewedObj')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['viewedProduct']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['viewedProduct']->iteration=0;
 $_smarty_tpl->tpl_vars['viewedProduct']->index=-1;
if ($_smarty_tpl->tpl_vars['viewedProduct']->total > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['viewedProduct']->key => $_smarty_tpl->tpl_vars['viewedProduct']->value){
 $_smarty_tpl->tpl_vars['viewedProduct']->iteration++;
 $_smarty_tpl->tpl_vars['viewedProduct']->index++;
 $_smarty_tpl->tpl_vars['viewedProduct']->first = $_smarty_tpl->tpl_vars['viewedProduct']->index === 0;
 $_smarty_tpl->tpl_vars['viewedProduct']->last = $_smarty_tpl->tpl_vars['viewedProduct']->iteration === $_smarty_tpl->tpl_vars['viewedProduct']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['first'] = $_smarty_tpl->tpl_vars['viewedProduct']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['last'] = $_smarty_tpl->tpl_vars['viewedProduct']->last;
?>
				<li class="clearfix<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['last']){?> last_item<?php }elseif($_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['first']){?> first_item<?php }else{ ?> item<?php }?>">
					<a href="<?php echo $_smarty_tpl->getVariable('link')->value->getProductLink($_smarty_tpl->getVariable('viewedProduct')->value->id,$_smarty_tpl->getVariable('viewedProduct')->value->link_rewrite,$_smarty_tpl->getVariable('viewedProduct')->value->category_rewrite);?>
" title="<?php echo smartyTranslate(array('s'=>'More about','mod'=>'blockviewed'),$_smarty_tpl);?>
 <?php echo smarty_modifier_escape($_smarty_tpl->getVariable('viewedProduct')->value->name,'html','UTF-8');?>
"><img src="<?php echo $_smarty_tpl->getVariable('link')->value->getImageLink($_smarty_tpl->getVariable('viewedProduct')->value->link_rewrite,$_smarty_tpl->getVariable('viewedProduct')->value->cover,'medium');?>
" height="<?php echo $_smarty_tpl->getVariable('mediumSize')->value['height'];?>
" width="<?php echo $_smarty_tpl->getVariable('mediumSize')->value['width'];?>
" alt="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('viewedProduct')->value->legend,'html','UTF-8');?>
" /></a>
					<h5><a href="<?php echo $_smarty_tpl->getVariable('link')->value->getProductLink($_smarty_tpl->getVariable('viewedProduct')->value->id,$_smarty_tpl->getVariable('viewedProduct')->value->link_rewrite,$_smarty_tpl->getVariable('viewedProduct')->value->category_rewrite);?>
" title="<?php echo smartyTranslate(array('s'=>'More about','mod'=>'blockviewed'),$_smarty_tpl);?>
 <?php echo smarty_modifier_escape($_smarty_tpl->getVariable('viewedProduct')->value->name,'html','UTF-8');?>
"><?php echo smarty_modifier_escape(smarty_modifier_truncate($_smarty_tpl->getVariable('viewedProduct')->value->name,14,'...'),'html','UTF-8');?>
</a></h5>
					<p><?php echo smarty_modifier_truncate(strip_tags($_smarty_tpl->getVariable('viewedProduct')->value->description_short),44);?>
<a href="<?php echo $_smarty_tpl->getVariable('link')->value->getProductLink($_smarty_tpl->getVariable('viewedProduct')->value->id,$_smarty_tpl->getVariable('viewedProduct')->value->link_rewrite,$_smarty_tpl->getVariable('viewedProduct')->value->category_rewrite);?>
" title="<?php echo smartyTranslate(array('s'=>'More about','mod'=>'blockviewed'),$_smarty_tpl);?>
 <?php echo smarty_modifier_escape($_smarty_tpl->getVariable('viewedProduct')->value->name,'html','UTF-8');?>
"><img src="<?php echo $_smarty_tpl->getVariable('img_dir')->value;?>
bullet.gif" alt="&gt;&gt;" width="10" height="7" /></a></p>
				</li>
			<?php }} ?>
		</ul>
	</div>
</div>
