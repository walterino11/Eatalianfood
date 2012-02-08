<?php /* Smarty version Smarty-3.0.7, created on 2012-02-04 13:24:16
         compiled from "/web/htdocs/www.eatalianfood.com/home/themes/papple_w1.3.2/modules/blockcurrencies/blockcurrencies.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13581371774f2d77d04ffec1-31175536%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ed1bb3d7f1ef8cc78a24a62389f10a24a0efab0' => 
    array (
      0 => '/web/htdocs/www.eatalianfood.com/home/themes/papple_w1.3.2/modules/blockcurrencies/blockcurrencies.tpl',
      1 => 1328378977,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13581371774f2d77d04ffec1-31175536',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>


<!-- Block currencies module -->
<div id="currencies_block_top">
	<form id="setCurrency" action="<?php echo $_smarty_tpl->getVariable('request_uri')->value;?>
" method="post">
		<ul>
			<li><strong><?php echo smartyTranslate(array('s'=>'Currency','mod'=>'blockcurrencies'),$_smarty_tpl);?>
:</strong></li>
			<?php  $_smarty_tpl->tpl_vars['f_currency'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('currencies')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['f_currency']->key => $_smarty_tpl->tpl_vars['f_currency']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['f_currency']->key;
?>
				<li <?php if ($_smarty_tpl->getVariable('cookie')->value->id_currency==$_smarty_tpl->tpl_vars['f_currency']->value['id_currency']){?>class="selected"<?php }?>>
					<a href="javascript:setCurrency(<?php echo $_smarty_tpl->tpl_vars['f_currency']->value['id_currency'];?>
);" title="<?php echo $_smarty_tpl->tpl_vars['f_currency']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['f_currency']->value['sign'];?>
</a>
				</li>
			<?php }} ?>
		</ul>
		<p>
			<input type="hidden" name="id_currency" id="id_currency" value=""/>
			<input type="hidden" name="SubmitCurrency" value="" />
		</p>
	</form>
</div>
<!-- /Block currencies module -->
