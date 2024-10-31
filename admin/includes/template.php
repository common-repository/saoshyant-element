<?php
 if ( !function_exists ( "sor_template_save" )){
add_action('wp_ajax_sor_template_save', 'sor_template_save');
add_action('wp_ajax_nopriv_sor_template_save', 'sor_template_save');
function sor_template_save(){
	 
	echo '<div id="sor_template" class="sor_template sor_template_save_options sor_options  sor_template_'.$_REQUEST['id'].'" data-id="'.$_REQUEST['id'].'"  data-key="'.$_REQUEST['key'].'">';
	echo '<div class="sor_template_middle">';
		//Title
		echo '<div class="sor_template_title"><h3>';
		if($_REQUEST['id']=='global'){
		echo esc_html__('ذخیره کامل در کتابخانه','sorsorak');
		} 
		if($_REQUEST['id']=='slide'){
		echo esc_html__('ذخیره اسلاید در کتابخانه','sorsorak');
		}
if($_REQUEST['id']=='layer'){
		echo esc_html__('ذخیره لایه در کتابخانه','sorsorak');
		}		 
 		echo '</h3>';
   			echo '<div class="sor_template_cancel">'.esc_html__('انصراف','sorsorak').'</div>';
			echo '<div class="sor_template_save">'.esc_html__('ذخیره در کتابخانه','sorsorak').'</div>';
 		echo '</div>';	        
		echo '<div class="sor_template_content">';
				
				echo '<div class="sor_template_massage">'.esc_html__('* نام خالی می باشد لطفا آن را پر کنید','sorsorak').'</div>';
				
				echo '<div class="sor_options_name">';
					echo '<label for="#sor_template_name">'.esc_html__('نام برای ذخیره','sorsorak').'</label>';
 				echo '</div>';
				
				echo '<div class="sor_options_setting">';
					echo '<input id="sor_template_name" type="text" class="sor_form_text" name="sor_template_name"  value=""  >';
				echo '</div>';
		
			    
		echo '</div>';
	echo '</div>';
	echo '</div>';
 	die('');
}  
 }
 if ( !function_exists ( "sor_template_save_global" )){

 add_action('wp_ajax_sor_template_save_global', 'sor_template_save_global');
add_action('wp_ajax_nopriv_sor_template_save_global', 'sor_template_save_global');  
function sor_template_save_global() {
	$old_data =	get_option( 'sor_global_template');
	if( !is_array($old_data)){
		$old_data=array();
	}
 			 
	$old_data[sanitize_key($_REQUEST['key'])]['name'] =  wp_kses_post($_POST['name']);
	if(!empty($_REQUEST['setting'])){
		$old_data[sanitize_key($_REQUEST['key'])]['setting'] =  urlencode(stripslashes(wp_kses_post($_REQUEST['setting'])));
	}
	
	if(!empty($_REQUEST['slide'])){
		$old_data[sanitize_key($_REQUEST['key'])]['slide'] =  urlencode(stripslashes(wp_kses_post($_REQUEST['slide'])));
	}
	 
  
	update_option( 'sor_global_template', $old_data );
	die(0);
    
} 
 
 }
 if ( !function_exists ( "sor_template_save_slide" )){
 add_action('wp_ajax_sor_template_save_slide', 'sor_template_save_slide');
add_action('wp_ajax_nopriv_sor_template_save_slide', 'sor_template_save_slide');  
function sor_template_save_slide() {
$old_data =	get_option( 'sor_slide_template');
	if( !is_array($old_data)){
		$old_data=array();
	}
 			 
	$old_data[sanitize_key($_REQUEST['key'])]['name'] =  wp_kses_post($_POST['name']);
 
	if(!empty($_REQUEST['slide'])){
		$old_data[sanitize_key($_REQUEST['key'])]['slide'] =  urlencode(stripslashes(wp_kses_post($_REQUEST['slide'])));
	}
	 
  
	update_option( 'sor_slide_template', $old_data );
	die(0);
    
} 

 }
 if ( !function_exists ( "sor_template_save_layer" )){
 add_action('wp_ajax_sor_template_save_layer', 'sor_template_save_layer');
add_action('wp_ajax_nopriv_sor_template_save_layer', 'sor_template_save_layer');  
function sor_template_save_layer() {
$old_data =	get_option( 'sor_layer_template');
	if( !is_array($old_data)){
		$old_data=array();
	}
 			 
	$old_data[sanitize_key($_REQUEST['key'])]['name'] =  wp_kses_post($_POST['name']);
 
	if(!empty($_REQUEST['layer'])){
		$old_data[sanitize_key($_REQUEST['key'])]['layer'] =  urlencode(stripslashes($_REQUEST['layer']));
	}
	 
  
	update_option( 'sor_layer_template', $old_data );
	die(0);
    
} 
 }

 if ( !function_exists ( "sor_template_options" )){
add_action('wp_ajax_sor_template_options', 'sor_template_options');
add_action('wp_ajax_nopriv_sor_template_options', 'sor_template_options'); 
function sor_template_options() {
	$old_data =	get_option( 'sor_'.$_REQUEST['id'].'_template');
	echo '<div  id="sor_template" class="sor_template sor_template_options sor_template_'.$_REQUEST['id'].'" data-row="'.$_REQUEST['id'].'">';
	echo '<div class="sor_template_middle">';
		//Title
		echo '<div class="sor_template_title"><h3>';
		if($_REQUEST['id']=='global'){
		echo esc_html__('افزودن کامل از کتابخانه','sorsorak');
		} 
		if($_REQUEST['id']=='slide'){
		echo esc_html__('افزودن اسلاید از کتابخانه','sorsorak');
		} 
			if($_REQUEST['id']=='layer'){
		echo esc_html__('افزودن لایه از کتابخانه','sorsorak');
		} 	
 		echo '</h3>';
 
   			echo '<div class="sor_template_cancel">'.esc_html__('انصراف','sorsorak').'</div>';
			echo '<div class="sor_template_add">'.esc_html__('افزودن از کتابخانه','sorsorak').'</div>';
			
 		echo '</div>';	        
		echo '<div class="sor_template_content">';
	
		if (!empty($old_data)) :
			foreach($old_data as $key => $value ):
				echo '<li class="sor_template_item" data-id="'.esc_attr($key).'">';
					echo '<div class="sor_template_name">'.esc_attr($value['name']).'</div>';
					echo '<a class="sor_template_remove"><img src="'.SAOSORAK_DIR.  'admin/assets/image/remove.png">'.esc_html__('پاک کردن','sorsorak').'</a>';
				echo '</li>';
 	
			endforeach;
			endif;		
			    
		echo '</div>';
	echo '</div>';
	echo '</div>'; 	
	 
  	die(0);
}   
 }
if ( !function_exists ( "sor_template_remove" )){

add_action('wp_ajax_sor_template_remove', 'sor_template_remove');
add_action('wp_ajax_nopriv_sor_template_remove', 'sor_template_remove'); 
function sor_template_remove() {
	
	$old_data =	get_option( 'sor_'.sanitize_text_field($_REQUEST['id']).'_template');
	unset($old_data[sanitize_key($_REQUEST['key'])]);
 	update_option( 'sor_'.sanitize_text_field($_REQUEST['id']).'_template', $old_data );
	die(0);
	
}  
}








 

 
add_action('wp_ajax_sor_template_demo', 'sor_template_demo');
add_action('wp_ajax_nopriv_sor_template_demo', 'sor_template_demo'); 
function sor_template_demo() {
	
//	$string = get_content("http://sao-wp.ir/sorsorak/json/import.json");
  	echo '<div  id="sor_template" class="sor_template sor_template_options sor_template_demo " data-row="global">';
	echo '<div class="sor_template_middle">';
		//Title
		echo '<div class="sor_template_title"><h3>';
		echo esc_html__('افزودن اسلایدر های آماده','sorsorak');
 		echo '</h3>';
 
   			echo '<div class="sor_template_cancel">'.esc_html__('انصراف','sorsorak').'</div>';
			echo '<div class="sor_template_add">'.esc_html__('افزودن','sorsorak').'</div>';
			
 		echo '</div>';	        
		echo '<div class="sor_template_content">';
		
		
		 $old_data = sor_import_options();
 		 
		if (!empty($old_data)) :
			foreach($old_data as $key => $value ):
				echo '<li class="sor_template_item" data-id="'.esc_attr($key).'">';
					echo '<img src="'.$value['img'].'">';
					echo '<a class="sor_template_demo_link"  target="_blank" href="'.$value['demo'].'">'.esc_html__('پیش نمایش','sorsorak').'</a>';
				echo '</li>';
 	
			endforeach;
			endif;		
 		echo '</div>';
	echo '</div>';
	echo '</div>'; 	
	 
  	die(0);
}  