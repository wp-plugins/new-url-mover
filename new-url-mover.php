<?php
/*
Plugin Name: New URL Mover
Plugin URI: http://www.thoughtlab.com
Description: If you move your WordPress installation from one domain to another, this plugin will set the 'siteurl' and 'home' values in your 'wp_options' table to the new location. It will do the same if you move your blog to a different folder on the same domain.
Version: 1.0
Author: ThoughtLab
Author URI: http://www.thoughtlab.com
License: GPLv2
*/

/*
This program is free software; you can redistribute it and/or modify 
it under the terms of the GNU General Public License as published by 
the Free Software Foundation; version 2 of the License.

This program is distributed in the hope that it will be useful, 
but WITHOUT ANY WARRANTY; without even the implied warranty of 
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the 
GNU General Public License for more details. 

You should have received a copy of the GNU General Public License 
along with this program; if not, write to the Free Software 
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA 
*/

add_action('init','init_func');
function init_func(){
	$siteurl = get_option('siteurl');
	$self = $_SERVER["HTTP_REFERER"];
	$root = preg_replace('/\/wp-admin.*/','',$self);
	$root = preg_replace('/\/wp-content.*/','',$root);
	$root = preg_replace('/\/wp-includes.*/','',$root);
	$root = preg_replace('/\/wp-[a-z]*\.php.*/','',$root);
	if($siteurl != $root){
		update_option('siteurl',$root);
		update_option('home',$root);
	}
}
?>