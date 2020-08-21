<?php 

function mindfire_plugin_activated() {
	if( version_compare( get_bloginfo('version'), '4.2', '<') ){
		wp_die( __('You must update your WP installation to 4.2 or higher to use this plugin', 'bg-movies') );
    }
    
	// global $wpdb;
	// $createSQL = "
	// 	CREATE TABLE `". $wpdb->prefix ."movie_ratings` (
	// 	  `id` bigint(20) NOT NULL AUTO_INCREMENT,
	// 	  `movie_id` bigint(20) NOT NULL,
	// 	  `viewer_rating` float NOT NULL,
	// 	  `user_ip` varchar(32) NOT NULL,
	// 	  PRIMARY KEY  (id)
	// 	) ENGINE=InnoDB ". $wpdb->get_charset_collate() .";
	// 	";	
    // require( ABSPATH . '/wp-admin/includes/upgrade.php' );
    
	// dbDelta( $createSQL );
	
    // wp_schedule_event( time(), 'daily', 'bgs_suggested_movie_hook' );
    	
}