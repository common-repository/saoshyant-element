<?php
 
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																Element Item Sao sorsorak
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	  
 if ( !function_exists ( "sor_element_item_sorsorak" )){
add_filter('sao_element_item', 'sor_element_item_sorsorak');
function sor_element_item_sorsorak( $element ) {
 	
 	$element[] = array(
 		'name'			=> __('سرسرک اسلایدر','saoshyant-sorsorak'),
 		'id'			=> 'sorsorak',
		'img'			=> SAOSORAK_DIR .'assets/image/sao-sorsorak.jpg'
  	); 
   
   
 	return $element;
} 
}
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																Element Item Sao sorsorak Options
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	  
 if ( !function_exists ( "sao_sorsorak_options" )){
add_filter('sao_element_options_sorsorak', 'sor_sorsorak_options');
function sor_sorsorak_options( $option ) {
	$option = array();
  	$page_args = array(
			'sort_order' => 'asc',
			'sort_column' => 'post_title',
			        'numberposts'      => 99,
 
			'post_type' => 'sorsorak',
			'number' => 'sorsorak',
			'post_status' => 'publish'
		); 
		 
	$options_page = array();
	$options_page_obj =get_posts($page_args); 
 
	if(!empty($options_page_obj) && is_array($options_page_obj) ){
		foreach ($options_page_obj as $rezapage) {
			$options_page[$rezapage->ID] = $rezapage->post_title;
		}
	} 
	
	$option[]= array( 
		"name"			=> __('اسلایدر را انتخاب کنید','sorsorak'),
 		"id"			=> "sliders",
   		"type"			=> "select",
		'options'		=> $options_page,	
	);	 
	
	$option[]= array( 
		"name"			=> esc_html__('Element ID','saoshyant-page-builder'),
 		"id"			=> "element_id",
 		"group"			=>  esc_html__('Attribute','saoshyant-page-builder'),
		"desc"			=>  esc_html__('Enter Column ID ,','saoshyant-page-builder').'<a href="https://www.w3schools.com/tags/att_global_id.asp">'.esc_html__('Learn more','saoshyant-page-builder').'</a>',
		"type"			=> "text",
		 
	);
 
	$option[]= array( 
		"name"			=> __('Padding','saoshyant-page-builder'),
 		"id"			=> "padding",
  		"group"			=>  __('Layout','saoshyant-page-builder'),
		"default"		=>   sao_builder_default_padding(),
 		"type"			=> "multi_options",
 		"options"		=>  sao_multi_array_options('margin'),						
 	);
	 		 
 
 	$option[]= array( 
		"name"			=> esc_html__('CSS Animation','saoshyant-page-builder'),
 		"id"			=> "cssanime",
		"desc"			=>  esc_html__('Select type of animation if you want this element to be animated when it enters into the browsers viewport. Note: Works only in modern browsers.','saoshyant-page-builder'),
 		"group"			=>  esc_html__('Layout','saoshyant-page-builder'),
		"type"			=> "select",
 		"options"		=>  sao_array_options('cssanime'),						
 	);

	$option[]= array( 
		"name"			=> esc_html__('Element Custom Class','saoshyant-page-builder'),
 		"id"			=> "custom_class",
 		"group"			=>  esc_html__('Attribute','saoshyant-page-builder'),
		"desc"			=>  esc_html__('Enter Class ,','saoshyant-page-builder'),
		"type"		=> "text",

	);		
  	include SAOPAGE_PATH . 'element/mini/responsive.php';

 	return $option;
} 
}
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																Perview sorsorak Config
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	  
 add_filter('sao_builder_perview_sorsorak', 'sor_perview_sorsorak_config');
function sor_perview_sorsorak_config( $args ) {
	$key = $args['key'];
	$option = $args['option'];
	$output='';
	$css='';
	
	$sliders = !empty($option['sliders'])?$option['sliders']:'';

	$post_title =!empty($sliders)? get_the_title($sliders):'';
		
	if(!empty($post_title)){
		$output.='<h4  style="font-size:30px;text-align: center; width:100%; margin: 0px;">'.$post_title .'</h4>'; 
	}
		
	$setting_json = get_post_meta($sliders, 'sor_setting_json', true);
	if(!empty($setting_json)){
		$setting= sor_options_array_row($setting_json);
		$type = !empty($setting['type'])?$setting['type']:'slider';
		if($type=='slider'){
			$output.='<img src="'.SAOSORAK_DIR.'admin/assets/image/slider.jpg">'; 
		}
		if($type=='sinlge'){
			$output.='<img src="'.SAOSORAK_DIR.'admin/assets/image/image.jpg">'; 
		}
		if($type=='glider'){
					$glider_layout = !empty($setting['glider_layout'])?$setting['glider_layout']:'glider_1';

 			$output.='<img src="'.SAOSORAK_DIR.'admin/assets/image/glider/'.$glider_layout.'.jpg">'; 
		}
 	}
	$css.= '.sao-element-'.$key.' {text-align: center;width:100%;}'; 
   	$return['css']= $css;
	$return['output']= $output;
	return $return;
}
 /*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																Perview sorsorak Config
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	  
 if ( !function_exists ( "sao_builder_sorsorak" )){
add_filter('sao_builder_sorsorak', 'sor_sorsorak_config');
function sor_sorsorak_config( $args ,$out = false,$out_css=false) {
			$option = $args['option'];
	$key = $args['key'];
	$output='';
	$css ='';
	
	if(sao_element_show($option)=='show'){
	ob_start(); 
 		
 	$custom_class = !empty( $option['custom_class']) ? $option['custom_class'] : '';
	
		$classes=array(
		'sao-el-'.$key,
		sao_element_show($option,true),
		$custom_class,
   
	);
      
	?>
 
    
 	 <aside <?php  sao_el_id($option);?> class="<?php echo esc_attr(join( ' ', $classes ));?>"  <?php  sao_el_cssanime($option);?>  >
		 <?php 
 		    // Define output and open element div.
			if(!empty($option['sliders'])){
				echo sor_slider_config($option['sliders']);
			}
 			?>
		</aside>
        
        <?php
	
	
	
	
	
	$item = '.sao-el-'.$key.''; 
	
	 
 	$item_css = sao_element_padding($option);
   	$css.=sao_item_css($item_css,$item);
  	
   	$return['output']= ob_get_clean();
  	$return['css']= $css;
  	$return['emptybefore']= true;
  	$return['emptyafter']= true;
	return $return;	
	}
}
} 
?>