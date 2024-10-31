<?php
 
if( !defined('SORSORAK_PATH') ){
	define( 'SORSORAK_PATH', plugin_dir_path(__FILE__) );
}
if( !defined('SAOSORAK_DIR') ){
	define( 'SAOSORAK_DIR', plugin_dir_url(__FILE__) );
}	
  
if( ! function_exists( 'sorsorak_constructor' ) ) {
    function sorsorak_constructor() {

        load_plugin_textdomain( 'sorsorak', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
 
    }
}
add_action( 'sorsorak_init', 'sorsorak_constructor' );

 
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																 Slider Install
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if( ! function_exists( 'sorsorak_install' ) ) {
function sorsorak_install() {

     
            do_action( 'sorsorak_init' );
}
 
add_action( 'plugins_loaded', 'sorsorak_install', 1 );
}







if( ! function_exists( 'sor_layer_options_element' ) ) {
function sor_layer_options_element() { 
	global  $sor_layer_options_element;

	$slider=array();

 	if(has_filter('sor_layer_element_options')) {
		$sor_layer_options_element = apply_filters('sor_layer_element_options', $slider);
	}
 				 
 
}
add_action('init','sor_layer_options_element');
}


global $sor_fonticon_style;


if( ! function_exists( 'sor_icon_fontfamily' ) ) {
function sor_icon_fontfamily($value =false) {
 	 	if(!empty($value)){
	 	global $sor_fonticon_style;
	 	if(strpos($value,'fa-')!==false){
			$sor_fonticon_style['FontAwesome']=true;
		}
	 	if(strpos($value,'flaticonarrow-')!==false){
			$sor_fonticon_style['flaticonarrow']=true;
		}
		if(strpos($value,'flaticonmultimedia-')!==false){
			$sor_fonticon_style['flaticonmultimedia']=true;
		} 
		
		if(strpos($value,'flaticonbusiness-')!==false){
			$sor_fonticon_style['flaticonbusiness']=true;
		} 
			
		if(strpos($value,'flaticonoffice-')!==false){
			$sor_fonticon_style['flaticonoffice']=true;
		} 
		if(strpos($value,'flaticoninterface-')!==false){
			$sor_fonticon_style['flaticoninterface']=true;
		} 
		
		if(strpos($value,'flaticonessentialset-')!==false){
			$sor_fonticon_style['flaticonessentialset']=true;
		} 
		if(strpos($value,'flaticontechsupport-')!==false){
			$sor_fonticon_style['flaticontechsupport']=true;
		} 
		if(strpos($value,'flaticontech-')!==false){
			$sor_fonticon_style['flaticontech']=true;
		} 
		if(strpos($value,'flaticonstrategy-')!==false){
			$sor_fonticon_style['flaticonstrategy']=true;
		} 
		if(strpos($value,'flaticonhipster-')!==false){
			$sor_fonticon_style['flaticonhipster']=true;
		} 
		if(strpos($value,'flaticonfashion-')!==false){
			$sor_fonticon_style['flaticonfashion']=true;
		} 
		if(strpos($value,'flaticonwebdesign-')!==false){
			$sor_fonticon_style['flaticonwebdesign']=true;
		} 
		if(strpos($value,'flaticontravel-')!==false){
			$sor_fonticon_style['flaticontravel']=true;
		} 
		if(strpos($value,'flaticonnetwork-')!==false){
			$sor_fonticon_style['flaticonnetwork']=true;
		} 
 		 
	 	if(strpos($value,'metrizeicon-')!==false){
			$sor_fonticon_style['metrizeicon']=true;
		}
 		if(strpos($value,'typcn-')!==false){
			$sor_fonticon_style['typcn']=true;
		} 
		}
	 
 }
}
if( ! function_exists( 'sor_icon_enqueue' ) ) {
 function sor_icon_enqueue($var=false,$true=false) {
	global $sor_fonticon_style;
	
 	if(!empty($sor_fonticon_style['FontAwesome']) || !empty($true)) wp_enqueue_style('sor_fontawesome',SAOSORAK_DIR. 'assets/css/fonts/fontawesome.css','',$var);  
 	if(!empty($sor_fonticon_style['flaticonarrow'])  || !empty($true)) wp_enqueue_style('sor_flaticonarrow',SAOSORAK_DIR. 'assets/css/fonts/flaticonarrow.css','',$var);  
 	if(!empty($sor_fonticon_style['flaticonmultimedia'])  || !empty($true) ) wp_enqueue_style('sor_flaticonmultimedia',SAOSORAK_DIR. 'assets/css/fonts/flaticonmultimedia.css','',$var);  
 	if(!empty($sor_fonticon_style['flaticonbusiness'])  || !empty($true)) wp_enqueue_style('sor_flaticonbusiness',SAOSORAK_DIR. 'assets/css/fonts/flaticonbusiness.css','',$var);  
 	if(!empty($sor_fonticon_style['flaticonoffice'])  || !empty($true)) wp_enqueue_style('sor_flaticonoffice',SAOSORAK_DIR. 'assets/css/fonts/flaticonoffice.css','',$var);  
 	if(!empty($sor_fonticon_style['flaticoninterface'])  || !empty($true) ) wp_enqueue_style('sor_flaticoninterface',SAOSORAK_DIR. 'assets/css/fonts/flaticoninterface.css','',$var);  
 	if(!empty($sor_fonticon_style['flaticonessentialset']) || !empty($true)) wp_enqueue_style('sor_flaticonessentialset',SAOSIDER_DIR. 'assets/css/fonts/flaticonessentialset.css','',$var);  
 	if(!empty($sor_fonticon_style['flaticontechsupport']) || !empty($true)) wp_enqueue_style('sor_flaticontechsupport',SAOSORAK_DIR. 'assets/css/fonts/flaticontechsupport.css','',$var);  
 	if(!empty($sor_fonticon_style['flaticontech'])  || !empty($true)) wp_enqueue_style('sor_flaticontech',SAOSORAK_DIR. 'assets/css/fonts/flaticontech.css','',$var);  
 	if(!empty($sor_fonticon_style['flaticonstrategy'])  || !empty($true)) wp_enqueue_style('sor_flaticonstrategy',SAOSORAK_DIR. 'assets/css/fonts/flaticonstrategy.css','',$var);  
 	if(!empty($sor_fonticon_style['flaticonhipster'])  || !empty($true) ) wp_enqueue_style('sor_flaticonhipster',SAOSORAK_DIR. 'assets/css/fonts/flaticonhipster.css','',$var);
  	if(!empty($sor_fonticon_style['flaticonfashion']) || !empty($true) ) wp_enqueue_style('sor_flaticonfashion',SAOSORAK_DIR. 'assets/css/fonts/flaticonfashion.css','',$var);  
 	if(!empty($sor_fonticon_style['flaticonwebdesign']) || !empty($true) ) wp_enqueue_style('sor_flaticonwebdesign',SAOSORAK_DIR. 'assets/css/fonts/flaticonwebdesign.css','',$var);  
 	if(!empty($sor_fonticon_style['flaticontravel']) || !empty($true) ) wp_enqueue_style('sor_flaticontravel',SAOSORAK_DIR. 'assets/css/fonts/flaticontravel.css','',$var);  
 	if(!empty($sor_fonticon_style['flaticonnetwork']) || !empty($true)) wp_enqueue_style('sor_flaticonnetwork',SAOSORAK_DIR. 'assets/css/fonts/flaticonnetwork.css','',$var);  
 	if(!empty($sor_fonticon_style['metrizeicon']) || !empty($true)) wp_enqueue_style('sor_metrizeicon',SAOSORAK_DIR. 'assets/css/fonts/metrizeicon.css','',$var);  
 	if(!empty($sor_fonticon_style['typcn']) || !empty($true)) wp_enqueue_style('sor_typcn',SAOSORAK_DIR. 'assets/css/fonts/typcn.css','',$var);   
}
}


 global $pagenow; 
 if( ! function_exists( 'sor_slide_has_type' ) ) {
 function sor_slide_has_type() {
  global $post, $typenow, $current_screen;
  if ( $post && $post->post_type ) {
    return $post->post_type;
  }
  elseif ( $typenow ) {
    return $typenow;
  }
  elseif ( $current_screen && $current_screen->post_type ) {
    return $current_screen->post_type;
  }
  elseif ( isset( $_REQUEST['post_type'] ) ) {
    return sanitize_key( $_REQUEST['post_type'] );
  }
  elseif ( isset( $_REQUEST['post'] ) ) {
    return get_post_type( $_REQUEST['post'] );
  }
  return null;
}
}
	
 
 if( ! function_exists( 'sor_rtl_has' ) ) {
function sor_rtl_has($element =false) {
 	 
 	if(is_rtl() && strpos($element,'left')!==false){
		return str_replace('left','right', $element);
		
	}elseif(is_rtl() && strpos($element,'right')!==false){
		
		return str_replace('right','left',$element);
		
	} else{
		return $element;
		
	}
}
 }
 
 if ( is_admin()  ) {
 
include_once SORSORAK_PATH . 'admin/index.php';

}
 
include_once SORSORAK_PATH . 'inc/element-css.php';
include_once SORSORAK_PATH . 'inc/post-functions.php';
include_once SORSORAK_PATH . 'inc/var-element-css.php';

 
  
 include_once SORSORAK_PATH . 'inc/global-config.php';
 include_once SORSORAK_PATH . 'inc/global-slider-config.php';
 include_once SORSORAK_PATH . 'inc/global-glider-config.php';
 include_once SORSORAK_PATH . 'inc/global-single-config.php';
 
 include_once SORSORAK_PATH . 'inc/slide-config.php';
 include_once SORSORAK_PATH . 'inc/glide-config.php';
 include_once SORSORAK_PATH . 'inc/single-config.php';
 
 include_once SORSORAK_PATH . 'inc/layer-config.php'; 
 include_once SORSORAK_PATH . 'admin/includes/code.php';


include_once SORSORAK_PATH . 'layer/text.php';
include_once SORSORAK_PATH . 'layer/icon.php';
include_once SORSORAK_PATH . 'layer/button.php';
include_once SORSORAK_PATH . 'layer/image.php';
include_once SORSORAK_PATH . 'layer/box.php';
 /*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																  Slider Custom Template
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	  
 
 
 if( ! function_exists( 'sor_enqueue' ) ) {
add_action('wp_enqueue_scripts', 'sor_enqueue');
function sor_enqueue($hook) {
	$var = '1.0';
  
        	wp_enqueue_style( 'sor_glider',SAOSORAK_DIR .'assets/css/glider.css',array(),$var); 
        	wp_enqueue_style( 'sor_slider',SAOSORAK_DIR .'assets/css/slider.css',array(),$var); 
    	wp_enqueue_style( 'sor_layer',SAOSORAK_DIR .'assets/css/layer.css',array(),$var); 
 
 sor_icon_enqueue('1.0');

 
	wp_enqueue_script( 'sor_slider', SAOSORAK_DIR .'assets/js/slider.js',array('jquery'),$var ); 
	wp_enqueue_script( 'sor_script', SAOSORAK_DIR .'assets/js/script.js' ,array('jquery'),$var); 
	 
 	
}
 }
 
 
 if( ! function_exists( 'sor_slider_config' ) ) {
function sor_slider_config($id) {
	  
	if(!empty($id)){
	$setting_json = get_post_meta($id, 'sor_setting_json', true);
  	$setting= sor_options_array_row($setting_json);
  	$slide_json = get_post_meta($id, 'sor_slide', true);  
	$slide= sor_options_array_row($slide_json);
	ob_start();
  	sor_global_config($id, $setting,$slide);
	return ob_get_clean();

	}else{
		return '';
	}

}
 }


/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																 slider_elementor_widget_categories
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	  
  if ( !function_exists ( "sorsorak_shortcode" )){
function sorsorak_shortcode($id) {
    extract(shortcode_atts(array(
        'id' => 'id'
    ), $id));
    
    // check what type user entered
  return sor_slider_config($id);
}
add_shortcode('sorsorak', 'sorsorak_shortcode');
  }
  
  if ( !function_exists ( "sorsorak_single_template" )){
  add_filter( 'single_template', 'sorsorak_single_template' );
function sorsorak_single_template( $template ){
    global $post;
 
     
 
    if ( 'sorsorak' === $post->post_type && locate_template( array( 'single-sorsorak.php' ) ) !== $template ) {
        /*
         * This is a 'movie' post
         * AND a 'single movie template' is not found on
         * theme or child theme directories, so load it
         * from our plugin directory.
         */
        return plugin_dir_path( __FILE__ ) . 'inc/single-sorsorak.php';
    }

 
 
    return $template;
}
 }
  if ( !function_exists ( "sorsorak_load_cpt_template" )){
  function sorsorak_load_cpt_template($template) {
    global $post;

    // Is this a "my-custom-post-type" post?
    if ($post->post_type == "sorsorak"){

        //Your plugin path 
        $plugin_path = plugin_dir_path( __FILE__ );

        // The name of custom post type single template
        $template_name = 'single-sorsorak.php';

        // A specific single template for my custom post type exists in theme folder? Or it also doesn't exist in my plugin?
        if($template === get_stylesheet_directory() . '/' . $template_name
            || !file_exists($plugin_path . $template_name)) {

            //Then return "single.php" or "single-my-custom-post-type.php" from theme directory.
            return $template;
        }

        // If not, return my plugin custom post type template.
        return $plugin_path . $template_name;
    }

    //This is not my custom post type, do nothing with $template
    return $template;
}
add_filter('single_template', 'sorsorak_load_cpt_template');
  }
?>