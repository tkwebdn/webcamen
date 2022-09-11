<?php
/**
 * Template Name: Home
 */

get_header();
?>

<?php get_template_part('parts/content', 'slider_main')?>

<?php get_template_part('parts/content', 'product_sale')?>

<?php get_template_part('parts/content', 'slogans')?>

<?php get_template_part('parts/content', 'product_hot')?>

<?php get_template_part('parts/content', 'home_news')?>

<?php get_template_part('parts/content', 'customer')?>

<?php get_footer(); ?>