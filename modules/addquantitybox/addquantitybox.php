<?php

class AddQuantityBox extends Module
{
	private $errors=array();
	private $settings=array();
	
	function __construct()
	{
		$this->name = 'addquantitybox';
		switch(substr(_PS_VERSION_, 0, 3)){
			case "1.4":
			    $this->tab = 'checkout';
			    break;
			default:
			    $this->tab = 'Tools';
			    break;
		}
		$this->version = 0.2;

		parent::__construct();

		$this->displayName = $this->l('Add Quantity Box Module');
		$this->description = $this->l('This module adds quantity boxes in product lists.');
		
		$this->settings=array(
//				'cseodomain'=>array(
//					'n'=>'cseourl',
//					'l'=>$this->l('Domain Name (e.g. www.domain.com)'),
//					's'=>'CSEO_DOMAIN'
//					),
//				'cseoignore'=>array(
//					'n'=>'cseoignore',
//					'l'=>$this->l('Parameters to ignore(separated by coma, no spaces)'),
//					's'=>'CSEO_IGNORE',
//					'v'=>'orderway,orderby,n,qty'
//					)
				     );
		
		foreach($this->settings AS &$setting){
			if(Configuration::get($setting['s'])!==false){
				$setting['v']=Configuration::get($setting['s']);
			}
		}
	}

	function install()
	{
		if (!parent::install() OR !$this->registerHook('footer'))
			return false;
		return true;
	}

	function uninstall()
	{
		foreach($this->settings AS &$setting){
			Configuration::deleteByName($setting['s']);
		}

		return parent::uninstall();
	}
/*
	public function getContent()
	{
		global $smarty;
		
		$baseurl='?tab=AdminModules&configure='.$this->name.'&token='.$_GET['token'];
		$smarty->assign('baseurl', $baseurl);
		$smarty->assign('name', $this->displayName);
		
		if(Tools::isSubmit('updatesettings')){
			foreach($this->settings AS &$setting){
				$setting['v']=Tools::getValue($setting['n']);
				Configuration::updateValue($setting['s'], $setting['v']);
			}
		}
		
		$smarty->assign('settings', $this->settings);
		$smarty->assign('errors', $this->errors);
		$this->_html .=  $this->display(__FILE__, 'admin_main.tpl');
		
		return $this->_html;
	}*/

	function hookFooter($params)
	{
		return '
<script type="text/javascript">
$(document).ready(function(){
    $.each($(".ajax_add_to_cart_button"), function(v, i){
	$(i).before(\''.$this->l('Quantity:').'<input type="text" name="qty" size="3" id="qty\'+$(i).attr(\'rel\')+\'" />\');
    });
    if(undefined==window.ajaxCart){
	$.each($(".ajax_add_to_cart_button"), function(v, i){
	    $(i).unbind(\'click\').click(function(){
		var qty =  $("#qty"+$(this).attr(\'rel\')).val();
//		$(this).attr("href", $(this).attr("href").replace(/\&qty=.*/gi, "")+"&qty="+qty);
		location.href=$(this).attr("href")+"&qty="+qty;
		return false;
	    });
	});
    }else{
	var tmpf=ajaxCart.overrideButtonsInThePage;
	ajaxCart.overrideButtonsInThePage=function(){
	    tmpf();
	    $.each($(".ajax_add_to_cart_button"), function(v, i){
		$(i).unbind(\'click\').click(function(){
		    var qty =  $("#qty"+$(this).attr(\'rel\')).val();
		    $("#qty"+$(this).attr(\'rel\')).val("");
		    var idProduct =  $(this).attr(\'rel\').replace(\'ajax_id_product_\', \'\');
		    ajaxCart.add(idProduct, null, false, this, qty);
		    return false;
		});
	    });
	};
    }
});
</script>';
	}
}

?>