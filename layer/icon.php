<?php
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
															 	Slider Text Options
 
*////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////*
 if (is_admin()){
if ( !function_exists ( "sor_icon_options" )){
add_filter('sor_layer_element_options', 'sor_icon_options');
function sor_icon_options( $element ) {
	$option = array();


 


 	$item = array(
 		'name'			=> 	__('آیکون','sorsorak'),
  		'id'			=> 'icon',
		'img'			=> SAOSORAK_DIR .'admin/assets/image/layer_icon.png'
		
  	); 
   
 include SORSORAK_PATH . 'layer/mini/position_size.php';

 
	$option[]= array( 
		"name"			=> __('آیکون','sorsorak'),
 		"default"		=> 'fa-star',
 		"id"			=> "icon",
		  		"group"			=>  __('محتوا','sorsorak'),

 		"type"			=> "icon",
 	); 
  
	
	$option[]= array( 
		"name"			=> __('لینک','sorsorak'),
 		"id"			=> "icon_link",
   		"type"			=> "text",
   		"width"			=> "100%",
		 	 	"warp_width"			=> "100%",

 		"placeholder"	=> "http://",
   		"group"			=>  __('محتوا','sorsorak'),
	); 
 
	$option[] = array(
		"name"		=>  __('باز شدن در پنجره جدید','sorsorak'),
		"id"		=> "icon_widows",
		"type"		=> "checkbox",
  		"group"			=>  __('محتوا','sorsorak'),
 	);		
	
 
	
	 
 
	
	
	$option[]= array( 
 			"responsive"	=> "desktop",
	
		"name"			=> __('چیدمان','sorsorak'),
 		"id"			=> "icon_align",
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
			"id"			=>  "tablet_icon_align_heading",
			"type"			=> "heading",
		);
		
		$option[]= array( 
 		"responsive"			=> "tablet",
	
		"name"			=> __('چیدمان در تبلت','sorsorak'),
 		"id"			=> "tablet_icon_align",
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
			"name"			=> __('واکنش گرا در تبلت','sorsorak'),
  		"group"			=>  __('محتوا','sorsorak'),
			"id"			=>  "tablet_icon_align_heading",
			"type"			=> "heading",
		);
		
		$option[]= array( 
 		"responsive"			=> "mobile",
	
		"name"			=> __('چیدمان در تبلت','sorsorak'),
 		"id"			=> "mobile_icon_align",
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
		
	$option[]= array( 
		"name"			=> __('هور','sorsorak'),
 		"id"			=> "icon_effects",
		"group"			=>  __('استایل','sorsorak'),
 		"type"			=> "hover",
   		"options"		=>  array(
 			'normal' =>		 __('عادی','sorsorak'),		
			'hover' =>		 __('هاور','sorsorak'),		
	 	),
	); 	 
 		
	
	$option[]= array(
  				"name"		=>  __('رنگ متن','sorsorak'),
  				"id"		=> "icon_color",
				"fold"			=>	array(
								'normal' => 'icon_effects',
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
  				"id"		=> "icon_hover_color",
				"fold"			=>	array(
					'hover' => 'icon_effects',
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
  				"id"		=> "icon_shadow",
				"fold"			=>	array(
								'normal' => 'icon_effects',
				) ,
   				"group"			=>  __('استایل','sorsorak'),
				"type"		=> "multi_options",
   		"options"		=>  sor_multi_array_options('text_shadow'),						
				
 	);	


	$option[]= array(
  				"name"		=>  __('سایه متن در هاور','sorsorak'),
  				"id"		=> "icon_hover_shadow",
				"fold"			=>	array(
								'hover' => 'icon_effects',
				) ,
   				"group"			=>  __('استایل','sorsorak'),
				"type"		=> "multi_options",
 	
 		"options"		=>  sor_multi_array_options('text_shadow'),						
				
 	);	
	
$option[]= array( 
		"responsive"	=> "desktop",
 		"name"			=> __('اندازه آیکون','sorsorak'),
 		"id"			=> "icon_font_size",
		"group"			=>  __('استایل','sorsorak'),
		"type"			=> "number", 	 	
		"unit"			=> "px", 	
		"max"			=> "200", 		
		 	
 	 
		 
  	); 	


	if(!empty($_REQUEST['sor_tablet'])){

		$option[]= array( 
 			"responsive"	=> "tablet",
			"name"			=> __('واکنش گرا در تبلت','sorsorak'),
   				"group"			=>  __('استایل','sorsorak'),
			"id"			=>  "tablet_typography_heading",
			"type"			=> "heading",
		);
		$option[]= array( 
 			"responsive"	=> "tablet",
		
			"name"			=> __('اندازه متن در تبلت','sorsorak'),
			"id"			=> "tablet_icon_font_size",
   				"group"			=>  __('استایل','sorsorak'),
			"type"			=> "number", 	 	
			"unit"			=> "px", 	
			"max"			=> "200", 		
				
		 
			 
		);  	 	
	 
		
 
	}	
	  
	if(!empty($_REQUEST['sor_mobile'])){

		$option[]= array( 
 			"responsive"	=> "mobile",
		
			"name"			=> __('واکنش گرا در موبایل','sorsorak'),
   				"group"			=>  __('استایل','sorsorak'),
			"id"			=>  "mobile_typography_heading",
			"type"			=> "heading",
		);
		$option[]= array( 
 			"responsive"	=> "mobile",
		
			"name"			=> __('اندازه متن در موبایل','sorsorak'),
			"id"			=> "mobile_icon_font_size",
   				"group"			=>  __('استایل','sorsorak'),
			"type"			=> "number", 	 	
			"unit"			=> "px", 	
			"max"			=> "200", 		
				
		 
			 
		);  	 	
	 
	 
		 
	 
	}	 
	/***********************************boxed************************************************************************************/
		$boxed='icon';

 	include SORSORAK_PATH . 'layer/mini/boxed.php';
 
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
if ( !function_exists ( "sor_icon_perview" )){
add_filter('sor_layer_perview_icon', 'sor_icon_perview');
function sor_icon_perview( $value ) {
 $option= $value['option'];
  $key= $value['key'];
  
  	 
	////////////////////////////////////////////////////////////OUTPUT////////////////////////////////////////////////////////////////////////////////////////	  

	echo '<aside id="sor_perview_layer_'.$key.'" class="sor_draggable sor-layer-item sor-layer-center" data-key="'.$key.'" >';
		echo '<div class="sor-icon sor-layer-content"  >';
  	 echo '</div>';
	 
	 
 	 echo '<div class="sor-layer-style"> </div>';
	 
 	 echo '</aside>';	
}
}

if ( !function_exists ( "sor_icon_config" )){
add_filter('sor_layer_icon', 'sor_icon_config');
function sor_icon_config( $value ) {
  $option= $value['option'];
  $key= $value['key'];
  $global_key= $value['global_key'];
  $slide_key= $value['slide_key'];
	
 	$icon_boxed = !empty($option['icon_boxed'])?'sor-icon-'.$option['icon_boxed']:'sor-icon-none';

	 
	//text Css
	echo '<aside class="sor-layer-'.$key.' sor-layer-item  '.sor_layer_effect_class($option).'" >';


		echo '<div class="sor-icon '.$icon_boxed.' sor-layer-content ">';
			if(!empty($option['icon_link'])){
			$target = !empty($option['icon_widows']) ? 'target="_blank"' : '';
 			 echo '<a href="'.$option['icon_link'].'" '.$target.' >';	
			}
			if(!empty($option['icon'])){
				sor_icon_fontfamily($option['icon']);
				  echo '<i class="'.$option['icon'].'"></i>';
			}
			 
		if(!empty($option['icon_link'])){
			 echo '</a>';	
			}	
		echo '</div>';
		
	$css=sor_layer_position( $option);

	$css.= sor_slider_var( 'icn-ag',$option,'icon_align' );		 
 		$css.= sor_slider_var_align( 'tab-icn-ag',$option,'tablet_icon_align' );		 
 		$css.= sor_slider_var_align( 'mob-icn-ag',$option,'mobile_icon_align' );	
	$css.= sor_slider_var_2( 'icn-cr',$option,'icon_color','first');		 
	$css.= sor_slider_var_2( 'icn-hv-cr',$option,'icon_hover_color','first');	
  	$css.= sor_slider_var_text_shadow( 'icn',$option,'icon_shadow');		 
	$css.= sor_slider_var_text_shadow( 'icn-hv',$option,'icon_hover_shadow','first');		
	$css.=sor_slider_var_unit( 'icn-fn-sz',$option,'icon_font_size','px');
	$css.=sor_slider_var_unit( 'tab-icn-fn-sz',$option,'tablet_icon_font_size','px');
	$css.=sor_slider_var_unit( 'mob-icn-fn-sz',$option,'mobile_icon_font_size','px');
 
 $boxed = !empty($option['icon_boxed'])?$option['icon_boxed']:'none';
  	if($boxed=='boxed'){	
 		$css.=sor_slider_var_padding( 'icn-box-pd',$option,'icon_boxed_padding');
		$css.= sor_slider_var_gradient_background_color( 'icn-box',$option,'icon_boxed_background');		 
		$css.= sor_slider_var_gradient_background_color( 'icn-box-hv',$option,'icon_boxed_hover_background');		 
		$css.= sor_slider_var_border( 'icn-box',$option,'icon_boxed_border');		 
		$css.= sor_slider_var_border( 'icn-box-hv',$option,'icon_boxed_hover_border');		 
		$css.= sor_slider_var_shadow( 'icn-box',$option,'icon_boxed_shadow');		 
		$css.= sor_slider_var_shadow( 'icn-box-hv',$option,'icon_boxed_hover_shadow');		 
		$css.= sor_slider_var_radius( 'icn-box',$option,'icon_boxed_radius');		 
  	} 
	
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