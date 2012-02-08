<?php /* Smarty version Smarty-3.0.7, created on 2012-02-07 16:33:20
         compiled from "/web/htdocs/www.eatalianfood.com/home/themes/papple/./product-compare.tpl" */ ?>
<?php /*%%SmartyHeaderCode:723964504f3198a03d6472-42962104%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd224476952c891739479a1ee169b7658d42b9103' => 
    array (
      0 => '/web/htdocs/www.eatalianfood.com/home/themes/papple/./product-compare.tpl',
      1 => 1328408776,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '723964504f3198a03d6472-42962104',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>


<?php if ($_smarty_tpl->getVariable('comparator_max_item')->value){?>
<script type="text/javascript">
// <![CDATA[
	var min_item = '<?php echo smartyTranslate(array('s'=>'Please select at least one product.','js'=>1),$_smarty_tpl);?>
';
	var max_item = "<?php echo smartyTranslate(array('s'=>'You cannot add more than','js'=>1),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->getVariable('comparator_max_item')->value;?>
 <?php echo smartyTranslate(array('s'=>'product(s) in the product comparator','js'=>1),$_smarty_tpl);?>
";
//]]>
</script>
	<form method="get" action="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('products-comparison.php',true);?>
" onsubmit="return checkBeforeComparison();">
		<p>
		<button type="submit" class="btn_compare">
			<span><span><?php echo smartyTranslate(array('s'=>'Compare'),$_smarty_tpl);?>
</span></span>
		</button>
		<input type="hidden" name="compare_product_list" class="compare_product_list" value="" />
		</p>
	</form>
<?php }?>

