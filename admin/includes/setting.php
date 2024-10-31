<?php
 if ( !function_exists ( "sor_module_setting" )){

function sor_module_setting($value_id=false){
	global $post;
   
	
	
	
	
	
	
	$setting_array=array();
	$sor_setting_options = array(apply_filters('sor_setting_options',$setting_array));

	
	if(empty($value_id)){
		
		$value_default=array();
 		foreach ($sor_setting_options as $setting_options):
 			if(!empty($setting_options)):
			foreach ($setting_options as $option ):
	 			 
				if(!empty($option['default']) && !empty($option['id'])){
					$value_default[$option['id']] = $option['default'];
				}
			endforeach;
			endif;	
			
		endforeach;
		
 		$value_id = $value_default ;
 	}else{
 		$value_id =$value_id;
	}	
 	//Section
	echo '<div class="sor_module_setting sor_global_desktop sor_options" >';
  				
				
				echo'<div class="sor_title_tabs">';
				foreach ($sor_setting_options as  $setting_options):
	
						$array_tab = sor_setting_tabs();
						$count_tab=0;
						foreach ($array_tab as  $key=> $tabs) :
								$count_tab++;
							if($count_tab==1){
								$tab_active = 'sor_layout_active';
							}else{
								$tab_active = '';
							}
							echo'<a class="sor_tab_'.esc_attr($key).' '.esc_attr($tab_active).'" data-id="'.esc_attr($key).'">'.esc_html($tabs).'</a>';
						endforeach;		
	
				endforeach;  
	  			echo '</div>';



  				echo '<div class="sor_options_content">';
				foreach ($sor_setting_options as $setting_options):
		
					$array_tab = sor_setting_tabs();
					$count_container=0;
					foreach ($array_tab as  $key=> $tabs):
	 
						$count_container++;
						if($count_container==1){
							$group_active = 'sor_layout_group_active';
						}else{
							$group_active = '';
						}  
								
						echo '<section class="sor_options_warp '.esc_attr($group_active).' " data-tab="'.esc_attr($key).'">';
							foreach ($setting_options as $option ):
								$general = !empty($option['group']) ? sanitize_title($option['group']):sanitize_title(esc_html__('عمومی','sorsorak'));
								if($key == $general ){
									if(!empty($option['name']) && !empty($option['id'])  && !empty($option['type'])){
										$data_options = !empty( $option['options'] ) ?  $option['options']  : null;
										$desc = !empty( $option['desc'] ) ?  $option['desc']  : null;
										$placeholder = !empty( $option['placeholder'] ) ?  $option['placeholder']  : null;
										$fold = !empty( $option['fold'] ) ?  $option['fold']  : null;
										$unit = !empty( $option['unit'] ) ?  $option['unit']  : null;
										$min = !empty( $option['min'] ) ?  $option['min']  : null;
										$max = !empty( $option['max'] ) ?  $option['max']  : null;
										$step = !empty( $option['step'] ) ?  $option['step']  : null;
										$width = !empty( $option['width'] ) ?  $option['width']  : null;	
										$responsive = !empty( $option['responsive'] ) ?  $option['responsive']  : null;
										$warp_width = !empty( $option['warp_width'] ) ?  $option['warp_width']  : null;
										$value =!empty($value_id[$option['id']])?$value_id[$option['id']]:'';
										sor_options_function($value, $option['name'],'sor_setting['.$option['id'].']',$option['type'],$data_options,$desc,$placeholder,$fold,'setting_'.$option['id'],$unit,'',$min,$max,$step,$width,$responsive,$warp_width );
									}
								}
							endforeach; 							
						echo '</section>';
										
					endforeach; 
												
				endforeach; 
				echo '</div>';
			 
			 
	 
 	echo '</div>';
    
 
}  
 }


 if ( !function_exists ( "sor_setting_tabs" )){
 function sor_setting_tabs(){
	$setting=array();
	$sor_setting_options = array(apply_filters('sor_setting_options',$setting));
  	$tab= array();
	
	foreach ($sor_setting_options as  $setting) :
		foreach ($setting as $option ) :
			if(!empty($option['group'])){
				$dass = sanitize_title($option['group']);
				if(!array_key_exists($dass,$tab)){
					$tab[sanitize_title($option['group'])] = $option['group'];
				}
			}else{ 	
				$general = esc_html__('عمومی','sorsorak');
				$tab[sanitize_title($general)] = $general;
			}
		endforeach;
	endforeach;
	
	return  $tab;

}
 }
 
 


 
 
 ?>