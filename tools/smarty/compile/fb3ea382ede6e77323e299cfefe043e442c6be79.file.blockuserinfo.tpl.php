<?php /* Smarty version Smarty-3.0.7, created on 2012-02-04 13:24:16
         compiled from "/web/htdocs/www.eatalianfood.com/home/themes/papple_w1.3.2/modules/blockuserinfo/blockuserinfo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11474205924f2d77d0c49879-54762217%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fb3ea382ede6e77323e299cfefe043e442c6be79' => 
    array (
      0 => '/web/htdocs/www.eatalianfood.com/home/themes/papple_w1.3.2/modules/blockuserinfo/blockuserinfo.tpl',
      1 => 1328378985,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11474205924f2d77d0c49879-54762217',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>


<!-- Block user information module HEADER -->
<div class="bt_header">
<ul id="header_nav">
	<li id="your_account"><a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('my-account.php',true);?>
" title="<?php echo smartyTranslate(array('s'=>'Your Account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Your Account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</a></li>
	<?php if (!$_smarty_tpl->getVariable('PS_CATALOG_MODE')->value){?>
		<li class="link_cart">
			<a id="shopping_cart" href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink(($_smarty_tpl->getVariable('order_process')->value).".php",true);?>
" title="<?php echo smartyTranslate(array('s'=>'Your Shopping Cart','mod'=>'blockuserinfo'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Cart:','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</a>
			<span class="ajax_cart_quantity<?php if ($_smarty_tpl->getVariable('cart_qties')->value==0){?> hidden<?php }?>"><?php echo $_smarty_tpl->getVariable('cart_qties')->value;?>
</span>
			<span class="ajax_cart_product_txt<?php if ($_smarty_tpl->getVariable('cart_qties')->value!=1){?> hidden<?php }?>"><?php echo smartyTranslate(array('s'=>'product','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</span>
			<span class="ajax_cart_product_txt_s<?php if ($_smarty_tpl->getVariable('cart_qties')->value<2){?> hidden<?php }?>"><?php echo smartyTranslate(array('s'=>'products','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</span>
			<?php if ($_smarty_tpl->getVariable('cart_qties')->value>=0){?>
				<span class="ajax_cart_total<?php if ($_smarty_tpl->getVariable('cart_qties')->value==0){?> hidden<?php }?>">
					<?php if ($_smarty_tpl->getVariable('priceDisplay')->value==1){?>
						<?php $_smarty_tpl->tpl_vars['blockuser_cart_flag'] = new Smarty_variable(constant('Cart::BOTH_WITHOUT_SHIPPING'), null, null);?>
						<?php echo Product::convertPrice(array('price'=>$_smarty_tpl->getVariable('cart')->value->getOrderTotal(false,$_smarty_tpl->getVariable('blockuser_cart_flag')->value)),$_smarty_tpl);?>

					<?php }else{ ?>
						<?php $_smarty_tpl->tpl_vars['blockuser_cart_flag'] = new Smarty_variable(constant('Cart::BOTH_WITHOUT_SHIPPING'), null, null);?>
						<?php echo Product::convertPrice(array('price'=>$_smarty_tpl->getVariable('cart')->value->getOrderTotal(true,$_smarty_tpl->getVariable('blockuser_cart_flag')->value)),$_smarty_tpl);?>

					<?php }?>
				</span>
			<?php }?>
			<span class="ajax_cart_no_product<?php if ($_smarty_tpl->getVariable('cart_qties')->value>0){?> hidden<?php }?>"><?php echo smartyTranslate(array('s'=>'(empty)','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</span>
		</li>
	<?php }?>
</ul>
<!-- /Block user information module HEADER -->
