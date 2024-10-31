<?php
 include_once SORSORAK_PATH . 'admin/setting-options.php';
include_once SORSORAK_PATH . 'admin/slide-options.php';
include_once SORSORAK_PATH . 'admin/layer-options.php';

include_once SORSORAK_PATH . 'admin/includes/metabox.php';

include_once SORSORAK_PATH . 'admin/includes/options-functions.php';
include_once SORSORAK_PATH . 'admin/includes/setting.php';
include_once SORSORAK_PATH . 'admin/includes/slide.php';
include_once SORSORAK_PATH . 'admin/includes/layer.php';
include_once SORSORAK_PATH . 'admin/includes/template.php';
include_once SORSORAK_PATH . 'admin/includes/perview-global.php';
include_once SORSORAK_PATH . 'admin/includes/perview-slide.php';
include_once SORSORAK_PATH . 'admin/includes/perview-animte.php';
include_once SORSORAK_PATH . 'admin/includes/perview-glider-css.php';
include_once SORSORAK_PATH . 'admin/includes/perview-glider-tablet-css.php';
include_once SORSORAK_PATH . 'admin/includes/perview-glider-mobile-css.php';
include_once SORSORAK_PATH . 'admin/custom-css.php';
include_once SORSORAK_PATH . 'admin/slider-array.php';

include_once SORSORAK_PATH . 'import/import.php';
 include_once SORSORAK_PATH . 'admin/fonts/fa-icon.php';
include_once SORSORAK_PATH . 'admin/fonts/flaticon.php';
include_once SORSORAK_PATH . 'admin/fonts/flaticon_thin.php';
include_once SORSORAK_PATH . 'admin/fonts/metrizeicon.php';
include_once SORSORAK_PATH . 'admin/fonts/typcn.php';

 
 
if( ! function_exists( 'sor_admin_shortcode' ) ) {
add_action('admin_enqueue_scripts', 'sor_admin_shortcode');
function sor_admin_shortcode($hook) {
	$var =rand(0,999999999999);
	wp_enqueue_style( 'sor_glider',SAOSORAK_DIR .'assets/css/glider.css',array(),$var); 

  	wp_enqueue_style( 'sor_slider',SAOSORAK_DIR .'assets/css/slider.css',array(),$var); 
	wp_enqueue_style( 'sor_layer',SAOSORAK_DIR .'assets/css/layer.css',array(),$var); 
 
 	wp_enqueue_script( 'sor_slider', SAOSORAK_DIR .'assets/js/slider.js',array('jquery'),$var ); 
  	wp_enqueue_script( 'sor_script', SAOSORAK_DIR .'assets/js/script.js' ,array('jquery'),$var); 
	 

 
}
}


 if ( is_admin() && in_array( $pagenow, array( 'post-new.php', 'post.php','admin-ajax.php' ) )&& sor_slide_has_type() ==  'sorsorak') {
if( ! function_exists( 'sor_admin_enqueue' ) ) {
add_action('admin_enqueue_scripts', 'sor_admin_enqueue');
function sor_admin_enqueue($hook) {
	$var =rand(0,999999999999);
	
	wp_enqueue_style('sao_fontawesome',SAOSORAK_DIR. 'assets/css/fonts/fontawesome.css','',$var);
   	wp_enqueue_style('sor_admin_style',SAOSORAK_DIR.  'admin/assets/css/admin-style.css',array(),$var);
   	wp_enqueue_style('sor_admin_options',SAOSORAK_DIR.  'admin/assets/css/admin-options.css',array(),$var);
 	wp_enqueue_style('sor_admin_layer',SAOSORAK_DIR.  'admin/assets/css/admin-layer.css',array(),$var);
   	wp_enqueue_style('sor_admin_setting',SAOSORAK_DIR.  'admin/assets/css/admin-setting.css',array(),$var);
   	wp_enqueue_style('sor_admin_perview',SAOSORAK_DIR.  'admin/assets/css/admin-perview.css',array(),$var);
   	wp_enqueue_style('sor_admin_iconpicker',SAOSORAK_DIR.  'admin/assets/css/admin-iconpicker.css',array(),$var);
	wp_enqueue_style( 'sor_admin_template',SAOSORAK_DIR .'admin/assets/css/admin-template.css',array(),$var); 
	wp_enqueue_style( 'sor_admin_coloris',SAOSORAK_DIR .'admin/assets/css/admin-coloris.css',array(),$var); 
 
 
 	wp_enqueue_style( 'sor_fontfamily',SAOSORAK_DIR .'assets/css/fontfamily.css',array(),$var); 
 
  
	
  	wp_enqueue_script("jquery-ui-draggable");
   	wp_enqueue_script('jquery-ui-slider');
	
	
	
	$array = array( 
		'ajaxurl' => admin_url( 'admin-ajax.php'),
		'is_rtl'=> is_rtl()?'true':false,
		'font_url' => SAOSORAK_DIR .'assets/fonts',
	);
	
	 
	 
	 
	 $script =array(
		'serializejson',
		'coloris',
		'var-custom-css',
		'fontfamily',
		'custom-css',
 		'options',
  		'layer',
 		'slide',
 		'admin', 
 		'template',
 		'perview',
 		'responsive'
		
		);
	foreach($script as $id){
		wp_enqueue_script( 'sor_'.$id, SAOSORAK_DIR .'admin/assets/js/'.$id.'.js' ,array('jquery', 'jquery-ui-sortable','jquery-ui-draggable','jquery-ui-resizable'),$var); 
		wp_localize_script( 'sor_'.$id, 'sorsorak',$array);	
		wp_enqueue_script( 'sor_'.$id); 
 	} 
	    wp_enqueue_media();
 	
}

 
}
}
if( ! function_exists( 'sor_shortcode_column' ) ) {
add_filter('manage_sorsorak_posts_columns', 'sor_shortcode_column', 5);
function sor_shortcode_column($columns){
   $columns['shortcode'] = __('کد کوتاه','reza');
  return $columns;
} 
}
if( ! function_exists( 'sor_shortcode_display_column' ) ) {
add_action('manage_sorsorak_posts_custom_column', 'sor_shortcode_display_column', 5, 2);
function sor_shortcode_display_column($column_name, $post_id){
  switch($column_name){
    case 'shortcode':
 
       if (!empty($post_id)) {
         echo '<textarea style="height: 30px;width: 200px;resize: none;border-color: rgb(200, 198, 198) !important;color: #666 !important;text-align: right;direction: ltr;"  id="sor_shortcode" name="sor_shortcode" readonly >[sorsorak id="'.$post_id.'"]</textarea>';
      }
      break;
  }
}
}

 
 ?>