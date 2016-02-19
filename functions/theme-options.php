<?php

/**
 * Adds postMessage support for site title and description for the Customizer.
 *
 * @since 0.0.1
 *
 * @param WP_Customize_Manager $wp_customize The Customizer object.
 */
function avi_customize_register( $wp_customize ) {
	
	//$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	//$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	
	// ------------------------------------------------------------
	// Footer Section
	// ------------------------------------------------------------
	$wp_customize->add_section( 'footer' , array(
		'title' => __( 'Footer', 'themename' ),
		'priority' => 90, // Before Navigation.
	) );
	
		$wp_customize->add_setting( 'avi_footer_copyright', array(
			'type' => 'option', // or 'theme_mod'
			'capability' => 'edit_theme_options',
			'default' => '&copy; 2015',
			'transport' => 'postMessage', // or postMessage
			'sanitize_callback' => '',
			'sanitize_js_callback' => '', // Basically to_json.
		) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'avi_footer_copyright', array(
				'label'       => __( 'Footer Copyright Text', 'avibase' ),
				'section'     => 'footer',
			) ) );
	
} // end avi_options
add_action( 'customize_register','avi_customize_register', 11 );

?>