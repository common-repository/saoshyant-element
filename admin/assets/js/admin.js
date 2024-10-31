jQuery(function($) {
	'use strict';
	function isset(variable){
		return  variable  !== "undefined" && variable  !== "0" && variable !== null && variable !== '';
	}
	
	function empty(variable){
		if(variable  === "undefined" && variable === null && variable === ''){
			return '';
		}else{
			return variable;
		}
	}
 
	 /*************************************************************************************************************************************************************************
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
 
 																			Fold Hide
 
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
**************************************************************************************************************************************************************************/
 $.fn.sor_remove_add_error_loading = function() { 	
			var output ='';
 			output ='<div class="sor-errored">خطا</div>';
	 	 
		 $('.sor-mouse-wait').append(output);
		  setTimeout(function(){ $('.sor-mouse-wait').remove() }, 2500);
 	};
 
	
/*************************************************************************************************************************************************************************
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
 
 																			Hover 
 
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
**************************************************************************************************************************************************************************/	
 $.fn.sor_item_hover = function() { 	

$('.sor-slide-item .sor-slide-inner').each( function(i) {
 var count = i + 1;
 	$(this).append('<div class="sor_module_slide_top " data-count="'+count+'"><a class="sor_module_slide_options"></a><a class="sor_module_slide_duplicate"></a><a class="sor_module_slide_template_save sor_module_template_save" data-id="slide"></a><a class="sor_module_slide_remove"></a></div>');
});

 
 };
 
 
/*************************************************************************************************************************************************************************
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
 
 																			Global Slider
 
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
**************************************************************************************************************************************************************************/	
 
	$.fn.sor_setting_json =  function() { 
		var data_option = $('#post').serializeJSON();
   	 	$('#sor_setting_json').val( '['+JSON.stringify(data_option['sor_setting'])+']');
  	};
  

  	  $.fn.sor_reload_global_slider = function() {
			var data_key = Math.floor(Math.random() * 9999999999);
			var height = $(this).height();
			 $(this).height(height);
 	  $('.sor_perview_global').addClass('sor-active-loading').removeClass('sor-perview-show');
 	  $('.sor_perview_global_content').attr('data-key',data_key).addClass('sor-loading');
 
		 setTimeout(function(){
  		var data_setting_json = $('#sor_setting_json').val();
 		var data_slide_json = $('#sor_slide').val();
   		 
  		  $.ajax({
			type: 'POST',
  			url: sorsorak.ajaxurl,
			data : {
				action : 'sor_perview_global',
				sor_setting_json : data_setting_json,
				sor_slide : data_slide_json,
  			},
			success:function(data) {
 				if(data.length){
				$('.sor_perview_global_content[data-key="'+data_key+'"]').children().remove();
				 $('.sor_perview_global_content[data-key="'+data_key+'"]').removeClass('sor-loading').append(data);
  					
					setTimeout(function(){  
						$('body').sor_custom_slider();
						$('body').sor_perview_size();
						$('body').sor_item_hover();
						 $('.sor_perview_global_content[data-key="'+data_key+'"]').height('auto');
 					  }, 50); 
					} else{
					sor_remove_add_error_loading();
  				}
   			} 
		}); 
 		  }, 500);
 
  };	
	
	jQuery(document).ready(function() {
		 
		 
		 
		 
		 
		 
		 
		 
 
/*************************************************************************************************************************************************************************
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
 
 																			Iseet
 
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
**************************************************************************************************************************************************************************/	
 
/*************************************************************************************************************************************************************************
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
 
 																			Slug
 
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
**************************************************************************************************************************************************************************/	
	$(document).on("click",'#edit-slug-buttons .save',function() {
						 setTimeout(function(){  
  				var slug = $('#editable-post-name').text();
  				$('#sor_shortcode').text('[sorsorak id="'+slug+'"][/sorsorak]');
 			},2000);
	});
	
/*************************************************************************************************************************************************************************
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
 
 																			Scroll Center
 
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
**************************************************************************************************************************************************************************/	
	function scrollMeTo($Parent, $Child) {
		 let parentHalf = $Parent.width() / 2; // half of parent width
		let childHalf = $Child.width() / 2; //half of child width
		let childPos = $Child.position().left; // X pos of child (relative to screen)
		//We increase X with the center of the child (childHalf) - scrolling here we see the right half of the child;
		//We decrease X with the parentHalf to obtain perfect center;
		let scroll = childPos + childHalf - parentHalf; //how much we need to scroll to the element
		//We now add the needed scroll to the current scroll.
		let nextScroll = $Parent.scrollLeft() + scroll;
		$Parent.scrollLeft(nextScroll);
		 
	}
	if($('.sor_perview_global_scroll').hasClass('sor_perview_global_scroll')){
	scrollMeTo($('.sor_perview_global_scroll'),$('.sor_perview_global_content '));
	}

 	
 
	  
/*************************************************************************************************************************************************************************
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
 
 																		Json
 
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
**************************************************************************************************************************************************************************/	
 	$(".sor_module_setting").on('change keyup mousedown',function() { 
		$('body').sor_setting_json();
 	});
  
 
 
	
	
	
	
	/*************************************************************************************************************************************************************************
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
 
 																			 Slide Options
  
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
**************************************************************************************************************************************************************************/	
	 
	$(document).on('click', ".sor_animte_play", function(e) {
		
 		
  	
     $('.sor_perview_slide').addClass('sor_perview_animte_active');
	
   		var duplicate = $(".sor-perview-slide").clone();
		$(".sor_perview_slide_content .sor-slide-list").append(duplicate);
		$(".sor_perview_slide_content div.sor-slide:last-child").addClass('sor-slide-item active').removeClass('sor-perview-slide');
 
			$('.sor_module_layer_item').each( function(index, element) {
   							$(this).sor_layer_effectss();
			});
 
 						  
		setTimeout(function(){
			$(".sor_perview_slide_content div.sor-slide:last-child").addClass('sor-animte-active');
			}, 100);
			


  	});	
	
	$(document).on('click', ".sor_perview_animte_active .sor_animte_stop", function(e) {
			 
	   $('.sor_perview_slide ').removeClass('sor_perview_animte_active');
		$('.sor_perview_slide_content .sor-slide-item').remove();
	
	   
	  });	
  
  
/*************************************************************************************************************************************************************************
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
 
 																		Perview Content All ELEMENT
 
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
**************************************************************************************************************************************************************************/	


 $(document).on("click", ".sor_perview_global .sor_module_slide_top .sor_module_slide_options", function(){
            e.preventDefault();
	var data= $(this).parent().attr('data-count');
	$('.sor_module_slide_item[data-count="'+data+'"] .sor_module_slide_options').trigger("click");
});
 $(document).on("click", ".sor_perview_global .sor_module_slide_top .sor_module_slide_duplicate", function(){
            e.preventDefault();
	var data= $(this).parent().attr('data-count');
	$('.sor_module_slide_item[data-count="'+data+'"] .sor_module_slide_duplicate').trigger("click");
});
 $(document).on("click", ".sor_perview_global .sor_module_slide_top .sor_module_slide_template_save", function(){
            e.preventDefault();
	var data= $(this).parent().attr('data-count');
	$('.sor_module_slide_item[data-count="'+data+'"] .sor_module_slide_template_save').trigger("click");
});
 $(document).on("click", ".sor_perview_global .sor_module_slide_top .sor_module_slide_remove", function(){
            e.preventDefault();
	var data= $(this).parent().attr('data-count');
	$('.sor_module_slide_item[data-count="'+data+'"] .sor_module_slide_remove').trigger("click");
});


	 

$(document).on('change keyup mousedown input','.sor_module_side_options_active',function() {
 	$(this).sor_layer_options_perview();

});
$(document).on('change keyup mousedown input','#sor_module_slide_options',function() {
	$('body').sor_perview_slide();

});

        
	
$(document).on('change keyup mousedown mousemove','#clr-picker',function() {
	$('.sor_module_side_options_active').sor_layer_options_perview();
	$('#sor_module_slide_options').sor_perview_slide();

});

$(document).on('click','.sor_perview_heading_change,.sor_module_setting input',function() {
 				 $('body').sor_reload_global_slider();
});
 
 				$('body').sor_setting_json();
 				 $('body').sor_reload_global_slider();
 	});
	 
});
 