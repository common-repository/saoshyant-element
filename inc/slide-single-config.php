<?php

if ( ! class_exists( 'sor_global_slider_config' ) ) {
function sor_global_slider_config($global_key=false,$setting=false,$slide=false){

 	$pager='';
	$type = !empty($setting['type'])?$setting['type']:'slider';
 
 
	$classes=array(
 		'sor-custom-slider',
 		'sor-type-slider',
 		'sor-sorsorak',
		'sor-global-'.esc_attr($global_key),
 		'sor-has-desktop',
 		
    	!empty($setting['responsive_tablet'])?'sor-has-tablet':'sor-not-tablet',
   		!empty($setting['responsive_mobile'])?'sor-has-mobile':'sor-not-mobile',
   		!empty($setting['full_width'])?'sor-full-width':'sor-not-width',
 
 	);
 		$classes[]=!empty($setting['pager'])?(!empty($setting['pager_position']) ? 'sor-pager-'.$setting['pager_position']:'sor-pager-top'):'';
		$classes[]=	!empty($setting['pager'])?(!empty($setting['pager_visibility']) ? 'sor-pager-'.$setting['pager_visibility']:'sor-pager-hover'):'';	 
		$classes[]=	!empty($setting['arrows'])?(!empty($setting['arrows_position']) ? 'sor-arrows-'.$setting['arrows_position']:'sor-arrows-side'):'';
		$classes[]=!empty($setting['arrows'])?(!empty($setting['arrows_visibility']) ? 'sor-arrows-'.$setting['arrows_visibility']:'sor-arrows-hover'):'';
		$classes[]=	!empty($setting['timer'])? 'sor-timer':'';
  
 		echo '<aside class="'.esc_attr(join( ' ', $classes )).'"  >';
  
        echo '<div class="sor-slide-list-warp" >';
			echo '<div class="sor-slide-list" >';
					sor_slide_list($global_key,$slide);
			echo '</div>';
			echo '<div class="sor-arrow-warp"><a class="sor-arrow-prev"></a><a class="sor-arrow-next"></a></div>';		
 		echo '</div>';
        
       
         $slider_options = array( ); 	
         
		$slider_options['controls']=!empty($setting['arrows']) ? $setting['arrows'] : '';
		$slider_options['mode']= !empty($setting['effect']) ? $setting['effect'] : 'fade';
		$slider_options['speed']= !empty($setting['speed']) ? (int)$setting['speed'] : 2000;
		$slider_options['pause']= !empty($setting['pause']) ? (int)$setting['pause'] : 5000;;	
		$slider_options['auto']= !empty($setting['auto']) ? true :'';	
			 
		$slider_options['loop']=!empty($setting['loop']) ? true : false;
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
	$css.= sor_slider_var_2('ht',$setting,'size','height');
	if(!empty($setting['responsive_tablet'])){
 	$css.= sor_slider_var_2('tab-wt',$setting,'tablet_size','width');
	$css.= sor_slider_var_2('tab-ht',$setting,'tablet_size','height');
	}
		
	if(!empty($setting['responsive_mobile'])){
	$css.= sor_slider_var_2('mob-wt',$setting,'mobile_size','width');
	$css.= sor_slider_var_2('mob-ht',$setting,'mobile_size','height');
	}
	
 	$css.= sor_slider_var_unit('sp',$setting,'speed','ms');	 
	$css.= sor_slider_var_unit('pu',$setting,'pause','ms');	 
  
	if(!empty($setting['timer'])){
		$css.= sor_slider_var_gradient_background_color('ti',$setting,'timer_color');
	}			
  	$css.= sor_pager_css($setting);
	$css.= sor_arrows_css($setting);
	$css.= sor_slider_global_css($setting);
 
	
  	echo '<div class="sor-style">';
	sor_icon_enqueue('1');
	
	$item='.sor-global-'.$global_key;
	echo '<style>'.sor_slider_item_css( $css, $item).'</style>';	 
	echo '<div>';
 
	  
	echo '</aside>';
 }
}
?>