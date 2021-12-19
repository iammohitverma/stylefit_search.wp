<?php
/**
 * The template for displaying blog page 
 *
 * Blog Listing Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package stylefit-theme
 */

 get_header(); ?>

<section class="container-fluid sf-banner">
    <div class="container-md">
        <div class="row">
            <div class="col-12">
                <div class="inner">
                    <h1 class="hdng">Knowledge base</h1>
                    <p class="subHdng">Learn more about the features and capabilities of the ARsenal 3D & AR platform for ecommerce.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container-fluid sf-listing">
    <div class="container">
        <div class="row">
        <?php
        if ( have_posts() ) :
            /* Start the Loop */
            while ( have_posts() ) :
                the_post();
        ?>


            <div class="col-12 col-sm-6 col-md-6">
                <div class="inner box">
                    <figure>
                        <a href="<?php the_permalink(); ?>">
                            <img src="<?php the_post_thumbnail_url();?>" class="w-100" alt="">
                        </a>
                    </figure>
                    <div class="content">
                        <h1 class="hdng">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </h1>
                        <p class="date">
                            <?php echo get_the_date('d M Y'); ?>
                        </p>
                    </div>
                </div>
            </div>
        <?php
            endwhile;

            the_posts_navigation();

        else :

            get_template_part( 'template-parts/content', 'none' );

        endif;
        ?>

        </div>
    </div>

</div><!-- #main -->

<?php get_footer(); ?>
