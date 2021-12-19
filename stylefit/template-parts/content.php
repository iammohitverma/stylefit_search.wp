<?php

/**

 * Template part for displaying posts

 *

 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/

 *

 * @package stylefit-theme

 */



?>



<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>



</article><!-- #post-<?php the_ID(); ?> -->

<section class="container-fluid single-post-banner" style="background-image:url(<?php the_post_thumbnail_url();?>);">
    <div class="container-md">
        <div class="row">
            <div class="col-12">
                <div class="inner">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container-fluid single-post">
    <div class="container-md">
        <div class="row d-flex justify-content-center">
            <div class="col-12 col-sm-11 col-md-10 col-lg-9">
                <div class="inner box">
                    <p class="date">
                        <?php echo get_the_date('d M Y'); ?>
                    </p>
                    <h1>
                        <?php the_title(); ?>
                    </h1>
                    <div class="editor_content">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

