(function ($, undefined) {
	  'use strict';
	  function isset(variable){
		return  variable  !== "undefined" && variable  !== "0" && variable !== null && variable !== '';
	}
 
/*************************************************************************************************************************************************************************
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
 
 																			Layer Perview
 
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
**************************************************************************************************************************************************************************/		
$.fn.sor_layer_options_perview =  function() { 

 	$(this).sor_layer_postion_size();
	$(this).sor_layer_text_perview(); 
 
 	$(this).sor_layer_button_perview(); 
 	$(this).sor_layer_icon_perview(); 
	$(this).sor_layer_image_perview();
	$(this).sor_layer_box_perview();
  	  
};
/*************************************************************************************************************************************************************************
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
 
 																			Draggable Get Position
 
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
**************************************************************************************************************************************************************************/	
	$.fn.sor_position_right = function() {
         return this.offsetParent().width() - (this.position().left + this.width());
    };
	$.fn.sor_position_left = function() {
         return $(this).position().left;
    };
	
	$.fn.sor_position_center = function() {
         return  (($(this).parent().width() - $(this).width()) / -2) + $(this).sor_position_right();
    };
	
	$.fn.sor_position_top = function() {
		return $(this).position().top;
    };
	
	$.fn.sor_position_bottom = function() {
         return this.offsetParent().height() - (this.position().top + this.height());
    };
	$.fn.sor_position_middle = function() {
         return  (($(this).parent().height() - $(this).height()) / -2) + $(this).sor_position_bottom();
    };
	
	$.fn.sor_draggable_remove_css = function() {
         return $(this).css({ 'left' : '', 'top' : '','bottom' : '','right' : '','width' : '','height' : '','transform':'' });
    };
	
/*************************************************************************************************************************************************************************
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
 
 																			Draggable Get Horizontal
 
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
**************************************************************************************************************************************************************************/			
	$.fn.sor_get_horizontal = function(type) {
   	
			var horizontal='';
	
			if($(this).hasClass('sor-'+type+'-left')){
				horizontal= $(this).sor_position_left();
				
			}else if($(this).hasClass('sor-'+type+'-center')){
				
				horizontal = $(this).sor_position_center();
				
			}else if($(this).hasClass('sor-'+type+'-right')){
 
 				horizontal = $(this).sor_position_right();
				
			}else {
 				if($(this).hasClass('sor-layer-left')){
					horizontal= $(this).sor_position_left();
				}else if($(this).hasClass('sor-layer-center')){
					horizontal = $(this).sor_position_center();
				}else {
					horizontal = $(this).sor_position_right();
				}
			}
			 
			return horizontal;	

	};
/*************************************************************************************************************************************************************************
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
 
 																			Draggable Get Vertical
 
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
**************************************************************************************************************************************************************************/	
	
	$.fn.sor_get_vertical = function(type) {
	
			var vertical='';
		 	
			if($(this).hasClass('sor-'+type+'-bottom')){
				vertical= $(this).sor_position_bottom();
			}else if($(this).hasClass('sor-'+type+'-middle')){
				vertical = $(this).sor_position_middle();
			}else if($(this).hasClass('sor-'+type+'-bottom')){
				vertical = $(this).sor_position_top();	
			}else{
				if($(this).hasClass('sor-layer-bottom')){
					vertical= $(this).sor_position_bottom();
				}else if($(this).hasClass('sor-layer-middle')){
					vertical = $(this).sor_position_middle();
				}else {
					vertical = $(this).sor_position_top();	
				}
			}
			return vertical;	
	};
	 
	 
	 
	 
/*************************************************************************************************************************************************************************
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
 
 																			Draggable Position
 
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
**************************************************************************************************************************************************************************/		
	$.fn.sor_draggable_position =  function() { 
		
 
			var key = $(this).attr('data-key');
	  
			if($('.sor_perview_slide').hasClass('sor_perview_tablet')){
			var horizontal  =$(this).sor_get_horizontal('layer-tablet');
				var vertical =$(this).sor_get_vertical('layer-tablet');	
 				$('.sor_module_layer_item[data-key="'+key+'"] input[name="tablet_position[horizontal]"]').attr('value', horizontal.toFixed(0));	 
				$('.sor_module_layer_item[data-key="'+key+'"] input[name="tablet_position[vertical]"]').attr('value',vertical.toFixed(0));	
 				  
 				$(this).css({
				'--sor-lr-tab-hor':horizontal.toFixed(0)+'px',
				'--sor-lr-tab-ver':vertical.toFixed(0) + 'px',
 			 
				});
			 
			}else if($('.sor_perview_slide').hasClass('sor_perview_mobile')){
				var horizontal  =$(this).sor_get_horizontal('layer-mobile');
				var vertical =$(this).sor_get_vertical('layer-mobile');	
				$('.sor_module_layer_item[data-key="'+key+'"] input[name="mobile_position[horizontal]"]').attr('value', horizontal.toFixed(0));	 
				$('.sor_module_layer_item[data-key="'+key+'"] input[name="mobile_position[vertical]"]').attr('value',vertical.toFixed(0));	
 				  
 				$(this).css({
				'--sor-lr-mob-hor':horizontal.toFixed(0)+'px',
				'--sor-lr-mob-ver':vertical.toFixed(0) + 'px',
 			 
				});
			 
			}else{
				var horizontal  =$(this).sor_get_horizontal('layer');
				var vertical =$(this).sor_get_vertical('layer');	
 				$('.sor_module_layer_item[data-key="'+key+'"] input[name="position[horizontal]"]').attr('value', horizontal.toFixed(0));	 
 					 
				$('.sor_module_layer_item[data-key="'+key+'"] input[name="position[vertical]"]').attr('value',vertical.toFixed(0));	
 				  	
 				$(this).css({
				'--sor-lr-hor':horizontal.toFixed(0)+'px',
				'--sor-lr-ver':vertical.toFixed(0) + 'px', 
 		 
				});
 			 
		 	} 
	  };
 
 /*************************************************************************************************************************************************************************
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
 
 																			Resizable Size Width
 
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
**************************************************************************************************************************************************************************/	
	$.fn.sor_resizable_size_width =  function() { 
  			var width =  parseFloat($(this).width()) ;
 		
			var key = $(this).attr('data-key');
			if($('.sor_perview_slide').hasClass('sor_perview_tablet')){
			 
				$('.sor_module_layer_item[data-key="'+key+'"] input[name="tablet_size[width]"]').attr('value',width.toFixed(0));	 
 				 
 				$(this).css({
   				'--sor-lr-tab-wt':width.toFixed(0)+ 'px',
 				});
			}else if($('.sor_perview_slide').hasClass('sor_perview_mobile')){
 
				$('.sor_module_layer_item[data-key="'+key+'"] input[name="mobile_size[width]"]').attr('value',width.toFixed(0));	 
 				 
 				$(this).css({
   				'--sor-lr-mob-wt':width.toFixed(0)+ 'px',
 				});
			}else{
  				 
				$('.sor_module_layer_item[data-key="'+key+'"] input[name="size[width]"]').attr('value',width.toFixed(0));	 
		 
				$(this).css({
  				'--sor-lr-wt':width.toFixed(0)+ 'px',
 				});
 			 
			}
 	  };
 /*************************************************************************************************************************************************************************
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
 
 																			Resizable Size Height
 
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
**************************************************************************************************************************************************************************/	
	$.fn.sor_resizable_size_height =  function() { 
  			var height =  parseFloat($(this).height()) ;
 		
			var key = $(this).attr('data-key');
			if($('.sor_perview_slide').hasClass('sor_perview_tablet')){
			 
				$('.sor_module_layer_item[data-key="'+key+'"] input[name="tablet_size[height]"]').attr('value',height.toFixed(0));	 
 				 
 				$(this).css({
   				'--sor-lr-tab-ht':height.toFixed(0)+ 'px',
 				});
			}else if($('.sor_perview_slide').hasClass('sor_perview_mobile')){
 
				$('.sor_module_layer_item[data-key="'+key+'"] input[name="mobile_size[height]"]').attr('value',height.toFixed(0));	 
 				 
 				$(this).css({
   				'--sor-lr-mob-ht':height.toFixed(0)+ 'px',
 				});
			}else{
  				 
				$('.sor_module_layer_item[data-key="'+key+'"] input[name="size[height]"]').attr('value',height.toFixed(0));	 
		 
 				$(this).css({
  				'--sor-lr-ht':height.toFixed(0)+ 'px',
 				});
 			 
			}
 	  };	 
	 
/*************************************************************************************************************************************************************************
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
 
 																			Draggable
 
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
**************************************************************************************************************************************************************************/	
 
  	$.fn.sor_draggable =  function() { 
 
		$('.sor_draggable').draggable(
			{
				 start: function() {
				var width=  $(this).width()+'px';
				var height=  $(this).height()+'px';
 			 	$(this).css({'right':'auto','transform':'none','width':width,'height':height});
  			 $(this).parents('.sor_panel').find('.sor_draggable_active').removeClass('sor_draggable_active');
			$(this).addClass('sor_draggable_active');

 
 			},
			stop: function() {
				$(this).sor_draggable_position();
				$(this).sor_draggable_remove_css();

			}
			 
		}); 
		$('.sor_draggable').resizable(
				{
					handles: "n,e,s, w,ne,se,sw,nw",
					start: function() {
						if($(this).hasClass('sor-layer-right')){
							var left = $(this).position().left+'px';
							$(this).css({'left':left,'right':'auto'});
						}
						if($(this).hasClass('sor-layer-bottom')){
							var top = $(this).position().top+'px';
							$(this).css({'top':top,'bottom':'auto'});
						}
						},
					stop: function(event, ui) {

						$(this).sor_draggable_position();
						  if (ui.originalSize.width !== ui.size.width) {
							$(this).sor_resizable_size_width();

						}
						if (ui.originalSize.height !== ui.size.height) {
							$(this).sor_resizable_size_height();
						}
					$(this).sor_draggable_remove_css();


					}
				}
			);
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
	
	 /*************************************************************************************************************************************************************************
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
 
 																			Sortable
 
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
**************************************************************************************************************************************************************************/	
 	$(document).on('mouseenter','.sor_draggable', function () {
		$(this).addClass('sor_draggable_hover');
	});	 
	$(document).on('mouseleave','.sor_draggable', function () {
		$(this).removeClass('sor_draggable_hover');
 	
	});
	
	$(document).on('click  keyup', '.sor_draggable', function() {
  	   
  		 $(this).parents('.sor_panel').find('.sor_draggable_active').removeClass('sor_draggable_active');
 		$(this).addClass('sor_draggable_active');
 	  
	 
  
	});		
   
	
	 
 			
	

  /*************************************************************************************************************************************************************************
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
 
 																		 Layer draggable Active
 
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
**************************************************************************************************************************************************************************/	
		
	
		$(document).on('mousedown ','.sor_draggable',function(e) {
			var key =$(this).attr('data-key');
  		 $(this).parents('.sor_panel').find('.sor_module_side_options_active,.sor_module_slide_options_active').removeClass('sor_module_side_options_active sor_module_slide_options_active');
			$('#sor_module_layer_'+ key).addClass('sor_module_side_options_active');
			$(this).parents('.sor_panel').addClass('sor_panel_options_active');
	  			$('.sor_module_side_options_active').sor_fold_hide();

		});
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
 
});  		


 
})(jQuery);
