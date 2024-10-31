<?php
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
															 	Slider Text Options
 
*////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////*
 if (is_admin()){
if ( !function_exists ( "sor_image_options" )){

add_filter('sor_layer_element_options', 'sor_image_options');
function sor_image_options( $element ) {
	$option = array();


 


 	$item = array(
 		'name'			=> 	__('تصویر','sorsorak'),
  		'id'			=> 'image',
		'img'			=> SAOSORAK_DIR .'admin/assets/image/layer_image.png'
		
  	); 
   
 include SORSORAK_PATH . 'layer/mini/position_size.php';

 
	$option[]= array( 
		"name"			=> __('تصویر','sorsorak'),
  		"id"			=> "image",
		"default"       => SAOSORAK_DIR.'admin/assets/image/image.png',
		"group"			=>  __('تصویر','sorsorak'),
  		"type"			=> "image",
 	); 
   
   
	
	$option[]= array( 
		"name"			=> __('چیدمان','sorsorak'),
 		"id"			=> "image_align",
  		"type"			=> "radio_image",
 		"default"		=> 'center',
		"group"			=>  __('تصویر','sorsorak'),
   		"options"		=>  array( 
  			'left'				=> SAOSORAK_DIR.'admin/assets/image/right.jpg',
			'center'			=> SAOSORAK_DIR.'admin/assets/image/center.jpg',
			'right'				=> SAOSORAK_DIR.'admin/assets/image/left.jpg',
   		),	 						
 		
  	);		
	
	
	if(!empty($_REQUEST['sor_tablet'])){

		$option[]= array( 
 			"responsive"	=> "tablet",
			"name"			=> __('واکنش گرا در تبلت','sorsorak'),
		"group"			=>  __('تصویر','sorsorak'),
			"id"			=>  "tablet_image_align_heading",
			"type"			=> "heading",
		);
		
		$option[]= array( 
			"responsive"			=> "tablet",
 			"name"			=> __('چیدمان در تبلت','sorsorak'),
			"id"			=> "tablet_image_align",
			"type"			=> "radio_image",
			"default"		=> 'center',
		"group"			=>  __('تصویر','sorsorak'),
			"options"		=>  array( 
				''				=> SAOSORAK_DIR.'admin/assets/image/none.jpg',		
				'left'				=> SAOSORAK_DIR.'admin/assets/image/right.jpg',		
				'center'			=> SAOSORAK_DIR.'admin/assets/image/center.jpg',
				'right'				=> SAOSORAK_DIR.'admin/assets/image/left.jpg',
			),	 						
			
		);			 	
	 
		
 
	}	
	  
	if(!empty($_REQUEST['sor_mobile'])){

	  
		$option[]= array( 
 			"responsive"	=> "mobile",
			"name"			=> __('واکنش گرا در موبایل','sorsorak'),
			"group"			=>  __('تصویر','sorsorak'),

			"id"			=>  "tablet_image_align_heading",
			"type"			=> "heading",
		);
		
		$option[]= array( 
			"responsive"			=> "mobile",
		
			"name"			=> __('چیدمان در موبایل','sorsorak'),
			"id"			=> "mobile_image_align",
			"type"			=> "radio_image",
			"default"		=> 'center',
			"group"			=>  __('تصویر','sorsorak'),

			"options"		=>  array( 
				''				=> SAOSORAK_DIR.'admin/assets/image/none.jpg',		
				'left'				=> SAOSORAK_DIR.'admin/assets/image/right.jpg',		
				'center'			=> SAOSORAK_DIR.'admin/assets/image/center.jpg',
				'right'				=> SAOSORAK_DIR.'admin/assets/image/left.jpg',
			),	 						
 		);			
		 
	 
	}	 	
	
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
if ( !function_exists ( "sor_image_perview" )){
add_filter('sor_layer_perview_image', 'sor_image_perview');
function sor_image_perview( $value ) {
  $option= $value['option'];
  $key= $value['key'];
  
  	 
	////////////////////////////////////////////////////////////OUTPUT////////////////////////////////////////////////////////////////////////////////////////	  

	echo '<aside id="sor_perview_layer_'.$key.'" class="sor_draggable sor-layer-item " data-key="'.$key.'" >';
		echo '<div class="sor-image sor-layer-content"  ></div>';
 	 
 	 echo '<div class="sor-layer-style"> </div>';
  	 echo '</aside>';
 
}
}
if ( !function_exists ( "sor_image_config" )){
add_filter('sor_layer_image', 'sor_image_config');
function sor_image_config( $value ) {
  $option= $value['option'];
  $key= $value['key'];
  $global_key= $value['global_key'];
  $slide_key= $value['slide_key'];
  
 	echo '<aside class="sor-layer-'.$key.' sor-layer-item '.sor_layer_effect_class($option).'" >';


		echo '<div class="sor-image sor-layer-content" >';
			 
			if(!empty($option['image'])){
				
			if(is_numeric($option['image'])){
					$attachment_image = wp_get_attachment_image_src($option['image'],'full');
					$value_url=!empty($attachment_image[0])?$attachment_image[0]:'';
				}else{
					$value_url=$option['image'];
				}
				
 				  echo '<img src="'.$value_url.'">';
			}
 		 	
		echo '</div>';
	$css=sor_layer_position( $option);
	$css.= sor_slider_var_align( 'img-ag',$option,'image_align' );		 
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