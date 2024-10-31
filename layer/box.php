<?php
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
															 	Slider Text Options
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
 if (is_admin()){
if ( !function_exists ( "sor_box_options" )){
add_filter('sor_layer_element_options', 'sor_box_options');
function sor_box_options( $element ) {
	$option = array();


 


 	$item = array(
 		'name'			=> 	__('جعبه','sorsorak'),
  		'id'			=> 'box',
		'img'			=> SAOSORAK_DIR .'admin/assets/image/layer_box.png'
		
  	); 
	
	$default = array( 'width' =>'100', 'height' =>'100');
   
 include SORSORAK_PATH . 'layer/mini/position_size.php';

  
	 
 	/***********************************boxed************************************************************************************/
$option[]= array( 
		"name"			=> __('هور','sorsorak'),
 		"id"			=>  "box_effects",
		"group"			=>  __('استایل جعبه ای','sorsorak'),
 		"type"			=> "hover",
   		"options"		=>  array(
 			'normal' =>		 __('عادی','sorsorak'),		
			'hover' =>		 __('هاور','sorsorak'),		
	 	),
	); 	 
 		
 
	 
 
 
 
 
		
	$option[]= array( 
		"name"			=> __('رنگ پس زمینه','sorsorak'),
 		"id"			=> "box_background",
		"group"			=>  __('استایل جعبه ای','sorsorak'),
 		"fold"			=>	array(
								'normal' =>   'box_effects',
							) ,
 		"default"		=> array('first'=>"rgb(2, 159, 253)"),
		"type"			=> "multi_options",
		
  		"options"		=>  array(
				array(	"id"		=> "first",
						"type"		=> "color_rgba",
				),
 				array(	"id"		=> "second",
						"type"		=> "color_rgba",
  					),
 				array(
 						"id"		=> "orientation",
						"type"		=> "select",
						"width"		=> "50px",
						"options"	=> array(
							"horizontal"		=>  esc_html__('→','sorsorak'),
							"vertical"			=>  esc_html__('↓','sorsorak'),
							"diagonal"			=>  esc_html__('↘','sorsorak'),
							"diagonal-bottom"	=>  esc_html__('↗','sorsorak'),
							"radial"			=>  esc_html__('○','sorsorak'),

				),
				),
				),
 		
		
 	); 	
	
 
	$option[]= array( 
		"name"			=> __('کادر دور','sorsorak'),
 		"id"			=> "box_border",
  		"group"			=>  __('استایل جعبه ای','sorsorak'),
 		"type"			=> "multi_options",
 		"width"			=> "100%",
 		"fold"			=>	array(
								'normal' => 'box_effects',
							) ,
		"options"		=>  sor_multi_array_options('layer_border'),						
	); 	
	
	$option[]= array( 
		"name"			=> __('سایه دور','sorsorak'),
 		"id"			=> "box_shadow",
  		"group"			=>  __('استایل جعبه ای','sorsorak'),
 		"type"			=> "multi_options",
 		"width"			=> "100%",
 		"fold"			=>	array(
								'normal' =>  'box_effects',
							) ,
		"options"		=>  sor_multi_array_options('layer_shadow'),						
	); 	
	
	
 
	
	
	//******* hover***********/
			
	$option[]= array( 
		"name"			=> __('رنگ پس زمینه هاور','sorsorak'),
 		"id"			=> "box_hover_background",
		"group"			=>  __('استایل جعبه ای','sorsorak'),
 		"fold"			=>	array(
								'hover' =>  'box_effects',
							) ,
		"type"			=> "multi_options",
		
  		"options"		=>  array(
				array(	"id"		=> "first",
						"type"		=> "color_rgba",
				),
 				array(	"id"		=> "second",
						"type"		=> "color_rgba",
  					),
 				array(
 						"id"		=> "orientation",
						"type"		=> "select",
						"width"		=> "50px",
						"options"	=> array(
							"horizontal"		=>  esc_html__('→','sorsorak'),
							"vertical"			=>  esc_html__('↓','sorsorak'),
							"diagonal"			=>  esc_html__('↘','sorsorak'),
							"diagonal-bottom"	=>  esc_html__('↗','sorsorak'),
							"radial"			=>  esc_html__('○','sorsorak'),

				),
				),
				),
 		
		
 	); 	
	
 
	$option[]= array( 
		"name"			=> __('کادر دور هاور','sorsorak'),
 		"id"			=> "box_hover_border",
  		"group"			=>  __('استایل جعبه ای','sorsorak'),
 		"type"			=> "multi_options",
 		"width"			=> "100%",
 		"fold"			=>	array(
								'hover' =>   'box_effects',
							) ,
		"options"		=>  sor_multi_array_options('layer_border'),						
	); 	
	
	$option[]= array( 
		"name"			=> __('سایه دور هاور','sorsorak'),
 		"id"			=>  "box_hover_shadow",
  		"group"			=>  __('استایل جعبه ای','sorsorak'),
 		"type"			=> "multi_options",
 		"width"			=> "100%",
 		"fold"			=>	array( 'hover' => 'box_effects') ,

		"options"		=>  sor_multi_array_options('layer_shadow'),						
	); 	
	
	$option[]= array( 
		"name"			=> __('گردی دور','sorsorak'),
 		"id"			=>  "box_radius",
  		"group"			=>  __('استایل جعبه ای','sorsorak'),
 		"type"			=> "multi_options",
 		"width"			=> "100%",
 		"options"		=>  sor_multi_array_options('layer_radius'),						
	); 	
	
		 
	  

	 include SORSORAK_PATH . 'layer/mini/effect.php';
			 
	$item['options']=$option;
	$element[]=$item;
    return $element;
} 
 }
 }
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
															 	Slider Text Config
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sor_box_perview" )){
add_filter('sor_layer_perview_box', 'sor_box_perview');
function sor_box_perview( $value ) {
	$option= $value['option'];
	$key= $value['key'];

	echo '<aside id="sor_perview_layer_'.$key.'" class="sor_draggable sor-layer-item " data-key="'.$key.'" >';
	echo '<div class="sor-box">';
	echo '</div>';
 	 
 	 echo '<div class="sor-layer-style"> </div>';
  	 echo '</aside>';
 
}
}


if ( !function_exists ( "sor_box_config" )){
add_filter('sor_layer_box', 'sor_box_config');
function sor_box_config( $value ) {
  $option= $value['option'];
  $key= $value['key'];
  $global_key= $value['global_key'];
  $slide_key= $value['slide_key'];
  
  
   
	echo '<aside class="sor-layer-'.$key.' sor-layer-item '.sor_layer_effect_class($option).'" >';


		echo '<div class="sor-box  "    >';
		echo '</div>';
			 
 		 	
 		
		
  
		$css=sor_layer_position( $option);
 
		 
 		$css.= sor_slider_var_gradient_background_color( 'box',$option,'box_background');		 
		$css.= sor_slider_var_gradient_background_color( 'box-hv',$option,'box_hover_background');		 
		$css.= sor_slider_var_border( 'box',$option,'box_border');		 
		$css.= sor_slider_var_border( 'box-hv',$option,'box_hover_border');		 
		$css.= sor_slider_var_shadow( 'box',$option,'box_shadow');		 
		$css.= sor_slider_var_shadow( 'box-hv',$option,'box_hover_shadow');		 
		$css.= sor_slider_var_radius( 'box',$option,'box_radius');		 
 	 
	$css.=sor_layer_effect( $option);
 	$item='';
	if(!empty($global_key)){
		$item.='.sor-global-'.$global_key.' '; 
	}
	if(!empty($slide_key)){
		$item.='.sor-slide-'.$slide_key.' '; 
	}
	if(!empty($key)){
		$item.='.sor-layer-'.$key.' '; 
	}
	echo '<style>'.sor_slider_item_css( $css,$item).'</style>';	 
	
	 	echo '</aside>';
}
}
?>