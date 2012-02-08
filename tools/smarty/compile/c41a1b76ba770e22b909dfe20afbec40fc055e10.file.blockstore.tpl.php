<?php /* Smarty version Smarty-3.0.7, created on 2012-01-14 15:54:01
         compiled from "/web/htdocs/www.eatalianfood.com/home/modules/blockstore/blockstore.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16659340554f11eb69217991-06072399%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c41a1b76ba770e22b909dfe20afbec40fc055e10' => 
    array (
      0 => '/web/htdocs/www.eatalianfood.com/home/modules/blockstore/blockstore.tpl',
      1 => 1326572200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16659340554f11eb69217991-06072399',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>


<!-- Block stores module -->
<div id="stores_block_left" class="block">
	<h4><a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('stores.php');?>
" title="<?php echo smartyTranslate(array('s'=>'Our stores','mod'=>'blockstore'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Our stores','mod'=>'blockstore'),$_smarty_tpl);?>
</a></h4>
	<div class="block_content blockstore">
		<p>
			<a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('stores.php');?>
" title="<?php echo smartyTranslate(array('s'=>'Our stores','mod'=>'blockstore'),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->getVariable('module_dir')->value;?>
<?php echo $_smarty_tpl->getVariable('store_img')->value;?>
" alt="<?php echo smartyTranslate(array('s'=>'Our stores','mod'=>'blockstore'),$_smarty_tpl);?>
" width="174" height="115" /></a><br />
			<a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('stores.php');?>
" title="<?php echo smartyTranslate(array('s'=>'Our stores','mod'=>'blockstore'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Discover our stores','mod'=>'blockstore'),$_smarty_tpl);?>
</a>
		</p>
	</div>
</div>
<!-- /Block stores module -->
