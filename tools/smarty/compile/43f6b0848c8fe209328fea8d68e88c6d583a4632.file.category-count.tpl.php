<?php /* Smarty version Smarty-3.0.7, created on 2012-02-06 12:10:38
         compiled from "/web/htdocs/www.eatalianfood.com/home/themes/prestashop/./category-count.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1807282174f30098e467098-55880373%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '43f6b0848c8fe209328fea8d68e88c6d583a4632' => 
    array (
      0 => '/web/htdocs/www.eatalianfood.com/home/themes/prestashop/./category-count.tpl',
      1 => 1328408785,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1807282174f30098e467098-55880373',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<?php if ($_smarty_tpl->getVariable('category')->value->id==1||$_smarty_tpl->getVariable('nb_products')->value==0){?><?php echo smartyTranslate(array('s'=>'There are no products.'),$_smarty_tpl);?>

<?php }else{ ?>
	<?php if ($_smarty_tpl->getVariable('nb_products')->value==1){?><?php echo smartyTranslate(array('s'=>'There is'),$_smarty_tpl);?>
<?php }else{ ?><?php echo smartyTranslate(array('s'=>'There are'),$_smarty_tpl);?>
<?php }?>
	<?php echo $_smarty_tpl->getVariable('nb_products')->value;?>

	<?php if ($_smarty_tpl->getVariable('nb_products')->value==1){?><?php echo smartyTranslate(array('s'=>'product.'),$_smarty_tpl);?>
<?php }else{ ?><?php echo smartyTranslate(array('s'=>'products.'),$_smarty_tpl);?>
<?php }?>
<?php }?>