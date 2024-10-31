<?php
if ( !function_exists ( "sor_single_list" )){
function sor_single_list($global_key=false,$slide=false){

  $count=0;
	if (!empty($slide)) :
	foreach($slide as $slide_key => $slide_value):$count++;
	
		$option = sor_options_decode(urldecode(wp_kses_post($slide_value['option'])));
		$layer = sor_options_decode(urldecode(wp_kses_post($slide_value['layer'])));
 	  		if($count==1){

		$option['key']=$slide_key;
		sor_single($global_key,$option,$layer);
 		 
			}
	endforeach;
	endif;
	 
  
	
		 
} 
}
if ( !function_exists ( "sor_single" )){
function sor_single($global_key=false,$slide=false,$layer=false,$first=false){

  
 		echo '<div class="sor-slide-item sor-animte-active sor-slide-'.sanitize_key($slide['key']).' " >';
  
 		 	echo '<div class="sor-slide-cover"></div>';
 			 sor_layer($global_key,$slide['key'],$layer);
 
 
 			$css =sor_slider_var_gradient_background_color('sl',$slide,'background_color');
 			$css.=sor_slider_background_image('sl',$slide,'background_image');
 			$css.=sor_slider_var_background_image_position('sl',$slide,'background_image_position');
 			$css.=sor_slider_var_background_image_position('sl-tab',$slide,'tablet_background_image_position');
 			$css.=sor_slider_var_background_image_position('sl-mob',$slide,'mobile_background_image_position');
			$item='';
			if(!empty($global_key)){
				$item.='.sor-global-'.$global_key.' '; 
			}
			if(!empty($slide['key'])){
				$item.='.sor-slide-'.$slide['key'].' '; 
			}
	 
  			echo '<style>'.sor_slider_item_css( $css,$item).'</style>';	 
  

			
	echo '</div>';
  
	
		 
} 
}
 
?>