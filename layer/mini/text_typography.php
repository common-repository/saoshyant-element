<?php
	$option[]= array( 
		"name"			=> __('خانواده فونت','sorsorak'),
 		"id"			=> "text_fontfamily",
   		"group"			=>  __('تایپوگرافی','sorsorak'),
		"type"			=> "select", 	 	
		"options"		=> sor_array_options('fontfamily'),	
		 	 
  	);   
	$option[]= array( 
 		"responsive"	=> "desktop",
		"name"			=> __('اندازه متن','sorsorak'),
 		"id"			=> "text_font_size",
		
   		"group"			=>  __('تایپوگرافی','sorsorak'),
		"type"			=> "number", 	 	
		"unit"			=> "px", 	
		"min"			=> "0", 	 	
		"max"			=> "200", 		
		 	
 	 
		 
  	);  	 	
	$option[]= array( 
 		"responsive"	=> "desktop",
		"name"			=> __('ارتفاع متن','sorsorak'),
 		"id"			=> "text_line_height",
   		"group"			=>  __('تایپوگرافی','sorsorak'),
		"type"			=> "number", 	 	
		"step"			=> "0.1", 	 	
		"min"			=> "0", 	 	
		"max"			=> "3", 	 	
		"unit"			=> "em", 	 	
 	 
		 
  	); 	
	
	$option[]= array( 
		"name"			=> __('وزن متن','sorsorak'),
 		"id"			=> "text_font_weight",
    		"group"			=>  __('تایپوگرافی','sorsorak'),
		"type"			=> "select", 	 	
		"options"		=>  
			array( 
				"normal"			=> 'عادی',			
				"bold"			=> 'پر رنگ',		
				"300"			=> '300',			
				"400"			=> '400',			
				"500"			=> '500',			
				"600"			=> '600',			
				"700"			=> '700',			
				"800"			=> '800',			
				"900"			=> '900',			
 	
   			),
 	 
		 
  	); 
	
 
		
	$option[]= array( 
		"name"			=> __('دکوراسیون متن','sorsorak'),
 		"id"			=> "text_font_decoration",
   		"group"			=>  __('تایپوگرافی','sorsorak'),
		"type"			=> "select", 	 	
		"options"		=>   
  			array( 
 				""					=> __('پیشفرض','sorsorak'),
 				"overline"			=> 	__('Overline','sorsorak'),
 				"line-through"		=> __('Line-Through','sorsorak'),
  				"underline"			=> __('Underline','sorsorak'),
  			),		
 		
  	);   
	
	$option[]= array( 
		"name"			=> __('متن استایل','sorsorak'),
 		"id"			=> "text_font_style",
   		"group"			=>  __('تایپوگرافی','sorsorak'),
		"type"			=> "select", 	 	
		"options"		=>   
  			array( 
 				""					=> __('پیشفرض','sorsorak'),
 				"normal"			=> 	__('Normal','sorsorak'),
 				"italic"			=> __('italic','sorsorak'),
  				"oblique"			=> __('oblique','sorsorak'),
  			),		
 		
  	);   
	$option[]= array( 
		"name"			=> __('متن استایل','sorsorak'),
 		"id"			=> "text_font_transform",
   		"group"			=>  __('تایپوگرافی','sorsorak'),
		"type"			=> "select", 	 	
		"options"		=>   
  			array( 
  				""			=> __('پیش‌ فرض','sorsorak'),
 				"uppercase"					=> __('همه حروف بزرگ','sorsorak'),
 				"lowercase"			=> 	__('همه حروف کوچک','sorsorak'),
 				"capitalize"			=> __('حروف اول بزرگ','sorsorak'),
   			),		
 		
  	);   	
	 
 
	$option[]= array( 
		"name"			=> __('فاصله بین حروف','sorsorak'),
 		"id"			=> "text_spacing",
		"group"			=>  __('تایپوگرافی','sorsorak'),
		"type"			=> "number", 	 	
 		"min"			=> "-5", 	
			"step"			=> "0.5", 	 	
		 	
		"max"			=> "10", 	 	
 		 
  	);
	
	
	
	if(!empty($_REQUEST['sor_tablet'])){

		$option[]= array( 
 			"responsive"	=> "tablet",
			"name"			=> __('واکنش گرا در تبلت','sorsorak'),
			"group"			=>  __('تایپوگرافی','sorsorak'),
			"id"			=>  "tablet_typography_heading",
			"type"			=>  "heading",
 		);
		$option[]= array( 
 			"responsive"	=> "tablet",
			"name"			=> __('اندازه متن در تبلت','sorsorak'),
			"id"			=> "tablet_text_font_size",
			"group"			=>  __('تایپوگرافی','sorsorak'),
			"type"			=> "number", 	 	
			"unit"			=> "px", 	
 			"max"			=> "200", 		
				
		 
			 
		);  	 	
		$option[]= array( 
 			"responsive"	=> "tablet",
			"name"			=> __('ارتفاع متن در تبلت','sorsorak'),
			"id"			=> "tablet_text_line_height",
			"group"			=>  __('تایپوگرافی','sorsorak'),
			"type"			=> "number", 	 	
			"step"			=> "0.1", 	 	
 			"max"			=> "3", 	 	
			"unit"			=> "em", 	 	
		 
			 
		); 	
		
	 
	 
	}	
	  
	if(!empty($_REQUEST['sor_mobile'])){

		$option[]= array( 
 			"responsive"	=> "mobile",
			"name"			=> __('واکنش گرا در موبایل','sorsorak'),
			"group"			=>  __('تایپوگرافی','sorsorak'),
			"id"			=>  "mobile_typography_heading",
			"type"			=> "heading",
		);
		$option[]= array( 
 			"responsive"	=> "mobile",
			"name"			=> __('اندازه متن در موبایل','sorsorak'),
			"id"			=> "mobile_text_font_size",
			"group"			=>  __('تایپوگرافی','sorsorak'),
			"type"			=> "number", 	 	
			"unit"			=> "px", 	
 			"max"			=> "200", 		
				
		 
			 
		);  	 	
		$option[]= array( 
 			"responsive"	=> "mobile",
			"name"			=> __('ارتفاع متن در موبایل','sorsorak'),
			"id"			=> "mobile_text_line_height",
			"group"			=>  __('تایپوگرافی','sorsorak'),
			"type"			=> "number", 	 	
			"step"			=> "0.1", 	 	
			"min"			=> "0", 	 	
			"max"			=> "3", 	 	
			"unit"			=> "em", 	 	
		 
			 
		); 	
		
	  
	}	
	?>