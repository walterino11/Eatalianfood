<?php /* Smarty version Smarty-3.0.7, created on 2012-02-06 12:10:38
         compiled from "/web/htdocs/www.eatalianfood.com/home/themes/prestashop/./pagination.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9384270834f30098ed09523-39403138%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8c9ac9557a34e78b4a7ec12ee75d19508bfbb8a9' => 
    array (
      0 => '/web/htdocs/www.eatalianfood.com/home/themes/prestashop/./pagination.tpl',
      1 => 1328408882,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9384270834f30098ed09523-39403138',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include '/web/htdocs/www.eatalianfood.com/home/tools/smarty/plugins/modifier.escape.php';
?>

<?php if (isset($_smarty_tpl->getVariable('no_follow',null,true,false)->value)&&$_smarty_tpl->getVariable('no_follow')->value){?>
	<?php $_smarty_tpl->tpl_vars['no_follow_text'] = new Smarty_variable('rel="nofollow"', null, null);?>
<?php }else{ ?>
	<?php $_smarty_tpl->tpl_vars['no_follow_text'] = new Smarty_variable('', null, null);?>
<?php }?>

<?php if (isset($_smarty_tpl->getVariable('p',null,true,false)->value)&&$_smarty_tpl->getVariable('p')->value){?>
	<?php if (isset($_GET['id_category'])&&$_GET['id_category']&&isset($_smarty_tpl->getVariable('category',null,true,false)->value)){?>
		<?php if (!isset($_smarty_tpl->getVariable('current_url',null,true,false)->value)){?>
			<?php $_smarty_tpl->tpl_vars['requestPage'] = new Smarty_variable($_smarty_tpl->getVariable('link')->value->getPaginationLink('category',$_smarty_tpl->getVariable('category')->value,false,false,true,false), null, null);?>
		<?php }else{ ?>
			<?php $_smarty_tpl->tpl_vars['requestPage'] = new Smarty_variable($_smarty_tpl->getVariable('current_url')->value, null, null);?>
		<?php }?>
		<?php $_smarty_tpl->tpl_vars['requestNb'] = new Smarty_variable($_smarty_tpl->getVariable('link')->value->getPaginationLink('category',$_smarty_tpl->getVariable('category')->value,true,false,false,true), null, null);?>
	<?php }elseif(isset($_GET['id_manufacturer'])&&$_GET['id_manufacturer']&&isset($_smarty_tpl->getVariable('manufacturer',null,true,false)->value)){?>
		<?php $_smarty_tpl->tpl_vars['requestPage'] = new Smarty_variable($_smarty_tpl->getVariable('link')->value->getPaginationLink('manufacturer',$_smarty_tpl->getVariable('manufacturer')->value,false,false,true,false), null, null);?>
		<?php $_smarty_tpl->tpl_vars['requestNb'] = new Smarty_variable($_smarty_tpl->getVariable('link')->value->getPaginationLink('manufacturer',$_smarty_tpl->getVariable('manufacturer')->value,true,false,false,true), null, null);?>
	<?php }elseif(isset($_GET['id_supplier'])&&$_GET['id_supplier']&&isset($_smarty_tpl->getVariable('supplier',null,true,false)->value)){?>
		<?php $_smarty_tpl->tpl_vars['requestPage'] = new Smarty_variable($_smarty_tpl->getVariable('link')->value->getPaginationLink('supplier',$_smarty_tpl->getVariable('supplier')->value,false,false,true,false), null, null);?>
		<?php $_smarty_tpl->tpl_vars['requestNb'] = new Smarty_variable($_smarty_tpl->getVariable('link')->value->getPaginationLink('supplier',$_smarty_tpl->getVariable('supplier')->value,true,false,false,true), null, null);?>
	<?php }else{ ?>
		<?php $_smarty_tpl->tpl_vars['requestPage'] = new Smarty_variable($_smarty_tpl->getVariable('link')->value->getPaginationLink(false,false,false,false,true,false), null, null);?>
		<?php $_smarty_tpl->tpl_vars['requestNb'] = new Smarty_variable($_smarty_tpl->getVariable('link')->value->getPaginationLink(false,false,true,false,false,true), null, null);?>
	<?php }?>
	<!-- Pagination -->
	<div id="pagination" class="pagination">
	<?php if ($_smarty_tpl->getVariable('start')->value!=$_smarty_tpl->getVariable('stop')->value){?>
		<ul class="pagination">
		<?php if ($_smarty_tpl->getVariable('p')->value!=1){?>
			<?php $_smarty_tpl->tpl_vars['p_previous'] = new Smarty_variable($_smarty_tpl->getVariable('p')->value-1, null, null);?>
			<li id="pagination_previous"><a <?php echo $_smarty_tpl->getVariable('no_follow_text')->value;?>
 href="<?php echo $_smarty_tpl->getVariable('link')->value->goPage($_smarty_tpl->getVariable('requestPage')->value,$_smarty_tpl->getVariable('p_previous')->value);?>
">&laquo;&nbsp;<?php echo smartyTranslate(array('s'=>'Previous'),$_smarty_tpl);?>
</a></li>
		<?php }else{ ?>
			<li id="pagination_previous" class="disabled"><span>&laquo;&nbsp;<?php echo smartyTranslate(array('s'=>'Previous'),$_smarty_tpl);?>
</span></li>
		<?php }?>
		<?php if ($_smarty_tpl->getVariable('start')->value>3){?>
			<li><a <?php echo $_smarty_tpl->getVariable('no_follow_text')->value;?>
  href="<?php echo $_smarty_tpl->getVariable('link')->value->goPage($_smarty_tpl->getVariable('requestPage')->value,1);?>
">1</a></li>
			<li class="truncate">...</li>
		<?php }?>
		<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['name'] = 'pagination';
$_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['start'] = (int)$_smarty_tpl->getVariable('start')->value;
$_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('stop')->value+1) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['step'] = ((int)1) == 0 ? 1 : (int)1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['loop'];
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['total']);
?>
			<?php if ($_smarty_tpl->getVariable('p')->value==$_smarty_tpl->getVariable('smarty')->value['section']['pagination']['index']){?>
				<li class="current"><span><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('p')->value,'htmlall','UTF-8');?>
</span></li>
			<?php }else{ ?>
				<li><a <?php echo $_smarty_tpl->getVariable('no_follow_text')->value;?>
 href="<?php echo $_smarty_tpl->getVariable('link')->value->goPage($_smarty_tpl->getVariable('requestPage')->value,$_smarty_tpl->getVariable('smarty')->value['section']['pagination']['index']);?>
"><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('smarty')->value['section']['pagination']['index'],'htmlall','UTF-8');?>
</a></li>
			<?php }?>
		<?php endfor; endif; ?>
		<?php if ($_smarty_tpl->getVariable('pages_nb')->value>$_smarty_tpl->getVariable('stop')->value+2){?>
			<li class="truncate">...</li>
			<li><a href="<?php echo $_smarty_tpl->getVariable('link')->value->goPage($_smarty_tpl->getVariable('requestPage')->value,$_smarty_tpl->getVariable('pages_nb')->value);?>
"><?php echo intval($_smarty_tpl->getVariable('pages_nb')->value);?>
</a></li>
		<?php }?>
		<?php if ($_smarty_tpl->getVariable('pages_nb')->value>1&&$_smarty_tpl->getVariable('p')->value!=$_smarty_tpl->getVariable('pages_nb')->value){?>
			<?php $_smarty_tpl->tpl_vars['p_next'] = new Smarty_variable($_smarty_tpl->getVariable('p')->value+1, null, null);?>
			<li id="pagination_next"><a <?php echo $_smarty_tpl->getVariable('no_follow_text')->value;?>
 href="<?php echo $_smarty_tpl->getVariable('link')->value->goPage($_smarty_tpl->getVariable('requestPage')->value,$_smarty_tpl->getVariable('p_next')->value);?>
"><?php echo smartyTranslate(array('s'=>'Next'),$_smarty_tpl);?>
&nbsp;&raquo;</a></li>
		<?php }else{ ?>
			<li id="pagination_next" class="disabled"><span><?php echo smartyTranslate(array('s'=>'Next'),$_smarty_tpl);?>
&nbsp;&raquo;</span></li>
		<?php }?>
		</ul>
	<?php }?>
	<?php if ($_smarty_tpl->getVariable('nb_products')->value>$_smarty_tpl->getVariable('products_per_page')->value){?>
		<form action="<?php if (!is_array($_smarty_tpl->getVariable('requestNb')->value)){?><?php echo $_smarty_tpl->getVariable('requestNb')->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->getVariable('requestNb')->value['requestUrl'];?>
<?php }?>" method="get" class="pagination">
			<p>
				<?php if (isset($_smarty_tpl->getVariable('search_query',null,true,false)->value)&&$_smarty_tpl->getVariable('search_query')->value){?><input type="hidden" name="search_query" value="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('search_query')->value,'htmlall','UTF-8');?>
" /><?php }?>
				<?php if (isset($_smarty_tpl->getVariable('tag',null,true,false)->value)&&$_smarty_tpl->getVariable('tag')->value&&!is_array($_smarty_tpl->getVariable('tag')->value)){?><input type="hidden" name="tag" value="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('tag')->value,'htmlall','UTF-8');?>
" /><?php }?>
				<input type="submit" class="button_mini" value="<?php echo smartyTranslate(array('s'=>'OK'),$_smarty_tpl);?>
" />
				<label for="nb_item"><?php echo smartyTranslate(array('s'=>'items:'),$_smarty_tpl);?>
</label>
				<select name="n" id="nb_item">
				<?php $_smarty_tpl->tpl_vars["lastnValue"] = new Smarty_variable("0", null, null);?>
				<?php  $_smarty_tpl->tpl_vars['nValue'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('nArray')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['nValue']->key => $_smarty_tpl->tpl_vars['nValue']->value){
?>
					<?php if ($_smarty_tpl->getVariable('lastnValue')->value<=$_smarty_tpl->getVariable('nb_products')->value){?>
						<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['nValue']->value,'htmlall','UTF-8');?>
" <?php if ($_smarty_tpl->getVariable('n')->value==$_smarty_tpl->tpl_vars['nValue']->value){?>selected="selected"<?php }?>><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['nValue']->value,'htmlall','UTF-8');?>
</option>
					<?php }?>
					<?php $_smarty_tpl->tpl_vars["lastnValue"] = new Smarty_variable($_smarty_tpl->tpl_vars['nValue']->value, null, null);?>
				<?php }} ?>
				</select>
				<?php if (is_array($_smarty_tpl->getVariable('requestNb')->value)){?>
					<?php  $_smarty_tpl->tpl_vars['requestValue'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['requestKey'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('requestNb')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['requestValue']->key => $_smarty_tpl->tpl_vars['requestValue']->value){
 $_smarty_tpl->tpl_vars['requestKey']->value = $_smarty_tpl->tpl_vars['requestValue']->key;
?>
						<?php if ($_smarty_tpl->tpl_vars['requestKey']->value!='requestUrl'){?>
							<input type="hidden" name="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['requestKey']->value,'htmlall','UTF-8');?>
" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['requestValue']->value,'htmlall','UTF-8');?>
" />
						<?php }?>
					<?php }} ?>
				<?php }?>
			</p>
		</form>
	<?php }?>
	</div>
	<!-- /Pagination -->
<?php }?>
