<?php

if( ! function_exists( 'sor_setting_options' ) ) {
 add_filter('sor_setting_options', 'sor_setting_options');
function sor_setting_options( $option ) {
	$option = array();
	$option[]= array( 
		"name"			=> __('تمام عرض بودن اسلایدر','sorsorak'),
 		"id"			=> "full_width",
		"default"    	=> 1,
  		"type"			=> "checkbox",
 		
 	); 		 
	 
	$option[]= array( 
		"name"			=> __('نوع اسلاید','sorsorak'),
 		"id"			=> "type",
   		"type"			=> "radio",
		"options"		=>  array( 
			"slider"			=> __('اسلایدر','sorsorak'),
			"single"			=> __('تک اسلاید','sorsorak'),
			"glider"			=> __('گلایدر','sorsorak'),
  		),
 	); 	
	 
	 
	$option[]= array( 
		"responsive"	=>  "desktop",		
 		"name"			=> __('نوع گلایدر','sorsorak'),
 		"id"			=> "glider_layout",
		"fold"			=> array('glider' =>'sor_setting[type]' ),
 		"type"			=> "radio_image",
		"options"		=>  array( 
 			"glider_1"		=> SAOSORAK_DIR.'/admin/assets/image/glider/glider_1.jpg',
 			"glider_2"		=> SAOSORAK_DIR.'/admin/assets/image/glider/glider_2.jpg',
 			"glider_3"		=> SAOSORAK_DIR.'/admin/assets/image/glider/glider_3.jpg',
 			"glider_4"		=> SAOSORAK_DIR.'/admin/assets/image/glider/glider_4.jpg',
 			"glider_5"		=> SAOSORAK_DIR.'/admin/assets/image/glider/glider_5.jpg',
 			"glider_6"		=> SAOSORAK_DIR.'/admin/assets/image/glider/glider_6.jpg',
 			"glider_7"		=> SAOSORAK_DIR.'/admin/assets/image/glider/glider_7.jpg',
 			"glider_8"		=> SAOSORAK_DIR.'/admin/assets/image/glider/glider_8.jpg',
 			"glider_9"		=> SAOSORAK_DIR.'/admin/assets/image/glider/glider_9.jpg',
 			"glider_10"		=> SAOSORAK_DIR.'/admin/assets/image/glider/glider_10.jpg',
 			"glider_11"		=> SAOSORAK_DIR.'/admin/assets/image/glider/glider_11.jpg',
 			"glider_12"		=> SAOSORAK_DIR.'/admin/assets/image/glider/glider_12.jpg',
 			"glider_13"		=> SAOSORAK_DIR.'/admin/assets/image/glider/glider_13.jpg',
 			"glider_14"		=> SAOSORAK_DIR.'/admin/assets/image/glider/glider_14.jpg',
 			"glider_15"		=> SAOSORAK_DIR.'/admin/assets/image/glider/glider_15.jpg',
 			"glider_16"		=> SAOSORAK_DIR.'/admin/assets/image/glider/glider_16.jpg',
 			"glider_17"		=> SAOSORAK_DIR.'/admin/assets/image/glider/glider_17.jpg',
 			"glider_18"		=> SAOSORAK_DIR.'/admin/assets/image/glider/glider_18.jpg',
 			"glider_19"		=> SAOSORAK_DIR.'/admin/assets/image/glider/glider_19.jpg',
 			"glider_20"		=> SAOSORAK_DIR.'/admin/assets/image/glider/glider_20.jpg', 
 			"glider_21"		=> SAOSORAK_DIR.'/admin/assets/image/glider/glider_21.jpg', 
 			"glider_22"		=> SAOSORAK_DIR.'/admin/assets/image/glider/glider_22.jpg', 
 			"glider_23"		=> SAOSORAK_DIR.'/admin/assets/image/glider/glider_23.jpg', 
 			"glider_24"		=> SAOSORAK_DIR.'/admin/assets/image/glider/glider_24.jpg', 
 			"glider_25"		=> SAOSORAK_DIR.'/admin/assets/image/glider/glider_25.jpg', 
 			"glider_26"		=> SAOSORAK_DIR.'/admin/assets/image/glider/glider_26.jpg', 
 			"glider_27"		=> SAOSORAK_DIR.'/admin/assets/image/glider/glider_27.jpg', 
 			"glider_28"		=> SAOSORAK_DIR.'/admin/assets/image/glider/glider_28.jpg', 
 			"glider_29"		=> SAOSORAK_DIR.'/admin/assets/image/glider/glider_29.jpg', 
 			"glider_30"		=> SAOSORAK_DIR.'/admin/assets/image/glider/glider_30.jpg', 
 		),			
   	); 	
 

	$option[]=array( 
				"name"			=> __('فاصله مابین','sorsorak'),			
  				"id"			=> "between",
   				"fold"			=> array('glider' =>'sor_setting[type]' ),
  	 			"min"			=> "0",
				"max"			=> "100",
				"unit"			=> "px",
 				"default"		=>  '40',
				"width"			=> "60px",
				"type"			=> "number",										
	);
 
	$option[]= array( 
		"name"			=> __('اندازه اسلایدر','sorsorak'),
   		"id"			=> "size",
 		"desc"			=> __('نمایش در صفحه های با حداقل اندازه ۱۰۲۵ پیکسل',"sorsorak"),
 		"default"		=>  array(
								'width' => '1200',
								'height' => '600',
							) ,
							
		"type"			=> "multi_options",
		"options"		=>  array( 
			array( 
				"name"			=> __('پهنا','sorsorak'),			
  				"id"			=> "width",
 				"type"			=> "number",
 				"min"			=> "1",
 				"max"			=> "10000",
				"width"			=> "60px",												
  				"unit"			=> "px",
 			),
			array( 
				"name"			=> __('ارتفاع','sorsorak'),			
  				"id"			=> "height",
				"min"			=> "1",
 				"max"			=> "10000",
 				"fold"			=> array('slider' =>'sor_setting[type]','single' =>'sor_setting[type]' ),
 				"type"			=> "number",
 				"unit"			=> "px",
				"width"			=> "60px",												
  			), 
			array( 
				"name"			=> __('نسبت','sorsorak'),			
  				"id"			=> "ratio",
   				"fold"			=> array('glider' =>'sor_setting[type]' ),
 				"type"			=> "select",
 				"options"		=> array(
  					'30'				=>	'10:3',
  					'33.33'				=>	'3:1',
 					'40'				=>	'5:2',
					'50'				=>	'1:2',
					'56'				=>	'16:9',
					'60'				=>	'5:3',
					'75'				=>	'4:3', 
					'100'				=>	'1:1',
					'135'				=>	'3:5',
					)											
  			)
	 
  		)
		
 	); 	
	
	 
 	$option[]= array( 
  		"name"			=> __('نوع گلایدر در تبلت','sorsorak'),
 		"id"			=> "tablet_glider_layout",
		"fold"			=> array('glider' =>'sor_setting[type]' ),
		"group"			=>  __('واکنش گرا در تبلت','sorsorak'),
		"type"			=> "radio_image",
		"options"		=>  array( 
 			"tablet_glider_1"		=> SAOSORAK_DIR.'/admin/assets/image/tablet_glider/tablet_glider_1.jpg',
 			"tablet_glider_2"		=> SAOSORAK_DIR.'/admin/assets/image/tablet_glider/tablet_glider_2.jpg',
 			"tablet_glider_3"		=> SAOSORAK_DIR.'/admin/assets/image/tablet_glider/tablet_glider_3.jpg',
 			"tablet_glider_4"		=> SAOSORAK_DIR.'/admin/assets/image/tablet_glider/tablet_glider_4.jpg',
 			"tablet_glider_5"		=> SAOSORAK_DIR.'/admin/assets/image/tablet_glider/tablet_glider_5.jpg',
 			"tablet_glider_6"		=> SAOSORAK_DIR.'/admin/assets/image/tablet_glider/tablet_glider_6.jpg',
 			"tablet_glider_7"		=> SAOSORAK_DIR.'/admin/assets/image/tablet_glider/tablet_glider_7.jpg',
 			"tablet_glider_8"		=> SAOSORAK_DIR.'/admin/assets/image/tablet_glider/tablet_glider_8.jpg',
 			"tablet_glider_9"		=> SAOSORAK_DIR.'/admin/assets/image/tablet_glider/tablet_glider_9.jpg',
 			"tablet_glider_10"		=> SAOSORAK_DIR.'/admin/assets/image/tablet_glider/tablet_glider_10.jpg',
 			"tablet_glider_11"		=> SAOSORAK_DIR.'/admin/assets/image/tablet_glider/tablet_glider_11.jpg',
 			"tablet_glider_12"		=> SAOSORAK_DIR.'/admin/assets/image/tablet_glider/tablet_glider_12.jpg',
 			"tablet_glider_13"		=> SAOSORAK_DIR.'/admin/assets/image/tablet_glider/tablet_glider_13.jpg',
 			"tablet_glider_14"		=> SAOSORAK_DIR.'/admin/assets/image/tablet_glider/tablet_glider_14.jpg',
 			"tablet_glider_15"		=> SAOSORAK_DIR.'/admin/assets/image/tablet_glider/tablet_glider_15.jpg',
 			"tablet_glider_16"		=> SAOSORAK_DIR.'/admin/assets/image/tablet_glider/tablet_glider_16.jpg',
 
  		),			
   	); 	
	$option[]=array( 
				"name"			=> __('فاصله مابین در تبلت','sorsorak'),			
  				"id"			=> "tablet_between",
	 			"group"			=>  __('واکنش گرا در تبلت','sorsorak'),
   				"fold"			=> array('glider' =>'sor_setting[type]' ),
   	 			"min"			=> "0",
				"max"			=> "100",
				"unit"			=> "px",
 				"default"		=>  '40',
				"width"			=> "60px",
				"type"			=> "number",	
 	);
 	$option[]= array( 
 		"name"			=> __('واکنش گرا در تبلت','sorsorak'),
 		"id"			=> "responsive_tablet",
		"group"			=>  __('واکنش گرا در تبلت','sorsorak'),
 		"desc"			=> __('در صورتی که میخواهید تنظیمات اسلایدر را در تبلت ها تغییر بدهید این گزینه را روشن کنید , طول صفحه نمایش زیر ۱۰۲۵ پیکسل و بالای ۷۶۷ پیکسل',"sorsorak"),
 		"type"			=> "checkbox",
 	); 		
	
	
	$option[]= array( 
 		"name"			=> __('اندازه اسلایدر در تبلت','sorsorak'),
	 		"group"			=>  __('واکنش گرا در تبلت','sorsorak'),
 		"id"			=> "tablet_size",
		"fold"			=> array( 1 => 'sor_setting[responsive_tablet]'  ),
 		"default"		=>  array(
								'width' => '768',
								'height' => '400',
							) ,
							
   		"type"			=> "multi_options",
		"options"		=>  array(
			array( 
					"name"			=> __('پهنا','sorsorak'),			
					"id"			=> "width",
					"type"			=> "number",
					"min"			=> "1",
					"max"			=> "1024",
					"width"			=> "60px",												
					"unit"			=> "px",
				),
				array( 
					"name"			=> __('ارتفاع','sorsorak'),			
					"id"			=> "height",
					"min"			=> "1",
					"max"			=> "10000",
					
 					"fold"			=> array('slider' =>'sor_setting[type]','single' =>'sor_setting[type]' ),
					"type"			=> "number",
					"unit"			=> "px",
					"width"			=> "60px",												
				), 
				array( 
					"name"			=> __('نسبت','sorsorak'),			
					"id"			=> "ratio",
					"fold"			=> array('glider' =>'sor_setting[type]' ),
					"type"			=> "select",
					"options"		=> array(
						'30'				=>	'10:3',
						'33.33'				=>	'3:1',
						'40'				=>	'5:2',
						'50'				=>	'1:2',
						'56'				=>	'16:9',
						'60'				=>	'5:3',
						'75'				=>	'4:3', 
						'100'				=>	'1:1',
						'135'				=>	'3:5',
					)											
  			), 				
				
			),
		
 	); 			
	
	 
	$option []= array( 
 		"name"			=> __('نوع گلایدر موبایل','sorsorak'),
		"group"			=>  __('واکنش گرا در موبایل','sorsorak'),
 		"id"			=> "mobile_glider_layout",
		"fold"			=> array('glider' =>'sor_setting[type]' ),
 							
		"type"			=> "radio_image",
		"options"		=>  array( 
 			"mobile_glider_1"		=> SAOSORAK_DIR.'/admin/assets/image/mobile_glider/mobile_glider_1.jpg',
 			"mobile_glider_2"		=> SAOSORAK_DIR.'/admin/assets/image/mobile_glider/mobile_glider_2.jpg',
 			"mobile_glider_3"		=> SAOSORAK_DIR.'/admin/assets/image/mobile_glider/mobile_glider_3.jpg',
 			"mobile_glider_4"		=> SAOSORAK_DIR.'/admin/assets/image/mobile_glider/mobile_glider_4.jpg',
 			"mobile_glider_5"		=> SAOSORAK_DIR.'/admin/assets/image/mobile_glider/mobile_glider_5.jpg',
 			"mobile_glider_6"		=> SAOSORAK_DIR.'/admin/assets/image/mobile_glider/mobile_glider_6.jpg',
  			 
 		),			
   	); 	
	$option[]=array( 
				"name"			=> __('فاصله مابین در موبایل','sorsorak'),			
  				"id"			=> "mobile_between",
	 			"group"			=>  __('واکنش گرا در موبایل','sorsorak'),
   				"fold"			=> array('glider' =>'sor_setting[type]' ),
				"min"			=> "0",
				"max"			=> "100",
				"unit"			=> "px",
 				"default"		=>  '40',
				"width"			=> "60px",
				"type"			=> "number",											
	);
 	$option[]= array( 
  		"name"			=> __('واکنش گرا در موبایل','sorsorak'),
 		"id"			=> "responsive_mobile",
		"group"			=>  __('واکنش گرا در موبایل','sorsorak'),
 		"desc"			=> __('در صورتی که میخواهید تنظیمات اسلایدر را در موبایل ها تغییر بدهید این گزینه را روشن کنید , طول صفحه نمایش زیر ۷۶۸ پیکسل',"sorsorak"),

		"type"			=> "checkbox",
	); 		
 
	$option[]= array( 
 	
		"name"			=> __('اندازه اسلایدر در موبایل','sorsorak'),
 		"id"			=> "mobile_size",
		"group"			=>  __('واکنش گرا در موبایل','sorsorak'),
		"fold"			=> array( true => 'sor_setting[responsive_mobile]'  ),
 		"desc"			=> __('اندازه اسلایدر در صفحه نمایش های مخصوص موبایل',"sorsorak"),
  		"default"		=>  array(
								'width' => '480',
								'height' => '750',
							) ,
							
   		"type"			=> "multi_options",
		"options"		=>  array(
				array( 
					"name"			=> __('پهنا','sorsorak'),			
					"id"			=> "width",
					"type"			=> "number",
					"min"			=> "1",
					"max"			=> "767",
					"width"			=> "60px",												
					"unit"			=> "px",
				),
				array( 
					"name"			=> __('ارتفاع','sorsorak'),			
					"id"			=> "height",
					"min"			=> "1",
					"max"			=> "10000",
					"type"			=> "number",
 					"fold"			=> array('slider' =>'sor_setting[type]','single' =>'sor_setting[type]' ),
					"unit"			=> "px",
					"width"			=> "60px",												
				), 
				array( 
				"name"			=> __('نسبت','sorsorak'),			
  				"id"			=> "ratio",
   				"fold"			=> array('glider' =>'sor_setting[type]' ),
 				"type"			=> "select",
 				"options"		=> array(
						'30'				=>	'10:3',
						'33.33'				=>	'3:1',
						'40'				=>	'5:2',
						'50'				=>	'1:2',
						'56'				=>	'16:9',
						'60'				=>	'5:3',
						'75'				=>	'4:3', 
						'100'				=>	'1:1',
						'135'				=>	'3:5',
					)											
  			), 				
			
		)
		
 	); 		
 	
	
	 
		
 	$option[]= array( 
		"name"			=> __('صفحه بندی','sorsorak'),
 		"id"			=> "pager",
		"default"		=>  1,
 		"group"			=>  __('صفحه بندی','sorsorak'),
  		"type"			=> "checkbox",
 	); 		
	
 	$option[]= array( 
		"name"			=> __('نوع نمایش صفحه بندی','sorsorak'),
 		"id"			=> "pager_visibility",
 		"group"			=>  __('صفحه بندی','sorsorak'),
		"default"		=>  'hover',
		"fold"			=> array( 1 =>'sor_setting[pager]'  ),
		"type"			=> "radio",
		"options"		=> array( 
			"hover" =>  __('هاور','sorsorak'),
			"fexid" =>  __('ثابت ','sorsorak')
		),
  		
  	); 	 
	
	
	 
 	$option[]= array( 
		"name"			=> __('موقعیت صفحه بندی','sorsorak'),
 		"id"			=> "pager_position",
 		"group"			=>  __('صفحه بندی','sorsorak'),
		"fold"			=> array( 1 => 'sor_setting[pager]'   ),
 		"type"			=> "radio",
		"default"		=>  'top',
		
		"options"		=> array( 
			"top" =>  __('بالا','sorsorak'),
			"bottom" =>  __('پایین','sorsorak')
		),
  		
  	); 	 
	
 
	
	$option[]= array( 
		"name"			=>	__('رنگ بندی صفحه بندی','sorsorak'),
 		"id"			=>	"pager_color", 
		"fold"			=> array( 1 =>'sor_setting[pager]' ),
 		"group"			=>  __('صفحه بندی','sorsorak'),
  		"type"			=> "multi_options",
		"options"		=>  array( 
			array( 
				"name"			=> __('رنگ','sorsorak'),			
  				"id"			=> "color",
				"type"			=> "color_rgba",
 			),
 	 
			array( 
 				"name"			=> 	__('رنگ اکتیو','sorsorak'),
 				"id"			=> "active",
  				"type"			=> "color_rgba",
  			),		
		)	
	); 		
	
	
	$option[]= array( 
		"name"			=> __('فلش ها','sorsorak'),
 		"id"			=> "arrows",
 		"group"			=>  __('فلش ها','sorsorak'),
		"default"		=>  1,
 		"type"			=> "checkbox",
 	); 		
		


	$option[]= array( 
			"name"			=> __('نوع نمایش فلش ها','sorsorak'),
			"id"			=> "arrows_visibility",
			"fold"			=> array( 1 =>'sor_setting[arrows]' ),
			"group"			=>  __('فلش ها','sorsorak'),
			"type"			=> "radio",
			"options"		=> array( 
				"hover" =>  __('هاور','sorsorak'),
				"fexid" =>  __('ثابت ','sorsorak')
			),
		);
		
	$option[]= array( 
		"name"			=> __('موقعیت فلش ها','sorsorak'),
		"id"			=> "arrows_position",
		"fold"			=> array( 1 =>'sor_setting[arrows]' ),
		"group"			=>  __('فلش ها','sorsorak'),
		"type"			=> "radio",
		"options"			=>	array( 	
			"inside" 				=>esc_html__('درون اسلایدر','sorsorak'),
			"side" 				=>esc_html__('برابر با اسلایدر','sorsorak'),
			"outside" 				=>esc_html__('بیرون اسلایدر','sorsorak'), 	 
		),
	);
				
		 	
	   
	 
	$option[]= array( 
		"name"			=> __('رنگ فلش','sorsorak'),
 		"id"			=> "arrows_color",
		"fold"			=> array( 1 =>'sor_setting[arrows]' ),
		"group"			=>  __('فلش ها','sorsorak'),
  		"type"			=> "multi_options",
		"options"			=>	array( 	
  			array( 
 				"name"			=> 	__('رنگ زمینه','sorsorak'),
 				"id"			=> "background",
  				"type"			=> "color_rgba",
  			
 			), 	
			
			array( 
				"name"			=> __('رنگ فلش','sorsorak'),			
  				"id"			=> "text",
				"type"			=> "color_rgba",
 			),					
 		
		), 			
	 
	); 			
	$option[]= array( 
		"name"			=> __('رنگ فلش در هاور','sorsorak'),
 		"id"			=> "arrows_hover_color",
		"fold"			=> array( 1 =>'sor_setting[arrows]' ),

		"group"			=>  __('فلش ها','sorsorak'),
  		"type"			=> "multi_options",
		"options"			=>	array( 	
  			array( 
 				"name"			=> 	__('رنگ زمینه','sorsorak'),
 				"id"			=> "background",
  				"type"			=> "color_rgba",
  			
 			), 	
			
			array( 
				"name"			=> __('رنگ فلش','sorsorak'),			
  				"id"			=> "text",
				"type"			=> "color_rgba",
 			),					
 		
		), 			
	 
	); 				
		
	$option[]= array( 
		"name"			=> __('گردی فلش','sorsorak'),
 		"id"			=> "arrows_radius",
		"fold"			=> array( 1 =>'sor_setting[arrows]' ),

		"min"			=> "0",
		"max"			=> "100",
		"width"			=> "60px",
		
		"unit"			=> "px",
		
		"group"			=>  __('فلش ها','sorsorak'),
		"type"		=> "number",
 	); 	
	
$option[]= array(
		"responsive"			=> "desktop",
		"name"			=> __('اندازه فلش','sorsorak'),
		"min"			=> "0",
		"max"			=> "100",
		"unit"			=> "px",
		"width"			=> "60px",
		
 		"id"			=> "arrows_size",
		"fold"			=> array( 1 =>'sor_setting[arrows]' ),
		"group"			=>  __('فلش ها','sorsorak'),
		"type"			=> "number",
   	); 	
			
	
	
$option[]= array( 
			"responsive"	=>  "tablet",		
			"name"			=> __('واکنش گرا در تبلت','sorsorak'),
			"group"			=>  __('فلش ها','sorsorak'),
			"id"			=>  "arrows_heading",
 			"type"			=> "heading",
	);
	$option[]= array( 
		"responsive"	=>  "tablet",		
 		"name"			=> __('اندازه فلش در تبلت','sorsorak'),
		"min"			=> "0",
		"max"			=> "100",
		"unit"			=> "px",
		"width"			=> "60px",
  		"id"			=> "tablet_arrows_size",
		"fold"			=> array( 1 =>'sor_setting[arrows]' ),
		"group"			=>  __('فلش ها','sorsorak'),
		"type"			=> "number",
   	); 	

$option[]= array( 
			"responsive"	=>  "mobile",		
			"name"			=> __('واکنش گرا در تبلت','sorsorak'),
			"group"			=>  __('فلش ها','sorsorak'),
			"id"			=>  "arrows_heading",
 			"type"			=> "heading",
	);
	$option[]= array( 
		"responsive"	=>  "mobile",		
 		"name"			=> __('اندازه فلش در تبلت','sorsorak'),
		"min"			=> "0",
		"max"			=> "100",
		"unit"			=> "px",
		"width"			=> "60px",
  		"id"			=> "mobile_arrows_size",
		"fold"			=> array( 1 =>'sor_setting[arrows]' ),
		"group"			=>  __('فلش ها','sorsorak'),
		"type"			=> "number",
   	); 	
	
	
	
		
	$option[]= array( 
		"name"			=> __('تایمر','sorsorak'),
 		"id"			=> "timer",
		"default"		=>  0,
 		"group"			=>  __('تایمر','sorsorak'),
 		"type"			=> "checkbox",
 	); 		
 
	$option[]= array( 
		"name"			=>	__('رنگ تایمر','sorsorak'),
 		"id"			=>	"timer_color", 
		"fold"			=> array( 1 =>'sor_setting[timer]' ),
  		"group"			=>  __('تایمر','sorsorak'),
  		"type"			=> "multi_options",
		"options"		=> array(
		array(
				"name"		=>  __('رنگ اول','sorsorak'),
				"id"		=> "first",
				"type"		=> "color_rgba",
			),
			array(
				"name"		=>  __('رنگ دوم','sorsorak'),
				"id"		=> "second",
				"type"		=> "color_rgba",
			),
		 
			array(
				"name"		=>  __('جهت رنگ','sorsorak'),
				"id"		=> "orientation",
 				"type"		=> "select",
				"options"	=> array(
					"horizontal"		=>  __('افقی  →','sorsorak'),
					"vertical"			=>  __('عمودی  ↓','sorsorak'),
					"diagonal"			=>  __('مورب  ↘','sorsorak'),
					"diagonal-bottom"	=>  __('مورب  ↗','sorsorak'),
					"radial"			=>  __('شعاعی  ○','sorsorak'),
				),
			),
		),							
 	); 


	$option[]= array( 
		"name"			=> __('شروع خودکار','sorsorak'),
 		"id"			=> "auto",
 		"group"			=>  __('اسلایدر','sorsorak'),
  		"type"			=> "checkbox",
		"default"		=>  1,
	); 	 	  		 

	$option[]= array( 
		"name"			=> __('حلقه','sorsorak'),
 		"id"			=> "loop",
 		"group"			=>  __('اسلایدر','sorsorak'),
  		"type"			=> "checkbox",
 	); 	 	  		 
		  
	$option[]= array( 
		"name"			=> __('افکت اسلایدر','sorsorak'),
 		"id"			=> "effect",
 		"group"			=>  __('اسلایدر','sorsorak'),
		"default"		=>  'fade',
 		"type"			=> "radio",
		"options"		=>  array( 
			"slide"			=> __('اسلاید','sorsorak'),
 			"fade"			=> __('محو شدن','sorsorak'),
		),
  	); 	 
	$option[]= array( 
		"name"			=> __('سرعت انیمیشن','sorsorak'),
 		"id"			=> "speed",
		"default"		=>  '2000',
 		"min"		=>  '0',
		"max"		=>  '10000',
		"step"		=>  '100',

		"unit"		=>  'ms',
		
 		"group"			=>  __('اسلایدر','sorsorak'),
 		"type"			=> "number",
   	); 	 
	
	$option[]= array( 
		"name"			=> __('زمان مکث انیمیشن','sorsorak'),
 		"id"			=> "pause",
 		"group"			=>  __('اسلایدر','sorsorak'),
		"default"		=>  '10000',
		"max"		=>  '20000',
		"step"		=>  '100',
 		"unit"		=>  'ms',
 		"min"		=>  '0',		
 		"type"			=> "number",
   		
  	); 	   	
	
	
	$option[]= array( 
		"name"			=> __('پس زمینه','sorsorak'),
 		"id"			=> "background_color",
  		"group"			=>  __('استایل','sorsorak'),
 		"type"			=> "color",
 	); 	 
	$option[]= array( 
		"name"			=> __('کادر دور','sorsorak'),
 		"id"			=> "border",
  		"group"			=>  __('استایل','sorsorak'),
 		"type"			=> "multi_options",
		"options"		=>  sor_multi_array_options('border'),						
	); 	
	
	$option[]= array( 
		"name"			=> __('سایه دور','sorsorak'),
 		"id"			=> "shadow",
  		"group"			=>  __('استایل','sorsorak'),
 		"type"			=> "multi_options",
		"options"		=>  sor_multi_array_options('shadow'),						
	); 	
	
	
 
	
	$option[]= array( 
		"name"			=> __('گردی دور','sorsorak'),
 		"id"			=> "radius",
  		"group"			=>  __('استایل','sorsorak'),
 		"type"			=> "multi_options",
		"options"		=>  sor_multi_array_options('radius'),						
	); 	
		
 
		
		
	$option[]= array( 
			"responsive"	=>  "desktop",		
	
		"name"			=> __('حاشیه خارجی','sorsorak'),
 		"id"			=> "margin",
  		"group"			=>  __('فاصله ها','sorsorak'),
 		"type"			=> "multi_options",
		"options"		=>  sor_multi_array_options('margin'),						
	); 	
		
		
	$option[]= array( 
		"responsive"	=>  "desktop",		
 		"name"			=> __('فاصله داخلی','sorsorak'),
 		"id"			=> "padding",
  		"group"			=>  __('فاصله ها','sorsorak'),
 		"type"			=> "multi_options",
		"options"		=>  sor_multi_array_options('padding'),						
	); 	
		
  			  
	$option[]= array( 
			"responsive"	=>  "tablet",		
			"name"			=> __('واکنش گرا در تبلت','sorsorak'),
  			"group"			=>  __('فاصله ها','sorsorak'),
			"id"			=>  "padding_heading",
 			"type"			=> "heading",
	);
	$option[]= array( 
		"responsive"	=>  "tablet",		
		"name"			=> __('حاشیه خارجی در تبلت','sorsorak'),
   		"id"			=> "tablet_margin", 
 		"type"			=> "multi_options",
		"group"			=>  __('فاصله ها','sorsorak'),
		"options"		=>  sor_multi_array_options('margin'),						
  
 	); 	
	
	$option[]= array( 
		"responsive"	=>  "tablet",		
		"name"			=> __('حاشیه داخلی در تبلت','sorsorak'),
		"id"			=> "tablet_padding", 
 		"type"			=> "multi_options",
		"group"			=>  __('فاصله ها','sorsorak'),
		"options"		=>  sor_multi_array_options('padding'),						
  
 	); 	
	
	
	$option[]= array( 
			"responsive"	=>  "mobile",		
			"name"			=> __('واکنش گرا در موبایل','sorsorak'),
  			"group"			=>  __('فاصله ها','sorsorak'),
			"id"			=>  "mobile_heading",
 			"type"			=> "heading",
	);
	
	
	$option[]= array( 
		"responsive"	=>  "mobile",		
		"name"			=> __('حاشیه خارجی در موبایل','sorsorak'),
   		"id"			=> "mobile_margin", 
 		"type"			=> "multi_options",
		"group"			=>  __('فاصله ها','sorsorak'),
		"options"		=>  sor_multi_array_options('margin'),						
  
 	); 	
	
	$option[]= array( 
		"responsive"	=>  "mobile",		
		"name"			=> __('حاشیه داخلی در موبایل','sorsorak'),
		"id"			=> "mobile_padding", 
 		"type"			=> "multi_options",
		"group"			=>  __('فاصله ها','sorsorak'),
		"options"		=>  sor_multi_array_options('padding'),						
  
 	); 	
	
	
	
	 
 	$option[]= array( 
		"name"			=> __('غیرفعال کردن فونت های پیشفرض','sorsorak'),
 		"id"			=> "disable_typography",
 		"group"			=>  __('تایپوگرافی','sorsorak'),
 		"desc"			=> __('	با علامت زدن این گزینه، فونت های پیشفرض المنتور غیرفعال می شوند و المنتور فونت های خود را از پوسته شما می گیرد. ',"sorsorak"),
 		"type"			=> "checkbox",
	); 	
	 
	
	  
 		
 
    return $option;
} 
}
 
 ?>