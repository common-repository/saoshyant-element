jQuery(function($) {
	'use strict';
	jQuery(document).ready(function() {
		 
/*************************************************************************************************************************************************************************
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
 
 																			Error
 
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
**************************************************************************************************************************************************************************/	
  
	$(document).ajaxError(function( event, jqxhr, setting, thrownError ) {
		 $('body').sor_remove_add_error_loading();
	});
	function isset(variable){
		return  variable  !== "undefined" && variable  !== "0" && variable !== null && variable !== '';
}

 
/*************************************************************************************************************************************************************************
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
 
 																			to Save
 
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
**************************************************************************************************************************************************************************/	
$(document).on('click', '.sor_template_cancel', function(e) {
 	$(this).parents('.sor_template').remove();
});	
//Option Full Save
 	$(document).on('click', '.sor_module_template_save', function(e) {
 			var data_id = $(this).attr('data-id');	
			
			var data_key;
			
			if(data_id=='slide'){
				  data_key= $(this).parents('.sor_module_slide_item').attr('data-key');	
			}else if(data_id=='layer'){
				  data_key= $(this).parents('.sor_module_layer_item').attr('data-key');	
			}
			
 			$('body').append('<div class="sor-mouse-wait"></div>');
			
  			$.ajax({
				url: sorsorak.ajaxurl,
				type: 'POST',
				data : {
					action : 'sor_template_save',
					id :data_id,
					key:data_key
 				},
				success:function(data) {
						$('body').append(data);
  						$('.sor-mouse-wait').remove(); 
  				 
				} 

			});	
			 
   	 });	
	 
	 	
	 	
	  
/*************************************************************************************************************************************************************************
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
 
 																			 Save Pross
 
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
**************************************************************************************************************************************************************************/	
	 
	//Option Full Save
	$(document).on('click', '.sor_template_global .sor_template_save', function(e) {
		var data_key = 'r'+Math.floor(Math.random() * 9999999999);
 		var data_id = 'global';
   		var data_name = $('[name="sor_template_name"]').val();
   		var data_setting = $('[name="sor_setting_json"]').val();
   		var data_slide = $('[name="sor_slide"]').val();
		if(isset(data_name)){
 			$('body').append('<div class="sor-mouse-wait"></div>');
  			$.ajax({
				url: sorsorak.ajaxurl,
				type: 'POST',
				data : {
					action : 'sor_template_save_global',
					setting : data_setting,
					slide : data_slide,
					name : data_name,
 					key : data_key,
					id : data_id,
					
				},
				success:function(data) {
					$('.sor_template').remove();
					$('.sor-mouse-wait').remove(); 
				} 

			});	
		}else{
			$('.sor_template_massage').addClass('sor_template_massage_active');
			
		}
			 
   	 });	 
	
	//Option Full Save
	$(document).on('click', '.sor_template_all_slide .sor_template_save', function(e) {
  		var template_key = $(this).parents('.sor_template_slide').attr('data-key');		
		
 			
			var data_key = 'r'+Math.floor(Math.random() * 9999999999);
    		var data_name = $('[name="sor_template_name"]').val();
   			var data_slide = $('[name="sor_slide"]').val();
 			
  			$('body').append('<div class="sor-mouse-wait"></div>');
  			$.ajax({
				url: sorsorak.ajaxurl,
				type: 'POST',
				data : {
					action : 'sor_template_save_slide',
 					slide : data_slide,
				 	id : 'slide',
	
					name : data_name,
 					key : data_key,
 					
				},
				success:function(data) {
 
					$('.sor_template').remove();
						$('.sor-mouse-wait').remove(); 
				} 

			});	
			 
   	 });	
	 
	 
	 
	 
	 
	 	//Option Full Save
	$(document).on('click', '.sor_template_slide .sor_template_save', function(e) {
  		var template_key = $(this).parents('.sor_template_slide').attr('data-key');		
		
		
  		var slide =  [];
			$('#sor_module_slide_'+template_key).each(function() {
				var key = $(this).attr('data-key');
				var value = $(this).attr('data-value');
				var option = $(this).find('.sor_module_slide_option').html();
				var layer = $(this).find('.sor_module_slide_layer').html();
	 
				var slide_key  = {};
				  slide_key[key] = {'value' : value,'option':option ,'layer':layer };
				 slide.push(slide_key); 
			});
 		
		
 			var data_slide = JSON.stringify(slide);
 			var data_key = 'r'+Math.floor(Math.random() * 9999999999);
    		var data_name = $('[name="sor_template_name"]').val();
  			$('body').append('<div class="sor-mouse-wait"></div>');
			
			 
  			$.ajax({
				url: sorsorak.ajaxurl,
				type: 'POST',
				data : {
					action : 'sor_template_save_slide',
 					slide : data_slide,
 				 	id : 'slide',
	
					name : data_name,
 					key : data_key,
 					
				},
				success:function(data) {
 
					$('.sor_template').remove();
						$('.sor-mouse-wait').remove(); 
				} 

			});	
			 
   	 });	
	 
	 
	$(document).on('click', '.sor_template_all_layer .sor_template_save', function(e) {
  		var template_key = $(this).parents('.sor_template_layer').attr('data-key');		
		
  		 
  			var data_layer =   '['+JSON.stringify($('body').sor_layer_json())+']';
 			var data_key = 'r'+Math.floor(Math.random() * 9999999999);
     		var data_name = $('[name="sor_template_name"]').val();
  			$('body').append('<div class="sor-mouse-wait"></div>');
  			$.ajax({
				url: sorsorak.ajaxurl,
				type: 'POST',
				data : {
					action : 'sor_template_save_layer',
 					layer : data_layer,
 					id : 'layer',
					name : data_name,
 					key : data_key,
 					
				},
				success:function(data) {
 
					$('.sor_template').remove();
						$('.sor-mouse-wait').remove(); 
				} 

			});	
			 
   	 });	
	 
	 
	$(document).on('click', '.sor_template_layer .sor_template_save', function(e) {
  			var template_key = $(this).parents('.sor_template_layer').attr('data-key');		
     		 		var layer_key  = {};
			$('#sor_module_layer_'+template_key).each(function() {
				var key = $(this).attr('data-key');
				var id = $(this).attr('data-id');
				var option = $(this).find('#sor_layer_options').serializeJSON();
	  
				  layer_key[key] = {'id' : id,'option':option };
			});
		
		 
		 
  			var data_layer =   '['+JSON.stringify(layer_key)+']';
 			var data_key = 'r'+Math.floor(Math.random() * 9999999999);
     		var data_name = $('[name="sor_template_name"]').val();
  			$('body').append('<div class="sor-mouse-wait"></div>');
  			$.ajax({
				url: sorsorak.ajaxurl,
				type: 'POST',
				data : {
					action : 'sor_template_save_layer',
 					layer : data_layer,
 					id : 'layer',
					name : data_name,
 					key : data_key,
 					
				},
				success:function(data) {
 
					$('.sor_template').remove();
						$('.sor-mouse-wait').remove(); 
				} 

			});	
			 
   	 });	
	 	 
 
	 
	 
/*************************************************************************************************************************************************************************
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
 
 																			 template Options
 
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
**************************************************************************************************************************************************************************/	





  	$(document).on('click', '.sor_module_global_template_demo', function(e) {
		 
 			$('body').append('<div class="sor-mouse-wait"></div>');
  			$.ajax({
				url: sorsorak.ajaxurl,
				type: 'POST',
				data : {
					action : 'sor_template_demo',
  				},
				success:function(data) {
						$('body').append(data);
  						$('.sor-mouse-wait').remove(); 
 
  				 
				} 

			});	
			 
   	 });	
 	$(document).on('click', '.sor_module_global_template_add', function(e) {
		 
 			$('body').append('<div class="sor-mouse-wait"></div>');
  			$.ajax({
				url: sorsorak.ajaxurl,
				type: 'POST',
				data : {
					action : 'sor_template_options',
					id : 'global',
 				},
				success:function(data) {
						$('body').append(data);
  						$('.sor-mouse-wait').remove(); 
 
  				 
				} 

			});	
			 
   	 });	
	 
	 	$(document).on('click', '.sor_module_slide_template_add ', function(e) {
		 
 			$('body').append('<div class="sor-mouse-wait"></div>');
			
  			$.ajax({
				url: sorsorak.ajaxurl,
				type: 'POST',
				data : {
					action : 'sor_template_options',
					id : 'slide',
 				},
				success:function(data) {
						$('body').append(data);
  						$('.sor-mouse-wait').remove(); 
   				 
				} 

			});	
			 
   	 });	

	$(document).on('click', '.sor_module_layer_template_add ', function(e) {
		 
 			$('body').append('<div class="sor-mouse-wait"></div>');
			
  			$.ajax({
				url: sorsorak.ajaxurl,
				type: 'POST',
				data : {
					action : 'sor_template_options',
					id : 'layer',
 				},
				success:function(data) {
						$('body').append(data);
  						$('.sor-mouse-wait').remove(); 
   				 
				} 

			});	
			 
   	 });	


 


	// Full Template ADD Select
	$(document).on('click', '.sor_template_item', function(e) {
		$(this).parent().find('.selected').removeClass('selected');
		$(this).addClass("selected");
  	});
	 
	 
/*************************************************************************************************************************************************************************
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
 
 																			 template add
 
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
**************************************************************************************************************************************************************************/	

 	$(document).on('click', '.sor_template_demo .sor_template_add', function(e) {
		var data_id = $('.sor_template_item.selected').attr('data-id');
 		
		 
  		$('body').append('<div class="sor-mouse-wait"></div>');
  		
   		$.ajax({
			type: 'POST',
	
 			url: sorsorak.ajaxurl,
			data : {
				action : 'sor_module_content',
				global_demo_template_id : data_id,

   			},
			success:function(data) {

 				if( data.length){
					$('.sor_module_content').html('');
					$('.sor_module_content').append( data);
						$('.sor-mouse-wait').remove(); 
						$('.sor_template').remove();
						$('body').sor_reload_global_slider();
						$('body').sor_sortable();
						$('body').sor_coloris();	
						$('body').sor_setting_json();	
 	$(".sor_module_setting").on('change keyup mousedown',function() { 
		$('body').sor_setting_json();
 	});

				}else{
					$('body').sor_remove_add_error_loading();
				}	
			 	 
			} 
		});
  	});		
	 



 	$(document).on('click', '.sor_template_global .sor_template_add', function(e) {
		var data_id = $('.sor_template_item.selected').attr('data-id');
 		
		 
  		$('body').append('<div class="sor-mouse-wait"></div>');
  		
   		$.ajax({
			type: 'POST',
	
 			url: sorsorak.ajaxurl,
			data : {
				action : 'sor_module_content',
				global_template_id : data_id,

   			},
			success:function(data) {

 				if( data.length){
					$('.sor_module_content').html('');
					$('.sor_module_content').append( data);
						$('.sor-mouse-wait').remove(); 
						$('.sor_template').remove();
						$('body').sor_reload_global_slider();
						$('body').sor_sortable();
						$('body').sor_coloris();	
 	$(".sor_module_setting").on('change keyup mousedown',function() { 
		$('body').sor_setting_json();
 	});

				}else{
					$('body').sor_remove_add_error_loading();
				}	
			 	 
			} 
		});
  	});		
	 
 	$(document).on('click', '.sor_template_slide .sor_template_add', function(e) {
		var data_id = $('.sor_template_item.selected').attr('data-id');
 		
   		$('body').append('<div class="sor-mouse-wait"></div>');
  		
   		$.ajax({
			type: 'POST',
	
 			url: sorsorak.ajaxurl,
			data : {
				action : 'sor_module_slide_list',
				slide_template_id : data_id,
 				 

   			},
			success:function(data) {

 				if( data.length){
					$('.sor_module_slide_list').append( data);
						$('.sor-mouse-wait').remove(); 
						$('.sor_template').remove();
						$('body').sor_slide_json();
						$('body').sor_reload_global_slider();
						$('body').sor_sortable();
						$('body').sor_coloris();	
						$('body').sor_setting_json();	

				}else{
					$('body').sor_remove_add_error_loading();
				}	
			 	 
			} 
		});
  	});		
 

	function empty(variable){
		if(variable  === "undefined" && variable === null && variable === ''){
			return '';
		}else{
			return variable;
		}
	}	
	
 	$(document).on('click', '.sor_template_layer .sor_template_add', function(e) {
		var data_id = $('.sor_template_item.selected').attr('data-id');
		$('body').append('<div class="sor-mouse-wait"></div>');
  		  		var data_tablet=  $('.sor_live_setting_responsive_tablet').find('input:checked').val();
  		var data_mobile=  $('.sor_live_setting_responsive_mobile').find('input:checked').val();
   		$.ajax({
			type: 'POST',
	
 			url: sorsorak.ajaxurl,
			data : {
				action : 'sor_module_layer_list',
				layer_template_id : data_id,
 				sor_tablet :  empty(data_tablet),
 				sor_mobile :  empty(data_mobile),
   			},
			success:function(data) {

 				if( data.length){
					$('.sor_module_layer_list').append( data);
						$('.sor-mouse-wait').remove(); 
						$('.sor_template').remove();
						$('body').sor_reload_layer();

						$('body').find('.sor_module_layer_item').each(function() {
							$(this).sor_layer_options_perview();
						}); 
					 	$('body').sor_sortable_layer();
						$('body').sor_draggable();
 

				}else{
					$('body').sor_remove_add_error_loading();
				}	
			 	 
			} 
		});
  	});		
	

	//Template Remove	
	$(document).on('click', '.sor_template_remove', function(e) {
 		var data_template = $(this).parent();
		var data_key = data_template.attr('data-id');
		var data_row = $(this).parents('.sor_template').attr('data-row');

		$('body').append('<div class="sor-mouse-wait"></div>');
 		var txt;
		var r = confirm('آیا موافق با حذف این مورد هستید؟');

 	  	if (r == true) {
	
			$.ajax({
				url: sorsorak.ajaxurl,
				type: 'POST',
				data : {
					action : 'sor_template_remove',
					 key : data_key,
					 id : data_row,
					  
				},
				success:function(data) { 
 					if( data.length){
						$(data_template).remove();
						$('.sor-mouse-wait').remove(); 
					}else{
					$('body').sor_remove_add_error_loading();
					}
						
				} 
			 });	
			
		}
   	 });	 
	});
	 
});
 