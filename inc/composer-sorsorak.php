<?php
/*
Element Description: VC Sorsorak Slider
*/

if( ! function_exists( 'sor_vc_build' ) ) {
  function sor_vc_build() {
    return function_exists( 'vc_is_inline' ) && vc_is_inline() ? true : false;
}
}
 if (  class_exists( 'WPBakeryShortCode' ) ) {

 if ( ! class_exists( 'vc_sorsorak' ) ) {
class vc_sorsorak extends WPBakeryShortCode {
     
    // Element Init
    function __construct() {
        add_action( 'init', array( $this, 'vc_sorsorak_mapping' ) );
        add_shortcode( 'vc_sorsorak', array( $this, 'vc_sorsorak_html' ) );
    }
     
    // Element Mapping
    public function vc_sorsorak_mapping() {
         
        // Stop all if VC is not enabled
        if ( !defined( 'WPB_VC_VERSION' ) ) {
            return;
        }
$page_args = array(
			'sort_order' => 'asc',
			'sort_column' => 'post_title',
 
			'post_type' => 'sorsorak',
			'post_status' => 'publish'
		); 
		 
		$options_page = array();
		$options_page_obj =get_posts($page_args); 
 
		if(!empty($options_page_obj) && is_array($options_page_obj) ){
		foreach ($options_page_obj as $rezapage) {
			$options_page[$rezapage->post_title] = $rezapage->ID;
		}
	}			
        // Map the block with vc_map()
        vc_map( 
            array(
                'name' => __('سرسرک اسلایدر', 'sorsorak'),
                'base' => 'vc_sorsorak',
                'description' => __('نمایش اسلایدر ها مربوط افزونه سرسرک اسلایدر', 'text-domain'), 
                'category' => __('سرسرک اسلایدر', 'sorsorak'),   
                'icon'        => SAOSORAK_DIR .'admin/assets/image/icon.png',
                'params' => array(   
                         
                    array(
                        'type'       => 'dropdown',
                        'heading'    => esc_html__( 'انتخاب اسلایدر', 'sorsorak' ),
                        'param_name' => 'sliders',
						'admin_label' => true,
                         'value'      => $options_page,
                    ),
		array(
 				'type' => 'css_editor',
				'heading' => esc_html__( 'جعبه استایل', 'sorsorak' ),
				'param_name' => 'css',
				'group' => esc_html__( 'تنظیمات طراحی', 'sorsorak' ),
		),                      
                        
                ),
            )
        );                                
        
    }
     
     
    // Element HTML
    public function vc_sorsorak_html( $atts,$content=false) {

		extract( shortcode_atts( array(
			'sliders'				=>		'',
 			'css'				=>		'',
		), $atts ) );
	 		$content = wpb_js_remove_wpautop($content);
		
		$key=rand(0,999999999999);
		// var_dump($settings);
 		$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' ), $this->settings['base'], $atts );
	 	
  		  $html = '<div class="sor-elementor-item  sor-elementor-'.$key.' '.esc_attr( trim( $css_class ) ).'" >';
			$html.=sor_slider_config($sliders);
			if(sor_vc_build()==true){
						ob_start();
  
			?>
               <div class="sor-elementor-script">     
                        <script type="text/javascript">
                          (function($) {
                            'use strict';
                                jQuery(document).ready(function() {
                                setTimeout(function(){  
                                        $('.sor-elementor-<?php echo  $key;?>').sor_custom_slider();
     
                                     
                                }, 1000);
                                         
                                }); 
                                 
                            })(jQuery);
                       </script>
            
                </div>
                <?php
			}
		    $html.=ob_get_clean();
		  $html.='</div>';         
           
         
        return $html;
 		 

 			
          
    }
     
} // End Element Class
 
 
// Element Class Init
new vc_sorsorak(); 
 }}
?>