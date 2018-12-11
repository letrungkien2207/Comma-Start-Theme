<?php 
/*
	* The index use to disable directory browsing
	* Use to register custom PHP library file or files you want to register when your theme loading
*/

define( 'INC', get_template_directory().'/inc/' );

/*
	* Example: require_once CUSTOM-POST.'{ name file you want to load }.php';
*/
	
/*
	* WP Bootstrap Navwalker
	* https://github.com/wp-bootstrap/wp-bootstrap-navwalker
*/
require_once INC.'class-wp-bootstrap-navwalker.php';
