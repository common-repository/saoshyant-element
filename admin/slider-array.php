<?php
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																	Radius Mini
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
 
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																	Radius Mini
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if(is_admin()){
if( ! function_exists( 'sor_array_options' ) ) {
function sor_array_options($value) {
	
		
	$page_args = array(
			'sort_order' => 'asc',
			'sort_column' => 'post_title',
			'hierarchical' => 1,
 			'meta_value' => '1',
			'child_of' => 0,
			'parent' => -1,
			'post_type' => 'sorsorak',
			'post_status' => 'publish'
		); 
		 
		$options_page = array();
		$options_page_obj =get_posts($page_args); 
 		$options_page[''] = __('Default','reza');

		if(!empty($options_page_obj) && is_array($options_page_obj) ){
		foreach ($options_page_obj as $rezapage) {
			$options_page[$rezapage->ID] = $rezapage->post_title;
		}
	}	
	
	$options['sorsorak_loop'] = $options_page;
	
 	$options['unit']= array(
		'px'				=>	'px',
		'%'					=>	'%', 
		'em'				=>	'em',
 		
	);
	
	$options['align']= array(
		'left'				=> is_rtl() ? esc_html__('Right','sorsorak'):esc_html__('Left','sorsorak'),  
		'center'			=> esc_html__('Center','sorsorak'), 
		'right'				=> is_rtl() ? esc_html__('Left','sorsorak'):esc_html__('Right','sorsorak'),  
   		
	);	
	
$options['align_mini']= array(
 		'left'				=> is_rtl() ? esc_html__('Right','sorsorak'):esc_html__('Left','sorsorak'),  
 		'right'				=> is_rtl() ? esc_html__('Left','sorsorak'):esc_html__('Right','sorsorak'),  
   		
	);		
		$options['button'] = array(
 			'style-1'					=> esc_html__('Style 1','sorsorak'),  
  			'style-2'					=> esc_html__('Style 2:Top Border inset','sorsorak'),  
 			'style-3'					=> esc_html__('Style 3:Bottom Border inset','sorsorak'),  
 			'style-4'					=> is_rtl()?  __('Style 5:Right Border inset','sorsorak'): __('Style 4:Left Border inset','sorsorak'),  
 			'style-5'					=> is_rtl()?   __('Style 4:Left Border inset','sorsorak'): __('Style 5:Right Border inset','sorsorak'),  
 			'style-6'					=> esc_html__('Style 6:Icon Background color','sorsorak'),   
 			'style-7'					=> esc_html__('Style 7:none boxed','sorsorak'),   
 	); 	
 $options['border_style']= array(
	
		'solid'			=>esc_html__('جامد','sorsorak'), 
		'dotted'		=> esc_html__('خطچین','sorsorak'), 
		'dashed'		=> esc_html__('نقطه ای','sorsorak'), 
		'double'		=> esc_html__('دوبل','sorsorak'), 
		'groove'		=> esc_html__('شیار','sorsorak'),  
  		 
  		
		
 	);
	
	
	
	$options['image_position']=  array(
		''			=> __('پیشفرض','sorsorak'),
		'center'			=> __('وسط','sorsorak'),
		'left'				=> is_rtl()?__('راست','sorsorak'):__('چپ','sorsorak'), 
		'left top'			=> is_rtl()?__('راست بالا','sorsorak'): __('چپ بالا','sorsorak'), 
		'left bottom'		=> is_rtl()?__('راست پایین','sorsorak'):__('چپ پایین','sorsorak'), 
		'left center'		=> is_rtl()?__('راست وسط','sorsorak'): __('چپ وسط','sorsorak'), 
		'right' 			=> is_rtl()? __('چپ','sorsorak'):__('راست','sorsorak'), 
		'right top'			=> is_rtl()? __('چپ بالا','sorsorak'): __('راست بالا','sorsorak'), 
		'right bottom'		=> is_rtl()? __('چپ پایین','sorsorak'): __('راست پایین','sorsorak'), 
		'right center'		=> is_rtl()? __('چپ وسط','sorsorak'): __('راست وسط','sorsorak'),
		'top'				=> __('بالا','sorsorak'),
		'top center'		=> __('بالا وسط','sorsorak'),
		'bottom'			=> __('پایین','sorsorak'),
		'bottom center'		=> __('پایین وسط','sorsorak'),
	);	
	
	
	
	
	
		
 $options['fontfamily']= array(
		'' => 'پیشفرض',
	'sor-iransans' => 'ایران سنس',
	'sor-vazir' => 'وزیر',
	'sor-yekan' => 'یکان',
	"sor-sahel" => "ساحل",
	"sao-parastoo" => "پرستو",
	"sor-samim" => "صمیم",
	"sor-shabnam" => "شبنم",
	"sor-nahid" => "ناهید",
	 "sor-segoe" => 'سگو',
	"sor-tahoma" => "تاهوما",
	); 
return $options[$value];
 }	
}
if( ! function_exists( 'sor_multi_array_options' ) ) {
function sor_multi_array_options($value) {
		 $options['background2'] =array(
				array(	"id"		=> "first",
						"type"		=> "color_rgba",
  					),
					array(
 						"id"		=> "second",
						"type"		=> "color_rgba",
  					),	
			 					
					array(
 						"id"		=> "orientation",
						"type"		=> "select",
						"options"	=> array(
							"horizontal"		=>  esc_html__('→','sorsorak'),
							"vertical"			=>  esc_html__('↓','sorsorak'),
							"diagonal"			=>  esc_html__('↘','sorsorak'),
							"diagonal-bottom"	=>  esc_html__('↗','sorsorak'),
							"radial"			=>  esc_html__('○','sorsorak'),

  						),
				),
	);	
	$options['layer_padding'] = array( 
			array( 
				"name_bottom"			=> esc_html__('بالا','sorsorak'),			
  				"id"			=> "top",
				"width"			=> "40px",
				"min"			=> "-1000",
				"max"			=> "10000",
				"type"			=> "number",
 			),
			array( 
				"name_bottom"			=> is_rtl()? __('چپ','sorsorak'):__('راست','sorsorak'),  
 				"id"			=> "right",
				"width"			=> "40px",
				"min"			=> "-1000",
				"max"			=> "10000",		
 				"type"			=> "number",
 			),	
			array( 
				"name_bottom"			=> esc_html__('پایین','sorsorak'),
				"id"			=> "bottom",
				"width"			=> "40px",
				"min"			=> "-1000",
				"max"			=> "10000",			
 				"type"			=> "number",
 			),
			array( 
				"name_bottom"			=> is_rtl()? __('راست','sorsorak'): __('چپ','sorsorak'),
  				"id"			=> "left",
				"width"			=> "40px",
				"min"			=> "-1000",
				"max"			=> "10000",		
 				"type"			=> "number",
 			),	
			array( 
				"name_bottom"			=>  __('شمارنده','sorsorak'),
  				"id"			=> "unit",
  				"type"			=> "select",
				"width"			=> "auto",
	
				"options"		=>  sor_array_options('unit'),
 			),
  	);
	
	
	
	
$options['margin'] = array( 
			array( 
				"name"			=> esc_html__('بالا','sorsorak'),			
  				"id"			=> "top",
				"width"			=> "40px",
  				"min"			=> "-10000",
 				"max"			=> "10000",
				"type"			=> "number",
 			),
			array( 
				"name"			=> is_rtl()? __('چپ','sorsorak'):__('راست','sorsorak'),  
 				"id"			=> "right",
				"width"			=> "40px",
  				"min"			=> "-10000",
 				"max"			=> "10000",		
 				"type"			=> "number",
 			),	
			array( 
				"name"			=> esc_html__('پایین','sorsorak'),
				"id"			=> "bottom",
				"width"			=> "40px",
 				"max"			=> "10000",			
 				"type"			=> "number",
 			),
			array( 
				"name"			=> is_rtl()? __('راست','sorsorak'): __('چپ','sorsorak'),
  				"id"			=> "left",
				"width"			=> "40px",
  				"min"			=> "-10000",
 				"max"			=> "10000",		
 				"type"			=> "number",
 			),	
			array( 
				"name"			=>  __('شمارنده','sorsorak'),
  				"id"			=> "unit",
  				"type"			=> "select",
				"width"			=> "auto",
	
				"options"		=>  sor_array_options('unit'),
 			),
  	);
		
	
$options['padding'] = array( 
			array( 
				"name"			=> esc_html__('بالا','sorsorak'),			
  				"id"			=> "top",
				"width"			=> "40px",
  				"max"			=> "10000",
				"type"			=> "number",
 			),
			array( 
				"name"			=> is_rtl()? __('چپ','sorsorak'):__('راست','sorsorak'),  
 				"id"			=> "right",
				"width"			=> "40px",
  				"max"			=> "10000",		
 				"type"			=> "number",
 			),	
			array( 
				"name"			=> esc_html__('پایین','sorsorak'),
				"id"			=> "bottom",
				"width"			=> "40px",
  				"max"			=> "10000",			
 				"type"			=> "number",
 			),
			array( 
				"name"			=> is_rtl()? __('راست','sorsorak'): __('چپ','sorsorak'),
  				"id"			=> "left",
				"width"			=> "40px",
  				"max"			=> "10000",		
 				"type"			=> "number",
 			),	
			array( 
				"name"			=>  __('شمارنده','sorsorak'),
  				"id"			=> "unit",
  				"type"			=> "select",
				"width"			=> "auto",
	
				"options"		=>  sor_array_options('unit'),
 			),
  	);
	
	
	
	$options['text_shadow'] = array( 
			array( 
				"name_bottom"			=> esc_html__('افقی','sorsorak'),			
  				"id"			=> "horizontal",
 				"width"			=> "40px", 
 				"min"			=> "-1000",
				"max"			=> "10000",		
 
				"type"			=> "number",
 			),
			array( 
				"name_bottom"			=> esc_html__('عمودی','sorsorak'),
 				"id"			=> "vertical",
 				"width"			=> "40px", 
				"min"			=> "-1000",
				"max"			=> "10000",		
						
  				"type"			=> "number",
 			),	
			array( 
				"name_bottom"			=> esc_html__('بلور','sorsorak'),
				"id"			=> "blur",
 				"width"			=> "40px", 
				"min"			=> "0",
				"max"			=> "10000",		
  				"type"			=> "number",
 			),
 		  
			array( 
				"name_bottom"			=> esc_html__('رنگ','sorsorak'),
   				"id"			=> "color",
 				"type"			=> "color_rgba",
 			),				
			 
			);
 
 
 $options['border'] = array( 
			array( 
				"name"			=> esc_html__('بالا','sorsorak'),			
  				"id"			=> "top",
 				"width"			=> "40px",
				"min"			=> "0",
				"max"			=> "10000",
 				"unit"			=> "px",	
				"type"			=> "number",
 			),
			array( 
				"name"			=> is_rtl()?__('چپ','sorsorak'):__('راست','sorsorak'),
 				"id"			=> "right",
 				"width"			=> "40px",
				"min"			=> "0",
				"max"			=> "10000",
 				"unit"			=> "px",
 				"type"			=> "number",
 			),	
			array( 
				"name"			=> esc_html__('پایین','sorsorak'),
				"id"			=> "bottom",
 				"width"			=> "40px",
				"min"			=> "0",
				"max"			=> "10000",
 				"unit"			=> "px",
 				"type"			=> "number",
 			),
			array( 
				"name"			=> is_rtl()?__('راست','sorsorak'):__('چپ','sorsorak'),
  				"id"			=> "left",
 				"width"			=> "40px",	
				"min"			=> "0",
				"max"			=> "10000",
 				"unit"			=> "px",
 				"type"			=> "number",
 			),	
	 
			array( 
 				"name"			=> 	esc_html__('استایل','sorsorak'),
 				"id"			=> "style",				
  				"type"			=> "select",
				"width"			=> "auto",
 				"options"		=>  sor_array_options('border_style'),
 			),			
						
			array( 
 				"name"			=> 	esc_html__('رنگ','sorsorak'),
   				"id"			=> "color",
 				"type"			=> "color_rgba",
 			),	
  		); 
		
 	$options['layer_border'] = array( 
			array( 
				"name_bottom"			=> esc_html__('بالا','sorsorak'),			
  				"id"			=> "top",
 				"width"			=> "40px",
   				"type"			=> "number",
 			),
			array( 
				"name_bottom"			=> is_rtl()?__('چپ','sorsorak'):__('راست','sorsorak'),
 				"id"			=> "right",
 				"width"			=> "40px",
    				"type"			=> "number",
 			),	
			array( 
				"name_bottom"			=> esc_html__('پایین','sorsorak'),
				"id"			=> "bottom",
 				"width"			=> "40px",
				"type"			=> "number",
 			),
			array( 
				"name_bottom"			=> is_rtl()?__('راست','sorsorak'):__('چپ','sorsorak'),
  				"id"			=> "left",
 				"width"			=> "40px",	
    				"type"			=> "number",
 			),	
	 
			array( 
 				"name_bottom"			=> 	esc_html__('استایل','sorsorak'),
 				"id"			=> "style",				
  				"type"			=> "select",
				"width"			=> "auto",
 				"width"			=> "70px",	
 				"options"		=>  sor_array_options('border_style'),
 			),			
						
			array( 
 				"name_bottom"			=> 	esc_html__('رنگ','sorsorak'),
   				"id"			=> "color",
 				"type"			=> "color_rgba",
 			),	
  		); 
		
		
		
		$options['shadow'] = array( 
			array( 
				"name"			=> esc_html__('افقی','sorsorak'),			
  				"id"			=> "horizontal",
 				"width"			=> "40px",	
				"min"			=> "-10000",
  				"unit"			=> "px",
				"type"			=> "number",
 			),
			array( 
				"name"			=> esc_html__('عمودی','sorsorak'),
 				"id"			=> "vertical",
 				"width"			=> "40px",
				"min"			=> "-10000",
  				"unit"			=> "px",								
 				"type"			=> "number",
 			),	
			array( 
				"name"			=> esc_html__('بلور','sorsorak'),
				"id"			=> "blur",
 				"width"			=> "40px",	
   				"unit"			=> "px",			
 				"type"			=> "number",
 			),
			array( 
				"name"			=>  esc_html__('گسترده','sorsorak'),
  				"id"			=> "spread",
   				"unit"			=> "px",				
 				"width"			=> "40px",								
 				"type"			=> "number",
 			),	
		 
			array( 
				"name"			=> 	esc_html__('رنگ','sorsorak'),
				"id"			=> "color",
 				"type"			=> "color_rgba",
 			),				
			array( 
			
			"name"			=> 	esc_html__('جایگاه','sorsorak'),
   				"id"			=> "position",
  				"type"			=> "select",
				"width"			=> "auto",
				"options"		=>  array( 
   					""			=> esc_html__('بیرونی','sorsorak'),
 					"inset"		=> esc_html__('داخلی','sorsorak'),
 				),
 			),
			);
			
			
	$options['layer_shadow'] = array( 
			array( 
				"name_bottom"			=> esc_html__('افقی','sorsorak'),			
  				"id"			=> "horizontal",
 				"width"			=> "40px",	
				"min"			=> "-10000",
 				"type"			=> "number",
 			),
			array( 
				"name_bottom"			=> esc_html__('عمودی','sorsorak'),
 				"id"			=> "vertical",
 				"width"			=> "40px",
				"min"			=> "-10000",
  				"type"			=> "number",
 			),	
			array( 
				"name_bottom"			=> esc_html__('بلور','sorsorak'),
				"id"			=> "blur",
 				"width"			=> "40px",	
  				"type"			=> "number",
 			),
			array( 
				"name_bottom"			=>  esc_html__('گسترده','sorsorak'),
  				"id"			=> "spread",
  				"width"			=> "40px",								
 				"type"			=> "number",
 			),	
		 
			array( 
				"name_bottom"			=> 	esc_html__('رنگ','sorsorak'),
				"id"			=> "color",
 				"type"			=> "color_rgba",
 			),				
			array( 
 				"name_bottom"			=> 	esc_html__('جایگاه','sorsorak'),
   				"id"			=> "position",
  				"type"			=> "select",
				"width"			=> "auto",
				"options"		=>  array( 
   					""			=> esc_html__('بیرونی','sorsorak'),
 					"inset"		=> esc_html__('داخلی','sorsorak'),
 				),
 			),
			);
			
			
			
			
 	$options['radius'] = array( 
			array( 
				"name"			=> is_rtl()? esc_html__('راست بالا','sorsorak'): esc_html__('پایین چپ','sorsorak'),			
  				"id"			=> "top_left",
	 			"width"			=> "40px",	
				"min"			=> "0",
				"max"			=> "10000",
 				"unit"			=> "px",					
				"type"			=> "number",
 			),
			array( 
				"name"			=>  is_rtl()?  esc_html__('بالا چپ','sorsorak'): esc_html__('بالا راست','sorsorak'),
 				"id"			=> "top_right",
	 			"width"			=> "40px",	
				"min"			=> "0",
				"max"			=> "10000",
 				"unit"			=> "px",							
 				"type"			=> "number",
 			),	
			array( 
				"name"			=> is_rtl()?   esc_html__('پایین چپ','sorsorak'):esc_html__('پایین راست','sorsorak'),
				"id"			=> "bottom_right",
	 			"width"			=> "40px",	
				"min"			=> "0",
				"max"			=> "10000",
 				"unit"			=> "px",											
 				"type"			=> "number",
 			),
			array( 
				"name"			=>  is_rtl()?  esc_html__('پایین راست','sorsorak'):esc_html__('پایین چپ','sorsorak'),
  				"id"			=> "bottom_left",
	 			"width"			=> "40px",	
				"min"			=> "0",
				"max"			=> "10000",
 				"unit"			=> "px",								
 				"type"			=> "number",
 			), 
 		
	 
  	);	
	
	
	
$options['layer_radius'] = array( 
			array( 
				"name_bottom"			=> is_rtl()? esc_html__('راست بالا','sorsorak'): esc_html__('پایین چپ','sorsorak'),			
  				"id"			=> "top_left",
	 			"width"			=> "60px",	
 				"type"			=> "number",
 			),
			array( 
				"name_bottom"			=>  is_rtl()?  esc_html__('بالا چپ','sorsorak'): esc_html__('بالا راست','sorsorak'),
 				"id"			=> "top_right",
	 			"width"			=> "60px",	
  				"type"			=> "number",
 			),	
			array( 
				"name_bottom"			=> is_rtl()?   esc_html__('پایین چپ','sorsorak'):esc_html__('پایین راست','sorsorak'),
				"id"			=> "bottom_right",
	 			"width"			=> "60px",	
  				"type"			=> "number",
 			),
			array( 
				"name_bottom"			=>  is_rtl()?  esc_html__('پایین راست','sorsorak'):esc_html__('پایین چپ','sorsorak'),
  				"id"			=> "bottom_left",
	 			"width"			=> "60px",	
  				"type"			=> "number",
 			), 
 		
	 
  	);	
		
	
	$options['size'] = array( 
			array( 
				"name"			=> __('پهنا','sorsorak'),			
  				"id"			=> "width",
 				"type"			=> "number",
				"width"			=> "60px",												
  				"unit"			=> "px",
 			),
			array( 
				"name"			=> __('ارتفاع','sorsorak'),			
  				"id"			=> "height",
 				"type"			=> "number",
 				"unit"			=> "px",
				"width"			=> "60px",												
  			), 
	 
  	);		
return $options[$value];
  
 }	
}
}
?>