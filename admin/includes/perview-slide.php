<?php
 if ( !function_exists ( "sor_perview_slide_warp" )){

function sor_perview_slide_warp(){
	
	if(!empty($_REQUEST['sor_setting_json'])){
 		$setting_json = stripslashes(wp_kses_post($_REQUEST['sor_setting_json']));
 	}
	$css='';
 	$setting_value= sor_options_array_row($setting_json);
	
	$setting_type= !empty($setting_value['type'])?$setting_value['type']:'slider';
 	$class=' sor-has-desktop sor-perview-type-'.$setting_type;
 	
	if($setting_type=='glider'){
 		$css.=sor_perview_glider_css($setting_value);
	}else{
		
		$css = sor_slider_var_2('wt',$setting_value,'size','width');
		$css.= sor_slider_var_2('ht',$setting_value,'size','height');
 		if(!empty($setting_value['responsive_tablet'])){
  			$css.= sor_slider_var_2('tab-wt',$setting_value,'tablet_size','width');
			$css.= sor_slider_var_2('tab-ht',$setting_value,'tablet_size','height');
		}
			
		if(!empty($setting_value['responsive_mobile'])){
 			$css.= sor_slider_var_2('mob-wt',$setting_value,'mobile_size','width');
			$css.= sor_slider_var_2('mob-ht',$setting_value,'mobile_size','height');
		}
	}
	
	if(!empty($setting_value['responsive_tablet'])){
		$class.=' sor-has-tablet ';
	}
	if(!empty($setting_value['responsive_mobile'])){
		$class.=' sor-has-mobile ';
	}
	
 	$class.= !empty($setting_value['full_width']) && $setting_type!=='glider' ? ' sor-full-width ' :' sor-not-width ';
 	$perview_width = !empty($setting_value['full_width']) && $setting_type!=='glider' ? ' sor-perview-full-width ' :' sor-perview-not-width ';
		 ?>
		
 	 <div class="sor_perview_slide sor_perview <?php echo $perview_width;?> " style=" <?php echo $css;?>">

		<div class="sor_perview_heading" >
            <div class="sor_perview_heading_animte sor_perview_heading_item" >
                <span class="sor_animte_play"><?php echo __('شروع انمیمیشن','sorsorak');?></span>
                <span class="sor_animte_stop"><?php echo __('توقف انمیمیشن','sorsorak');?></span>
            </div> 
            <div class="sor_perview_heading_desktop sor_perview_heading_item sor_perview_heading_full_screen_hide">
                 <label for="#sor_perview_desktop_width"><?php echo esc_html__('ویرایش در دسکتاپ','sorsorak');?></label>
                  
             </div>
    
    		<?php 	if(!empty($setting_value['responsive_tablet'])){?>
             <div class="sor_perview_heading_tablet sor_perview_heading_item sor_perview_heading_full_screen_hide"> 
                 <label for="#sor_perview_tablet_width"><?php echo esc_html__('ویرایش در تبلت','sorsorak');?></label>
                 
             </div>
    		<?php } ?>
            
    		<?php 	if(!empty($setting_value['responsive_mobile'])){?>
            <div class="sor_perview_heading_mobile sor_perview_heading_item sor_perview_heading_full_screen_hide"> 
                 <label for="#sor_perview_mobile_width"><?php echo esc_html__('ویرایش در موبایل','sorsorak');?></label>
                 
             </div>   
             
             <?php }?> 
             
             
              <div class="sor_perview_heading_desktop sor_perview_heading_full_screen_show sor_perview_heading_item">
			 <label for="#sor_perview_desktop_width"><?php echo esc_html__('نمایش در دسکتاپ','sorsorak');?></label>
             
			 <select id="sor_perview_desktop_width" name="sor_perview_desktop_width">
				 <option value="1920px"><?php echo esc_html('1920px');?></option>
				 <option value="1680px"><?php echo esc_html('1680px');?></option>
				 <option value="1440px"><?php echo esc_html('1440px');?></option>
				 <option value="1366px"><?php echo esc_html('1366px');?></option>
				 <option value="1280px"><?php echo esc_html('1280px');?></option>
				 <option value="1040px"><?php echo esc_html('1040px');?></option>
   			 </select>
 		 </div>


 		 <div class="sor_perview_heading_tablet sor_perview_heading_full_screen_show sor_perview_heading_item"> 
			 <label for="#sor_perview_tablet_width"><?php echo esc_html__('نمایش در تبلت','sorsorak');?></label>
			 <select id="sor_perview_tablet_width" name="sor_perview_tablet_width">
				 <option value="1024px"><?php echo esc_html('1024px');?></option>
				 <option value="991px"><?php echo esc_html('991px');?></option>
				 <option value="800px"><?php echo esc_html('800px');?></option>
				 <option value="768px"><?php echo esc_html('768px');?></option>
   			 </select>
 		 </div>
		
        
        
 	 	<div class="sor_perview_heading_mobile sor_perview_heading_full_screen_show sor_perview_heading_item"> 
			 <label for="#sor_perview_mobile_width"><?php echo esc_html__('نمایش در تبلت','sorsorak');?></label>
			 <select id="sor_perview_mobile_width" name="sor_perview_mobile_width" value="480px">
				 <option value="767px"><?php echo esc_html('767px');?></option>
				 <option value="680px"><?php echo esc_html('680px');?></option>
				 <option value="640px"><?php echo esc_html('640px');?></option>
				 <option value="520px"><?php echo esc_html('520px');?></option>
				 <option value="480px"><?php echo esc_html('480px');?></option>
				 <option value="320px"><?php echo esc_html('320px');?></option>
  			 </select>
 		 </div>       
        
             
             
             
             
             
             <div class="sor_perview_heading_full_screen sor_perview_heading_item"> 
			<div class="sor_perview_full_screen_mode"><?php echo esc_html__('نمایش در تمام صفحه','sorsorak');?></div>
			<div class="sor_perview_full_screen_close"><?php echo esc_html__('بستن تمام صفحه','sorsorak');?></div>

 	 	</div>    
 		 </div>       





 
        <div class="sor_perview_slide_scroll " >
            <div class="sor_perview_slide_content " >
				<div class="sor-slide-warp sor-sorsorak sor-not-scale <?php echo $class;?>" >
					<div class="sor-slide-list-warp" >
            			<div class="sor-mode-fade sor-slide-list " >
						<?php sor_perview_slide(); ?>
          				</div>
					</div>
				</div>
            </div>
        </div>
	</div>
	<?php
 //   die();

}
 }
 



 if ( !function_exists ( "sor_perview_slide" )){
function sor_perview_slide(){

	$slide_value = !empty($_REQUEST['option']) ? sor_options_decode(urldecode(wp_kses_post($_REQUEST['option']))):'';
  
	
	
 	$css =sor_slider_var_gradient_background_color('sl',$slide_value,'background_color');
 	$css.=sor_slider_background_image('sl',$slide_value,'background_image');	
 			$css.=sor_slider_var_background_image_position('sl',$slide_value,'background_image_position');
 			$css.=sor_slider_var_background_image_position('sl-tab',$slide_value,'tablet_background_image_position');
 			$css.=sor_slider_var_background_image_position('sl-mob',$slide_value,'mobile_background_image_position');


	echo '<div class="sor-slide sor-perview-slide" style="'.$css.'">';
	echo '<aside class="sor-slide-cover"></aside>';
	
 		sor_perview_layer($layer);
		
		 
	
	echo '</div>';	
   
 	
		 
}
 }
 if ( !function_exists ( "sor_perview_layer" )){
 add_action('wp_ajax_nopriv_sor_perview_layer', 'sor_perview_layer');
add_action('wp_ajax_sor_perview_layer', 'sor_perview_layer');
 
function sor_perview_layer($layer=false){
	if($_REQUEST['layer_json']){
   	 $layer = $_REQUEST['layer_json'];
	}else{
   	 $layer = !empty($_REQUEST['layer']) ? sor_options_decode(urldecode(wp_kses_post($_REQUEST['layer']))):'';
	}
	 
 	echo '<div class="sor-layer-warp">';
	echo '<div class="sor-layer-list">';
   
		if (!empty($layer)) :
		foreach($layer as $layer_key => $layer_value):
			$layer_value['key']=$layer_key;
			$layer_id= $layer_value['id'];



			if(has_filter('sor_layer_perview_'.$layer_id)) {
				apply_filters('sor_layer_perview_'.$layer_id, $layer_value) ;	
  			}
 			   
 			   
		endforeach;
		endif; 
	
	echo '</div>';	
  	echo '</div>';	
  	if($_REQUEST['layer_json']){

 	die();
	}
}
 }
 