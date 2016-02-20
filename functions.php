<?php

/*-----------------------------------------------------------------------------------*/
/* Start AVI Base Functions */
/*-----------------------------------------------------------------------------------*/

// Set path to WooFramework and theme specific functions
$functions_path = dirname(__FILE__) . '/functions/';
$includes_path = dirname(__FILE__) . '/includes/';

// WooFramework
require_once ($functions_path . 'admin-init.php');			// Framework Init

/*-----------------------------------------------------------------------------------*/
/* Load the theme-specific files, with support for overriding via a child theme.
/*-----------------------------------------------------------------------------------*/

$includes = array(
				'includes/theme-options.php', 			// Options panel settings and custom settings
				'includes/post-types.php',				// Vital post types
				//'includes/theme-functions.php', 		// Custom theme functions
				//'includes/theme-actions.php', 			// Theme actions & user defined hooks
				//'includes/theme-comments.php', 			// Custom comments/pingback loop
				//'includes/theme-js.php', 				// Load JavaScript via wp_enqueue_script
				//'includes/sidebar-init.php', 			// Initialize widgetized areas
				//'includes/theme-widgets.php'			// Theme widgets
				'schema/schema-functions.php'			// Shared Schema functions
				);

// Theme-Specific
//$includes[] = 'includes/theme-advanced.php';			// Advanced Theme Functions
//$includes[] = 'includes/theme-shortcodes.php';	 		// Custom theme shortcodes
// Modules
//$includes[] = 'includes/woo-layout/woo-layout.php';
//$includes[] = 'includes/woo-meta/woo-meta.php';
//$includes[] = 'includes/woo-hooks/woo-hooks.php';

// Allow child themes/plugins to add widgets to be loaded.
$includes = apply_filters( 'avi_includes', $includes );
			
foreach ( $includes as $i ) {
	locate_template( $i, true );
}

/*-----------------------------------------------------------------------------------*/
/* You can add custom functions below */
/*-----------------------------------------------------------------------------------*/


/*-----------------------------------------------------------------------------------*/
/* Don't add any code below here or the sky will fall down */
/*-----------------------------------------------------------------------------------*/
?>