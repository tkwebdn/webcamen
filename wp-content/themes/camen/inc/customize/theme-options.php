<?php
function get_default_theme_options( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
/**
 * Theme Option
 *
 * @since 1.0.0
 */
$wp_customize->add_panel('theme_options',
    array(
        'priority' => 22,
        'capability' => 'edit_theme_options',
        'theme_supports' => '',
        'title' => esc_html__('Theme Option', 'tk'),
    )
);

	/*================= Contact option ======================================*/

	// Contact section
	$wp_customize->add_section( 'section_information',
		array(
			'title'      => esc_html__( 'Thông tin liên hệ', 'tk' ),
			'priority'   => 2,
			'panel'      => 'theme_options',
		)
	);

	$wp_customize->add_setting( 
		'hide_show_information' , 
			array(
			'default' => 'on',
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'tk_sanitize_select',
		) 
	);

	$wp_customize->add_setting(
		'information_company',
		array(
			'default' => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'information_company',
		array(
			'type' => 'text',
			'label' => esc_html__('Công ty', 'tk'),
			'section' => 'section_information',
			'priority' => 9
		)
	);

	$wp_customize->add_setting(
		'information_hotline',
		array(
			'default' => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'information_hotline',
		array(
			'type' => 'text',
			'label' => esc_html__('Hotline', 'tk'),
			'section' => 'section_information',
			'priority' => 9
		)
	);

	$wp_customize->add_setting(
		'information_email',
		array(
			'default' => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'information_email',
		array(
			'type' => 'email',
			'label' => esc_html__('Email', 'tk'),
			'section' => 'section_information',
			'priority' => 9
		)
	);

	$wp_customize->add_setting(
		'information_messenger',
		array(
			'default' => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'information_messenger',
		array(
			'type' => 'text',
			'label' => esc_html__('Facebook', 'tk'),
			'section' => 'section_information',
			'priority' => 9
		)
	);


	$wp_customize->add_setting(
		'information_zalo',
		array(
			'default' => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'information_zalo',
		array(
			'type' => 'text',
			'label' => esc_html__('Zalo', 'tk'),
			'section' => 'section_information',
			'priority' => 9
		)
	);
    
    $wp_customize->add_setting(
		'information_youtube',
		array(
			'default' => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'information_youtube',
		array(
			'type' => 'text',
			'label' => esc_html__('Youtube', 'tk'),
			'section' => 'section_information',
			'priority' => 9
		)
	);
    
    $wp_customize->add_setting(
		'information_tiktok',
		array(
			'default' => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'information_tiktok',
		array(
			'type' => 'text',
			'label' => esc_html__('Tiktok', 'tk'),
			'section' => 'section_information',
			'priority' => 9
		)
	);

	$wp_customize->add_setting(
		'information_address',
		array(
			'default' => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'information_address',
		array(
			'type' => 'text',
			'label' => esc_html__('Address', 'tk'),
			'section' => 'section_information',
			'priority' => 9
		)
	);

	$wp_customize->add_setting(
		'information_address_2',
		array(
			'default' => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'information_address_2',
		array(
			'type' => 'text',
			'label' => esc_html__('Address 2', 'tk'),
			'section' => 'section_information',
			'priority' => 9
		)
	);

	$wp_customize->add_setting(
		'information_googlemaps',
		array(
			'default' => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'information_googlemaps',
		array(
			'type' => 'text',
			'label' => esc_html__('Link Google Maps', 'tk'),
			'section' => 'section_information',
			'priority' => 9
		)
	);

	$wp_customize->add_setting(
		'information_iframe_googlemaps',
		array(
			'default' => ''
		)
	);
	$wp_customize->add_control(
		'information_iframe_googlemaps',
		array(
			'type' => 'textarea',
			'label' => esc_html__('Iframe Google Maps', 'tk'),
			'section' => 'section_information',
			'priority' => 9
		)
	);
	
	/*=========================================
	Header Settings Section
	=========================================*/
	// Header Settings Section // 
	$wp_customize->add_section(
        'header_setting',
        array(
        	'priority'      => 1,
            'title' 		=> __('Header setting','tk'),
			'panel'  		=> 'theme_options',
		)
    );

	$wp_customize->add_setting(
    	'code_textarea_header',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => '',
		)
	);	

	$wp_customize->add_control( 
		'code_textarea_header',
		array(
		    'label'   		=> __('Mã nhúng Header','tk'),
		    'section'		=> 'header_setting',
			'type' 			=> 'textarea',
		)  
	);

	// Footer Setting Section // 
	$wp_customize->add_section(
        'footer_setting',
        array(
            'title' 		=> __('Footer Setting','tk'),
			'panel'  		=> 'theme_options',
		)
    );


    //add select setting to your section
	$wp_customize->add_setting(
    	'logo_footer_image',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'tk_sanitize_image',
		)
	);	

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize , 'logo_footer_image' ,
		array(
			'label'          => __( 'Logo Footer', 'specia' ),
			'section'        => 'footer_setting',
		) 
	));
	
	$wp_customize->add_setting(
    	'code_textarea_footer',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => '',
		)
	);	

	$wp_customize->add_control( 
		'code_textarea_footer',
		array(
		    'label'   		=> __('Mã nhúng Footer','tk'),
		    'section'		=> 'footer_setting',
			'type' 			=> 'textarea',
		)  
	);

	// Copyright Content Setting // 
	$txt_copyright = esc_html__('Copyright &copy; [current_year] [site_title] | Powered by [theme_author]', 'tk' );
	$wp_customize->add_setting(
    	'copyright_content',
    	array(
	        'default'			=> $txt_copyright,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'tk_sanitize_html',
		)
	);	

	$wp_customize->add_control( 
		'copyright_content',
		array(
		    'label'   		=> __('Copyright Content','tk'),
		    'section'		=> 'footer_setting',
			'type' 			=> 'textarea',
		)  
	);

}

add_action( 'customize_register', 'get_default_theme_options' );



// Footer section selective refresh
function footer_section_partials( $wp_customize ){
	
	// copyright_content
	$wp_customize->selective_refresh->add_partial( 'copyright_content', array(
		'selector'            => '.footer-copyright .copyright',
		'settings'            => 'copyright_content',
		'render_callback'  => 'copyright_content_render_callback',
	
	) );
}

add_action( 'customize_register', 'footer_section_partials' );

// copyright_content
function copyright_content_render_callback() {
	return get_theme_mod( 'copyright_content' );
}