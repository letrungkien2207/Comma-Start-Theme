<?php 
/*
	* The index use to disable directory browsing
	* Use to register custom post type file for our theme
*/

define( 'CUSTOMPOST', get_template_directory().'/custom-post/' );

/*
	* Example: require_once CUSTOM-POST.'{ name file you define your post type }.php';
*/
	
require_once CUSTOMPOST.'example-post-type.php';
