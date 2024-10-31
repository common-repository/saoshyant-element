(function($){
 "use strict";
		
	$.fn.sor_custom_slider = function() {
 	 var this_is =$(this);
 
 	 	 
 		function sor_slide_responsive(this_element){ 
			var width_warp= this_element.find('.sor-slide-list-warp').width();
   			return " --sor-sc-wt:"+width_warp+";";
		 
  		}
 		function sor_slide_auto(this_element,data_slider){ 
		if(!$('body').hasClass('wp-admin')){
				var width= this_element.find('.sor-slide-list-warp').width();
				var desktop_width= data_slider['desktop_width'];
				var tablet_width= data_slider['tablet_width'];
				var mobile_width= data_slider['mobile_width'];
 			 
				if (   window.matchMedia('(max-width: 1024px) and (min-width: 768px)').matches){
 						this_element.addClass('sor-in-tablet').removeClass('sor-in-mobile sor-in-desktop');
						 
								this_element.addClass('sor-has-scale').removeClass('sor-not-scale');
						 
 
				 }else if (  window.matchMedia('(max-width: 767px) and (min-width: 1px)').matches){
 
						this_element.addClass('sor-in-mobile').removeClass('sor-in-desktop sor-in-tablet');
				 
								this_element.addClass('sor-has-scale').removeClass('sor-not-scale');
					 
 						
				 } else{
						this_element.addClass('sor-in-desktop').removeClass('sor-in-mobile sor-in-tablet');
						if(width < desktop_width ){
								this_element.addClass('sor-has-scale').removeClass('sor-not-scale');
						}else{
							this_element.addClass('sor-not-scale').removeClass('sor-has-scale');
						}
						
				 }
				
		}
				
		}
		
		
		
		
		
		
		
		
		
		
		
		
   $(this).find('.sor-custom-slider').each(function(index, block) {	 
			var this_element = $(this);
 			var data_slider = jQuery.parseJSON( $(this).find('.sor-slide-options').html());
			sor_slide_auto(this_element,data_slider);
			var style='';
			 style+= sor_slide_responsive(this_element);
			this_element.find('.sor-slide-list-warp').attr('style',style);
					 
 			data_slider['onBeforeSlide']= function ($el, scene) {
  				$el.find('.sor-slide-item').each(function(index, block) {
 					this_element.removeClass('sor-not-transition');
 				});
			};
			 

 		 
		 
			data_slider['onBeforeNextSlide']= function ($el, scene) {
 							this_element.removeClass('sor-not-transition');
   
			}; 
			data_slider['onBeforePrevSlide']= function ($el, scene) {
				this_element.removeClass('sor-not-transition');
   			}; 
 			if(this_element.hasClass('sor-slider')){
 			this_element.find('.sor-slide-list').sor_lightSlider(data_slider);
			}
       	  	$(window).on('resize orientationchange', function () {
			   this_element.addClass('sor-not-transition');
			 });
		 
			
 			setTimeout(function(){  
 
			sor_slide_auto(this_element,data_slider);
			var style='';
		 	style+= sor_slide_responsive(this_element);
			this_element.find('.sor-slide-list-warp').attr('style',style);
			 
			$(window).resize(function () { 
			
				sor_slide_auto(this_element,data_slider);
				var style='';
		 		style+= sor_slide_responsive(this_element);

				this_element.find('.sor-slide-list-warp').attr('style',style);
	 
 			});
			},50);
	 
 		
 			
	});
  
};
	 
 })(jQuery);
 
 jQuery(function($) {
	'use strict'; 
 	jQuery(document).ready(function() {
 
		  	if(jQuery().sor_slider){
   			 $('body').sor_slider();
			}
		$('body').sor_custom_slider();
 
 
	 
 	});
 }); 