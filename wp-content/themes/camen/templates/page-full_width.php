<?php
/**
 * Template Name: Full Width
 */

get_header();
?>

<main id="site-content" class="site-main fullwidth" role="main">
    
	<?php

	if ( have_posts() ) {

		while ( have_posts() ) {
			the_post();
            
			the_content();
		}
	}

	?>

</main><!-- #site-content -->

<?php get_footer(); ?>