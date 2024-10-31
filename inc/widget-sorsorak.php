<?php // Register Posts Box 4 Widget
 if ( !function_exists ( "register_sorsorak_widget" )){
add_action( 'widgets_init', 'register_sorsorak_widget' );
 function register_sorsorak_widget() {
    register_widget( 'sorsorak_widget' );
}
}
if ( ! class_exists( 'sorsorak_widget' ) ) {

class sorsorak_widget extends WP_Widget {
 	function __construct() {
		parent::__construct(
			'sorsorak',
			   esc_html__('سرسرک اسلایدر', 'sorsorak') 
		);
	}

    /**********  The widget For Display *******/
 	public function widget( $args, $instance ) {
		extract( $args );
 		$title = apply_filters( 'widget_title', $instance[ 'title' ] );
 		$beyshop_data =$instance;
	 
		global $smof_data;
 		$beyshop_style_layout = '';
		?>
		<div id="<?php echo esc_attr($widget_id) ?>" class="sor-element-sorsorak ">
		 <?php 
 		    // Define output and open element div.
			if(!empty($instance['sliders'])){
           echo sor_slider_config($instance['sliders']);
			}
 			?>
		</div>
	<?php }

    /********** Update the widget info from the admin panel *******/
 	public function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['title'] = sanitize_text_field( $new_instance['title'] );
  		$instance[ 'sliders' ] = strip_tags( $new_instance[ 'sliders' ] );
 		
    	return $instance;
	}
    
	/********** Display the widget update form *******/
 	public function form( $instance ) { 
 		$instance = wp_parse_args( (array) $instance, $defaults );
	  		$title = !empty( $instance[ 'title' ] ) ? $instance[ 'title' ] : '';

		$sliders = !empty( $instance[ 'sliders' ] ) ? $instance[ 'sliders' ] : '';
	 
 
		$page_args = array(
			'sort_order' => 'asc',
			'sort_column' => 'post_title',
 
			'post_type' => 'sorsorak',
			'post_status' => 'publish'
		); 
		 
		$options_page = array();
		$options_page_obj =get_posts($page_args); 
 		$options_page[''] = __('Default','reza');

		if(!empty($options_page_obj) && is_array($options_page_obj) ){
		foreach ($options_page_obj as $rezapage) {
			$options_page[$rezapage->ID] = $rezapage->post_title;
		}
	}			 	 
	 
 		$slider_array=$options_page; 
		
		
		
 
  		 ?>
		 
        
		<p>
			<label for="<?php echo esc_attr($this->get_field_id( 'title' )); ?>"><?php echo esc_html__('Title' , 'sorsorak' );?></label>
			<input id="<?php echo esc_attr($this->get_field_id( 'title' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'title' )); ?>" value="<?php echo esc_attr($title); ?>" class="widefat" type="text" style="width:100%;" />
		</p>        
        
		<p>
			<label for="<?php echo esc_attr($this->get_field_id( 'sliders' )); ?>"><?php echo esc_html__('اسلایدر' , 'sorsorak' );?></label>
			<select id="<?php echo esc_attr($this->get_field_id( 'sliders' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'sliders')); ?>"  >
				<?php foreach (  $slider_array as $key => $name ) {?>
			 	<option value="<?php echo esc_attr($key) ?>"<?php echo selected( $sliders, $key ) ?>><?php echo esc_html($name); ?></option>
				<?php }?> 
			</select>
		</p> 
 		   
                  
  	<?php
 	}
}
}
 ?>