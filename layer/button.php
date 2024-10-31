<?php
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
															 	Slider Text Options
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
 if (is_admin()){
if ( !function_exists ( "sor_button_options" )){
add_filter('sor_layer_element_options', 'sor_button_options');
function sor_button_options( $element ) {
	$option = array();


 


 	$item = array(
 		'name'			=> 	__('دکمه','sorsorak'),
  		'id'			=> 'button',
		'img'			=> SAOSORAK_DIR .'admin/assets/image/layer_button.png'
		
  	); 
   
 include SORSORAK_PATH . 'layer/mini/position_size.php';

 
	$option[]= array( 
		"name"			=> __('متن دکمه','sorsorak'),
 		"default"		=> __('دکمه','sorsorak'),
 		"id"			=> "button",
 		"type"			=> "textarea",
  		"group"			=>  __('محتوا','sorsorak'),
	); 
  
  
  
	
	$option[]= array( 
		"name"			=> __('لینک','sorsorak'),
 		"id"			=> "button_link",
   		"type"			=> "text",
   		"width"			=> "100%",
 	 	"warp_width"			=> "100%",
 		"placeholder"	=> "http://",
   		"group"			=>  __('محتوا','sorsorak'),
	); 
 
	$option[] = array(
		"name"		=>  __('باز شدن در پنجره جدید','sorsorak'),
		"id"		=> "button_widows",
		"type"		=> "checkbox",
  		"group"			=>  __('محتوا','sorsorak'),
 	);		
	
 
	 
	
	$option[]= array( 
		"name"			=> __('چیدمان','sorsorak'),
 		"id"			=> "button_align",
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
			"id"			=>  "tablet_button_align_heading",
			"type"			=> "heading",
		);
		
		$option[]= array( 
 		"responsive"			=> "tablet",
	
		"name"			=> __('چیدمان در تبلت','sorsorak'),
 		"id"			=> "tablet_button_align",
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
			"id"			=>  "tablet_button_align_heading",
			"type"			=> "heading",
		);
		
		$option[]= array( 
 		"responsive"			=> "mobile",
	
		"name"			=> __('چیدمان در موبایل','sorsorak'),
 		"id"			=> "mobile_button_align",
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
		"name"			=> __('آیکون برای دکمه','sorsorak'),
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
 		"id"			=> "button_effects",
		"group"			=>  __('استایل','sorsorak'),
 		"type"			=> "hover",
   		"options"		=>  array(
 			'normal' =>		 __('عادی','sorsorak'),		
			'hover' =>		 __('هاور','sorsorak'),		
	 	),
	); 	 
 		
	/// *********************** Text*************************************************************************************/
	$option[]= array(
  				"name"		=>  __('رنگ متن','sorsorak'),
  				"id"		=> "button_color",
				"fold"			=>	array(
								'normal' => 'button_effects',
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
  				"id"		=> "button_hover_color",
				"fold"			=>	array(
					'hover' => 'button_effects',
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
  				"id"		=> "button_shadow",
				"fold"			=>	array(
								'normal' => 'button_effects',
				) ,
   				"group"			=>  __('استایل','sorsorak'),
				"type"		=> "multi_options",
   		"options"		=>  sor_multi_array_options('text_shadow'),						
				
 	);	


	$option[]= array(
  				"name"		=>  __('سایه متن در هاور','sorsorak'),
  				"id"		=> "button_hover_shadow",
				"fold"			=>	array(
								'hover' => 'button_effects',
				) ,
   				"group"			=>  __('استایل','sorsorak'),
				"type"		=> "multi_options",
 	
 		"options"		=>  sor_multi_array_options('text_shadow'),						
				
 	);	
	
	
	
 	/***********************************boxed************************************************************************************/
	$boxed='button';
	 include SORSORAK_PATH . 'layer/mini/button_boxed.php';
	 
  	 include SORSORAK_PATH . 'layer/mini/button_typography.php';

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
if ( !function_exists ( "sor_button_perview" )){
add_filter('sor_layer_perview_button', 'sor_button_perview');
function sor_button_perview( $value ) {
	$option= $value['option'];
	$key= $value['key'];
 	echo '<aside id="sor_perview_layer_'.$key.'" class="sor_draggable sor-layer-item " data-key="'.$key.'" >';
		echo '<div class="sor-button  sor-layer-content "  >';
  	 echo '</div>';
  	 echo '<div class="sor-layer-style"> </div>';
  	 echo '</aside>';
}
}

if ( !function_exists ( "sor_button_config" )){
add_filter('sor_layer_button', 'sor_button_config');
function sor_button_config( $value ) {
  $option= $value['option'];
  $key= $value['key'];
  $global_key= $value['global_key'];
  $slide_key= $value['slide_key'];
  
 	$button_boxed = !empty($option['button_boxed'])?$option['button_boxed']:'boxed';
	if($button_boxed=='boxed'){
   		$boxed ='sor-button-boxed';	
	}else{
  		$boxed ='sor-button-none';	
	}
	$icon_align = !empty($option['icon_align'])?'sor-icon-'.sor_rtl_has($option['icon_align']).' ':'';

	$button_link = !empty( $option['button_link'])? ' href="'.$option['button_link'].'"':'';
	$target = !empty($option['button_widows']) ? 'target="_blank"' : '';
  
  
   
 //button Css
	echo '<aside class="sor-layer-'.$key.' sor-layer-item  '.sor_layer_effect_class($option).'" >';


		echo '<a class="sor-button '.$boxed.' sor-layer-content '.$icon_align.'" '.$button_link.''.$target.'    >';
			 
			if(!empty($option['icon'])){
				sor_icon_fontfamily($option['icon']);
				  echo '<i class="'.$option['icon'].'"></i>';
			}
			if(!empty($option['button'])){
				  echo $option['button'];
			}
		 	
		echo '</a>';
		
		
  
		$css=sor_layer_position( $option);
 		$css.= sor_slider_var_align( 'txt-ag',$option,'button_align' );	
 		$css.= sor_slider_var_align( 'tab-txt-ag',$option,'tablet_button_align' );		 
 		$css.= sor_slider_var_align( 'mob-txt-ag',$option,'mobile_button_align' );			 
		$css.= sor_slider_var_2( 'btn-cr',$option,'button_color','first');		 
		$css.= sor_slider_var_2( 'btn-hv-cr',$option,'button_hover_color','first');	
		$css.= sor_slider_var_text_shadow( 'btn',$option,'button_shadow');		 
		$css.= sor_slider_var_text_shadow( 'btn-hv',$option,'button_hover_shadow','first');		
		$css.= sor_slider_var_2( 'icn-cr',$option,'icon_color','first');		 
		$css.= sor_slider_var_2( 'icn-hv-cr',$option,'icon_hover_color','first');
		 
			
 		if($button_boxed=='boxed'){
		$css.=sor_slider_var_padding( 'btn-box-pd',$option,'button_boxed_padding');
		$css.= sor_slider_var_gradient_background_color( 'btn-box',$option,'button_boxed_background');		 
		$css.= sor_slider_var_gradient_background_color( 'btn-box-hv',$option,'button_boxed_hover_background');		 
		$css.= sor_slider_var_border( 'btn-box',$option,'button_boxed_border');		 
		$css.= sor_slider_var_border( 'btn-box-hv',$option,'button_boxed_hover_border');		 
		$css.= sor_slider_var_shadow( 'btn-box',$option,'button_boxed_shadow');		 
		$css.= sor_slider_var_shadow( 'btn-box-hv',$option,'button_boxed_hover_shadow');		 
		$css.= sor_slider_var_radius( 'btn-box',$option,'button_boxed_radius');		 
		} 
	$css.=sor_slider_var( 'btn-fn-fm',$option,'button_fontfamily');
		
		$css.=sor_slider_var_unit( 'btn-fn-sz',$option,'button_font_size','px');
 		$css.=sor_slider_var( 'btn-fn-wt',$option,'button_font_weight');
		$css.=sor_slider_var( 'btn-fn-de',$option,'button_font_decoration');
		$css.=sor_slider_var( 'btn-fn-tf',$option,'button_font_transform');
		$css.=sor_slider_var_unit( 'btn-lt-sp',$option,'button_spacing','px');
		$css.=sor_slider_var( 'btn-fn-st',$option,'button_font_style');
		
	$css.=sor_slider_var_unit( 'tab-btn-fn-sz',$option,'tablet_button_font_size','px');
	$css.=sor_slider_var_unit( 'mob-btn-fn-sz',$option,'mobile_button_font_size','px');		
	$css.=sor_layer_effect( $option);
	$fontface = sor_slider_fontface($option,'button_fontfamily','button_font_weight');	   
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