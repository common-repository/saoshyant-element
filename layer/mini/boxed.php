<?php


	$option[]= array( 
		"name"			=> __('استایل جعبه ای','sorsorak'),
 		"id"			=> $boxed."_boxed",
  		"type"			=> "select",
		"group"			=>  __('استایل جعبه ای','sorsorak'),
  		"options"		=>  array(
 			'none' =>		 __('جعبه ای نباشد','sorsorak'),		
			'boxed' =>		 __('جعبه ای','sorsorak'),		
	 	),   	);	
	
	
	
	
		
	$option[]= array( 
		"name"			=> __('فاصله','sorsorak'),
 		"id"			=> $boxed."_boxed_padding",
		"group"			=>  __('استایل جعبه ای','sorsorak'),
 		"fold"			=>	array(
								'boxed' =>  $boxed.'_boxed',
							) ,
		"type"			=> "multi_options",
 		"width"			=> "100%",
  		"options"		=>  sor_multi_array_options('layer_padding')
		
 	); 	
	
 	
	
	
	
	
	$option[]= array( 
		"name"			=> __('هور','sorsorak'),
 		"id"			=> $boxed."_boxed_effects",
		"group"			=>  __('استایل جعبه ای','sorsorak'),
 		"type"			=> "hover",
 		"fold"			=>	array( 'boxed' => $boxed.'_boxed') ,
  		"options"		=>  array(
 			'normal' =>		 __('عادی','sorsorak'),		
			'hover' =>		 __('هاور','sorsorak'),		
	 	),
	); 	 
 		
 
	 
 
 
 
 
		
	$option[]= array( 
		"name"			=> __('رنگ پس زمینه','sorsorak'),
 		"id"			=> $boxed."_boxed_background",
		"group"			=>  __('استایل جعبه ای','sorsorak'),
 		"fold"			=>	array(
								'normal' =>  $boxed.'_boxed_effects',
							) ,
		"type"			=> "multi_options",
 		"default"		=> array('first'=>"rgb(2, 159, 253)"),
  		"options"		=>  array(
				array(	"id"		=> "first",
						"type"		=> "color_rgba",
				),
 				array(	"id"		=> "second",
						"type"		=> "color_rgba",
  					),
 				array(
 						"id"		=> "orientation",
						"type"		=> "select",
						"width"		=> "50px",
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
		"name"			=> __('کادر دور','sorsorak'),
 		"id"			=> $boxed."_boxed_border",
  		"group"			=>  __('استایل جعبه ای','sorsorak'),
 		"type"			=> "multi_options",
 		"width"			=> "100%",
 		"fold"			=>	array(
								'normal' => $boxed.'_boxed_effects',
							) ,
		"options"		=>  sor_multi_array_options('layer_border'),						
	); 	
	
	$option[]= array( 
		"name"			=> __('سایه دور','sorsorak'),
 		"id"			=> $boxed."_boxed_shadow",
  		"group"			=>  __('استایل جعبه ای','sorsorak'),
 		"type"			=> "multi_options",
 		"width"			=> "100%",
 		"fold"			=>	array(
								'normal' => $boxed.'_boxed_effects',
							) ,
		"options"		=>  sor_multi_array_options('layer_shadow'),						
	); 	
	
	
 
	
	
	//******* hover***********/
			
	$option[]= array( 
		"name"			=> __('رنگ پس زمینه هاور','sorsorak'),
 		"id"			=> $boxed."_boxed_hover_background",
		"group"			=>  __('استایل جعبه ای','sorsorak'),
 		"fold"			=>	array(
								'hover' =>  $boxed.'_boxed_effects',
							) ,
		"type"			=> "multi_options",
		
  		"options"		=>  array(
				array(	"id"		=> "first",
						"type"		=> "color_rgba",
				),
 				array(	"id"		=> "second",
						"type"		=> "color_rgba",
  					),
 				array(
 						"id"		=> "orientation",
						"type"		=> "select",
						"width"		=> "50px",
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
		"name"			=> __('کادر دور هاور','sorsorak'),
 		"id"			=> $boxed."_boxed_hover_border",
  		"group"			=>  __('استایل جعبه ای','sorsorak'),
 		"type"			=> "multi_options",
 		"width"			=> "100%",
 		"fold"			=>	array(
								'hover' =>  $boxed.'_boxed_effects',
							) ,
		"options"		=>  sor_multi_array_options('layer_border'),						
	); 	
	
	$option[]= array( 
		"name"			=> __('سایه دور هاور','sorsorak'),
 		"id"			=> $boxed."_boxed_hover_shadow",
  		"group"			=>  __('استایل جعبه ای','sorsorak'),
 		"type"			=> "multi_options",
 		"width"			=> "100%",
 		"fold"			=>	array( 'hover' =>  $boxed.'_boxed_effects') ,

		"options"		=>  sor_multi_array_options('layer_shadow'),						
	); 	
	
	$option[]= array( 
		"name"			=> __('گردی دور','sorsorak'),
 		"id"			=>  $boxed."_boxed_radius",
  		"group"			=>  __('استایل جعبه ای','sorsorak'),
 		"type"			=> "multi_options",
 		"width"			=> "100%",
 		"fold"			=>	array(
								'boxed' =>  $boxed.'_boxed',
							) ,
		"options"		=>  sor_multi_array_options('layer_radius'),						
	); 	
	
		 
	
	
	 
 
	?>