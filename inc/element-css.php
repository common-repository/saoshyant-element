<?php
 
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																Element Item Sao Slider
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	  
 if ( !function_exists ( "sor_slider_global_css" )){
function sor_global_css( $option,$item = false) {
	$css='';
 

 
	
	$css.= sor_slider_var('glo-bg-cr',$option,'background_color');	 
	$css.= sor_slider_var_border('glo',$option,'border');	 
	$css.= sor_slider_var_shadow('glo',$option,'shadow');	 
	$css.= sor_slider_var_radius('glo',$option,'radius');	 
 
 
	$css.= sor_slider_var_margin('glo-mg',$option,'margin');
	$css.= sor_slider_var_margin('glo-tab',$option,'tablet_margin');
	$css.= sor_slider_var_margin('glo-mob',$option,'phone_margin');
 	
	$css.= sor_slider_var_padding('glo-pd',$option,'padding');
 	$css.= sor_slider_var_padding('glo-tab-pd',$option,'tablet_padding');
	$css.= sor_slider_var_padding('glo-mob-pd',$option,'phone_padding');
 		
	if(empty($setting['disable_typography'])){
	wp_enqueue_style( 'sor_fontfamily',SAOSORAK_DIR .'assets/css/fontfamily.css',array(),'1'); 
	}			
	 
 	return $css;
	
}
}

 if ( !function_exists ( "sor_slider_element_padding" )){
function sor_slider_element_padding( $option,$item = false) {
	$css='';
	 
	  
	$css.= sor_slider_var_padding('el-pd',$option,'padding');
 		
 			$css.= sor_slider_var_padding('el-tab-pd',$option,'tablet_padding');
			$css.= sor_slider_var_padding('el-mob-pd',$option,'mobile_padding');
 				
	 
 	return $css;
	
}
}
 if ( !function_exists ( "sor_layer_effect" )){
function sor_layer_effect( $option =false) {
			
 			
			
 			$effect = !empty($option['effect'] )? $option['effect']:'';
		 
			$start = !empty($option['time_start'] )? $option['time_start']:'0';
			$end = !empty($option['time_end'] )? $option['time_end']:'500';
 			$css ='';
 
 			if(!empty($effect)){
				if($effect=='scale'){
					$scale = !empty($option['scale'] )? $option['scale']:'0.01';
					$css.="--sor-lr-ef-sc:".$scale.";";
				}
				$css.="--sor-lr-ef-st:".$start."ms;";
				$css.="--sor-lr-ef-en:".($end - $start)."ms;";
			}
 			return $css;
 			 
}
}
 if ( !function_exists ( "sor_layer_position" )){
function sor_layer_position($value=false){
	$css='';
	if(isset($value['position']['horizontal'])){
		$css.='--sor-lr-hor:'.$value['position']['horizontal'].'px;';
	}
	if(isset($value['position']['vertical'])){
		$css.='--sor-lr-ver:'.$value['position']['vertical'].'px;';
	}	
	if(isset($value['size']['width'])){
		$css.='--sor-lr-wt:'.$value['size']['width'].'px;';
	}	
	if(isset($value['size']['height'])){
		$css.='--sor-lr-ht:'.$value['size']['height'].'px;';
	}	
 	
	if(isset($value['tablet_position']['horizontal'])){
		$css.='--sor-lr-tab-hor:'.$value['tablet_position']['horizontal'].'px;';
	}
	if(isset($value['tablet_position']['vertical'])){
		$css.='--sor-lr-tab-ver:'.$value['tablet_position']['vertical'].'px;';
	}	
	if(isset($value['tablet_size']['width'])){
		$css.='--sor-lr-tab-wt:'.$value['tablet_size']['width'].'px;';
	}	
	if(isset($value['tablet_size']['height'])){
		$css.='--sor-lr-tab-ht:'.$value['tablet_size']['height'].'px;';
	}
	
	
	if(isset($value['mobile_position']['horizontal'])){
		$css.='--sor-lr-mob-hor:'.$value['mobile_position']['horizontal'].'px;';
	}
	if(isset($value['mobile_position']['vertical'])){
		$css.='--sor-lr-mob-ver:'.$value['mobile_position']['vertical'].'px;';
	}	
	if(isset($value['mobile_size']['width'])){
		$css.='--sor-lr-mob-wt:'.$value['mobile_size']['width'].'px;';
	}	
	if(isset($value['mobile_size']['height'])){
		$css.='--sor-lr-mob-ht:'.$value['mobile_size']['height'].'px;';
	}	
	return $css;	
 
}
 }
 /*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																Arrow Layout
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	  
 if ( !function_exists ( "sor_arrows_css" )){

function sor_arrows_css( $value ) {
 $css='';
 	if(!empty($value['arrows'])){
	
		$css.=sor_slider_var_unit('aw-sz',$value,'arrows_size','px');
		$css.=sor_slider_var_unit('tab-aw-sz',$value,'tablet_arrows_size','px');
		$css.=sor_slider_var_unit('mob-aw-sz',$value,'mobile_arrows_size','px');
		$css.=sor_slider_var_unit('aw-rd',$value,'arrows_radius','px');
		$css.=sor_slider_var_2('aw-cr',$value,'arrows_color','text');
		$css.=sor_slider_var_2('aw-bg',$value,'arrows_color','background');
		$css.=sor_slider_var_2('aw-hv-cr',$value,'arrows_hover_color','text');
		$css.=sor_slider_var_2('aw-hv-bg',$value,'arrows_hover_color','background');
	}
 	return $css;
   
}
 }
 if ( !function_exists ( "sor_pager_css" )){
 function sor_pager_css( $value ) {
 $css='';
 	if(!empty($value['pager'])){
	
  		$css.=sor_slider_var_2('pg-cr',$value,'pager_color','color');
		$css.=sor_slider_var_2('pg-atv-cr',$value,'pager_color','active'); 
	}
 	return $css;
   
}
 }
 
 ?>