<?php
if( ! function_exists( 'sor_perview_layer_size' ) ) {
function sor_perview_layer_size($value=false){
	$css='';
	if(!empty($value['horizontal'])){
		$css.='--sor-lr-rt:'.$value['horizontal'].'%;';
	}
	if(!empty($value['vertical'])){
		$css.='--sor-lr-tp:'.$value['vertical'].'%;';
	}	
	if(!empty($value['width'])){
		$css.='--sor-lr-wt:'.$value['width'].'%;';
	}	
	if(!empty($value['height'])){
		$css.='--sor-lr-ht:'.$value['height'].'%;';
	}	
 		$css.='--sor-lr-lt:auto;';
 
	
	
	return $css;	
 
}
}
?>