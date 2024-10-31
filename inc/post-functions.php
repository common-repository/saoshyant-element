<?php
/********************************************************************
cssanime
*********************************************************************/ 
if ( !function_exists ( "sor_slider_query" )){
function sor_slider_query($option){

 
 
	$number = $option['number'];
	$sliders = $option['sliders'];
	$args['post_type'] = 'sor_slide';
	$args = array();
  		$args['posts_per_page']=$number;

 		
		$args['post_type'] = 'sor_slide';
 		$args['no_found_rows'] = 1;
		if(!empty($sliders)){
			$args['tax_query'] =  array(
				array(
					'taxonomy' => 'sor_sliders',
					'terms' => $sliders,
					'field' => 'slug',
				)
			);
		}
 	 
   
 	return  new WP_Query($args );
} 
}
 
if ( ! class_exists( 'sor_slider_el_id' ) ) {
function sor_slider_el_id($option =false) {
   if(!empty( $option['element_id'])){
 		echo ' id="'.esc_attr($option['element_id']).'"  ' ;
   }
} 
}
if ( ! class_exists( 'sor_slider_el_cssanime' ) ) {
function sor_slider_el_cssanime($option =false) {
   if(!empty( $option['cssanime'])){
	   	global $sor_aos_style,$sor_aos_script;
		$sor_aos_style++;
		$sor_aos_script++;
		echo ' data-aos="'.esc_attr(sor_builder_rtl_has($option['cssanime'])).'" ' ;
   }
} 
}
 

/********************************************************************
Sao LightSlider
*********************************************************************/
if ( ! class_exists( 'sor_slider_lightslider' ) ) {
function sor_slider_lightslider($item,$slider_options=false) {
	global 
	$sor_lightslider_style,
	$sor_slide_script,
	$sor_lightslider_script;
	$sor_lightslider_style=true;
	$sor_slide_script=true;
	$sor_lightslider_script=true;
	
	
 	$slider_options["item"] = (int)$item;
	$slider_options["slideMove"] = 1;
 	if(is_rtl()){
 	$slider_options["rtl"] = true;
	}
	global $sor_lightslider_style,$sor_lightslider_script,$sor_slide_script;
	$sor_lightslider_style++;
	$sor_lightslider_script++;
	$sor_slide_script++;
   
 	?>
 	<div class="sor-slide-options" ><?php echo wp_kses_post(json_encode($slider_options));?></div>
    <?php
	

 } 
}
 if ( !function_exists ( "sor_slider_rtl_left" )){
function sor_slider_rtl_left() {
 	if(is_rtl()){
		return 'right';
	}else{
		return 'left';
	}
}
}
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																  Slider Rtl Right
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	  
if ( !function_exists ( "sor_slider_rtl_right" )){
function sor_slider_rtl_right() {
 	if(is_rtl()){
		return 'left';
	}else{
		return 'right';
	}
} 
}

 

	  
?>
