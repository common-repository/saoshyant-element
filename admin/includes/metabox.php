<?php 
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
															 	Slider Metabox
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sor_add_metabox" )){

add_action('add_meta_boxes', 'sor_add_metabox');
function sor_add_metabox($post_type) {
    $types = array('sorsorak');

    if (in_array($post_type, $types)) {
      add_meta_box(
        'sor_metabox',
        esc_html__('اسلایدر','sorsorak'),
        'sor_metabox',
        'sorsorak',
        'normal',
        'high'
      );
    }
}
}
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
															 	Meta Panel
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sor_metabox" )){
function sor_metabox($post) {
 	global $post;
 
   wp_nonce_field( 'sor_metabox_nonce', 'sor_metabox_nonce' );
 
 
	  
	echo '<div class="sor_metabox">';
		 
 	 		sor_module_heading();
			
			
			echo '<div class="sor_module_content">';
 			sor_module_content();
			echo '</div>';
 	 	 
			sor_add_layer();
			sor_perview_global_warp();
 	echo '</div>';
    
	 
}   
}
 /*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
															 	Slider Meta Save
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sor_module_heading" )){

function sor_module_heading() {
	 	global $post;

	?>
		 <div class="sor_module_heading">
			 <div class="sor_module_shortcode">
 			
			
			 <div class="sor_options_name">
				<label for="sor_shortcode"><?php echo esc_html__('کد کوتاه','sorsorak');?></label>
 			</div>
			
			<div class="sor_options_setting">
				<textarea id="sor_shortcode" name="sor_shortcode" readonly ><?php echo '[sorsorak id="'.$post->ID.'"]';?></textarea>
			</div>
		 </div>
			 <div class="sor_module_global_template">
			 	<a class="sor_module_global_template_save sor_module_button sor_module_template_save" data-id="global" ><?php echo esc_html__('ذخیره کامل در کتابخانه','sorsorak');?></a>
			 	<a class="sor_module_global_template_add sor_module_button"><?php echo esc_html__('افزودن کامل از کتابخانه','sorsorak');?></a>
			 	<a class="sor_module_global_template_demo sor_module_button" ><?php echo esc_html__('افزودن دمو های کامل آماده','sorsorak');?></a>
 			
			</div>
			
			 
			
	</div>
<?php
}

}
if ( !function_exists ( "sor_module_content" )){

add_action('wp_ajax_nopriv_sor_module_content', 'sor_module_content');
add_action('wp_ajax_sor_module_content', 'sor_module_content');
function sor_module_content() {
	 	global $post;
		
		if(!empty($_REQUEST['global_demo_template_id'])){
 			$settings_json = sor_module_file_json($_REQUEST['global_demo_template_id'],'setting');
			$slide_json =  sor_module_file_json($_REQUEST['global_demo_template_id'],'slide');
  		}else if(!empty($_REQUEST['global_template_id'])){
			$template =	get_option( 'sor_global_template');
			$settings_json = urldecode($template[sanitize_key($_REQUEST['global_template_id'])]['setting']);
			$slide_json = urldecode($template[sanitize_key($_REQUEST['global_template_id'])]['slide']);
  		}else{
  			$settings_json = get_post_meta($post->ID, 'sor_setting_json', true);
  			$slide_json = get_post_meta($post->ID, 'sor_slide', true);
 		}
		
 		$settings= sor_options_array_row($settings_json);
 
 		$slide= sor_options_array_row($slide_json);
			
 		$settings_json_textarea = !empty( $settings_json ) ? $settings_json : '';
		echo '<textarea  type="hidden"   name="sor_setting_json" id="sor_setting_json">'.esc_html($settings_json_textarea).'</textarea>';
 		$slide_json_textarea = !empty( $slide_json ) ? $slide_json : '';
		echo '<textarea  type="hidden"   name="sor_slide" id="sor_slide">'.esc_html($slide_json_textarea).'</textarea>';
		 
		 
 		sor_module_setting($settings);
		
		sor_module_slide($slide);
 
 		 		if(!empty($_REQUEST['global_demo_template_id']) || !empty($_REQUEST['sor_global_template'])){

		 die();
				}
}
}

 if ( !function_exists ( "sor_module_file_json" )){
function sor_module_file_json($id,$type) {
 	return file_get_contents(SAOSORAK_DIR .'import/'.$id.'/'.$id.'_'.$type.'.json');
  }

 }
  if ( !function_exists ( "sor_metabox_save" )){
add_action('save_post', 'sor_metabox_save'); 
function sor_metabox_save($post_id) {
 	if ( ! isset( $_POST['sor_metabox_nonce'] ) ||
	! wp_verify_nonce( $_POST['sor_metabox_nonce'], 'sor_metabox_nonce' ) )
		return;
	 
    if (!current_user_can('edit_post', $post_id)) return;

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
	
	if(!empty($_POST['sor_setting_json'])) {
		$sor_setting = wp_kses_post($_POST['sor_setting_json']);
       	update_post_meta($post_id, 'sor_setting_json', $sor_setting);
    } else {
     	 delete_post_meta($post_id, 'sor_setting_json');
    }

	if(!empty($_POST['sor_slide'])) {
		$sor_slide = wp_kses_post($_POST['sor_slide']);
       	update_post_meta($post_id, 'sor_slide', $sor_slide);
    } else {
     	 delete_post_meta($post_id, 'sor_slide');
    }
	 
	 
	 

}
  }?>
