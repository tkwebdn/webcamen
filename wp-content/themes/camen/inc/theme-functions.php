<?php
function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a  {
            background-image: url(<?php echo ASSETS_URI?>/img/logo/logo.png);
            padding-bottom: 0;
            background-size: 68px;
            width: 68px;
            height: 62px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

add_filter( 'login_headerurl', 'custom_loginlogo_url' );
function custom_loginlogo_url($url) {
    return site_url();
} 

function my_login_logo_url_title() {
    return get_bloginfo('name');
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );

function news_func( $atts ) {
    
    global $post;    
    $orig_post = $post;
    
    $atts = shortcode_atts( array(
                        		'number'        => -1,
	                       ), $atts, 'news' );
                           
	$html = '';
    $args = array(
                'post_type'         => 'post',
                'orderby'           => 'date',
                'order'             => 'DESC',
                'posts_per_page'    => $atts['number'],
                'post_status'       => 'publish',
            );
            
    $wp_query = new WP_Query($args);
    if ( $wp_query->have_posts() ) :
        
        $html.= '<div class="product__news_details"><div class="owl-carousel owl-theme news-carousel">'; 
        while ( $wp_query->have_posts() ) : $wp_query->the_post();
            $ID = get_the_ID();
            
            $html.= '<div class="item">
                        <div class="news-details">
                          <a class="img-news-all" href="'.get_permalink($ID).'">
                            '.get_the_post_thumbnail($new->ID, '373x180').'  
                          </a>
                          <span class="time-day">'.get_the_date('d', $new->ID).' Thg '.get_the_date('m', $new->ID).', '.get_the_date('Y', $new->ID).'</span>
                          <a href="'.get_permalink($ID).'" class="text-details">'.get_the_title($ID).'</a>
                        </div>
                    </div>';
            
        endwhile;
        $html.= '</div></div>';
        
    endif;
    
    
	wp_reset_query();
    return $html;
}
add_shortcode( 'news', 'news_func' );
?>