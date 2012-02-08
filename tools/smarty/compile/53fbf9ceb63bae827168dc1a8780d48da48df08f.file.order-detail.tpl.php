<?php /* Smarty version Smarty-3.0.7, created on 2012-01-22 00:31:34
         compiled from "/web/htdocs/www.eatalianfood.com/home/themes/papple/order-detail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3195350944f1b9f36934470-81973151%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '53fbf9ceb63bae827168dc1a8780d48da48df08f' => 
    array (
      0 => '/web/htdocs/www.eatalianfood.com/home/themes/papple/order-detail.tpl',
      1 => 1326587923,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3195350944f1b9f36934470-81973151',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include '/web/htdocs/www.eatalianfood.com/home/tools/smarty/plugins/modifier.escape.php';
if (!is_callable('smarty_function_counter')) include '/web/htdocs/www.eatalianfood.com/home/tools/smarty/plugins/function.counter.php';
?>

<script type="text/javascript">
// <![CDATA[
		
//]]>
</script>

<form action="<?php if (isset($_smarty_tpl->getVariable('opc',null,true,false)->value)&&$_smarty_tpl->getVariable('opc')->value){?><?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('order-opc.php',true);?>
<?php }else{ ?><?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('order.php',true);?>
<?php }?>" method="post" class="submit">
	<div>
		<input type="hidden" value="<?php echo $_smarty_tpl->getVariable('order')->value->id;?>
" name="id_order"/>
		<h4>
			<?php echo smartyTranslate(array('s'=>'Order placed on'),$_smarty_tpl);?>
 <?php echo Tools::dateFormat(array('date'=>$_smarty_tpl->getVariable('order')->value->date_add,'full'=>0),$_smarty_tpl);?>

			<input type="submit" value="<?php echo smartyTranslate(array('s'=>'Reorder'),$_smarty_tpl);?>
" name="submitReorder" class="button exclusive" style="float:right"/>
		</h4>
	</div>
</form>

<?php if (count($_smarty_tpl->getVariable('order_history')->value)){?>
<p class="bold"><?php echo smartyTranslate(array('s'=>'Follow your order step by step'),$_smarty_tpl);?>
</p>
<div class="table_block">
	<table class="detail_step_by_step std">
		<thead>
			<tr>
				<th class="first_item"><?php echo smartyTranslate(array('s'=>'Date'),$_smarty_tpl);?>
</th>
				<th class="last_item"><?php echo smartyTranslate(array('s'=>'Status'),$_smarty_tpl);?>
</th>
			</tr>
		</thead>
		<tbody>
		<?php  $_smarty_tpl->tpl_vars['state'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('order_history')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['state']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['state']->iteration=0;
 $_smarty_tpl->tpl_vars['state']->index=-1;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["orderStates"]['index']=-1;
if ($_smarty_tpl->tpl_vars['state']->total > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['state']->key => $_smarty_tpl->tpl_vars['state']->value){
 $_smarty_tpl->tpl_vars['state']->iteration++;
 $_smarty_tpl->tpl_vars['state']->index++;
 $_smarty_tpl->tpl_vars['state']->first = $_smarty_tpl->tpl_vars['state']->index === 0;
 $_smarty_tpl->tpl_vars['state']->last = $_smarty_tpl->tpl_vars['state']->iteration === $_smarty_tpl->tpl_vars['state']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["orderStates"]['first'] = $_smarty_tpl->tpl_vars['state']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["orderStates"]['index']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["orderStates"]['last'] = $_smarty_tpl->tpl_vars['state']->last;
?>
			<tr class="<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['orderStates']['first']){?>first_item<?php }elseif($_smarty_tpl->getVariable('smarty')->value['foreach']['orderStates']['last']){?>last_item<?php }?> <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['orderStates']['index']%2){?>alternate_item<?php }else{ ?>item<?php }?>">
				<td><?php echo Tools::dateFormat(array('date'=>$_smarty_tpl->tpl_vars['state']->value['date_add'],'full'=>1),$_smarty_tpl);?>
</td>
				<td><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['state']->value['ostate_name'],'htmlall','UTF-8');?>
</td>
			</tr>
		<?php }} ?>
		</tbody>
	</table>
</div>
<?php }?>

<?php if (isset($_smarty_tpl->getVariable('followup',null,true,false)->value)){?>
<p class="bold"><?php echo smartyTranslate(array('s'=>'Click the following link to track the delivery of your order'),$_smarty_tpl);?>
</p>
<a href="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('followup')->value,'htmlall','UTF-8');?>
"><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('followup')->value,'htmlall','UTF-8');?>
</a>
<?php }?>

<p class="bold"><?php echo smartyTranslate(array('s'=>'Order:'),$_smarty_tpl);?>
 <span class="color-myaccount"><?php echo smartyTranslate(array('s'=>'#'),$_smarty_tpl);?>
<?php echo sprintf("%06d",$_smarty_tpl->getVariable('order')->value->id);?>
</span></p>
<?php if ($_smarty_tpl->getVariable('carrier')->value->id){?><p class="bold"><?php echo smartyTranslate(array('s'=>'Carrier:'),$_smarty_tpl);?>
 <?php if ($_smarty_tpl->getVariable('carrier')->value->name=="0"){?><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('shop_name')->value,'htmlall','UTF-8');?>
<?php }else{ ?><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('carrier')->value->name,'htmlall','UTF-8');?>
<?php }?></p><?php }?>
<p class="bold"><?php echo smartyTranslate(array('s'=>'Payment method:'),$_smarty_tpl);?>
 <span class="color-myaccount"><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('order')->value->payment,'htmlall','UTF-8');?>
</span></p>
<?php if ($_smarty_tpl->getVariable('invoice')->value&&$_smarty_tpl->getVariable('invoiceAllowed')->value){?>
<p>
	<img src="<?php echo $_smarty_tpl->getVariable('img_dir')->value;?>
icon/pdf.gif" alt="" class="icon" />
	<a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('pdf-invoice.php',true);?>
?id_order=<?php echo intval($_smarty_tpl->getVariable('order')->value->id);?>
<?php if ($_smarty_tpl->getVariable('is_guest')->value){?>&secure_key=<?php echo $_smarty_tpl->getVariable('order')->value->secure_key;?>
<?php }?>"><?php echo smartyTranslate(array('s'=>'Download your invoice as a .PDF file'),$_smarty_tpl);?>
</a>
</p>
<?php }?>
<?php if ($_smarty_tpl->getVariable('order')->value->recyclable){?>
<p><img src="<?php echo $_smarty_tpl->getVariable('img_dir')->value;?>
icon/recyclable.gif" alt="" class="icon" />&nbsp;<?php echo smartyTranslate(array('s'=>'You have given permission to receive your order in recycled packaging.'),$_smarty_tpl);?>
</p>
<?php }?>
<?php if ($_smarty_tpl->getVariable('order')->value->gift){?>
	<p><img src="<?php echo $_smarty_tpl->getVariable('img_dir')->value;?>
icon/gift.gif" alt="" class="icon" />&nbsp;<?php echo smartyTranslate(array('s'=>'You requested gift-wrapping for your order.'),$_smarty_tpl);?>
</p>
	<p><?php echo smartyTranslate(array('s'=>'Message:'),$_smarty_tpl);?>
 <?php echo nl2br($_smarty_tpl->getVariable('order')->value->gift_message);?>
</p>
<?php }?>
<br />
<ul class="address item">
	<li class="address_title"><?php echo smartyTranslate(array('s'=>'Invoice'),$_smarty_tpl);?>
</li>
	<?php  $_smarty_tpl->tpl_vars['field_item'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('inv_adr_fields')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['field_item']->key => $_smarty_tpl->tpl_vars['field_item']->value){
?>
		<?php if ($_smarty_tpl->tpl_vars['field_item']->value=="company"&&isset($_smarty_tpl->getVariable('address_invoice',null,true,false)->value->company)){?><li class="address_company"><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('address_invoice')->value->company,'htmlall','UTF-8');?>
</li>
		<?php }elseif($_smarty_tpl->tpl_vars['field_item']->value=="address2"&&$_smarty_tpl->getVariable('address_invoice')->value->address2){?><li class="address_address2"><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('address_invoice')->value->address2,'htmlall','UTF-8');?>
</li>
		<?php }elseif($_smarty_tpl->tpl_vars['field_item']->value=="phone_mobile"&&$_smarty_tpl->getVariable('address_invoice')->value->phone_mobile){?><li class="address_phone_mobile"><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('address_invoice')->value->phone_mobile,'htmlall','UTF-8');?>
</li>
		<?php }else{ ?>
				<?php $_smarty_tpl->tpl_vars['address_words'] = new Smarty_variable(explode(" ",$_smarty_tpl->tpl_vars['field_item']->value), null, null);?> 
				<li><?php  $_smarty_tpl->tpl_vars['word_item'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('address_words')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['word_item']->index=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['word_item']->key => $_smarty_tpl->tpl_vars['word_item']->value){
 $_smarty_tpl->tpl_vars['word_item']->index++;
 $_smarty_tpl->tpl_vars['word_item']->first = $_smarty_tpl->tpl_vars['word_item']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["word_loop"]['first'] = $_smarty_tpl->tpl_vars['word_item']->first;
?><?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['word_loop']['first']){?> <?php }?><span class="address_<?php echo $_smarty_tpl->tpl_vars['word_item']->value;?>
"><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('invoiceAddressFormatedValues')->value[$_smarty_tpl->tpl_vars['word_item']->value],'htmlall','UTF-8');?>
</span><?php }} ?></li>
		<?php }?>
	
	<?php }} ?>
</ul>
<ul class="address alternate_item">
	<li class="address_title"><?php echo smartyTranslate(array('s'=>'Delivery'),$_smarty_tpl);?>
</li>
	<?php  $_smarty_tpl->tpl_vars['field_item'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('dlv_adr_fields')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['field_item']->key => $_smarty_tpl->tpl_vars['field_item']->value){
?>
		<?php if ($_smarty_tpl->tpl_vars['field_item']->value=="company"&&isset($_smarty_tpl->getVariable('address_delivery',null,true,false)->value->company)){?><li class="address_company"><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('address_delivery')->value->company,'htmlall','UTF-8');?>
</li>
		<?php }elseif($_smarty_tpl->tpl_vars['field_item']->value=="address2"&&$_smarty_tpl->getVariable('address_delivery')->value->address2){?><li class="address_address2"><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('address_delivery')->value->address2,'htmlall','UTF-8');?>
</li>
		<?php }elseif($_smarty_tpl->tpl_vars['field_item']->value=="phone_mobile"&&$_smarty_tpl->getVariable('address_delivery')->value->phone_mobile){?><li class="address_phone_mobile"><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('address_delivery')->value->phone_mobile,'htmlall','UTF-8');?>
</li>
		<?php }else{ ?>
				<?php $_smarty_tpl->tpl_vars['address_words'] = new Smarty_variable(explode(" ",$_smarty_tpl->tpl_vars['field_item']->value), null, null);?> 
				<li><?php  $_smarty_tpl->tpl_vars['word_item'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('address_words')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['word_item']->index=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['word_item']->key => $_smarty_tpl->tpl_vars['word_item']->value){
 $_smarty_tpl->tpl_vars['word_item']->index++;
 $_smarty_tpl->tpl_vars['word_item']->first = $_smarty_tpl->tpl_vars['word_item']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["word_loop"]['first'] = $_smarty_tpl->tpl_vars['word_item']->first;
?><?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['word_loop']['first']){?> <?php }?><span class="address_<?php echo $_smarty_tpl->tpl_vars['word_item']->value;?>
"><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('deliveryAddressFormatedValues')->value[$_smarty_tpl->tpl_vars['word_item']->value],'htmlall','UTF-8');?>
</span><?php }} ?></li>
		<?php }?>
	<?php }} ?>
</ul>
<?php echo $_smarty_tpl->getVariable('HOOK_ORDERDETAILDISPLAYED')->value;?>

<?php if (!$_smarty_tpl->getVariable('is_guest')->value){?><form action="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('order-follow.php',true);?>
" method="post"><?php }?>
<div id="order-detail-content" class="table_block">
	<table class="std">
		<thead>
			<tr>
				<?php if ($_smarty_tpl->getVariable('return_allowed')->value){?><th class="first_item"><input type="checkbox" /></th><?php }?>
				<th class="<?php if ($_smarty_tpl->getVariable('return_allowed')->value){?>item<?php }else{ ?>first_item<?php }?>"><?php echo smartyTranslate(array('s'=>'Reference'),$_smarty_tpl);?>
</th>
				<th class="item"><?php echo smartyTranslate(array('s'=>'Product'),$_smarty_tpl);?>
</th>
				<th class="item"><?php echo smartyTranslate(array('s'=>'Quantity'),$_smarty_tpl);?>
</th>
				<th class="item"><?php echo smartyTranslate(array('s'=>'Unit price'),$_smarty_tpl);?>
</th>
				<th class="last_item"><?php echo smartyTranslate(array('s'=>'Total price'),$_smarty_tpl);?>
</th>
			</tr>
		</thead>
		<tfoot>
			<?php if ($_smarty_tpl->getVariable('priceDisplay')->value&&$_smarty_tpl->getVariable('use_tax')->value){?>
				<tr class="item">
					<td colspan="<?php if ($_smarty_tpl->getVariable('return_allowed')->value){?>6<?php }else{ ?>5<?php }?>">
						<?php echo smartyTranslate(array('s'=>'Total products (tax excl.):'),$_smarty_tpl);?>
 <span class="price"><?php echo Product::displayWtPriceWithCurrency(array('price'=>$_smarty_tpl->getVariable('order')->value->getTotalProductsWithoutTaxes(),'currency'=>$_smarty_tpl->getVariable('currency')->value),$_smarty_tpl);?>
</span>
					</td>
				</tr>
			<?php }?>
			<tr class="item">
				<td colspan="<?php if ($_smarty_tpl->getVariable('return_allowed')->value){?>6<?php }else{ ?>5<?php }?>">
					<?php echo smartyTranslate(array('s'=>'Total products'),$_smarty_tpl);?>
 <?php if ($_smarty_tpl->getVariable('use_tax')->value){?><?php echo smartyTranslate(array('s'=>'(tax incl.)'),$_smarty_tpl);?>
<?php }?>: <span class="price"><?php echo Product::displayWtPriceWithCurrency(array('price'=>$_smarty_tpl->getVariable('order')->value->getTotalProductsWithTaxes(),'currency'=>$_smarty_tpl->getVariable('currency')->value),$_smarty_tpl);?>
</span>
				</td>
			</tr>
			<?php if ($_smarty_tpl->getVariable('order')->value->total_discounts>0){?>
			<tr class="item">
				<td colspan="<?php if ($_smarty_tpl->getVariable('return_allowed')->value){?>6<?php }else{ ?>5<?php }?>">
					<?php echo smartyTranslate(array('s'=>'Total vouchers:'),$_smarty_tpl);?>
 <span class="price-discount"><?php echo Product::displayWtPriceWithCurrency(array('price'=>$_smarty_tpl->getVariable('order')->value->total_discounts,'currency'=>$_smarty_tpl->getVariable('currency')->value),$_smarty_tpl);?>
</span>
				</td>
			</tr>
			<?php }?>
			<?php if ($_smarty_tpl->getVariable('order')->value->total_wrapping>0){?>
			<tr class="item">
				<td colspan="<?php if ($_smarty_tpl->getVariable('return_allowed')->value){?>6<?php }else{ ?>5<?php }?>">
					<?php echo smartyTranslate(array('s'=>'Total gift-wrapping:'),$_smarty_tpl);?>
 <span class="price-wrapping"><?php echo Product::displayWtPriceWithCurrency(array('price'=>$_smarty_tpl->getVariable('order')->value->total_wrapping,'currency'=>$_smarty_tpl->getVariable('currency')->value),$_smarty_tpl);?>
</span>
				</td>
			</tr>
			<?php }?>
			<tr class="item">
				<td colspan="<?php if ($_smarty_tpl->getVariable('return_allowed')->value){?>6<?php }else{ ?>5<?php }?>">
					<?php echo smartyTranslate(array('s'=>'Total shipping'),$_smarty_tpl);?>
 <?php if ($_smarty_tpl->getVariable('use_tax')->value){?><?php echo smartyTranslate(array('s'=>'(tax incl.)'),$_smarty_tpl);?>
<?php }?>: <span class="price-shipping"><?php echo Product::displayWtPriceWithCurrency(array('price'=>$_smarty_tpl->getVariable('order')->value->total_shipping,'currency'=>$_smarty_tpl->getVariable('currency')->value),$_smarty_tpl);?>
</span>
				</td>
			</tr>
			<tr class="item">
				<td colspan="<?php if ($_smarty_tpl->getVariable('return_allowed')->value){?>6<?php }else{ ?>5<?php }?>">
					<?php echo smartyTranslate(array('s'=>'Total:'),$_smarty_tpl);?>
 <span class="price"><?php echo Product::displayWtPriceWithCurrency(array('price'=>$_smarty_tpl->getVariable('order')->value->total_paid,'currency'=>$_smarty_tpl->getVariable('currency')->value),$_smarty_tpl);?>
</span>
				</td>
			</tr>
		</tfoot>
		<tbody>
		<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('products')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['index']++;
?>
			<?php if (!isset($_smarty_tpl->tpl_vars['product']->value['deleted'])){?>
				<?php $_smarty_tpl->tpl_vars['productId'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['product_id'], null, null);?>
				<?php $_smarty_tpl->tpl_vars['productAttributeId'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['product_attribute_id'], null, null);?>
				<?php if (isset($_smarty_tpl->getVariable('customizedDatas',null,true,false)->value[$_smarty_tpl->getVariable('productId',null,true,false)->value][$_smarty_tpl->getVariable('productAttributeId',null,true,false)->value])){?><?php $_smarty_tpl->tpl_vars['productQuantity'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['product_quantity']-$_smarty_tpl->tpl_vars['product']->value['customizationQuantityTotal'], null, null);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['productQuantity'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['product_quantity'], null, null);?><?php }?>
				<!-- Customized products -->
				<?php if (isset($_smarty_tpl->getVariable('customizedDatas',null,true,false)->value[$_smarty_tpl->getVariable('productId',null,true,false)->value][$_smarty_tpl->getVariable('productAttributeId',null,true,false)->value])){?>
					<tr class="item">
						<?php if ($_smarty_tpl->getVariable('return_allowed')->value){?><td class="order_cb"></td><?php }?>
						<td><label for="cb_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_order_detail']);?>
"><?php if ($_smarty_tpl->tpl_vars['product']->value['product_reference']){?><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['product_reference'],'htmlall','UTF-8');?>
<?php }else{ ?>--<?php }?></label></td>
						<td class="bold">
							<label for="cb_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_order_detail']);?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['product_name'],'htmlall','UTF-8');?>
</label>
						</td>
						<td><input class="order_qte_input"  name="order_qte_input[<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['products']['index'];?>
]" type="text" size="2" value="<?php echo intval($_smarty_tpl->tpl_vars['product']->value['customizationQuantityTotal']);?>
" /><label for="cb_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_order_detail']);?>
"><span class="order_qte_span editable"><?php echo intval($_smarty_tpl->tpl_vars['product']->value['customizationQuantityTotal']);?>
</span></label></td>
						<td>
							<label for="cb_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_order_detail']);?>
">
								<?php if ($_smarty_tpl->getVariable('group_use_tax')->value){?>
									<?php echo Product::convertPriceWithCurrency(array('price'=>$_smarty_tpl->tpl_vars['product']->value['product_price_wt'],'currency'=>$_smarty_tpl->getVariable('currency')->value,'convert'=>0),$_smarty_tpl);?>

								<?php }else{ ?>
									<?php echo Product::convertPriceWithCurrency(array('price'=>$_smarty_tpl->tpl_vars['product']->value['product_price'],'currency'=>$_smarty_tpl->getVariable('currency')->value,'convert'=>0),$_smarty_tpl);?>

								<?php }?>
							</label>
						</td>
						<td>
							<label for="cb_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_order_detail']);?>
">
								<?php if (isset($_smarty_tpl->getVariable('customizedDatas',null,true,false)->value[$_smarty_tpl->getVariable('productId',null,true,false)->value][$_smarty_tpl->getVariable('productAttributeId',null,true,false)->value])){?>
									<?php if ($_smarty_tpl->getVariable('group_use_tax')->value){?>
										<?php echo Product::convertPriceWithCurrency(array('price'=>$_smarty_tpl->tpl_vars['product']->value['total_customization_wt'],'currency'=>$_smarty_tpl->getVariable('currency')->value,'convert'=>0),$_smarty_tpl);?>

									<?php }else{ ?>
										<?php echo Product::convertPriceWithCurrency(array('price'=>$_smarty_tpl->tpl_vars['product']->value['total_customization'],'currency'=>$_smarty_tpl->getVariable('currency')->value,'convert'=>0),$_smarty_tpl);?>

									<?php }?>
								<?php }else{ ?>
									<?php if ($_smarty_tpl->getVariable('group_use_tax')->value){?>
										<?php echo Product::convertPriceWithCurrency(array('price'=>$_smarty_tpl->tpl_vars['product']->value['total_wt'],'currency'=>$_smarty_tpl->getVariable('currency')->value,'convert'=>0),$_smarty_tpl);?>

									<?php }else{ ?>
										<?php echo Product::convertPriceWithCurrency(array('price'=>$_smarty_tpl->tpl_vars['product']->value['total_price'],'currency'=>$_smarty_tpl->getVariable('currency')->value,'convert'=>0),$_smarty_tpl);?>

									<?php }?>
								<?php }?>
							</label>
						</td>
					</tr>
					<?php  $_smarty_tpl->tpl_vars['customization'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['customizationId'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('customizedDatas')->value[$_smarty_tpl->getVariable('productId')->value][$_smarty_tpl->getVariable('productAttributeId')->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['customization']->key => $_smarty_tpl->tpl_vars['customization']->value){
 $_smarty_tpl->tpl_vars['customizationId']->value = $_smarty_tpl->tpl_vars['customization']->key;
?>
					<tr class="alternate_item">
						<?php if ($_smarty_tpl->getVariable('return_allowed')->value){?><td class="order_cb"><input type="checkbox" id="cb_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_order_detail']);?>
" name="customization_ids[<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_order_detail']);?>
][]" value="<?php echo intval($_smarty_tpl->tpl_vars['customizationId']->value);?>
" /></td><?php }?>
						<td colspan="2">
						<?php  $_smarty_tpl->tpl_vars['datas'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['customization']->value['datas']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['datas']->key => $_smarty_tpl->tpl_vars['datas']->value){
 $_smarty_tpl->tpl_vars['type']->value = $_smarty_tpl->tpl_vars['datas']->key;
?>
							<?php if ($_smarty_tpl->tpl_vars['type']->value==$_smarty_tpl->getVariable('CUSTOMIZE_FILE')->value){?>
							<ul class="customizationUploaded">
								<?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['datas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value){
?>
									<li><img src="<?php echo $_smarty_tpl->getVariable('pic_dir')->value;?>
<?php echo $_smarty_tpl->tpl_vars['data']->value['value'];?>
_small" alt="" class="customizationUploaded" /></li>
								<?php }} ?>
							</ul>
							<?php }elseif($_smarty_tpl->tpl_vars['type']->value==$_smarty_tpl->getVariable('CUSTOMIZE_TEXTFIELD')->value){?>
							<ul class="typedText"><?php echo smarty_function_counter(array('start'=>0,'print'=>false),$_smarty_tpl);?>

								<?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['datas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value){
?>
									<?php $_smarty_tpl->tpl_vars['customizationFieldName'] = new Smarty_variable(("Text #").($_smarty_tpl->tpl_vars['data']->value['id_customization_field']), null, null);?>
									<li><?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['name'])===null||$tmp==='' ? $_smarty_tpl->getVariable('customizationFieldName')->value : $tmp);?>
<?php echo smartyTranslate(array('s'=>':'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['data']->value['value'];?>
</li>
								<?php }} ?>
							</ul>
							<?php }?>
						<?php }} ?>
						</td>
						<td>
							<input class="order_qte_input" name="customization_qty_input[<?php echo intval($_smarty_tpl->tpl_vars['customizationId']->value);?>
]" type="text" size="2" value="<?php echo intval($_smarty_tpl->tpl_vars['customization']->value['quantity']);?>
" /><label for="cb_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_order_detail']);?>
"><span class="order_qte_span editable"><?php echo intval($_smarty_tpl->tpl_vars['customization']->value['quantity']);?>
</span></label>
						</td>
						<td colspan="2"></td>
					</tr>
					<?php }} ?>
				<?php }?>
				<!-- Classic products -->
				<?php if ($_smarty_tpl->tpl_vars['product']->value['product_quantity']>$_smarty_tpl->tpl_vars['product']->value['customizationQuantityTotal']){?>
					<tr class="item">
						<?php if ($_smarty_tpl->getVariable('return_allowed')->value){?><td class="order_cb"><input type="checkbox" id="cb_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_order_detail']);?>
" name="ids_order_detail[<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_order_detail']);?>
]" value="<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_order_detail']);?>
" /></td><?php }?>
						<td><label for="cb_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_order_detail']);?>
"><?php if ($_smarty_tpl->tpl_vars['product']->value['product_reference']){?><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['product_reference'],'htmlall','UTF-8');?>
<?php }else{ ?>--<?php }?></label></td>
						<td class="bold">
							<label for="cb_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_order_detail']);?>
">
								<?php if ($_smarty_tpl->tpl_vars['product']->value['download_hash']&&$_smarty_tpl->getVariable('invoice')->value){?>
									<a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('get-file.php',true);?>
?key=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['filename'],'htmlall','UTF-8');?>
-<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['download_hash'],'htmlall','UTF-8');?>
<?php if (isset($_smarty_tpl->getVariable('is_guest',null,true,false)->value)&&$_smarty_tpl->getVariable('is_guest')->value){?>&id_order=<?php echo $_smarty_tpl->getVariable('order')->value->id;?>
&secure_key=<?php echo $_smarty_tpl->getVariable('order')->value->secure_key;?>
<?php }?>" title="<?php echo smartyTranslate(array('s'=>'download this product'),$_smarty_tpl);?>
">
										<img src="<?php echo $_smarty_tpl->getVariable('img_dir')->value;?>
icon/download_product.gif" class="icon" alt="<?php echo smartyTranslate(array('s'=>'Download product'),$_smarty_tpl);?>
" />
									</a>
									<a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('get-file.php',true);?>
?key=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['filename'],'htmlall','UTF-8');?>
-<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['download_hash'],'htmlall','UTF-8');?>
<?php if (isset($_smarty_tpl->getVariable('is_guest',null,true,false)->value)&&$_smarty_tpl->getVariable('is_guest')->value){?>&id_order=<?php echo $_smarty_tpl->getVariable('order')->value->id;?>
&secure_key=<?php echo $_smarty_tpl->getVariable('order')->value->secure_key;?>
<?php }?>" title="<?php echo smartyTranslate(array('s'=>'download this product'),$_smarty_tpl);?>
">
										<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['product_name'],'htmlall','UTF-8');?>

									</a>
								<?php }else{ ?>
									<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['product_name'],'htmlall','UTF-8');?>

								<?php }?>
							</label>
						</td>
						<td><input class="order_qte_input" name="order_qte_input[<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_order_detail']);?>
]" type="text" size="2" value="<?php echo intval($_smarty_tpl->getVariable('productQuantity')->value);?>
" /><label for="cb_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_order_detail']);?>
"><span class="order_qte_span editable"><?php echo intval($_smarty_tpl->getVariable('productQuantity')->value);?>
</span></label></td>
						<td>
							<label for="cb_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_order_detail']);?>
">
							<?php if ($_smarty_tpl->getVariable('group_use_tax')->value){?>
								<?php echo Product::convertPriceWithCurrency(array('price'=>$_smarty_tpl->tpl_vars['product']->value['product_price_wt'],'currency'=>$_smarty_tpl->getVariable('currency')->value,'convert'=>0),$_smarty_tpl);?>

							<?php }else{ ?>
								<?php echo Product::convertPriceWithCurrency(array('price'=>$_smarty_tpl->tpl_vars['product']->value['product_price'],'currency'=>$_smarty_tpl->getVariable('currency')->value,'convert'=>0),$_smarty_tpl);?>

							<?php }?>
							</label>
						</td>
						<td>
							<label for="cb_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_order_detail']);?>
">
							<?php if ($_smarty_tpl->getVariable('group_use_tax')->value){?>
								<?php echo Product::convertPriceWithCurrency(array('price'=>$_smarty_tpl->tpl_vars['product']->value['total_wt'],'currency'=>$_smarty_tpl->getVariable('currency')->value,'convert'=>0),$_smarty_tpl);?>

							<?php }else{ ?>
								<?php echo Product::convertPriceWithCurrency(array('price'=>$_smarty_tpl->tpl_vars['product']->value['total_price'],'currency'=>$_smarty_tpl->getVariable('currency')->value,'convert'=>0),$_smarty_tpl);?>

							<?php }?>
							</label>
						</td>
					</tr>
				<?php }?>
			<?php }?>
		<?php }} ?>
		<?php  $_smarty_tpl->tpl_vars['discount'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('discounts')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['discount']->key => $_smarty_tpl->tpl_vars['discount']->value){
?>
			<tr class="item">
				<td><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['discount']->value['name'],'htmlall','UTF-8');?>
</td>
				<td><?php echo smartyTranslate(array('s'=>'Voucher:'),$_smarty_tpl);?>
 <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['discount']->value['name'],'htmlall','UTF-8');?>
</td>
				<td><span class="order_qte_span editable">1</span></td>
				<td>&nbsp;</td>
				<td><?php if ($_smarty_tpl->tpl_vars['discount']->value['value']!=0.00){?><?php echo smartyTranslate(array('s'=>'-'),$_smarty_tpl);?>
<?php }?><?php echo Product::convertPriceWithCurrency(array('price'=>$_smarty_tpl->tpl_vars['discount']->value['value'],'currency'=>$_smarty_tpl->getVariable('currency')->value,'convert'=>0),$_smarty_tpl);?>
</td>
				<?php if ($_smarty_tpl->getVariable('return_allowed')->value){?>
				<td>&nbsp;</td>
				<?php }?>
			</tr>
		<?php }} ?>
		</tbody>
	</table>
</div>
<br />
<?php if (!$_smarty_tpl->getVariable('is_guest')->value){?>
	<?php if ($_smarty_tpl->getVariable('return_allowed')->value){?>
	<p class="bold"><?php echo smartyTranslate(array('s'=>'Merchandise return'),$_smarty_tpl);?>
</p>
	<p><?php echo smartyTranslate(array('s'=>'If you wish to return one or more products, please mark the corresponding boxes and provide an explanation for the return. Then click the button below.'),$_smarty_tpl);?>
</p>
	<p class="textarea">
		<textarea cols="67" rows="3" name="returnText"></textarea>
	</p>
	<p class="submit">
		<input type="submit" value="<?php echo smartyTranslate(array('s'=>'Make a RMA slip'),$_smarty_tpl);?>
" name="submitReturnMerchandise" class="button_large" />
		<input type="hidden" class="hidden" value="<?php echo intval($_smarty_tpl->getVariable('order')->value->id);?>
" name="id_order" />
	</p>
	<br />
	<?php }?>
	</form>

	<?php if (count($_smarty_tpl->getVariable('messages')->value)){?>
	<p class="bold"><?php echo smartyTranslate(array('s'=>'Messages'),$_smarty_tpl);?>
</p>
	<div class="table_block">
		<table class="detail_step_by_step std">
			<thead>
				<tr>
					<th class="first_item" style="width:150px;"><?php echo smartyTranslate(array('s'=>'From'),$_smarty_tpl);?>
</th>
					<th class="last_item"><?php echo smartyTranslate(array('s'=>'Message'),$_smarty_tpl);?>
</th>
				</tr>
			</thead>
			<tbody>
			<?php  $_smarty_tpl->tpl_vars['message'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('messages')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['message']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['message']->iteration=0;
 $_smarty_tpl->tpl_vars['message']->index=-1;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["messageList"]['index']=-1;
if ($_smarty_tpl->tpl_vars['message']->total > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['message']->key => $_smarty_tpl->tpl_vars['message']->value){
 $_smarty_tpl->tpl_vars['message']->iteration++;
 $_smarty_tpl->tpl_vars['message']->index++;
 $_smarty_tpl->tpl_vars['message']->first = $_smarty_tpl->tpl_vars['message']->index === 0;
 $_smarty_tpl->tpl_vars['message']->last = $_smarty_tpl->tpl_vars['message']->iteration === $_smarty_tpl->tpl_vars['message']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["messageList"]['first'] = $_smarty_tpl->tpl_vars['message']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["messageList"]['index']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["messageList"]['last'] = $_smarty_tpl->tpl_vars['message']->last;
?>
				<tr class="<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['messageList']['first']){?>first_item<?php }elseif($_smarty_tpl->getVariable('smarty')->value['foreach']['messageList']['last']){?>last_item<?php }?> <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['messageList']['index']%2){?>alternate_item<?php }else{ ?>item<?php }?>">
					<td>
						<?php if (isset($_smarty_tpl->tpl_vars['message']->value['ename'])&&$_smarty_tpl->tpl_vars['message']->value['ename']){?>
							<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['message']->value['efirstname'],'htmlall','UTF-8');?>
 <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['message']->value['elastname'],'htmlall','UTF-8');?>

						<?php }elseif($_smarty_tpl->tpl_vars['message']->value['clastname']){?>
							<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['message']->value['cfirstname'],'htmlall','UTF-8');?>
 <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['message']->value['clastname'],'htmlall','UTF-8');?>

						<?php }else{ ?>
							<b><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('shop_name')->value,'htmlall','UTF-8');?>
</b>
						<?php }?>
						<br />
						<?php echo Tools::dateFormat(array('date'=>$_smarty_tpl->tpl_vars['message']->value['date_add'],'full'=>1),$_smarty_tpl);?>

					</td>
					<td><?php echo nl2br($_smarty_tpl->tpl_vars['message']->value['message']);?>
</td>
				</tr>
			<?php }} ?>
			</tbody>
		</table>
	</div>
	<?php }?>
	<?php if (isset($_smarty_tpl->getVariable('errors',null,true,false)->value)&&$_smarty_tpl->getVariable('errors')->value){?>
		<div class="error">
			<p><?php if (count($_smarty_tpl->getVariable('errors')->value)>1){?><?php echo smartyTranslate(array('s'=>'There are'),$_smarty_tpl);?>
<?php }else{ ?><?php echo smartyTranslate(array('s'=>'There is'),$_smarty_tpl);?>
<?php }?> <?php echo count($_smarty_tpl->getVariable('errors')->value);?>
 <?php if (count($_smarty_tpl->getVariable('errors')->value)>1){?><?php echo smartyTranslate(array('s'=>'errors'),$_smarty_tpl);?>
<?php }else{ ?><?php echo smartyTranslate(array('s'=>'error'),$_smarty_tpl);?>
<?php }?> :</p>
			<ol>
			<?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('errors')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['error']->key;
?>
				<li><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</li>
			<?php }} ?>
			</ol>
		</div>
	<?php }?>
	<form action="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('order-detail.php',true);?>
" method="post" class="std" id="sendOrderMessage">
		<p class="bold"><?php echo smartyTranslate(array('s'=>'Add a message:'),$_smarty_tpl);?>
</p>
		<p><?php echo smartyTranslate(array('s'=>'If you would like to add a comment about your order, please write it below.'),$_smarty_tpl);?>
</p>
		<p class="textarea">
			<textarea cols="67" rows="3" name="msgText"></textarea>
		</p>
		<p class="submit">
			<input type="hidden" name="id_order" value="<?php echo intval($_smarty_tpl->getVariable('order')->value->id);?>
" />
			<input type="submit" class="button" name="submitMessage" value="<?php echo smartyTranslate(array('s'=>'Send'),$_smarty_tpl);?>
"/>
		</p>
	</form>
<?php }else{ ?>
<p><img src="<?php echo $_smarty_tpl->getVariable('img_dir')->value;?>
icon/infos.gif" alt="" class="icon" />&nbsp;<?php echo smartyTranslate(array('s'=>'You can\'t make a merchandise return with a guest account'),$_smarty_tpl);?>
</p>
<?php }?>
