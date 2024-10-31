(function ($, undefined) {
	  'use strict';
function isset(variable){
		return  variable  !== "undefined" && variable !== null && variable !== '';
}

 


 $.fn.sor_check_nubmer = function() { 
   	 
  
	   var val= $(this).val();
 	   var val_max= parseFloat($(this).attr('max'));
	   var val_min= parseFloat($(this).attr('min'));
 
	       
	  if( isset(val) ) {
 		   if($.isNumeric(val)  ) {
			   var num_val = parseFloat(val);
			   if( val_max >= num_val && num_val >= val_min ){
 			  $(this).removeClass('sor_bad');
			   }else{
				 $(this).addClass('sor_bad');
			   }
		  }else{
			 $(this).addClass('sor_bad');
			}
	  }else{
		  
			$(this).removeClass('sor_bad');
	  }
		 
 		
	   /*
		if(!$.isNumeric(val) && val <= val_max  && val >= val_min ) { 
		  $(this).addClass('sor_bad');
	  }else{
		 $(this).removeClass('sor_bad');
		}*/
 };
 
  
		
	   /*
		if(!$.isNumeric(val) && val <= val_max  && val >= val_min ) { 
		  $(this).addClass('sor_bad');
	  }else{
		 $(this).removeClass('sor_bad');
		}*/
  
	 
	  	
  function left_right(value) {
	if(value==='left'){
		return 'right';
	}else if(value==='right'){
		return 'left';
	}else{
			return value;
	 
	}
	
 }

 $.fn.sor_perview_slide  = function(background_image) { 
		var slide_background_color= $(this).sor_background_gradient('sl-bg-cr','slide_background_color');
		var slide_background_image= $(this).sor_background_image('sl','slide_background_image',background_image);
		var background_image_position= $(this).sor_background_position('sl-bg-pos','slide_background_image_position');
		var tablet_background_image_position= $(this).sor_background_position('sl-tab-bg-pos','slide_tablet_background_image_position');
		var mobile_background_image_position= $(this).sor_background_position('sl-mob-bg-pos','slide_mobile_background_image_position');
    		$('.sor_perview_slide .sor-slide').attr('style',slide_background_color+slide_background_image+background_image_position+tablet_background_image_position+mobile_background_image_position); 
 };
	   
 
  
	 
/*************************************************************************************************************************************************************************
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
 
 																		Perview Postion and Size
 
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
**************************************************************************************************************************************************************************/	 
 $.fn.sor_layer_postion_size = function() { 
		 var key =$(this).attr('data-key');
   		  $(this).sor_horizontal_align(key,'layer','layer_align_horizontal','left');
   		  $(this).sor_vertical_align(key,'layer','layer_align_vertical','top');
		  
   		  $(this).sor_horizontal_align(key,'layer-tablet','layer_tablet_align_horizontal');
   		  $(this).sor_vertical_align(key,'layer-tablet','layer_tablet_align_vertical');
		
		$(this).sor_horizontal_align(key,'layer-mobile','layer_mobile_align_horizontal');
   		  $(this).sor_vertical_align(key,'layer-mobile','layer_mobile_align_vertical');
		
		
		var  horizontal = $(this).sor_size('lr-hor','layer_position_horizontal');
		 var  vertical = $(this).sor_size('lr-ver','layer_position_vertical'); 
		 
 		 var  width = $(this).sor_size('lr-wt','layer_size_width');
 		 var  height = $(this).sor_size('lr-ht','layer_size_height');
		 
		$('#sor_perview_layer_'+key).css(horizontal).css(vertical).css(width).css(height);		 
	
		 var tablet_display =  $(this).find('.sor_live_layer_tablet_display').find('input:checked').val();
 		if(tablet_display==='hide'){
			$('#sor_perview_layer_'+key).addClass('sor_tablet_hide');
 		}else{
			$('#sor_perview_layer_'+key).removeClass('sor_tablet_hide');
		}

			
 			var tablet_horizontal = $(this).sor_size('lr-tab-hor','layer_tablet_position_horizontal');
 			 var tablet_vertical = $(this).sor_size('lr-tab-ver','layer_tablet_position_vertical');
 			 var tablet_width = $(this).sor_size('lr-tab-wt','layer_tablet_size_width');
 		 	var tablet_height = $(this).sor_size('lr-tab-ht','layer_tablet_size_height');
			
			$('#sor_perview_layer_'+key).css(tablet_horizontal).css(tablet_vertical).css(tablet_width).css(tablet_height);		 
		
		var mobile_display =  $(this).find('.sor_live_layer_mobile_display').find('input:checked').val();
		if(mobile_display==='hide'){
			$('#sor_perview_layer_'+key).addClass('sor_mobile_hide');
  		}else{
			$('#sor_perview_layer_'+key).removeClass('sor_mobile_hide');
 		 }	
 			var mobile_horizontal = $(this).sor_size('lr-mob-hor','layer_mobile_position_horizontal');
 			 var mobile_vertical = $(this).sor_size('lr-mob-ver','layer_mobile_position_vertical');
 			 var mobile_width = $(this).sor_size('lr-mob-wt','layer_mobile_size_width');
 		 	var mobile_height = $(this).sor_size('lr-mob-ht','layer_mobile_size_height');
				$('#sor_perview_layer_'+key).css(mobile_horizontal).css(mobile_vertical).css(mobile_width).css(mobile_height);		 
		     
			
		
 
     
 };
	  
/*************************************************************************************************************************************************************************
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
 
 																		Effect 
 
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
**************************************************************************************************************************************************************************/	 
 $.fn.sor_layer_effectss = function() { 
		 var key =$(this).attr('data-key');
 
 		 var layer =$('.sor_perview_slide_content div.sor-slide:last-child #sor_perview_layer_'+key);
  
		 var layer_effect = $(this).find('.sor_live_layer_effect select').val() ;
		 var layer_initial = $(this).find('.sor_live_layer_initial select').val() ;
  		
		var effect_classs='';
		 if(layer_effect==='move'){
			if(layer_initial==='top'){
				effect_classs='sor-effect-move-top';
		 	}else if(layer_initial==='left'){
				effect_classs='sor-effect-move-right';
		 	}else if(layer_initial==='right'){
				effect_classs='sor-effect-move-left';
		 	}	else if(layer_initial==='bottom'){
				effect_classs='sor-effect-move-bottom';
		 	}
		 }else if(layer_effect==='scale'){
			effect_classs='sor-effect-scale';

 		 }else if(layer_effect==='fade'){
			effect_classs='sor-effect-fade';
  		 }
		layer.addClass(effect_classs);
		
		var layer_time_start = parseInt($(this).find('.sor_live_layer_time_start .sor_form_number').val());
		var layer_time_end = parseInt($(this).find('.sor_live_layer_time_end .sor_form_number').val());
		var layer_scale = parseInt($(this).find('.sor_live_layer_scale .sor_form_number').val());
		var css='';
	 
	 	if(isset(layer_effect)){
			if(isset(layer_scale)){
 				  css+="--sor-lr-ef-sc:"+layer_scale+";";
			}
 		  css+="--sor-lr-ef-st:"+layer_time_start+"ms;";
		  css+="--sor-lr-ef-en:"+(layer_time_end - layer_time_start)+"ms;";
		}


	layer.find('.sor-layer-style').append('<style>.sor-slide-item #sor_perview_layer_'+key+'{'+css+'}</style>');
			 
 			
 };
		  
/*************************************************************************************************************************************************************************
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
 
 																		Shadow
 
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
**************************************************************************************************************************************************************************/		
 $.fn.sor_layer_text_perview = function(items) { 
	 var key =$(this).attr('data-key');
	 var id =$(this).attr('data-id');
	 if(id==='text'){
  		//Text
		//
		var text_textarea = $(this).find('.sor_live_layer_text textarea').val() ;
		$('#sor_perview_layer_'+key+' .sor-text').html(text_textarea); 
		$('#sor_module_layer_'+key+' .sor_module_layer_name span').html(': '+text_textarea); 
		
 		 var text_align= $(this).sor_text_align('txt','layer_text_align');
 		 var tablet_text_align= $(this).sor_text_align('tab-txt','layer_tablet_text_align');
 		 var mobile_text_align= $(this).sor_text_align('mob-txt','layer_mobile_text_align');
  		var text_color= $(this).sor_color('txt','layer_text_color_first');
  
		var text_hover_color= $(this).sor_color('txt-hv','layer_text_hover_color_first');
  		var text_shadow= $(this).sor_text_shadow('txt','layer_text_shadow');
  		var text_hover_shadow= $(this).sor_text_shadow('txt-hv','layer_text_hover_shadow');
 

 		var icon = $(this).find('.sor_live_layer_icon input').val() ;
		$('#sor_perview_layer_'+key+' .sor-text i').remove();
		$('#sor_perview_layer_'+key+' .sor-text').prepend('<i class="'+icon+'"></i>');
	
		
  			
			var icon_align=$(this).sor_align('icn','layer_icon_align');
			 if(icon_align==='left'){
				$('#sor_perview_layer_'+key+' .sor-text').addClass('sor-icon-left');
 			 }else{
				$('#sor_perview_layer_'+key+' .sor-text').removeClass('sor-icon-left');
			 }
 
  		var  icon_color= $(this).sor_color('icn','layer_icon_color_first');
 		var  icon_hover_color= $(this).sor_color('icn-hv','layer_icon_hover_color_first');		
 
		var text_boxed = $(this).find('.sor_live_layer_text_boxed select').val() ;
 		 
		if(text_boxed==='boxed'){ 
		$('#sor_perview_layer_'+key+' .sor-text').addClass('sor-text-boxed').removeClass('sor-text-none');
		
			var text_boxed_padding= $(this).sor_padding('txt-box','layer_text_boxed_padding');
			var text_boxed_background= $(this).sor_background_gradient('txt-box-bg-cr','layer_text_boxed_background');
			var text_boxed_border= $(this).sor_border('txt-box','layer_text_boxed_border');
			var text_boxed_shadow= $(this).sor_shadow('txt-box','layer_text_boxed_shadow');
			
			var text_boxed_hover_background= $(this).sor_background_gradient('txt-box-hv-bg-cr','layer_text_boxed_hover_background');
  			var text_boxed_hover_border= $(this).sor_border('txt-box-hv','layer_text_boxed_hover_border');
			var text_boxed_hover_shadow= $(this).sor_shadow('txt-box-hv','layer_text_boxed_hover_shadow');			
		 	var text_boxed_radius= $(this).sor_radius('txt-box','layer_text_boxed_radius');
		}else{
					$('#sor_perview_layer_'+key+' .sor-text').addClass('sor-text-none').removeClass('sor-text-boxed');

			var text_boxed_padding='';
			var text_boxed_background='';
			var text_boxed_border='';
			var text_boxed_shadow='';
			
 			var text_boxed_hover_background='';
			var text_boxed_hover_border='';
			var text_boxed_hover_shadow='';
			var text_boxed_radius='';
			 
			//	var text_boxed_radius='';
			
		}
		 
  		var text_fontfamily= $(this).sor_fontfamily('txt','layer_text_fontfamily');
  		var text_font_size= $(this).sor_font_size('txt','layer_text_font_size');
  		var text_line_height= $(this).sor_line_height('txt','layer_text_line_height');
		
  		var tablet_text_font_size= $(this).sor_font_size('tab-txt','layer_tablet_text_font_size');
  		var tablet_text_line_height= $(this).sor_line_height('tab-txt','layer_tablet_text_line_height');		
		
  		var mobile_text_font_size= $(this).sor_font_size('mob-txt','layer_mobile_text_font_size');
  		var mobile_text_line_height= $(this).sor_line_height('mob-txt','layer_mobile_text_line_height');		
	
		
		
		
		
  		var text_font_weight= $(this).sor_font_weight('txt','layer_text_font_weight');
  		var text_font_decoration= $(this).sor_font_decoration('txt','layer_text_font_decoration');
  		var text_font_transform= $(this).sor_font_transform('txt','layer_text_font_transform');
  		var text_spacing= $(this).sor_spacing('txt','layer_text_spacing');
  		var text_font_style= $(this).sor_font_style('txt','layer_text_font_style');
		
  		var fontfamily= $(this).sor_input_fontfamily('layer_text');
		
		 $('#sor_perview_layer_'+key).find('.sor-layer-style').html('');
      			 $('#sor_perview_layer_'+key).find('.sor-layer-style').append('<style>#sor_perview_layer_'+key+'{'+
		 	text_align+
		 	tablet_text_align+
		 	mobile_text_align+
		 	text_color+
		 	text_hover_color+
			icon_color+
		 	icon_hover_color+		
			text_shadow+
		 	text_hover_shadow+
		 	text_boxed_padding+
			text_boxed_background+
			text_boxed_hover_background+
			text_boxed_border+
			text_boxed_hover_border+
			text_boxed_shadow+
			text_boxed_hover_shadow+
			text_boxed_radius+
			text_fontfamily+
		 	text_font_size+
			text_line_height+
		 	tablet_text_font_size+
			tablet_text_line_height+
		 	mobile_text_font_size+
			mobile_text_line_height+
		 	text_font_weight+
 			text_font_decoration+
			text_font_transform+
		 	text_font_style+
	 		text_spacing+
			'}'+fontfamily+'</style>'	
			 
 			
			) ;
	 }
		 
 };
 
			/*************************************************************************************************************************************************************************
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
 
 																		Shadow
 
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
**************************************************************************************************************************************************************************/		
  $.fn.sor_layer_button_perview = function(items) { 
  
	 var key =$(this).attr('data-key');
	 var id =$(this).attr('data-id');
	 if(id==='button'){
		//Text
		//
		var button_textarea = $(this).find('.sor_live_layer_button textarea').val() ;
		$('#sor_perview_layer_'+key+' .sor-button').html(button_textarea); 
		$('#sor_module_layer_'+key+' .sor_module_layer_name span').html(': '+button_textarea); 
		 	 
		var button_align= $(this).sor_text_align('txt','layer_button_align');
 		 var tablet_button_align= $(this).sor_text_align('tab-txt','layer_tablet_button_align');
 		 var mobile_button_align= $(this).sor_text_align('mob-txt','layer_mobile_button_align');		
		
		
  		var button_color= $(this).sor_color('btn','layer_button_color_first');
  
		var button_hover_color= $(this).sor_color('btn-hv','layer_button_hover_color_first');
  		var button_shadow= $(this).sor_text_shadow('btn','layer_button_shadow');
  		var button_hover_shadow= $(this).sor_text_shadow('btn-hv','layer_button_hover_shadow');
 
 
 		var icon = $(this).find('.sor_live_layer_icon input').val() ;
		$('#sor_perview_layer_'+key+' .sor-button i').remove();
		$('#sor_perview_layer_'+key+' .sor-button').prepend('<i class="'+icon+'"></i>');
	
		
  			
			var icon_align=$(this).sor_align('icn','layer_icon_align');
			 if(icon_align==='left'){
				$('#sor_perview_layer_'+key+' .sor-button').addClass('sor-icon-left');
 			 }else{
				$('#sor_perview_layer_'+key+' .sor-button').removeClass('sor-icon-left');
			 }
 
  		var  icon_color= $(this).sor_color('icn','layer_icon_color_first');
 		var  icon_hover_color= $(this).sor_color('icn-hv','layer_icon_hover_color_first');		
 
		var button_boxed = $(this).find('.sor_live_layer_button_boxed select').val() ;
 		 
		if(button_boxed=='boxed'){ 
		$('#sor_perview_layer_'+key+' .sor-button').addClass('sor-button-boxed').removeClass('sor-button-none');
		
			var button_boxed_padding= $(this).sor_padding('btn-box','layer_button_boxed_padding');
			var button_boxed_background= $(this).sor_background_gradient('btn-box-bg-cr','layer_button_boxed_background');
			var button_boxed_border= $(this).sor_border('btn-box','layer_button_boxed_border');
			var button_boxed_shadow= $(this).sor_shadow('btn-box','layer_button_boxed_shadow');
			
			var button_boxed_hover_background= $(this).sor_background_gradient('btn-box-hv-bg-cr','layer_button_boxed_hover_background');
  			var button_boxed_hover_border= $(this).sor_border('btn-box-hv','layer_button_boxed_hover_border');
			var button_boxed_hover_shadow= $(this).sor_shadow('btn-box-hv','layer_button_boxed_hover_shadow');			
		 	var button_boxed_radius= $(this).sor_radius('btn-box','layer_button_boxed_radius');
		}else{
					$('#sor_perview_layer_'+key+' .sor-button').addClass('sor-button-none').removeClass('sor-button-boxed');

			var button_boxed_padding='';
			var button_boxed_background='';
			var button_boxed_border='';
			var button_boxed_shadow='';
			
 			var button_boxed_hover_background='';
			var button_boxed_hover_border='';
			var button_boxed_hover_shadow='';
			var button_boxed_radius='';
			 
			//	var button_boxed_radius='';
			
		}
		 
  		var button_fontfamily= $(this).sor_fontfamily('btn','layer_button_fontfamily');
  		var button_font_size= $(this).sor_font_size('btn','layer_button_font_size');
 		
  		var tablet_button_font_size= $(this).sor_font_size('tab-btn','layer_tablet_button_font_size');
   		var mobile_button_font_size= $(this).sor_font_size('mob-btn','layer_mobile_button_font_size');
	
		
		
		
		
  		var button_font_weight= $(this).sor_font_weight('btn','layer_button_font_weight');
  		var button_font_decoration= $(this).sor_font_decoration('btn','layer_button_font_decoration');
  		var button_font_transform= $(this).sor_font_transform('btn','layer_button_font_transform');
  		var button_spacing= $(this).sor_spacing('btn','layer_button_spacing');
  		var button_font_style= $(this).sor_font_style('btn','layer_button_font_style');
		
  		var fontfamily= $(this).sor_input_fontfamily('layer_button');
		 
      		 $('#sor_perview_layer_'+key).find('.sor-layer-style').html('<style>#sor_perview_layer_'+key+'{'+
		 	button_align+
		 	tablet_button_align+
		 	mobile_button_align+
		 	button_color+
		 	button_hover_color+
						icon_color+
		 	icon_hover_color+		
			button_shadow+
		 	button_hover_shadow+
		 	button_boxed_padding+
			button_boxed_background+
			button_boxed_hover_background+
			button_boxed_border+
			button_boxed_hover_border+
			button_boxed_shadow+
			button_boxed_hover_shadow+
			button_boxed_radius+
			button_fontfamily+
		 	button_font_size+
		 	tablet_button_font_size+
		 	mobile_button_font_size+
		
		 	button_font_weight+
 			button_font_decoration+
			button_font_transform+
		 	button_font_style+
	 		button_spacing+
			'}'+fontfamily+'</style>'	
			 
 			
			) ; 
	 }
 };
		  /*************************************************************************************************************************************************************************
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
 
 																		Shadow
 
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
**************************************************************************************************************************************************************************/		
 $.fn.sor_layer_icon_perview = function(items) { 
	 var key =$(this).attr('data-key');
	 var id =$(this).attr('data-id');
	 if(id==='icon'){	
	 	var icon = $(this).find('.sor_live_layer_icon input').val() ;
		$('#sor_perview_layer_'+key+' .sor-icon i').remove();
		$('#sor_perview_layer_'+key+' .sor-icon').append('<i class="'+icon+'"></i>');
		$('#sor_module_layer_'+key+' .sor_module_layer_name span').html('');
		$('#sor_module_layer_'+key+' .sor_module_layer_name span').append(': <i class="'+icon+'"></i>'); 
 	 
  	  

 		var icon_align= $(this).sor_text_align('txt','layer_icon_align');
		var tablet_icon_align= $(this).sor_text_align('tab-txt','layer_tablet_icon_align');
		var mobile_icon_align= $(this).sor_text_align('mob-txt','layer_mobile_icon_align');		
				
		
  		var icon_color= $(this).sor_color('icn','layer_icon_color_first');
  

		var icon_hover_color= $(this).sor_color('icn-hv','layer_icon_hover_color_first');
  		var icon_shadow= $(this).sor_text_shadow('icn','layer_icon_shadow');
  		var icon_hover_shadow= $(this).sor_text_shadow('icn-hv','layer_icon_hover_shadow');
 
 
		var icon_boxed = $(this).find('.sor_live_layer_icon_boxed select').val() ;
 		 
		if(icon_boxed=='boxed'){ 
		$('#sor_perview_layer_'+key+' .sor-icon').addClass('sor-icon-boxed').removeClass('sor-icon-none');
			var icon_boxed_padding= $(this).sor_padding('icn-box','layer_icon_boxed_padding');
			var icon_boxed_background= $(this).sor_background_gradient('icn-box-bg-cr','layer_icon_boxed_background');
			var icon_boxed_border= $(this).sor_border('icn-box','layer_icon_boxed_border');
			var icon_boxed_shadow= $(this).sor_shadow('icn-box','layer_icon_boxed_shadow');
			
			var icon_boxed_hover_background= $(this).sor_background_gradient('icn-box-hv-bg-cr','layer_icon_boxed_hover_background');
  			var icon_boxed_hover_border= $(this).sor_border('icn-box-hv','layer_icon_boxed_hover_border');
			var icon_boxed_hover_shadow= $(this).sor_shadow('icn-box-hv','layer_icon_boxed_hover_shadow');			
		 	var icon_boxed_radius= $(this).sor_radius('icn-box','layer_icon_boxed_radius');
		}else{
					$('#sor_perview_layer_'+key+' .sor-icon').addClass('sor-boxed-none').removeClass('sor-boxed-none');

			var icon_boxed_padding='';
			var icon_boxed_background='';
			var icon_boxed_border='';
			var icon_boxed_shadow='';
			
 			var icon_boxed_hover_background='';
			var icon_boxed_hover_border='';
			var icon_boxed_hover_shadow='';
			var icon_boxed_radius='';
			 
			//	var icon_boxed_radius='';
			
		}
		 
		
   		var icon_font_size= $(this).sor_font_size('icn','layer_icon_font_size');
		var tablet_icon_font_size= $(this).sor_font_size('tab-icn','layer_tablet_icon_font_size');
   		var mobile_icon_font_size= $(this).sor_font_size('mob-icn','layer_mobile_icon_font_size');
	
				 
		       		 $('#sor_perview_layer_'+key).find('.sor-layer-style').html('<style>#sor_perview_layer_'+key+'{'+

		 	icon_align+
		 	tablet_icon_align+
		 	mobile_icon_align+
		 	icon_color+
		 	
			icon_hover_color+
			icon_shadow+
		 	icon_hover_shadow+
			 
		 	icon_boxed_padding+
			icon_boxed_background+
			icon_boxed_hover_background+
			icon_boxed_border+
			icon_boxed_hover_border+
			icon_boxed_shadow+
			icon_boxed_hover_shadow+
			icon_boxed_radius+
			
 		 	icon_font_size+
 		 	tablet_icon_font_size+
 		 	mobile_icon_font_size+'}'
		 	
 			 
 			
			) ;
					 }}
					 
					 
					 
					 
 /*************************************************************************************************************************************************************************
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
 
 																		Shadow
 
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
**************************************************************************************************************************************************************************/		
 $.fn.sor_layer_box_perview = function(items) { 
	 var key =$(this).attr('data-key');
	 var id =$(this).attr('data-id');
	 if(id==='box'){	
 			var box_background= $(this).sor_background_gradient('box-bg-cr','layer_box_background');
			var box_border= $(this).sor_border('box','layer_box_border');
			var box_shadow= $(this).sor_shadow('box','layer_box_shadow');
			
			var box_hover_background= $(this).sor_background_gradient('box-hv-bg-cr','layer_box_hover_background');
  			var box_hover_border= $(this).sor_border('box-hv','layer_box_hover_border');
			var box_hover_shadow= $(this).sor_shadow('box-hv','layer_box_hover_shadow');			
		 	var box_radius= $(this).sor_radius('icn-box','layer_box_radius');
	 
				 
		       		 $('#sor_perview_layer_'+key).find('.sor-layer-style').html('<style>#sor_perview_layer_'+key+'{'+

		  
			 
 			box_background+
			box_hover_background+
			box_border+
			box_hover_border+
			box_shadow+
			box_hover_shadow+
			box_radius+
			'}'
		 	
 			 
 			
			) ;
	 }
 };
			
 
/*************************************************************************************************************************************************************************
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
 
 																		Shadow
 
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
**************************************************************************************************************************************************************************/	
	 
   $.fn.sor_layer_image_perview = function(items) { 
	 var key =$(this).attr('data-key');
 var id =$(this).attr('data-id');
	 if(id==='image'){	
		//Text
		//
		var image_url = $(this).find('.sor_live_layer_image .sor_image_item img').attr('src');
 
 		if(isset(image_url) && image_url !=='undefined'){
  		$('#sor_perview_layer_'+key+' .sor-image').html('');
  		$('#sor_perview_layer_'+key+' .sor-image').append('<img src="'+image_url+'">');
	$('#sor_module_layer_'+key+' .sor_module_layer_name span').html('');
		$('#sor_module_layer_'+key+' .sor_module_layer_name span').append(': <img src="'+image_url+'">'); 		
		
		}else{
  		$('#sor_perview_layer_'+key+' .sor-image').html('');
		}
 		var image_align= $(this).sor_text_align('txt','layer_image_align');
 		var tablet_image_align= $(this).sor_text_align('tab-txt','layer_tablet_image_align');
 		var mobile_image_align= $(this).sor_text_align('mob-txt','layer_mobile_image_align');
	$('#sor_perview_layer_'+key).find('.sor-layer-style').html('<style>#sor_perview_layer_'+key+'{'+

	image_align+tablet_image_align+mobile_image_align+'}') ;

	 }
 };
 


})(jQuery);