(function ($, undefined) {
	  'use strict';
	  function isset(variable){
		return  variable  !== "undefined" && variable  !== "0" && variable !== null && variable !== '';
	} 

 
 
    /*************************************************************************************************************************************************************************
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
 
 																		Global Perview size
 
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
**************************************************************************************************************************************************************************/	
  

  $.fn.sor_perview_size = function() { 
 				var this_element = $('.sor-custom-slider');
				if($('.sor-custom-slider').hasClass('sor-sorsorak')){
 					$('.sor_perview_global').removeClass('sor-active-loading sor-loading');
					
 				var data_slider = jQuery.parseJSON( this_element.find('.sor-slide-options').html());		 
 				var width= this_element.find('.sor-slide-list-warp').width();
				var desktop_width= data_slider['desktop_width'];
				var tablet_width= data_slider['tablet_width'];
				var mobile_width= data_slider['mobile_width'];
 			 
 			 	var content_width = $('.sor_perview_global_content').width();
 				
  				if (   (content_width <= 1024 && content_width >= 768) ){
 					
 							this_element.addClass('sor-in-tablet').removeClass('sor-in-mobile sor-in-desktop');
						if(this_element.hasClass('sor-has-tablet') && this_element.hasClass('sor-full-width')){
							if( this_element.hasClass('sor-has-tablet') && (width < tablet_width)  ){
									this_element.addClass('sor-has-scale').removeClass('sor-not-scale');
							}else{
								this_element.addClass('sor-not-scale').removeClass('sor-has-scale');
							}
						}else{
								this_element.addClass('sor-has-scale').removeClass('sor-not-scale');
						}
 
 	
				 }else if (  content_width <= 767 &&  content_width >= 1 ){
 					
						this_element.addClass('sor-in-mobile').removeClass('sor-in-desktop sor-in-tablet');
						if(this_element.hasClass('sor-has-mobile') && this_element.hasClass('sor-full-width') ){
							if((width < mobile_width)){
									this_element.addClass('sor-has-scale').removeClass('sor-not-scale');
							}else{
								this_element.addClass('sor-has-scale').removeClass('sor-has-scale');
							}
						}else{
								this_element.addClass('sor-has-scale').removeClass('sor-not-scale');
						}
 						
				 } else{
 
						this_element.removeClass('sor-in-mobile sor-in-desktop sor-in-tablet').addClass('sor-in-desktop');
						if(width < desktop_width ){
								this_element.removeClass('sor-not-scale').addClass('sor-has-scale');
						}else{
							this_element.removeClass('sor-has-scale').addClass('sor-not-scale');
						}
						
				 }   
		  	 
	
 
  				}
     
 };
 	
   /*************************************************************************************************************************************************************************
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
 
 																		Perview Global Click
 
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
**************************************************************************************************************************************************************************/	

   $.fn.sor_perview_global_click = function(responsive) { 
	$(document).on('click', ".sor_perview_global .sor_perview_heading_"+responsive+",.sor_perview_global .sor_perview_heading_"+responsive+" label,.sor_perview_global .sor_perview_heading_"+responsive+" option", function(e) {
		$('.sor_perview_global').removeClass('sor_perview_tablet sor_perview_desktop sor_perview_mobile'); 
		$('.sor_perview_global').addClass('sor_perview_'+responsive); 
 		var responsive_width = $('.sor_perview_global #sor_perview_'+responsive+'_width').val();
		
	$('.sor_module_setting').removeClass('sor_global_mobile sor_global_tablet sor_global_desktop'); 
	$('.sor_module_setting').addClass('sor_global_'+responsive); 		
 		$('.sor_perview_global').attr('style','--sor-prw-wt:'+responsive_width+';'); 
 		$('body').sor_reload_global_slider();
    });	
    			 
}; 
 
    /*************************************************************************************************************************************************************************
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
 
 																		Slide Perview size
 
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
**************************************************************************************************************************************************************************/	 
  $.fn.sor_perview_slide_size = function() { 
 			var json = $('.sor-custom-slider');
 			var this_element = $('.sor_perview_slide .sor-slide-warp'); 
 				var data_slider = jQuery.parseJSON( json.find('.sor-slide-options').html());		 
 
  				var width= this_element.find('.sor-slide').width();
				var desktop_width= data_slider['desktop_width'];
				var tablet_width= data_slider['tablet_width'];
				var mobile_width= data_slider['mobile_width'];
 			 	var content_width = $('.sor_perview_slide_content').width();
   				if (   (content_width <= 1024 && content_width >= 768) ){
						if(this_element.hasClass('sor-has-tablet') ){
 						if(    (width < tablet_width)  ){
								this_element.removeClass('sor-not-scale').addClass('sor-has-scale');
						}else{
							this_element.removeClass('sor-has-scale').addClass('sor-not-scale');
						}
						}else{
							this_element.removeClass('sor-not-scale').addClass('sor-has-scale');
						}
 	
				 }else if ( (content_width <= 767 &&  content_width >= 1) ){
 						if(this_element.hasClass('sor-has-mobile') ){
						if(   (width < mobile_width)  ){
								this_element.removeClass('sor-not-scale').addClass('sor-has-scale');
						}else{
							this_element.removeClass('sor-has-scale').addClass('sor-not-scale');
						}
						}else{
							this_element.removeClass('sor-not-scale').addClass('sor-has-scale');
 						}
				 } else{
   						if(width < desktop_width ){
								this_element.removeClass('sor-not-scale').addClass('sor-has-scale');
						}else{
							this_element.removeClass('sor-has-scale').addClass('sor-not-scale');
						}
						
				 } 
 
};
/*************************************************************************************************************************************************************************
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
 
 																		Slide Responsive
 
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
**************************************************************************************************************************************************************************/	
  $.fn.sor_slide_responsive = function(this_element) { 

   			var width_warp= this_element.find('.sor-slide-list-warp').width();
   			return " --sor-sc-wt:"+width_warp+";";

};
   	
   /*************************************************************************************************************************************************************************
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
 
 																		Perview Slide Click
 
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
**************************************************************************************************************************************************************************/	

$.fn.sor_perview_slide_click = function(responsive) { 
 $(document).on('click', ".sor_perview_slide .sor_perview_heading_"+responsive, function() {
    $('.sor_perview_slide').removeClass('sor_perview_mobile sor_perview_tablet  sor_perview_desktop'); 
	$('.sor_perview_slide').addClass('sor_perview_'+responsive+''); 
 	var responsvie_width = $('.sor_perview_slide #sor_perview_'+responsive+'_width').val();
	$('.sor_perview_slide').css({'--sor-prw-wt':responsvie_width}); 
	
    $('.sor_perview_slide .sor-slide-warp').removeClass('sor-in-mobile sor-in-tablet  sor-in-desktop'); 
	$('.sor_perview_slide .sor-slide-warp').addClass('sor-in-'+responsive+''); 
	$('.sor_panel').removeClass('sor_panel_mobile sor_panel_tablet sor_panel_desktop'); 
	$('.sor_panel').addClass('sor_panel_'+responsive); 
	$('body').sor_perview_slide_size();
   		var style = $('body').sor_slide_responsive($('.sor_perview_full_screen'));
		$('body').find('.sor-slide-warp').attr('style',style);	 
		 
   });
};

 /*************************************************************************************************************************************************************************
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
 
 																			Start Ready 
 
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
**************************************************************************************************************************************************************************/		
	
jQuery(document).ready(function() {
			$('body').sor_perview_size();

/*************************************************************************************************************************************************************************
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
 
 																		Full SCREEN
 
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
**************************************************************************************************************************************************************************/	

$(document).on('click','.sor_perview_slide .sor_perview_full_screen_mode',function() {
		$('.sor_panel').removeClass('sor_panel_mobile sor_panel_tablet sor_panel_desktop'); 
 		$(this).parents('.sor_perview_slide').addClass('sor_perview_full_screen');	
		$('.sor_module_side_options_active').removeClass('sor_module_side_options_active');
		$('.sor_panel_options_active').removeClass('sor_panel_options_active');
		$('body').sor_perview_slide_size();
    		var style = $('body').sor_slide_responsive($('.sor_perview_full_screen'));
		$('body').find('.sor-slide-warp').attr('style',style);	 
});
/*************************************************************************************************************************************************************************
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
 
 																		Full SCREEN Close
 
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
**************************************************************************************************************************************************************************/	

$(document).on('click','.sor_perview_slide .sor_perview_full_screen_close',function() {
	$(this).parents('.sor_perview_slide').removeClass('sor_perview_full_screen');
	$( ".sor_perview_slide .sor_perview_heading_desktop" ).trigger( "click" );

});
 
$(document).on('click','.sor_perview_global .sor_perview_full_screen_mode',function() {
		$(this).parents('.sor_perview_global').addClass('sor_perview_full_screen');
		$('body').sor_reload_global_slider();
 });

$(document).on('click','.sor_perview_global .sor_perview_full_screen_close',function() {
 
$(this).parents('.sor_perview_global').removeClass('sor_perview_full_screen');
			$('body').sor_reload_global_slider();

});


/*************************************************************************************************************************************************************************
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
 
 																		Responsive_options
 
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
**************************************************************************************************************************************************************************/	
		$(document).on('click', '.sor_module_setting  .sor_responsive_options_desktop', function(e) {
		$( ".sor_perview_global  .sor_perview_heading_desktop" ).trigger( "click" );
 	});	 
  	 
   
	$(document).on('click', '.sor_module_setting  .sor_responsive_options_tablet', function(e) {
 	 $( ".sor_perview_global  .sor_perview_heading_tablet" ).trigger( "click" );
 	});	 
  	
 	$(document).on('click', '.sor_module_setting  .sor_responsive_options_mobile', function(e) {
  $( ".sor_perview_global  .sor_perview_heading_mobile" ).trigger( "click" );
 	});	
	
	$(document).on('click', '.sor_panel .sor_responsive_options_desktop', function(e) {
		$( ".sor_panel .sor_perview_heading_desktop" ).trigger( "click" );
 	});	 
  	 
   
	$(document).on('click', '.sor_panel .sor_responsive_options_tablet', function(e) {
 	 $( ".sor_panel .sor_perview_heading_tablet" ).trigger( "click" );
 	});	 
  	
 	$(document).on('click', '.sor_panel .sor_responsive_options_mobile', function(e) {
  $( ".sor_panel .sor_perview_heading_mobile" ).trigger( "click" );
 	});		
	
 		
	 
  
$('body').sor_perview_global_click('desktop');
$('body').sor_perview_global_click('tablet');
$('body').sor_perview_global_click('mobile');
 
    
$('body').sor_perview_slide_click('desktop');
$('body').sor_perview_slide_click('tablet');
$('body').sor_perview_slide_click('mobile');   

 /*************************************************************************************************************************************************************************
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
 
 																			Ready END 
 
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
**************************************************************************************************************************************************************************/		
});  
	  
})(jQuery);
