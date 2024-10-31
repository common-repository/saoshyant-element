<?php

if ( ! class_exists( 'sor_import_options' ) ) {
function sor_import_options() {
 	 $option=array();
 	$option['slider_1']= array( 
		"img"			=>  SAOSORAK_DIR .'import/slider_1/slider_1.jpg',
 		"id"			=> "slider_1",
 		"demo"			=> "http://sao-wp.ir/sorsorak/sorsorak/slider_2/",
  	); 	
	
	$option['slider_2']= array( 
		"img"			=>  SAOSORAK_DIR .'import/slider_2/slider_2.jpg',
 		"id"			=> "slider_1",
 		"demo"			=> "http://sao-wp.ir/sorsorak/sorsorak/slider_2/",
  	); 		
	
	$option['slider_3']= array( 
		"img"			=>  SAOSORAK_DIR .'import/slider_3/slider_3.jpg',
 		"id"			=> "slider_3",
 		"demo"			=> "http://sao-wp.ir/sorsorak/sorsorak/slider_3/",
  	); 	
	$option['slider_4']= array( 
		"img"			=>  SAOSORAK_DIR .'import/slider_4/slider_4.jpg',
 		"id"			=> "slider_4",
  	); 	
	 
	$option['slider_5']= array( 
		"img"			=>  SAOSORAK_DIR .'import/slider_5/slider_5.jpg',
 		"id"			=> "slider_5",
  	);
	
	$option['slider_6']= array( 
		"img"			=>  SAOSORAK_DIR .'import/slider_6/slider_6.jpg',
 		"id"			=> "slider_6",
  	);	
	
	$option['slider_7']= array( 
		"img"			=>  SAOSORAK_DIR .'import/slider_7/slider_7.jpg',
 		"id"			=> "slider_7",
  	);	
	$option['slider_8']= array( 
		"img"			=>  SAOSORAK_DIR .'import/slider_8/slider_8.jpg',
 		"id"			=> "slider_8",
  	);
	return $option;
}
}
 ?>