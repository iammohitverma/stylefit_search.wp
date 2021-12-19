<?php
/**
 * The template for displaying all inner pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package stylefit-theme
 */

get_header(); 
$pageIdAP = get_the_id();
?>

<?php if($pageIdAP == '0'){ ?>
<!--
<div class="container-fluid px-0 ap-woocommerce-category" id="">
    <div class="row">
        <div class="col-md-4">
            <h4>Sidebar</h4>
        </div>
        <div class="col-md-8">
            <?php the_content(); ?>
        </div>
    </div>
</div>
-->

<section class="sb-shop-page catg-page">
    <div class="sb-product-filter">
        <?php echo do_shortcode('[smart_search id="1"]') ?>
        <?php echo do_shortcode('[searchandfilter id="product_filter"]') ?>
    </div>
    <div class="sb-product-section">
        <h2><?php the_title(''); ?> </h2>
        <?php the_content(); ?>
    </div><!-- #main -->
</section>
<?php } else{ ?>
<div class="container-fluid px-0 ap-all-pages" id="page-<?php echo get_the_id(); ?>">
    <?php the_content(); ?>
</div>
<?php } ?>

<?php get_footer(); ?>
