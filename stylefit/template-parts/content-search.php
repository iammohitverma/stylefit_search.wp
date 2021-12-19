<?php

/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package departmental-store
 */

?>


    <div id="post-<?php the_ID(); ?>" class='ds-shop-row ds-search-col' <?php # post_class(); ?>>

        <div class='product-thumb'>
            <a href="<?php the_permalink(); ?>">
                <img src="<?php the_post_thumbnail_url(); ?>" class="w-100">
            </a>
        </div>



    <!--- if you want to display title and  add to cart on search ***--->
    <?php /* the_title( sprintf( '<p class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></p>' ); ?>

    <span class="price">
        <?php global $post, $wp_query;
                $postID = $wp_query->post->ID;
                echo do_shortcode( '[add_to_cart id=' . $postID . ']' );
            ?>
    </span>
    */ ?>

    </div><!-- #post-<?php the_ID(); ?> -->

