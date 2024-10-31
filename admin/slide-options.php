<?php
if( ! function_exists( 'sor_slide_options' ) ) {
 add_filter('sor_slide_options', 'sor_slide_options');
function sor_slide_options( $option ) {
	$option = array();
	 
 	$option[]= array( 
		"name"			=> __('عنوان اسلاید','sorsorak'),
 		"id"			=> "title",
	 	"width"			=> "100%",
   		"type"			=> "text",
 	);
	
 	$option[]= array( 
		"name"			=> __('لینک','sorsorak'),
 		"id"			=> "link",
 	 	"width"			=> "100%",
 	 	"warp_width"			=> "100%",
 		 
 		"placeholder"	=> "http://",
 		"type"			=> "text",
 	);	
		   
	$option[]= array( 
		"name"			=> __('رنگ پس زمینه','sorsorak'),
 		"id"			=> "background_color",
 		"group"			=>  __('پس زمینه','sorsorak'),
		"type"			=> "multi_options",
		"options"		=> array(
			array(
 				"id"		=> "first",
				"type"		=> "color_rgba",
			),
			array(
 				"id"		=> "second",
				"type"		=> "color_rgba",
			),
			array(
 				"id"		=> "third",
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
	
		),
 	);		
	
	 
	$option[]= array( 
		"name"			=> __('تصویر پس زمینه','sorsorak'),
 		"id"			=> "background_image",
	 	"width"			=> "100%",
	
 		"group"			=>  __('پس زمینه','sorsorak'),
  		"type"			=> "image",
 	);	
	
   
	$option[]= array( 
			"responsive"	=> "desktop",
		"name"			=> __('موقعیت تصویر پس زمینه','sorsorak'),
 		"id"			=> "background_image_position",
 		"group"			=>  __('پس زمینه','sorsorak'),
		"type"			=> "select",
 		"options"		=> sor_array_options('image_position')
 	);
 
	if(!empty($_REQUEST['sor_tablet'])){

		$option[]= array( 
			"responsive"	=> "tablet",
			"name"			=> __('واکنش گرا در تبلت','sorsorak'),
			"group"			=>  __('پس زمینه','sorsorak'),
			"id"			=>  "tablet_background_heading",
			"type"			=> "heading",
		);
		$option[]= array( 
			"responsive"	=> "tablet",
			"name"			=> __('موقعیت تصویر پس زمینه در تبلت','sorsorak'),
			"id"			=> "tablet_background_image_position",
			"group"			=>  __('پس زمینه','sorsorak'),
			"type"			=> "select",
			"options"		=> sor_array_options('image_position')
		);
		
  
 
	}
	
		if(!empty($_REQUEST['sor_mobile'])){

$option[]= array( 
		"responsive"	=> "mobile",
		"name"			=> __('واکنش گرا در موبایل','sorsorak'),
 		"group"			=>  __('پس زمینه','sorsorak'),
 		"id"			=>  "mobile_background_heading",
		"type"			=> "heading",
  	);
	$option[]= array( 
			"responsive"	=> "mobile",
		"name"			=> __('موقعیت تصویر پس زمینه در موبایل','sorsorak'),
 		"id"			=> "mobile_background_image_position",
 		"group"			=>  __('پس زمینه','sorsorak'),
		"type"			=> "select",
 		"options"		=> sor_array_options('image_position')
 	);
		
 
		}
 
	
 
  			
 
    return $option;
} 
}
 ?>