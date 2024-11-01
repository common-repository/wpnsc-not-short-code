<?php
/*
***********************

Plugin Name: wpNSC (Not Short Code)
Plugin URI: http://goodingsweb.com/wp-plugins/29/wpnsc-not-short-code/
Description: Allows a user to escape shortcodes in posts. Wrap [wpNSC][/wpNSC] tags around your content to escape! It's ideal for plugin authors who need to write the shortcode on their blog. Tested to WP2.7
Version: 1.0
Author: Liam Gooding
Author URI: http://goodingsweb.com

***********************

Copyright (C) 2009 Liam Gooding, http://GoodingsWeb.com

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.


***********************

The very simple purpose of this plugin is to allow a user to escape regular shortcode functionality when writing a post. 
Simply wrap your shortcodes in the [wpNSC][/wpNSC]
I came across a need to do this when trying to write instructions for my plugins on a Wordpress website.
I expect this to become built in to future versions of Wordpress, but until then enjoy!

***********************
*/


/****************************
* The main wpNSC Class
****************************/
if(!class_exists("wpNSC")) {
    class wpNSC {
		/**
		* Define any class variables/constants
		**/
		
		/**
		* Class constructor
		**/
        function wpNSC() { 
        }
		
		/**
		* handles shortcode [wpNSC]
		**/
		function wpNSC_shortcode($attributes, $content=NULL){
			
			return $content;
		}
				
   
    } //End Class wpNSC
} //End If Class wpNSC

/****************************
* Create an instance of the wpNSC Class
****************************/
if(class_exists("wpNSC")) {
    $wpNSC = new wpNSC();
}

/****************************
* Wordpress Hooks
****************************/
if(isset($wpNSC)){
	// Short codes
	add_shortcode( 'wpNSC', array(&$wpNSC, 'wpNSC_shortcode') );
}

?>