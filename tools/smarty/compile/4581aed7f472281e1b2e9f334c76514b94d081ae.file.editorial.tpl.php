<?php /* Smarty version Smarty-3.0.7, created on 2012-02-04 13:24:17
         compiled from "/web/htdocs/www.eatalianfood.com/home/themes/papple_w1.3.2/modules/editorial/editorial.tpl" */ ?>
<?php /*%%SmartyHeaderCode:195230214f2d77d16ac4f3-97082813%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4581aed7f472281e1b2e9f334c76514b94d081ae' => 
    array (
      0 => '/web/htdocs/www.eatalianfood.com/home/themes/papple_w1.3.2/modules/editorial/editorial.tpl',
      1 => 1328378987,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '195230214f2d77d16ac4f3-97082813',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>


<!-- Module Editorial -->
<div id="editorial_block_center" class="editorial_block">
	<?php if ($_smarty_tpl->getVariable('editorial')->value->body_title){?><h1><?php echo stripslashes($_smarty_tpl->getVariable('editorial')->value->body_title);?>
</h1>
	<?php }elseif($_smarty_tpl->getVariable('editorial')->value->body_title){?><h1><?php echo stripslashes($_smarty_tpl->getVariable('editorial')->value->body_title);?>
</h1><?php }?>
	<div class="ct_editor">
		<?php if ($_smarty_tpl->getVariable('editorial')->value->body_subheading){?><h2><?php echo stripslashes($_smarty_tpl->getVariable('editorial')->value->body_subheading);?>
</h2>
		<?php }elseif($_smarty_tpl->getVariable('editorial')->value->body_subheading){?><h2><?php echo stripslashes($_smarty_tpl->getVariable('editorial')->value->body_subheading);?>
</h2><?php }?>
		<?php if ($_smarty_tpl->getVariable('editorial')->value->body_paragraph){?><div class="rte"><?php echo stripslashes($_smarty_tpl->getVariable('editorial')->value->body_paragraph);?>
</div>
		<?php }elseif($_smarty_tpl->getVariable('editorial')->value->body_paragraph){?><div class="rte"><?php echo stripslashes($_smarty_tpl->getVariable('editorial')->value->body_paragraph);?>
</div><?php }?>
	</div>
</div>
<!-- /Module Editorial -->