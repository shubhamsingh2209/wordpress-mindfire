<?php 

/**
 * Plugin Name: Movie Rating
 * Plugin URI: https://example.org
 * Description: This is a dummy plugin.
 * Version: 0.0.1
 * Requires PHP: 7.2
 * Author: Shubham Singh
 * Text Domain: Dummy
 * Copyright 2019 WP Media
 *
 */

/* check only for admin access */

if( !function_exists( 'add_action' ) ) {
	echo 'You do not have access to this page.';
	exit();
}

 /* includes  for plugins */
 include( 'includes/activate.php' );
 
/* hooks */
/* Fires after WordPress has finished loading but before any headers are sent. */
 add_action( 'init', 'mindfire_movies_init');
 


 register_activation_hook( __FILE__ , 'mindfire_plugin_activated' ); 

 