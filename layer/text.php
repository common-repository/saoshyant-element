<?php
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
															 	Slider Text Options
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
 if (is_admin()){
if ( !function_exists ( "sor_text_options" )){

add_filter('sor_layer_element_options', 'sor_text_options');
function sor_text_options( $element ) {
	$option = array();


 


 	$item = array(
 		'name'			=> 	__('متن','sorsorak'),
  		'id'			=> 'text',
		'img'			=> SAOSORAK_DIR .'admin/assets/image/layer_text.png'
		
  	); 
   
	 include SORSORAK_PATH . 'layer/mini/position_size.php';

 
	$option[]= array( 
		"name"			=> __('متن','sorsorak'),
 		"default"		=> __('لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ','sorsorak'),
 		"id"			=> "text",
  		"type"			=> "textarea",
	 	 	"warp_width"			=> "100%",
	
  		"group"			=>  __('محتوا','sorsorak'),
	); 
  
	
	$option[]= array( 
		"name"			=> __('لینک','sorsorak'),
 		"id"			=> "text_link",
   		"type"			=> "text",
		 		"placeholder"	=> "http://",
 	 	"warp_width"			=> "100%",
   		"width"			=> "100%",
    		"group"			=>  __('محتوا','sorsorak'),
	); 
 
	$option[] = array(
		"name"		=>  __('باز شدن در پنجره جدید','sorsorak'),
		"id"		=> "text_widows",
		"type"		=> "checkbox",
  		"group"			=>  __('محتوا','sorsorak'),
 	);		
	
 
	
	$option[]= array( 
		"name"			=> __('تگ HTML','sorsorak'),
 		"id"			=> "text_html_tag",
   		"group"			=>  __('محتوا','sorsorak'),
		"type"			=> "select", 	
 		"default"		=> '',
		"options"		=>  
			array( 
				""			=> __('پیشفرض','sorsorak'),			
				"h1"			=> 'H1',			
				"h2"			=> 'H2',			
				"h3"			=> 'H3',	 	
				"h4"			=> 'H4',	 	
				"h4"			=> 'H5',	 	
				"h6"			=> 'H6',	 	
				"div"			=> 'div',	 	
				"span"			=> 'span',	 	
				"p"				=> 'p',	 	
    			),
    	); 
	
 
	
	
	$option[]= array( 
 		"responsive"			=> "desktop",
	
		"name"			=> __('چیدمان','sorsorak'),
 		"id"			=> "text_align",
  		"type"			=> "radio_image",
 		"default"		=> 'center',
  		"group"			=>  __('محتوا','sorsorak'),
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
  			"group"			=>  __('محتوا','sorsorak'),
			"id"			=>  "tablet_text_align_heading",
			"type"			=> "heading",
		);
		
		$option[]= array( 
			"responsive"			=> "tablet",
 			"name"			=> __('چیدمان در تبلت','sorsorak'),
			"id"			=> "tablet_text_align",
			"type"			=> "radio_image",
			"default"		=> 'center',
			"group"			=>  __('محتوا','sorsorak'),
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
  			"group"			=>  __('محتوا','sorsorak'),
			"id"			=>  "tablet_text_align_heading",
			"type"			=> "heading",
		);
		
		$option[]= array( 
			"responsive"			=> "mobile",
		
			"name"			=> __('چیدمان در موبایل','sorsorak'),
			"id"			=> "mobile_text_align",
			"type"			=> "radio_image",
			"default"		=> 'center',
			"group"			=>  __('محتوا','sorsorak'),
			"options"		=>  array( 
				''				=> SAOSORAK_DIR.'admin/assets/image/none.jpg',		
				'left'				=> SAOSORAK_DIR.'admin/assets/image/right.jpg',		
				'center'			=> SAOSORAK_DIR.'admin/assets/image/center.jpg',
				'right'				=> SAOSORAK_DIR.'admin/assets/image/left.jpg',
			),	 						
 		);			
		 
	 
	}	 	
	
	
	
	
 	/// *********************** Text*************************************************************************************/
 	 $option[]= array( 
		"name"			=> __('آیکون برای متن','sorsorak'),
  		"id"			=> "icon",
 		"type"			=> "icon",
  		"group"			=>  __('آیکون','sorsorak'),
	); 
	$option[]= array( 
		"name"			=> __('موقعیت آیکون','sorsorak'),
 		"id"			=> "icon_align",
		"fold"			=>	array(
					true => 'icon',
				),
  		"type"			=> "radio_image",
  		"group"			=>  __('آیکون','sorsorak'),
   		"options"		=>  array( 
		
  			'left'				=> SAOSORAK_DIR.'admin/assets/image/right.jpg',
 			'right'				=> SAOSORAK_DIR.'admin/assets/image/left.jpg',
			
   		),	 						
 		
  	);		
	
	$option[]= array( 
		"name"			=> __('هور','sorsorak'),
 		"id"			=> "icon_effects",
  		"group"			=>  __('آیکون','sorsorak'),
 		"type"			=> "hover",
			"fold"			=>	array(
					true => 'icon',
				) ,
   		"options"		=>  array(
 			'normal' =>		 __('عادی','sorsorak'),		
			'hover' =>		 __('هاور','sorsorak'),		
	 	),
	); 	 
		
	$option[]= array(
  				"name"		=>  __('رنگ آیکون','sorsorak'),
  				"id"		=> "icon_color",
				"fold"			=>	array(
					'normal' => 'icon_effects',
 				),
				
  				"group"			=>  __('آیکون','sorsorak'),
				"type"			=> "multi_options",
 	 			"options"		=>  array( 
					array( 
						"id"			=> "first",
						"type"			=> "color_rgba",
					),
				),		
 	);
	$option[]= array(
  				"name"		=>  __('رنگ آیکون هاور','sorsorak'),
  				"id"		=> "icon_hover_color",
				"fold"			=>	array(
 					'hover' => 'icon_effects',

				),
  				"group"			=>  __('آیکون','sorsorak'),
				"type"			=> "multi_options",
 	 			"options"		=>  array( 
					array( 
						"id"			=> "first",
						"type"			=> "color_rgba",
					),
				),	
 	);		
	 
 
  
 		
	$option[]= array( 
		"name"			=> __('هور','sorsorak'),
 		"id"			=> "text_effects",
		"group"			=>  __('استایل','sorsorak'),
 		"type"			=> "hover",
   		"options"		=>  array(
 			'normal' =>		 __('عادی','sorsorak'),		
			'hover' =>		 __('هاور','sorsorak'),		
	 	),
	); 	 
 		
	
	$option[]= array(
  				"name"		=>  __('رنگ متن','sorsorak'),
  				"id"		=> "text_color",
				"fold"			=>	array(
								'normal' => 'text_effects',
				) ,
   				"group"			=>  __('استایل','sorsorak'),
				"type"			=> "multi_options",
 	 			"options"		=>  array( 
					array( 
						"id"			=> "first",
						"type"			=> "color_rgba",
					),
				),		
 	);
	
	$option[]= array(
  				"name"		=>  __('رنگ متن هاور','sorsorak'),
  				"id"		=> "text_hover_color",
				"fold"			=>	array(
					'hover' => 'text_effects',
				) ,
   				"group"			=>  __('استایل','sorsorak'),
				"type"			=> "multi_options",
 	 			"options"		=>  array( 
					array( 
						"id"			=> "first",
						"type"			=> "color_rgba",
					),
				),	
 	);	
	
	$option[]= array(
  				"name"		=>  __('سایه متن','sorsorak'),
  				"id"		=> "text_shadow",
				"fold"			=>	array(
								'normal' => 'text_effects',
				) ,
   				"group"			=>  __('استایل','sorsorak'),
				"type"		=> "multi_options",
   				"options"		=>  sor_multi_array_options('text_shadow'),						
				
 	);	


	$option[]= array(
  				"name"		=>  __('سایه متن در هاور','sorsorak'),
  				"id"		=> "text_hover_shadow",
				"fold"			=>	array(
								'hover' => 'text_effects',
				) ,
   				"group"			=>  __('استایل','sorsorak'),
				"type"		=> "multi_options",
  				"options"		=>  sor_multi_array_options('text_shadow'),						
				
 	);	

	/***********************************boxed************************************************************************************/
	$boxed='text';
	 include SORSORAK_PATH . 'layer/mini/boxed.php';
	 include SORSORAK_PATH . 'layer/mini/text_typography.php';

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
if ( !function_exists ( "sor_text_perview" )){

add_filter('sor_layer_perview_text', 'sor_text_perview');
function sor_text_perview( $value ) {
   $key= $value['key'];
  
  	 

	echo '<aside id="sor_perview_layer_'.$key.'" class="sor_draggable sor-layer-item  " data-key="'.$key.'"    >';
		echo '<div class="sor-text sor-layer-content"  >';
	 
 	 echo '</div>';
   	 echo '<div class="sor-layer-style"></div>';
	 
 	 echo '</aside>';
	////////////////////////////////////////////////////////////End////////////////////////////////////////////////////////////////////////////////////////	  
     
   
   
    
 }
}
if ( !function_exists ( "sor_text_config" )){

add_filter('sor_layer_text', 'sor_text_config');
function sor_text_config( $value ) {
  $option= $value['option'];
  $key= $value['key'];
  $global_key= $value['global_key'];
  $slide_key= $value['slide_key'];
  
   $text_html_tag = !empty($option['text_html_tag'])?$option['text_html_tag']:'div';
	$text_boxed = !empty($option['text_boxed'])?$option['text_boxed']:'';
	if($text_boxed=='boxed'){
   		$boxed ='sor-text-boxed';	
	}else{
  		$boxed ='sor-text-none';	
	}
	$icon_align = !empty($option['icon_align'])?'sor-icon-'.sor_rtl_has($option['icon_align']).' ':'';
 	
  
 	//text Css
	echo '<aside class="sor-layer-'.$key.' sor-layer-item  '.sor_layer_effect_class($option).' sor-layer-text">';
 
		echo '<'.$text_html_tag.' class="sor-text sor-layer-content '.$boxed.' '.$icon_align.'">';
			if(!empty($option['text_link'])){
				  	$target = !empty($option['text_widows']) ? 'target="_blank"' : '';

			 echo '<a href="'.$option['text_link'].'" '.$target.' >';	
			}
			if(!empty($option['icon'])){
				sor_icon_fontfamily($option['icon']);
				  echo '<i class="'.$option['icon'].'"></i>';
			}
			if(!empty($option['text'])){
				  echo $option['text'];
			}
		if(!empty($option['text_link'])){
			 echo '</a>';	
			}	
		echo '</'.$text_html_tag.'>';
		
		
  
		$css=sor_layer_position( $option);
		
 		$css.= sor_slider_var_align( 'txt-ag',$option,'text_align' );		
  		$css.= sor_slider_var_align( 'tab-txt-ag',$option,'tablet_text_align' );		 
 		$css.= sor_slider_var_align( 'mob-txt-ag',$option,'mobile_text_align' );	
 			 
		$css.= sor_slider_var_2( 'txt-cr',$option,'text_color','first');		 
		$css.= sor_slider_var_2( 'txt-hv-cr',$option,'text_hover_color','first');	
		$css.= sor_slider_var_text_shadow( 'txt',$option,'text_shadow');		 
		$css.= sor_slider_var_text_shadow( 'txt-hv',$option,'text_hover_shadow','first');		
		$css.= sor_slider_var_2( 'icn-cr',$option,'icon_color','first');		 
		$css.= sor_slider_var_2( 'icn-hv-cr',$option,'icon_hover_color','first');
		 
			
 		if($text_boxed=='boxed'){
		$css.=sor_slider_var_padding( 'txt-box-pd',$option,'text_boxed_padding');
		$css.= sor_slider_var_gradient_background_color( 'txt-box',$option,'text_boxed_background');		 
		$css.= sor_slider_var_gradient_background_color( 'txt-box-hv',$option,'text_boxed_hover_background');		 
		$css.= sor_slider_var_border( 'txt-box',$option,'text_boxed_border');		 
		$css.= sor_slider_var_border( 'txt-box-hv',$option,'text_boxed_hover_border');		 
		$css.= sor_slider_var_shadow( 'txt-box',$option,'text_boxed_shadow');		 
		$css.= sor_slider_var_shadow( 'txt-box-hv',$option,'text_boxed_hover_shadow');		 
		$css.= sor_slider_var_radius( 'txt-box',$option,'text_boxed_radius');		 
		} 
	$css.=sor_slider_var( 'txt-fn-fm',$option,'text_fontfamily');
		
		$css.=sor_slider_var_unit( 'txt-fn-sz',$option,'text_font_size','px');
		$css.=sor_slider_var_unit( 'txt-li-ht',$option,'text_line_height','em');
		$css.=sor_slider_var( 'txt-fn-wt',$option,'text_font_weight');
		$css.=sor_slider_var( 'txt-fn-de',$option,'text_font_decoration');
		$css.=sor_slider_var( 'txt-fn-tf',$option,'text_font_transform');
		$css.=sor_slider_var_unit( 'txt-lt-sp',$option,'text_spacing','px');
		$css.=sor_slider_var( 'txt-fn-st',$option,'text_font_style');
		
	$css.=sor_slider_var_unit( 'tab-txt-fn-sz',$option,'tablet_text_font_size','px');
	$css.=sor_slider_var_unit( 'tab-txt-li-ht',$option,'tablet_text_line_height','em');	
	
	
	$css.=sor_slider_var_unit( 'mob-txt-fn-sz',$option,'mobile_text_font_size','px');
	$css.=sor_slider_var_unit( 'mob-txt-li-ht',$option,'mobile_text_line_height','em');			   
		   
		
	$css.=sor_layer_effect( $option);
	$fontface = sor_slider_fontface($option,'text_fontfamily','text_font_weight');	   

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
 	echo '<style>'.sor_slider_item_css( $css,$item).$fontface.'</style>';	 
	
	
	
 	echo '</aside>';
 	 
}
}
  
?>