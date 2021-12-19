<?php
/**
 * The template for displaying front page
 *
 * (Home Page of Website)
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package stylefit-theme
 */

get_header();
?>

<div class="container-fluid px-0" id="home-page">
	<?php the_content(); ?>
<?php get_footer();?>
