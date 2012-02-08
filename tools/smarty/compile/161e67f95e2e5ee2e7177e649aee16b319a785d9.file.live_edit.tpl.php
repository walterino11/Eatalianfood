<?php /* Smarty version Smarty-3.0.7, created on 2012-01-18 14:04:53
         compiled from "/web/htdocs/www.eatalianfood.com/home/themes/live_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4984675504f1717d5988087-19057122%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '161e67f95e2e5ee2e7177e649aee16b319a785d9' => 
    array (
      0 => '/web/htdocs/www.eatalianfood.com/home/themes/live_edit.tpl',
      1 => 1326573267,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4984675504f1717d5988087-19057122',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<script type="text/javascript">
	<?php if (isset($_smarty_tpl->getVariable('ad',null,true,false)->value)&&isset($_smarty_tpl->getVariable('live_edit',null,true,false)->value)){?>
	var ad = "<?php echo $_GET['ad'];?>
";
	<?php }?>
	var lastMove = '';
	var saveOK = '<?php echo smartyTranslate(array('s'=>'Module position saved'),$_smarty_tpl);?>
';
	var confirmClose = '<?php echo smartyTranslate(array('s'=>'Are you sure? If you close this window, its position won\'t be saved'),$_smarty_tpl);?>
';
	var close = '<?php echo smartyTranslate(array('s'=>'Close'),$_smarty_tpl);?>
';
	var cancel = '<?php echo smartyTranslate(array('s'=>'Cancel'),$_smarty_tpl);?>
';
	var confirm = '<?php echo smartyTranslate(array('s'=>'Confirm'),$_smarty_tpl);?>
';
	var add = '<?php echo smartyTranslate(array('s'=>'Add this module'),$_smarty_tpl);?>
';
	var unableToUnregisterHook = '<?php echo smartyTranslate(array('s'=>'Unable to unregister hook'),$_smarty_tpl);?>
';
	var unableToSaveModulePosition = '<?php echo smartyTranslate(array('s'=>'Unable to save module position'),$_smarty_tpl);?>
';
	var loadFail = '<?php echo smartyTranslate(array('s'=>'Failed to load module list'),$_smarty_tpl);?>
';
</script>

<div style="width:100%;height:30px;padding-top:10px;background-color:#D0D3D8;border:solid 1px gray;position:fixed;bottom:0;left:0;opacity:0.7" onmouseover="$(this).css('opacity', 1);" onmouseout="$(this).css('opacity', 0.7);">
	<input type="submit" value="<?php echo smartyTranslate(array('s'=>'Save'),$_smarty_tpl);?>
" id="saveLiveEdit" class="exclusive" style="float:left">
	<input type="submit" value="<?php echo smartyTranslate(array('s'=>'Close Live edit'),$_smarty_tpl);?>
" id="closeLiveEdit" class="button" style="float:left">
	<div style="float:right;margin-right:20px;" id="live_edit_feed_back"></div>
</div>
<a href="#" style="display:none;" id="fancy"></a>
<div id="live_edit_feedback" style="width:400px"> 
	<p id="live_edit_feedback_str">
	</p> 
	<!-- <a href="javascript:;" onclick="$.fancybox.close();"><?php echo smartyTranslate(array('s'=>'Close'),$_smarty_tpl);?>
</a> --> 
</div>	
