<?php
 
  	 
 	
	
	$option[]= array( 
		"name"			=> __('افکت','sorsorak'),
 		"id"			=> "effect",
   		"group"			=>  __('انیمیشن','sorsorak'),
		"type"			=> "select", 
 
		"options"		=> array( 
			""				=> __("بدون افکت",'sorsorak'),
			"move"			=>  __('حرکت','sorsorak'),
			"fade"			=> __("محو شدن",'sorsorak'),
			"scale"			=> __("مقیاس",'sorsorak'),
 		),
	);
	
	$option[]= array( 
		"name"			=> __('موقعیت اولیه','sorsorak'),
 		"id"			=> "initial",
   		"group"			=>  __('انیمیشن','sorsorak'),
		"type"			=> "select", 
		"fold"			=> array( "move" => "effect" ),
		"options"		=> array( 
			"top"			=>  __('بالا','sorsorak'),
			"left"			=>  is_rtl() ? esc_html__('راست','sorsorak'):esc_html__('چپ','sorsorak'),
			"bottom"		=>  __('پایین','sorsorak'),
			"right"			=>  is_rtl() ? esc_html__('چپ','sorsorak'):esc_html__('راست','sorsorak'),
  		),
	);	
	
	
	$option[]= array( 
		"name"			=> __('مقیاس','sorsorak'),
 		"id"			=> "scale",
		"fold"			=> array( "scale" => "effect" ),
   		"group"			=>  __('انیمیشن','sorsorak'),
		"type"			=> "number", 
 		"step"			=> "0.1", 	 	
		"min"			=> "0", 	 	
		"max"			=> "3", 
	);	
	 
	
	
	$option[]= array( 
		"name"			=> __('زمان شروع افکت','sorsorak'),
 		"id"			=> "time_start",
		"default"		=> "500",
		"min"			=> "0",
		"width"			=> "60px",
		
		"step"			=> "100",
		"fold"			=> array(
							"scale" => "effect",
							 "fade" => "effect",
							 "move" => "effect" ),
		
		"max"			=> "10000",
		"unit"			=> "ms",
		
    		"group"			=>  __('انیمیشن','sorsorak'),
		"type"			=> "number",
   	);	
	
	$option[]= array( 
		"name"			=> __('زمان پایان افکت','sorsorak'),
 		"id"			=> "time_end",
		"default"		=> "1000",
		"min"			=> "0",
		"unit"			=> "ms",
		"step"			=> "100",
		"width"			=> "60px",
		 
		"fold"			=> array(
							"scale" => "effect",
							 "fade" => "effect",
							 "move" => "effect" ),		
		"max"			=> "10000",
    		"group"			=>  __('انیمیشن','sorsorak'),
		"type"			=> "number",
   	);