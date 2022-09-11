<?php
/**
 * The template for displaying all single posts
 */

get_header();
?>

<?php

if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();
?>  
                      
    <?php get_template_part( 'template-parts/content', 'page_banner' );?>
    
    <main id="site-content" class="site-main" role="main">
        
        <div class="container">
            <?php the_content();?>
        </div>
        
    </main><!-- #site-content -->
    
<?php                
	}
}
?>

<?php get_footer();?>