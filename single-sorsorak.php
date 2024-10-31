<?php get_header() ?>
 
<?php 
  global $post;
  
		


	$setting_json = get_post_meta($post->ID, 'sor_setting_json', true);
  	$setting= sor_options_array_row($setting_json);
 
 
 	 
	$slide_json = get_post_meta($post->ID, 'sor_slide', true);  
	$slide= sor_options_array_row($slide_json);

		 
	?>
		<div  class="sor-elementor-item">
   		<?php echo sor_global_config($post->ID, $setting,$slide);?>
	</div> 
 	<?php
  get_footer(); ?>
