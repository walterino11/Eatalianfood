<?php /* Smarty version Smarty-3.0.7, created on 2012-01-23 00:56:44
         compiled from "/web/htdocs/www.eatalianfood.com/home/themes/papple/prices-drop.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9942282444f1cf69cabf887-22947179%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '67308d97d84218304e5a6ba49382a0d73b6ffe2b' => 
    array (
      0 => '/web/htdocs/www.eatalianfood.com/home/themes/papple/prices-drop.tpl',
      1 => 1326587930,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9942282444f1cf69cabf887-22947179',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>


<?php ob_start(); ?><?php echo smartyTranslate(array('s'=>'Price drop'),$_smarty_tpl);?>
<?php  Smarty::$_smarty_vars['capture']['path']=ob_get_clean();?>
<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('tpl_dir')->value)."./breadcrumb.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
<div class="pl_category">
	<h1><?php echo smartyTranslate(array('s'=>'Price drop'),$_smarty_tpl);?>
</h1>
	<div class="pl_ct">
		<?php if ($_smarty_tpl->getVariable('products')->value){?>
			<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('tpl_dir')->value)."./product-sort.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
			<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('tpl_dir')->value)."./product-list.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('products',$_smarty_tpl->getVariable('products')->value); echo $_template->getRenderedTemplate();?><?php unset($_template);?>
			<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('tpl_dir')->value)."./pagination.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
		<?php }else{ ?>
			<p class="warning"><?php echo smartyTranslate(array('s'=>'No price drop.'),$_smarty_tpl);?>
</p>
		<?php }?>
		<div class="clear_both"><span>&nbsp;</span></div>
	</div>
</div>
