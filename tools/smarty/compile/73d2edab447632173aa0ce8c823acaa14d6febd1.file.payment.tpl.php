<?php /* Smarty version Smarty-3.0.7, created on 2012-01-22 00:29:12
         compiled from "/web/htdocs/www.eatalianfood.com/home/modules/bankwire/payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20928430164f1b9ea8438b00-30149980%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '73d2edab447632173aa0ce8c823acaa14d6febd1' => 
    array (
      0 => '/web/htdocs/www.eatalianfood.com/home/modules/bankwire/payment.tpl',
      1 => 1326572048,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20928430164f1b9ea8438b00-30149980',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>


<p class="payment_module">
	<a href="<?php echo $_smarty_tpl->getVariable('this_path_ssl')->value;?>
payment.php" title="<?php echo smartyTranslate(array('s'=>'Pay by bank wire','mod'=>'bankwire'),$_smarty_tpl);?>
">
		<img src="<?php echo $_smarty_tpl->getVariable('this_path')->value;?>
bankwire.jpg" alt="<?php echo smartyTranslate(array('s'=>'Pay by bank wire','mod'=>'bankwire'),$_smarty_tpl);?>
" width="86" height="49"/>
		<?php echo smartyTranslate(array('s'=>'Pay by bank wire (order process will be longer)','mod'=>'bankwire'),$_smarty_tpl);?>

	</a>
</p>