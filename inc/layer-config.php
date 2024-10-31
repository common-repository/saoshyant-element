<?php
if ( ! class_exists( 'sor_layer' ) ) {
function sor_layer($global_key=false,$slide_key=false,$layer=false){

  
 	echo '<div class="sor-layer-warp">';
	echo '<div class="sor-layer-list">';
 
  
		if (!empty($layer)) :
		foreach($layer as $layer_key => $layer_value):
				
				$layer_value['global_key']=$global_key;
				$layer_value['slide_key']=$slide_key;
				$layer_value['key']=$layer_key;
                $id= $layer_value['id'];
				if(has_filter('sor_layer_'.$id)) {
					apply_filters('sor_layer_'.$id, $layer_value) ;	
				}
			   
		endforeach;
		endif; 
	
	echo '</div>';	
  	echo '</div>';	
  
	
		 
} 
}
if ( ! class_exists( 'sor_layer_effect_class' ) ) {
function sor_layer_effect_class( $option =false ) {
 	
	$class='';
	
	
		$class.= !empty($option['align']['horizontal'])?' sor-layer-'.sor_rtl_has($option['align']['horizontal']).' ':' sor-layer-'.sor_rtl_has('left').' ';
		$class.= !empty($option['align']['vertical'])?' sor-layer-'.$option['align']['vertical'].' ':' sor-layer-top ';
  
 
 		$class.= !empty($option['tablet_align']['horizontal'])? ' sor-layer-tablet-'.sor_rtl_has($option['tablet_align']['horizontal']).' ':'';
		$class.= !empty($option['tablet_align']['vertical'])?' sor-layer-tablet-'.$option['tablet_align']['vertical'].' ':'';
 		
		
		$class.= !empty($option['mobile_align']['horizontal'])? ' sor-layer-mobile-'.sor_rtl_has($option['mobile_align']['horizontal']).' ':'';
		$class.= !empty($option['mobile_align']['vertical'])?' sor-layer-mobile-'.$option['mobile_align']['vertical'].' ':'';	
 		
		$tablet_display = !empty($option['tablet_display'])?$option['tablet_display']:'';
			if($tablet_display === 'hide'){
				$class.=' sor-tablet-hide ';
			}
			$mobile_display = !empty($option['mobile_display'])?$option['mobile_display']:'';
			if($mobile_display === 'hide'){
				$class.=' sor-mobile-hide ';
			}
			$effect = !empty($option['effect'] )? $option['effect']:'';
			$initial = !empty($option['initial'] )? $option['initial']:'top';
			 
			if($effect=='move'){
				$initial = !empty($option['initial'] )? $option['initial']:'top';
					if(is_rtl() && $initial == 'left'){ 
						$initial_class ='right';
					} elseif(is_rtl() && $initial == 'right'){ 
						$initial_class ='left';
					}else{
						$initial_class =$initial;
					}
				
 				
 				$class.='sor-effect-move-'.$initial_class;
			}elseif($effect=='fade'){
 				$class.='sor-effect-fade';
			}elseif($effect=='scale'){
 				$class.='sor-effect-scale';
			}
	
		return $class;			
 
}
}
?>