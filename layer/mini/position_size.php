<?php

 
	$option[]= array( 
			"responsive"	=>  "desktop",		
	
		"name"			=> __('تراز','sorsorak'),
   		"id"			=> "align", 
 		"width"			=> "100%", 
		"type"			=> "multi_options",
 		"default"		=> array('horizontal'=>'left','vertical'=>'top'),
 		
 		"group"				=>  __('موقعیت و اندازه','sorsorak'),
 		"options"		=>  array( 
					array( 
						"name"				=>  __('تراز افقی','sorsorak'),
 						"id"			=> "horizontal",
 						"warp_width"	=> "50%",
						"width"				=> "22%",
 						"type"			=> "radio_image",
 						"options"		=>  array( 
 								'left'				=> SAOSORAK_DIR.'admin/assets/image/layer_right.png',		
								'center'			=> SAOSORAK_DIR.'admin/assets/image/layer_center.png',
								'right'				=> SAOSORAK_DIR.'admin/assets/image/layer_left.png',
							),	 		
					),
					array( 
					"name"				=>  __('تراز عمودی','sorsorak'),
					"id"				=> "vertical",
					"warp_width"		=> "50%",
					"width"				=> "22%",
					"type"				=> "radio_image",
 						"options"		=>  array( 
 						'top'				=> SAOSORAK_DIR.'admin/assets/image/layer_top.png',		
						'middle'			=> SAOSORAK_DIR.'admin/assets/image/layer_middle.png',
						'bottom'				=> SAOSORAK_DIR.'admin/assets/image/layer_bottom.png',
					),	
					),				
				),	
  
 	); 		
	
	
	
	
	
	$option[]= array( 
		"responsive"	=>  "desktop",		
		"name"			=> __('موقعیت','sorsorak'),
   		"id"			=> "position",
		
		 
 		"width"			=> "100%", 
		"type"			=> "multi_options",
 		"group"				=>  __('موقعیت و اندازه','sorsorak'),
 		"options"		=>  array( 
					array( 
						"name"			=> __('افقی','sorsorak'),
						"id"			=> "horizontal",
  						"unit"			=> 'px',
 						"warp_width"	=> "50%",
  						"width"			=> '60px',
  						"min"			=> '-99999',
  						"type"			=> "number",
					),
					array( 
						"name"			=> __('عمودی','sorsorak'),
						"id"			=> "vertical",
  						"unit"			=> 'px',
 						"warp_width"	=> "50%",
						"min"			=> '-99999',
   						"width"			=> '60px',
						"type"			=> "number",
					),					
				),	
  
 	); 	
	
	
	
	
	
	
	$option[]= array( 
		"responsive"	=>  "desktop",		
		"name"			=> __('اندازه','sorsorak'),
 		"id"			=> "size",
		"width"			=> "100%", 
				"default"			=> !empty($default)?$default:'', 
    		"type"			=> "multi_options",
 		"group"				=>  __('موقعیت و اندازه','sorsorak'),
 		"options"		=>  array( 
					array( 
						"name"			=> __('طول','sorsorak'),
						"id"			=> "width",
  						"unit"			=> 'px',
 						"warp_width"	=> "50%",
  						"type"			=> "number",
					),
					array( 
						"name"			=> __('ارتفاع','sorsorak'),
						"id"			=> "height",
  						"unit"			=> 'px',
 						"warp_width"	=> "50%",
 						"type"			=> "number",
					),					
				),	
  
 	); 	
	
	  
	if(!empty($_REQUEST['sor_tablet'])){
		$option[]= array( 
			"responsive"	=>  "tablet",		
			"name"			=> __('واکنش گرا در تبلت','sorsorak'),
			"group"			=>  __('موقعیت و اندازه','sorsorak'),
			"id"			=>  "tablet_heading",
 			"type"			=> "heading",
		);
		$option[]= array( 
			"responsive"	=>  "tablet",		
			"name"				=> __('نمایش در تبلت','sorsorak'),
			"id"				=> "tablet_display", 
			"type"				=>  'radio',
 			"options"			=>  array( 
 				'show'				=> __('نمایش','sorsorak'),
   				'hide'				=> __('مخفی','sorsorak'),
   			),	 			
 			"group"				=>  __('موقعیت و اندازه','sorsorak'),
		); 	
		 
	$option[]= array( 
			"responsive"	=>  "tablet",		
	
		"name"			=> __('تراز','sorsorak'),
   		"id"			=> "tablet_align", 
 		"width"			=> "100%", 
		"type"			=> "multi_options",
		
 
 		"group"				=>  __('موقعیت و اندازه','sorsorak'),
 		"options"		=>  array( 
					array( 
						"name"				=>  __('تراز افقی','sorsorak'),
 						"id"			=> "horizontal",
 						"warp_width"	=> "50%",
						"width"				=> "22%",
 						"type"			=> "radio_image",
 						"options"		=>  array( 
 								''				=> SAOSORAK_DIR.'admin/assets/image/layer_none.png',		
 								'left'				=> SAOSORAK_DIR.'admin/assets/image/layer_right.png',		
								'center'			=> SAOSORAK_DIR.'admin/assets/image/layer_center.png',
								'right'				=> SAOSORAK_DIR.'admin/assets/image/layer_left.png',
							),	 		
					),
					array( 
					"name"				=>  __('تراز عمودی','sorsorak'),
					"id"				=> "vertical",
					"warp_width"		=> "50%",
					"width"				=> "22%",
					"type"				=> "radio_image",
 						"options"		=>  array( 
 								''				=> SAOSORAK_DIR.'admin/assets/image/layer_none.png',		
 						'top'				=> SAOSORAK_DIR.'admin/assets/image/layer_top.png',		
						'middle'			=> SAOSORAK_DIR.'admin/assets/image/layer_middle.png',
						'bottom'				=> SAOSORAK_DIR.'admin/assets/image/layer_bottom.png',
					),	
					),				
				),	
  
 	); 		
	$option[]= array( 
		"responsive"	=>  "tablet",		
		"name"			=> __('موقعیت','sorsorak'),
   		"id"			=> "tablet_position", 
 		"width"			=> "100%", 
		"type"			=> "multi_options",
 	
 		"group"				=>  __('موقعیت و اندازه','sorsorak'),
 		"options"		=>  array( 
					array( 
						"name"			=> __('افقی','sorsorak'),
						"id"			=> "horizontal",
  						"unit"			=> 'px',
  						"min"			=> '-99999',
 						"warp_width"	=> "50%",
  						"type"			=> "number",
					),
					array( 
						"name"			=> __('عمودی','sorsorak'),
						"id"			=> "vertical",
  						"unit"			=> 'px',
  						"min"			=> '-99999',
 						"type"			=> "number",
					),					
				),	
  
 	); 	
	
	
	
	
	
	
	$option[]= array( 
		"responsive"	=>  "tablet",		
		"name"			=> __('اندازه','sorsorak'),
 		"id"			=> "tablet_size",
 		"width"			=> "100%", 
 		"type"			=> "multi_options",
 	
 		"group"				=>  __('موقعیت و اندازه','sorsorak'),
 		"options"		=>  array( 
					array( 
						"name"			=> __('طول','sorsorak'),
						"id"			=> "width",
  						"unit"			=> 'px',
 						"warp_width"	=> "50%",
						"type"			=> "number",
					),
					array( 
						"name"			=> __('ارتفاع','sorsorak'),
						"id"			=> "height",
  						"unit"			=> 'px',
 						"warp_width"	=> "50%",
						"type"			=> "number",
					),					
				),	
  
 	); 	 
	
	}
	

if(!empty($_REQUEST['sor_mobile'])){
$option[]= array( 
			"responsive"	=>  "mobile",		
			"name"			=> __('واکنش گرا در موبایل','sorsorak'),
			"group"				=>  __('موقعیت و اندازه','sorsorak'),
			"id"			=>  "mobile_heading",
 			"type"			=> "heading",
		);
		$option[]= array( 
			"name"				=> __('نمایش در موبایل','sorsorak'),
			"id"				=> "mobile_display", 
			"responsive"	=>  "mobile",		
			"type"				=>  'radio',
			"options"		=>  array( 
 				'show'				=> __('نمایش','sorsorak'),
   				'hide'				=> __('مخفی','sorsorak'),
   			),	 			
 			"group"				=>  __('موقعیت و اندازه','sorsorak'),
		); 	
	 
	$option[]= array( 
			"responsive"	=>  "mobile",		
	
		"name"			=> __('تراز','sorsorak'),
   		"id"			=> "mobile_align", 
 		"width"			=> "100%", 
		"type"			=> "multi_options",
 
 		"group"				=>  __('موقعیت و اندازه','sorsorak'),
 		"options"		=>  array( 
					array( 
						"name"				=>  __('تراز افقی','sorsorak'),
 						"id"			=> "horizontal",
 						"warp_width"	=> "50%",
						"width"				=> "22%",
 						"type"			=> "radio_image",
 						"options"		=>  array( 
 								''				=> SAOSORAK_DIR.'admin/assets/image/layer_none.png',		
 								'left'				=> SAOSORAK_DIR.'admin/assets/image/layer_right.png',		
								'center'			=> SAOSORAK_DIR.'admin/assets/image/layer_center.png',
								'right'				=> SAOSORAK_DIR.'admin/assets/image/layer_left.png',
							),	 		
					),
					array( 
					"name"				=>  __('تراز عمودی','sorsorak'),
					"id"				=> "vertical",
					"warp_width"		=> "50%",
					"width"				=> "22%",
					"type"				=> "radio_image",
 						"options"		=>  array( 
 								''				=> SAOSORAK_DIR.'admin/assets/image/layer_none.png',		
 						'top'				=> SAOSORAK_DIR.'admin/assets/image/layer_top.png',		
						'middle'			=> SAOSORAK_DIR.'admin/assets/image/layer_middle.png',
						'bottom'				=> SAOSORAK_DIR.'admin/assets/image/layer_bottom.png',
					),	
					),				
				),	
  
 	); 		
	$option[]= array( 
		"responsive"	=>  "mobile",		
		"name"			=> __('موقعیت','sorsorak'),
   		"id"			=> "mobile_position", 
 		"width"			=> "100%", 
		"type"			=> "multi_options",
 		
 		"group"				=>  __('موقعیت و اندازه','sorsorak'),
 		"options"		=>  array( 
					array( 
						"name"			=> __('افقی','sorsorak'),
						"id"			=> "horizontal",
  						"unit"			=> 'px',
  						"min"			=> '-99999',
  						"warp_width"	=> "50%",
						"type"			=> "number",
					),
					array( 
						"name"			=> __('عمودی','sorsorak'),
						"id"			=> "vertical",
  						"unit"			=> 'px',
  						"min"			=> '-99999',
 						"warp_width"	=> "50%",
						"type"			=> "number",
					),					
				),	
  
 	); 	
	
	
	
	
	
	
	$option[]= array( 
		"responsive"	=>  "mobile",		
 		"name"			=> __('اندازه','sorsorak'),
 		"id"			=> "mobile_size",
		"width"			=> "100%", 
 		"type"			=> "multi_options",
 		
 		"group"				=>  __('موقعیت و اندازه','sorsorak'),
 		"options"		=>  array( 
					array( 
						"name"			=> __('طول','sorsorak'),
						"id"			=> "width",
  						"unit"			=> 'px',
  						"warp_width"	=> "50%",
						"type"			=> "number",
					),
					array( 
						"name"			=> __('ارتفاع','sorsorak'),
						"id"			=> "height",
  						"unit"			=> 'px',
 						"warp_width"	=> "50%",
 						"type"			=> "number",
					),					
				),	
  
 	); 	 
	
	}	
	
			
			?>