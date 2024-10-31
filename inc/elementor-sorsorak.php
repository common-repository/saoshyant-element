<?php
 /*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																 Elementor sorshyant_slider
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	  






if ( ! class_exists( 'sorsorak_slider' ) ) {
class sorsorak_slider extends \Elementor\Widget_Base {

 
	public function get_name() {
		return 'sorsorak_slider';
	}

 
	public function get_title() {
		return __( 'سرسرک اسلایدر', 'sorsorak' );
	}

 
	public function get_icon() {
		return 'eicon-slides';
	}
 


protected function  register_controls() {
 
  	 $this->register_controls_general(); 

	}
    
 
 	protected function register_controls_general(){
 	
 		 

		$this->start_controls_section(
			'general',
			[
				'label'			=> __( 'عمومی', 'sorsorak' ),
			]
		); 
		
	$page_args = array(
			'sort_order' => 'asc',
			'sort_column' => 'post_title',
			'numberposts'      => -1,
			'post_type' => 'sorsorak',
			'post_status' => 'publish'
		); 
		 
		$options_page = array();
		$options_page_obj =get_posts($page_args); 
 
		if(!empty($options_page_obj) && is_array($options_page_obj) ){
		foreach ($options_page_obj as $rezapage) {
			$options_page[$rezapage->ID] = $rezapage->post_title;
		}
	}			 
		$this->add_control(
			'sliders',
			[
				'label'			=> __('اسلایدر را انتخاب کنید','sorsorak'),
				'type'			=> \Elementor\Controls_Manager::SELECT,
				'multiple'		=> true,
				'options'		=> $options_page,	
			]
		);
			   
				
		 $this->end_controls_section();

 
 	}
	
	 
	 
 	 
	protected function render() {
 		$option = $this->get_settings_for_display();
		 
		 
 

		 if(!empty($option['sliders'])){
		 ?>
		<div  class="sor-elementor-<?php echo $this->get_id();?> sor-elementor-item">
        <?php echo sor_slider_config($option['sliders']);?>
 	<?php
	   	 
	 if ( \Elementor\Plugin::$instance->editor->is_edit_mode() ) {
		 if(!empty($option['sliders'])){
		 	$setting_json = get_post_meta($option['sliders'], 'sor_setting_json', true);
 		 	$setting= sor_options_array_row($setting_json);
if(empty($setting['disable_typography'])){
	 echo '<link rel="stylesheet" id="sor_fontfamily-css"  href="'.SAOSORAK_DIR.'assets/css/fontfamily.css" media="all" />';

 	}}
		sor_icon_fonts(); 
		 ?>
			 <div class="sao-elementor-script">     
					<script type="text/javascript">
					  (function($) {
						'use strict';
							jQuery(document).ready(function() {
  	 	 					setTimeout(function(){  
      								$('.sor-elementor-<?php echo $this->get_id();?>').sor_custom_slider();
 
 								 
							}, 1000);
									 
   							}); 
							 
 						})(jQuery);
 	               </script>
		
			</div>
		<?php		
	   }	
	   ?> 
         </div> 
 
	
	<?php
    }
	}
	
}
}
 
?>
