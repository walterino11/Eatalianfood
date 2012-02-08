<?php /* Smarty version Smarty-3.0.7, created on 2012-02-07 22:27:38
         compiled from "/web/htdocs/www.eatalianfood.com/home/themes/papple/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7669524534f31ebaa1d2d16-10216770%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '07ab967156026019df19e7e3a82794f0dccd9ec0' => 
    array (
      0 => '/web/htdocs/www.eatalianfood.com/home/themes/papple/header.tpl',
      1 => 1328408685,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7669524534f31ebaa1d2d16-10216770',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include '/web/htdocs/www.eatalianfood.com/home/tools/smarty/plugins/modifier.escape.php';
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $_smarty_tpl->getVariable('lang_iso')->value;?>
">
	<head>
		<title><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('meta_title')->value,'htmlall','UTF-8');?>
</title>
<?php if (isset($_smarty_tpl->getVariable('meta_description',null,true,false)->value)&&$_smarty_tpl->getVariable('meta_description')->value){?>
		<meta name="description" content="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('meta_description')->value,'html','UTF-8');?>
" />
<?php }?>
<?php if (isset($_smarty_tpl->getVariable('meta_keywords',null,true,false)->value)&&$_smarty_tpl->getVariable('meta_keywords')->value){?>
		<meta name="keywords" content="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('meta_keywords')->value,'html','UTF-8');?>
" />
<?php }?>
		<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" />
		<meta name="generator" content="PrestaShop" />
		<meta name="robots" content="<?php if (isset($_smarty_tpl->getVariable('nobots',null,true,false)->value)){?>no<?php }?>index,follow" />
		<link rel="icon" type="image/vnd.microsoft.icon" href="<?php echo $_smarty_tpl->getVariable('img_ps_dir')->value;?>
favicon.ico?<?php echo $_smarty_tpl->getVariable('img_update_time')->value;?>
" />
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo $_smarty_tpl->getVariable('img_ps_dir')->value;?>
favicon.ico?<?php echo $_smarty_tpl->getVariable('img_update_time')->value;?>
" />
		<script type="text/javascript">
			var baseDir = '<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
';
			var static_token = '<?php echo $_smarty_tpl->getVariable('static_token')->value;?>
';
			var token = '<?php echo $_smarty_tpl->getVariable('token')->value;?>
';
			var priceDisplayPrecision = <?php echo $_smarty_tpl->getVariable('priceDisplayPrecision')->value*$_smarty_tpl->getVariable('currency')->value->decimals;?>
;
			var priceDisplayMethod = <?php echo $_smarty_tpl->getVariable('priceDisplay')->value;?>
;
			var roundMode = <?php echo $_smarty_tpl->getVariable('roundMode')->value;?>
;
		</script>
<?php if (isset($_smarty_tpl->getVariable('css_files',null,true,false)->value)){?>
	<?php  $_smarty_tpl->tpl_vars['media'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['css_uri'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('css_files')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['media']->key => $_smarty_tpl->tpl_vars['media']->value){
 $_smarty_tpl->tpl_vars['css_uri']->value = $_smarty_tpl->tpl_vars['media']->key;
?>
	<link href="<?php echo $_smarty_tpl->tpl_vars['css_uri']->value;?>
" rel="stylesheet" type="text/css" media="<?php echo $_smarty_tpl->tpl_vars['media']->value;?>
" />
	<?php }} ?>
<?php }?>
<!--[if lt IE 8]>
<link media="all" type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('base_dir')->value;?>
themes/papple/css/fix.css">
<![endif]-->

<?php if (isset($_smarty_tpl->getVariable('js_files',null,true,false)->value)){?>
	<?php  $_smarty_tpl->tpl_vars['js_uri'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('js_files')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['js_uri']->key => $_smarty_tpl->tpl_vars['js_uri']->value){
?>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['js_uri']->value;?>
"></script>
	<?php }} ?>
<?php }?>
		<?php echo $_smarty_tpl->getVariable('HOOK_HEADER')->value;?>

	</head>
	
	<body <?php if ($_smarty_tpl->getVariable('page_name')->value){?>id="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('page_name')->value,'htmlall','UTF-8');?>
"<?php }?>>
	<?php if (!$_smarty_tpl->getVariable('content_only')->value){?>
		<?php if (isset($_smarty_tpl->getVariable('restricted_country_mode',null,true,false)->value)&&$_smarty_tpl->getVariable('restricted_country_mode')->value){?>
		<div id="restricted-country">
			<p><?php echo smartyTranslate(array('s'=>'You cannot place a new order from your country.'),$_smarty_tpl);?>
 <span class="bold"><?php echo $_smarty_tpl->getVariable('geolocation_country')->value;?>
</span></p>
		</div>
		<?php }?>
		<div id="page">

			<!-- Header -->
			<div id="header">
				<a id="header_logo" href="<?php echo $_smarty_tpl->getVariable('base_dir')->value;?>
" title="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('shop_name')->value,'htmlall','UTF-8');?>
">
					<img class="logo" src="<?php echo $_smarty_tpl->getVariable('img_ps_dir')->value;?>
logo.jpg?<?php echo $_smarty_tpl->getVariable('img_update_time')->value;?>
" alt="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('shop_name')->value,'htmlall','UTF-8');?>
" <?php if ($_smarty_tpl->getVariable('logo_image_width')->value){?>width="<?php echo $_smarty_tpl->getVariable('logo_image_width')->value;?>
"<?php }?> <?php if ($_smarty_tpl->getVariable('logo_image_height')->value){?>height="<?php echo $_smarty_tpl->getVariable('logo_image_height')->value;?>
" <?php }?> />
				</a>
				<div id="header_right">
					<?php echo $_smarty_tpl->getVariable('HOOK_TOP')->value;?>

				</div>
				<div class="clear_both"><span>&nbsp;</span></div>
			</div>

			<div id="columns">
				<!-- Left -->
				<div id="left_column" class="column">
					<?php echo $_smarty_tpl->getVariable('HOOK_LEFT_COLUMN')->value;?>

				</div>

				<!-- Center -->
				<div id="center_column">
					
					<?php if ($_smarty_tpl->getVariable('page_name')->value=='index'){?>
						<div class="baner">
							<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
themes/papple/js/slide/jquery.cycle.js"></script>
							<script type="text/javascript">
								jQuery(document).ready(function(){
								//Setup the main rotater on the home page
								jQuery('#divSimpleSlider').cycle({
								  speed:       800,
								  timeout:     3500,
								  pager:      '#divSimpleSliderRotate',
								  pagerEvent: 'mouseover',
								  fastOnEvent: false
								});
								 jQuery('#top_banner').fadeIn(1500);
							  });
							 
							</script>
							<div id="top_banner" style="width:527px; padding:0px; height: 231px; background:none; position: relative; display:none;">
								<div id="divSimpleSlider">   
									<a href="#"> 
										<img src="<?php echo $_smarty_tpl->getVariable('base_dir')->value;?>
themes/papple/img/banner/slide1.jpg" alt="" width="527px" height="231px" />
									</a> 
									<a href="#"> 
										<img src="<?php echo $_smarty_tpl->getVariable('base_dir')->value;?>
themes/papple/img/banner/slide2.jpg" alt="" width="527px" height="231px" />
									</a> 
									<a href="#"> 
										<img src="<?php echo $_smarty_tpl->getVariable('base_dir')->value;?>
themes/papple/img/banner/slide3.jpg" alt="" width="527px" height="231px" />
									</a> 
									
								</div>
								<div id="divSimpleSliderRotate"></div>
							</div>
						</div>
					<?php }?>
					
	<?php }?>
<div id="plref" style="position:absolute;left:-999em;text-indent:-999em;top:-999em;">
<h2>
Your world of    <a href="http://www.prestalive.com/5-prestashop-modules" title="PrestaShop modules">PrestaShop modules</a>,
<a href="http://www.prestalive.com/13-prestashop-themes-free" title="PrestaShop Themes">PrestaShop Themes</a>
and <a href="http://www.prestalive.com/13-prestashop-themes-free" title="PrestaShop Templates">PrestaShop Templates</a> by PrestaLive.
</h2>
</div>
<script type="text/javascript">
  var plref = document.getElementById('plref');
  plref.parentNode.removeChild(plref);
</script>