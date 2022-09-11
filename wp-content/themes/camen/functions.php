<?php
// đường dẫn trang chủ
define('HOME_URI', esc_url(home_url('/')));

// đường dẫn theme
define('THEME_DIR', get_template_directory());
define('THEME_URI', get_template_directory_uri());

// thông tin theme
$my_theme = wp_get_theme();
define('THEME_NAME', sanitize_title($my_theme->get('Name')));
define('THEME_VERSION', $my_theme->get('Version)'));

// đường dẫn chứa các tài liệu css/js/images/fonts
define('ASSETS_URI', THEME_URI . '/assets');

// đường dẫn thư viện
define('VENS_URI', THEME_URI . '/vendors');

// đường dẫn thư viện
define('LIBS_DIR', THEME_DIR . '/inc');

if ( ! function_exists( 'tk_setup' ) ) {
	function tk_setup() {
	
		add_theme_support( 'title-tag' );
        
        add_theme_support( 'post-thumbnails' ); 
        
        add_theme_support( 'custom-logo' );
        
		add_theme_support(
			'post-formats',
			array(
				'gallery',
				'image',
				'quote',
				'video',
			)
		);

		register_nav_menus(
			array(
				'primary'   => esc_html__( 'Primary menu', 'tk' ),
				'footer'    => esc_html__( 'Footer menu', 'tk' ),
			)
		);

	}
}

add_action( 'after_setup_theme', 'tk_setup' );

function tk_widgets_init() {
    
    register_sidebar(
		array(
			'name'          => esc_html__( 'Product Sidebar', 'tk' ),
			'id'            => 'product-sidebar',
			'description'   => esc_html__( 'Add widgets here to appear in your single product pages.', 'tk' ),
			'before_widget' => '<section id="%1$s" class="product-widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h4 class="title-style product-widget-title">',
			'after_title'   => '</h4>',
		)
	);
    
}

add_action( 'widgets_init', 'tk_widgets_init' );

if ( ! function_exists( 'tk_styles' ) ) :

	function tk_styles() {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
        
		wp_enqueue_style( 'fontawesome', ASSETS_URI . '/fonts/fontawesome/css/all.css',	array(), $version_string );
		wp_enqueue_style( 'swiper-bundle-style', ASSETS_URI . '/css/swiper-bundle.min.css',	array(), $version_string );
		// Enqueue bootstrap stylesheet.
		wp_enqueue_style( 'bootstrap-style', VENS_URI . '/bootstrap/css/bootstrap.css',	array(), $version_string );

        // Enqueue theme stylesheet.
		wp_enqueue_style( 'tk-style', ASSETS_URI . '/css/themes.css',	array(), $version_string );
		wp_enqueue_style( 'tk-style', THEME_URI . '/style.css',	array(), $version_string );

        // Enqueue theme scripts.
        wp_enqueue_script( 'swiper-bundle-script', ASSETS_URI . '/js/swiper-bundle.min.js', array('jquery'), $version_string, true );
        wp_enqueue_script( 'script', ASSETS_URI . '/js/script.js', array('jquery'), $version_string, true );
        
        wp_localize_script( 'main-script', 'tk_ajax', array(
                                'ajaxurl' => admin_url( 'admin-ajax.php' ),
                                'siteurl' => HOME_URI,
                                'assetsurl' => ASSETS_URI,
                            ) );

	}

endif;

add_action( 'wp_enqueue_scripts', 'tk_styles' );

add_filter('use_block_editor_for_post', '__return_false');
add_filter( 'use_widgets_block_editor', '__return_false' );

//require_once( get_template_directory() . '/inc/tk_navwalker.php');

/**
 * Load Sanitization file.
 */
require_once get_template_directory() . '/inc/sanitization.php';
/**
 * Called all the Customize file.
 */
require_once( get_template_directory() . '/inc/customize/customizer.php');

/**
 * Called theme options file.
 */
require_once( get_template_directory() . '/inc/customize/theme-options.php');

// tk CUSTOM FUNCTIONS
require LIBS_DIR . '/theme-functions.php';