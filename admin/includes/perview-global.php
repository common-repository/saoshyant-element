<?php

 if ( !function_exists ( "sor_perview_global_warp" )){
function sor_perview_global_warp(){
	?>
 		<div class="sor_perview_global sor_perview_desktop sor_perview">
		<div class="sor_perview_heading" >
		 <div class="sor_perview_heading_change sor_perview_heading_item">
			 <label for="#sor_perview_change"><?php echo esc_html__('نمایش تغییرات','sorsorak');?></label>
             
		 
 		 </div>

 		 <div class="sor_perview_heading_desktop sor_perview_heading_item">
			 <label for="#sor_perview_desktop_width"><?php echo esc_html__('نمایش در دسکتاپ','sorsorak');?></label>
             
			 <select id="sor_perview_desktop_width" name="sor_perview_desktop_width">
				 <option value="100%"><?php echo esc_html('100%');?></option>
				 <option value="1920px"><?php echo esc_html('1920px');?></option>
				 <option value="1680px"><?php echo esc_html('1680px');?></option>
				 <option value="1440px"><?php echo esc_html('1440px');?></option>
				 <option value="1366px"><?php echo esc_html('1366px');?></option>
				 <option value="1280px"><?php echo esc_html('1280px');?></option>
				 <option value="1040px"><?php echo esc_html('1040px');?></option>
   			 </select>
 		 </div>


 		 <div class="sor_perview_heading_tablet sor_perview_heading_item"> 
			 <label for="#sor_perview_tablet_width"><?php echo esc_html__('نمایش در تبلت','sorsorak');?></label>
			 <select id="sor_perview_tablet_width" name="sor_perview_tablet_width">
				 <option value="1024px"><?php echo esc_html('1024px');?></option>
				 <option value="991px"><?php echo esc_html('991px');?></option>
				 <option value="800px"><?php echo esc_html('800px');?></option>
				 <option value="768px"><?php echo esc_html('768px');?></option>
   			 </select>
 		 </div>
		
        
        
 	 	<div class="sor_perview_heading_mobile sor_perview_heading_item"> 
			 <label for="#sor_perview_mobile_width"><?php echo esc_html__('نمایش در موبایل','sorsorak');?></label>
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
 	
 	<div class="sor_perview_global_scroll" >	
 	<div class="sor_perview_global_content " >
	
	<?php	sor_perview_global();?>
	</div>
	</div>
	</div>
 
<?php
}
 }
 
 if ( !function_exists ( "sor_perview_global" )){
add_action('wp_ajax_nopriv_sor_perview_global', 'sor_perview_global');
add_action('wp_ajax_sor_perview_global', 'sor_perview_global');

function sor_perview_global() {
	global $post;
	
	if(!empty($_REQUEST['sor_setting_json'])){
 		$setting_json = stripslashes(wp_kses_post($_REQUEST['sor_setting_json']));
 	}else{
	$setting_json = get_post_meta($post->ID, 'sor_setting_json', true);
	}
 	$setting= sor_options_array_row($setting_json);
 
 
 	if(!empty($_REQUEST['sor_slide'])){
 		$slide_json = stripslashes(wp_kses_post($_REQUEST['sor_slide']));
 	}else{
 		$slide_json = get_post_meta($post->ID, 'sor_slide', true);  

	}
    $slide= sor_options_array_row($slide_json);
	echo '<div class="sor_perview_global_config">';
  sor_global_config(1,$setting,$slide);
  sor_perview_icon_fonts();
	echo '</div>';
 if(!empty($_REQUEST['sor_setting_json'])){
		die();
		}
}

 function sor_perview_icon_fonts() {
echo'<div class="sor-icon-fons">';
	$var='';
	
	$array =array(
	'fontawesome',
	'flaticonarrow',
	'flaticonmultimedia',
	'flaticonbusiness',
	'flaticonoffice',
	'flaticoninterface',
	'flaticonessentialset',
	'flaticontechsupport',
	'flaticontech',
	'flaticonstrategy',
	'flaticonhipster',
	'flaticonfashion',
	'flaticonwebdesign',
	'flaticontravel',
	'flaticonnetwork',
	'metrizeicon',
	'typcn'
	);
		global $sor_fonticon_style;
	
 	foreach($array as $font){
		 	if(!empty($sor_fonticon_style[$font])){
echo "<link rel='stylesheet' id='sor_".$font."-css'  href=".SAOSORAK_DIR."assets/css/fonts/".$font.".css?ver=".$var."' media='all' />";
			}
	}
 	
 echo'</div>';
 
//die();			  	
}
 }