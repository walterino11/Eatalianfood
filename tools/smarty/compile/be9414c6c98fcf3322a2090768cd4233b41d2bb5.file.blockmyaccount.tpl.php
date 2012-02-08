<?php /* Smarty version Smarty-3.0.7, created on 2012-01-16 18:28:05
         compiled from "/web/htdocs/www.eatalianfood.com/home/modules/blockmyaccount/blockmyaccount.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3360861204f14b285849b10-71200217%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be9414c6c98fcf3322a2090768cd4233b41d2bb5' => 
    array (
      0 => '/web/htdocs/www.eatalianfood.com/home/modules/blockmyaccount/blockmyaccount.tpl',
      1 => 1326572143,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3360861204f14b285849b10-71200217',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>


<!-- Block myaccount module -->
<div class="block myaccount">
	<h4><a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('my-account.php',true);?>
"><?php echo smartyTranslate(array('s'=>'My account','mod'=>'blockmyaccount'),$_smarty_tpl);?>
</a></h4>
	<div class="block_content">
		<ul class="bullet">
			<li><a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('history.php',true);?>
" title=""><?php echo smartyTranslate(array('s'=>'My orders','mod'=>'blockmyaccount'),$_smarty_tpl);?>
</a></li>
			<?php if ($_smarty_tpl->getVariable('returnAllowed')->value){?><li><a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('order-follow.php',true);?>
" title=""><?php echo smartyTranslate(array('s'=>'My merchandise returns','mod'=>'blockmyaccount'),$_smarty_tpl);?>
</a></li><?php }?>
			<li><a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('order-slip.php',true);?>
" title=""><?php echo smartyTranslate(array('s'=>'My credit slips','mod'=>'blockmyaccount'),$_smarty_tpl);?>
</a></li>
			<li><a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('addresses.php',true);?>
" title=""><?php echo smartyTranslate(array('s'=>'My addresses','mod'=>'blockmyaccount'),$_smarty_tpl);?>
</a></li>
			<li><a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('identity.php',true);?>
" title=""><?php echo smartyTranslate(array('s'=>'My personal info','mod'=>'blockmyaccount'),$_smarty_tpl);?>
</a></li>
			<?php if ($_smarty_tpl->getVariable('voucherAllowed')->value){?><li><a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('discount.php',true);?>
" title=""><?php echo smartyTranslate(array('s'=>'My vouchers','mod'=>'blockmyaccount'),$_smarty_tpl);?>
</a></li><?php }?>
			<?php echo $_smarty_tpl->getVariable('HOOK_BLOCK_MY_ACCOUNT')->value;?>

		</ul>
		<p class="logout"><a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('index.php');?>
?mylogout" title="<?php echo smartyTranslate(array('s'=>'Sign out','mod'=>'blockmyaccount'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Sign out','mod'=>'blockmyaccount'),$_smarty_tpl);?>
</a></p>
	</div>
</div>
<!-- /Block myaccount module -->