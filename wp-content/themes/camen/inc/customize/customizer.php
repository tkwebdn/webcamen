<?php
function tk_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	
}
add_action( 'customize_register', 'tk_customize_register' );

/**
 * Binds JS handlers to make Theme customizer preview reload changes asynchronously.
 */
function tk_customize_preview_js() {
	wp_enqueue_script( 'scrip-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
//add_action( 'customize_preview_init', 'tk_customize_preview_js' );