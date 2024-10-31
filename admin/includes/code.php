<?php
/********************************************************************
sor Options Encode
*********************************************************************/
 if ( !function_exists ( "sor_sanitize_text_or_array_field" )){

function sor_sanitize_text_or_array_field($array_or_string) {
    if( is_string($array_or_string) ){
        $array_or_string = wp_kses_post($array_or_string);
    }elseif( is_array($array_or_string) ){
        foreach ( $array_or_string as $key => &$value ) {
            if ( is_array( $value ) ) {
                $value = sor_sanitize_text_or_array_field($value);
            } 
            else {
                $value = wp_kses_post( $value );
            }
        }
    }

    return $array_or_string;
}
}
if ( in_array( $pagenow, array( 'post-new.php', 'post.php','admin-ajax.php' ) ) ) {
if ( !function_exists ( "sor_options_encode" )){

add_action('wp_ajax_sor_options_encode', 'sor_options_encode');
add_action('wp_ajax_nopriv_sor_options_encode', 'sor_options_encode');
function sor_options_encode($opt=false){
	

	if(!empty($opt)){
  		$option = $opt;
	}else{
  		$option = sor_sanitize_text_or_array_field($_REQUEST['option']);
		 
	}
	
	
	$output='';
	$r=0;
	if(!empty($option)){
	foreach($option as $k => $v) :
	
		if(isset($v)  &&  $v !==''):
 		$r++;
  		$output.='[sor_'.$r.' attr_key="'.urlencode($k).'"]';
		$r_2=0;
		if(is_array($v)){
		foreach($v as $k_2 => $v_2) :
			//START2
			if(isset($v_2)  && $v_2 !==''):
			$r_2++;
			$output.='[sor_'.$r.'_'.$r_2.' attr_key="'.urlencode($k_2).'"]';
			$r_3=0;
			if(is_array($v_2)){
			foreach($v_2 as $k_3 => $v_3) :
				
				if(isset($v_3)  &&  $v_3 !==''):
				$r_3++;
				$output.='[sor_'.$r.'_'.$r_2.'_'.$r_3.' attr_key="'.urlencode($k_3).'"]';
 				$r_4=0;
				if(is_array($v_3)){
				foreach($v_3 as $k_4 => $v_4) :
						
					if(isset($v_4) &&  $v_4 !==''):
					$r_4++;
					$output.='[sor_'.$r.'_'.$r_2.'_'.$r_3.'_'.$r_4.' attr_key="'.urlencode($k_4).'"]';
 					$r_5=0;
					if(is_array($v_4)){
					foreach($v_4 as $k_5 => $v_5) :
						
						if(isset($v_5) &&  $v_5 !==''):
						$r_5++;
						$output.='[sor_'.$r.'_'.$r_2.'_'.$r_3.'_'.$r_4.'_'.$r_5.' attr_key="'.urlencode($k_5).'"]';	
						$r_6=0;
						if(is_array($v_5)){
						foreach($v_5 as $k_6 => $v_6) :
						
							if(isset($v_6)  && $v_6 !==''):
							$r_6++;
							$output.='[sor_'.$r.'_'.$r_2.'_'.$r_3.'_'.$r_4.'_'.$r_5.'_'.$r_6.' attr_key="'.urlencode($k_6).'"]';
							$r_7=0;
							if(is_array($v_6)){
							foreach($v_6 as $k_7 => $v_7) :
							
							
								if(isset($v_7) && $v_7 !==''):
								$r_7++;
								$output.='[sor_'.$r.'_'.$r_2.'_'.$r_3.'_'.$r_4.'_'.$r_5.'_'.$r_6.'_'.$r_7.' attr_key="'.urlencode($k_7).'"]';
								$r_8=0;
								if(is_array($v_7)){
								foreach($v_7 as $k_8 => $v_8) :
							
									if(isset($v_8)  &&  $v_8 ==''):
									$r_8++;
									$output.='[sor_'.$r.'_'.$r_2.'_'.$r_3.'_'.$r_4.'_'.$r_5.'_'.$r_6.'_'.$r_7.'_'.$r_8.' attr_key="'.urlencode($k_8).'"]';
									$r_9=0;
									if(is_array($v_8)){
									foreach($v_8 as $k_9 => $v_9) :
								
									
	 

										if(isset($v_9)  &&  $v_9 !==''):
										$r_9++;
										$output.='[sor_'.$r.'_'.$r_2.'_'.$r_3.'_'.$r_4.'_'.$r_5.'_'.$r_6.'_'.$r_7.'_'.$r_8.'_'.$r_9.' attr_key="'.urlencode($k_9).'"]';
										$r_10=0;
										if(is_array($v_9)){
										foreach($v_9 as $k_10 => $v_10) :
									
										
											if(isset($v_10)  &&  $v_10 !==''):
												$r_10++;
												$output.='[sor_'.$r.'_'.$r_2.'_'.$r_3.'_'.$r_4.'_'.$r_5.'_'.$r_6.'_'.$r_7.'_'.$r_8.'_'.$r_9.'_'.$r_10.' attr_key="'.urlencode($k_10).'"]';
												$output.= urlencode(stripslashes($v_10)) ;
												$output.='[/sor_'.$r.'_'.$r_2.'_'.$r_3.'_'.$r_4.'_'.$r_5.'_'.$r_6.'_'.$r_7.'_'.$r_8.'_'.$r_9.'_'.$r_10.']';
																		
																		
											endif;
										
										
										endforeach;
										}else{
										$output.= urlencode(stripslashes($v_9)) ;
										}
										$output.='[/sor_'.$r.'_'.$r_2.'_'.$r_3.'_'.$r_4.'_'.$r_5.'_'.$r_6.'_'.$r_7.'_'.$r_8.'_'.$r_9.']';
										endif;
								
									
									
									endforeach;
									}else{
									$output.= urlencode(stripslashes($v_8)) ;
									}
									$output.='[/sor_'.$r.'_'.$r_2.'_'.$r_3.'_'.$r_4.'_'.$r_5.'_'.$r_6.'_'.$r_7.'_'.$r_8.']';
									endif;
								
								
								endforeach;
								}else{
								$output.= urlencode(stripslashes($v_7)) ;
								}
								$output.='[/sor_'.$r.'_'.$r_2.'_'.$r_3.'_'.$r_4.'_'.$r_5.'_'.$r_6.'_'.$r_7.']';
								endif;
								
							endforeach;
							}else{
							$output.= urlencode(stripslashes($v_6)) ;
							}
 							$output.='[/sor_'.$r.'_'.$r_2.'_'.$r_3.'_'.$r_4.'_'.$r_5.'_'.$r_6.']';
							endif;
								
						endforeach;
						}else{
						$output.= urlencode(stripslashes($v_5)) ;
						}
						$output.='[/sor_'.$r.'_'.$r_2.'_'.$r_3.'_'.$r_4.'_'.$r_5.']';
						endif;
 					endforeach;
					}else{
					$output.= urlencode(stripslashes($v_4)) ;
					}
					$output.='[/sor_'.$r.'_'.$r_2.'_'.$r_3.'_'.$r_4.']';
					endif;
						
				endforeach;
				}else{
				$output.=urlencode(stripslashes($v_3));
				}									
				$output.='[/sor_'.$r.'_'.$r_2.'_'.$r_3.']';
				endif;
	
			endforeach;
			}else{
			$output.=urlencode(stripslashes($v_2));
			}
			$output.='[/sor_'.$r.'_'.$r_2.']';
			endif;
			//END2
			
		endforeach;
		}else{
		$output.= urlencode(stripslashes($v));
		}
 		$output.= '[/sor_'.$r.']';
		endif;
	endforeach;
	}
				
				
 		
	if( !empty($opt)){
 		return urlencode($output);	
  
	}else{
		echo urlencode($output);	
 	die();
		 
	}
 }
 } 
}
/********************************************************************
sor Options DeCode
*********************************************************************/
  if ( !function_exists ( "sor_options_decode" )){

function sor_options_decode($data){
 	$o = sor_serialize_code(stripslashes( $data),'sor');
	$a =array();
	//OPTION1
	if(is_array($o)){
	foreach($o as $v) :
				if(isset( $v)&& $v !=='' ){

	 	$a[stripslashes($v['key'])] = sor_options_decode_array($v);
				}
	endforeach;
	}
	return $a;
}
}

if ( !function_exists ( "sor_options_decode_array" )){
function sor_options_decode_array($v){
	 $a = array();
	 $o_2 = sor_serialize_code(stripslashes($v['value']),stripslashes($v['name']));
		if(is_array($o_2)){
		foreach($o_2 as $v_2) :
			if(isset( $v_2)&& $v_2 !=='' ){
 		  		$a[urldecode(stripslashes($v_2['key']))] = sor_options_decode_array($v_2);
			}
		endforeach;
		}else{
			$a = urldecode(stripslashes($v['value']));
		}
	 return $a;
 }
  }
 
 
 /********************************************************************
sor Options Array Row
*********************************************************************/
  if ( !function_exists ( "sor_options_array_row" )){
function sor_options_array_row($row){
	$options = json_decode($row,true);
  	$array = array();
	
	if(!empty($options)){
	foreach($options as $key => $value) :
		if(isset($value)&& $value !=='' ){
		foreach($value as $key => $value) :
				$array[$key] = $value;
		  
		endforeach;
		}
	endforeach;
	}
	return $array;
}
  }

if ( !function_exists ( "sor_serialize_code" )){
function sor_serialize_code($in,$code) { 
	preg_match_all('/\[('.$code.'_\d+)(_\d+)?(?: (attr_[^"]*)="([^"]*)")?\](.+(?=\[\/\1\2?\]))?/',$in,$out,PREG_SET_ORDER);
 	foreach($out as $sc){
		if(isset($sc[1]) && $sc[1] !=='' ){
        // store child data in parent's content array
        $shortcodes[$sc[1]]=array('name'=>$sc[1].$sc[2],'key'=>isset($sc[4]) && $sc[4] !=='' ? $sc[4]:'' ,'value'=> isset($sc[5]) && $sc[5] !==''? $sc[5]:'' );
    	}
	}
	$shortcod = isset($shortcodes) && $shortcodes !==''? $shortcodes:'';
	return  $shortcod;
}
}
?>