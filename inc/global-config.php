<?php

if ( ! class_exists( 'sor_global_config' ) ) {
function sor_global_config($global_key=false,$setting=false,$slide=false){

 	$pager='';
	$type = !empty($setting['type'])?$setting['type']:'slider';
 	if($type=='single'){
		sor_global_single_config($global_key,$setting,$slide);		
	}elseif($type=='glider'){
		sor_global_glider_config($global_key,$setting,$slide);		
	} else{
		sor_global_slider_config($global_key,$setting,$slide);		
	}
}
	
}
?>