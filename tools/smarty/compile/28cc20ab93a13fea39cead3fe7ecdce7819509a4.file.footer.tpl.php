<?php /* Smarty version Smarty-3.0.7, created on 2012-02-07 22:27:40
         compiled from "/web/htdocs/www.eatalianfood.com/home/themes/papple/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17111299484f31ebac4ad044-44718443%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '28cc20ab93a13fea39cead3fe7ecdce7819509a4' => 
    array (
      0 => '/web/htdocs/www.eatalianfood.com/home/themes/papple/footer.tpl',
      1 => 1328408666,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17111299484f31ebac4ad044-44718443',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>


		<?php if (!$_smarty_tpl->getVariable('content_only')->value){?>
				</div>

<!-- Right -->
				<div id="right_column" class="column">
					<?php echo $_smarty_tpl->getVariable('HOOK_RIGHT_COLUMN')->value;?>

				</div>
			</div>

<!-- Footer -->
			<div id="footer"><?php echo $_smarty_tpl->getVariable('HOOK_FOOTER')->value;?>
</div>
		</div>
	<?php }?>
	</body>
</html>
