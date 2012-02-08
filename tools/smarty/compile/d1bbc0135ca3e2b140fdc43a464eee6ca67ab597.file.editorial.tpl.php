<?php /* Smarty version Smarty-3.0.7, created on 2012-02-07 22:27:38
         compiled from "/web/htdocs/www.eatalianfood.com/home/themes/papple/modules/editorial/editorial.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9848206204f31ebaa48a8c2-83422287%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd1bbc0135ca3e2b140fdc43a464eee6ca67ab597' => 
    array (
      0 => '/web/htdocs/www.eatalianfood.com/home/themes/papple/modules/editorial/editorial.tpl',
      1 => 1328408769,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9848206204f31ebaa48a8c2-83422287',
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