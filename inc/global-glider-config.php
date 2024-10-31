<?php

if ( ! class_exists( 'sor_global_slider_config' ) ) {
function sor_global_glider_config($global_key=false,$setting=false,$slide=false){

 	$pager='';
	$type = !empty($setting['type'])?$setting['type']:'slider';
 
 
	$classes=array(
 		'sor-custom-slider',
 		'sor-glider',
 		'sor-sorsorak',
		'sor-global-'.esc_attr($global_key),
 		'sor-has-desktop',
 		
    	!empty($setting['glider_layout'])?'sor-'.$setting['glider_layout']:'sor-glider_1',
    	!empty($setting['tablet_glider_layout'])?'sor-'.$setting['tablet_glider_layout']:'sor-tablet_glider_1',
    	!empty($setting['mobile_glider_layout'])?'sor-'.$setting['mobile_glider_layout']:'sor-mobile_glider_1',
    	!empty($setting['responsive_tablet'])?'sor-has-tablet':'sor-not-tablet',
   		!empty($setting['responsive_mobile'])?'sor-has-mobile':'sor-not-mobile',
   		!empty($setting['full_width'])?'sor-full-width':'sor-not-width',
 
 	);
 
 		echo '<aside class="'.esc_attr(join( ' ', $classes )).'"  >';
  
        echo '<div class="sor-slide-list-warp" >';
			echo '<div class="sor-slide-list" >';
					sor_glide_list($global_key,$slide);
			echo '</div>';
  		echo '</div>';
        
       
         $slider_options = array( ); 	
 
			 
 		$slider_options['desktop_width']=!empty($setting['size']['width']) ? $setting['size']['width'] : false;
		$slider_options['desktop_height']=!empty($setting['size']['height']) ? $setting['size']['height'] : false;
		if(!empty($setting['responsive_tablet'])){
			 $slider_options['tablet_width']=!empty($setting['tablet_size']['width']) ? $setting['tablet_size']['width'] : false;
			$slider_options['tablet_height']=!empty($setting['tablet_size']['height']) ? $setting['tablet_size']['height'] : false;
		}
			 
		if(!empty($setting['responsive_mobile'])){
			 $slider_options['mobile_width']=!empty($setting['mobile_size']['width']) ? $setting['mobile_size']['width'] : false;
			$slider_options['mobile_height']=!empty($setting['mobile_size']['height']) ? $setting['mobile_size']['height'] : false;
		}
		sor_slider_lightslider('1',$slider_options);
		




		
 	 
	$css = sor_slider_var_2('wt',$setting,'size','width');
	$css.= sor_slider_var_2('ratio',$setting,'size','ratio');
	$css.= sor_slider_var('gp',$setting,'between');
  	if(!empty($setting['responsive_tablet'])){
 	$css.= sor_slider_var_2('tab-wt',$setting,'tablet_size','width');
 	$css.= sor_slider_var_2('tab-ratio',$setting,'tablet_size','ratio');
	}
	$css.= sor_slider_var('tab-gp',$setting,'tablet_between');
	if(!empty($setting['responsive_mobile'])){
	$css.= sor_slider_var_2('mob-wt',$setting,'mobile_size','width');
 	$css.= sor_slider_var_2('mob-ratio',$setting,'mobile_size','ratio');
	
	}
	$css.= sor_slider_var('mob-gp',$setting,'mobile_between');

 	$css.= sor_slider_var_unit('sp',$setting,'speed','ms');	 
	$css.= sor_slider_var_unit('pu',$setting,'pause','ms');	 
  
 		

	$css.= sor_global_css($setting);
 
	
  	echo '<div class="sor-style">';
	sor_icon_enqueue('1');
	
	$item='.sor-global-'.$global_key;
	echo '<style>'.sor_slider_item_css( $css, $item).'</style>';	 
	echo '<div>';
 
	  
	echo '</aside>';
 }
}
function sor_glider_layout_config($setting){
	$css='';
 	$css.=sor_glider_layout_desktop_config($setting);
 	$css.=sor_glider_layout_tablet_config($setting);
 	$css.=sor_glider_layout_mobile_config($setting);
		
	 
 	return $css;
}
 
?>