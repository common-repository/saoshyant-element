<?php
 /*
Plugin Name: سوشیانت المنت
Description: این افزونه شامل انواع المنتها از جمله سرسرک اسلایدر میباشد
Author: Saoshyant 
Version: 1.2
License: GPLv2 or later
Text Domain: saoshyant-element
*/

/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more dSTails.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin StreST, Fifth Floor, Boston, MA  02110-1301, USA.
 
*/

if( !defined('SSEL_PATH') ){
	define( 'SSEL_PATH', plugin_dir_path(__FILE__) );
}
if( !defined('SSEL_DIR') ){
	define( 'SSEL_DIR', plugin_dir_url(__FILE__) );
}	
 
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																 Slider Install
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if( ! function_exists( 'ssel_install' ) ) {
function ssel_install() {

     
            do_action( 'ssel_init' );
}
 
add_action( 'plugins_loaded', 'ssel_install', 1 );
}
include_once SSEL_PATH . 'sorsorak.php';     
 
 
?>