<?php /* Smarty version Smarty-3.0.7, created on 2012-01-22 00:29:12
         compiled from "/web/htdocs/www.eatalianfood.com/home/modules/cheque/payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4134745324f1b9ea829dd55-78285654%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b9a7e1438cc08339fdfec517c1c0f9fd43500ebf' => 
    array (
      0 => '/web/htdocs/www.eatalianfood.com/home/modules/cheque/payment.tpl',
      1 => 1326572303,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4134745324f1b9ea829dd55-78285654',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>


<p class="payment_module">
	<a href="<?php echo $_smarty_tpl->getVariable('this_path_ssl')->value;?>
payment.php" title="<?php echo smartyTranslate(array('s'=>'Pay by cheque','mod'=>'cheque'),$_smarty_tpl);?>
">
		<img src="<?php echo $_smarty_tpl->getVariable('this_path')->value;?>
cheque.jpg" alt="<?php echo smartyTranslate(array('s'=>'Pay by cheque','mod'=>'cheque'),$_smarty_tpl);?>
" width="86" height="49" />
		<?php echo smartyTranslate(array('s'=>'Pay by cheque (order process will be longer)','mod'=>'cheque'),$_smarty_tpl);?>

	</a>
</p>