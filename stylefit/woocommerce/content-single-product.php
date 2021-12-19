<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>

    <?php
	/**
	 * Hook: woocommerce_before_single_product_summary.
	 *
	 * @hooked woocommerce_show_product_sale_flash - 10
	 * @hooked woocommerce_show_product_images - 20
	 */
	do_action( 'woocommerce_before_single_product_summary' );
	?>

    <div class="summary entry-summary">
        <?php
		/**
		 * Hook: woocommerce_single_product_summary.
		 *
		 * @hooked woocommerce_template_single_title - 5
		 * @hooked woocommerce_template_single_rating - 10
		 * @hooked woocommerce_template_single_price - 10
		 * @hooked woocommerce_template_single_excerpt - 20
		 * @hooked woocommerce_template_single_add_to_cart - 30
		 * @hooked woocommerce_template_single_meta - 40
		 * @hooked woocommerce_template_single_sharing - 50
		 * @hooked WC_Structured_Data::generate_product_data() - 60
		 */
//		do_action( 'woocommerce_single_product_summary' );
		?>


        <div class="ap_custom_field_data">
            <h3 class="product_hdng"><?php the_title();?></h3>

            <div class="productZip">
                <?php 
                while( have_rows('ap-zips') ) : the_row(); 
                    $images = get_sub_field('photos_zip' );
                    $fileSize = $images['filesize'];
                    $fileSize = size_format($fileSize, 2);
                ?>

                <a href="<?php echo $images['url'] ?>">
                    <span class="icon">
                        <svg class="Svg-Icon" viewBox="0 0 24 26">
                            <path fill="currentColor" d="M5,20H19V18H5M19,9H15V3H9V9H5L12,16L19,9Z"></path>
                        </svg>
                    </span>
                    <span class="name">
                        <?php echo get_sub_field('phots_zip_name' );?>
                    </span>
                    <span class="size">
                        <?php echo $fileSize;?>
                    </span>
                </a>

                <?php 
                endwhile; 
                ?>
            </div>

            <div class="product_custom_info">
                <ul>
                    <?php if( get_field('product_type') ): ?>
                    <li>
                        <b>
                            Type
                        </b>

                        <span>
                            <?php the_field('product_type'); ?>
                        </span>
                    </li>
                    <?php endif; ?>
                    <?php if( get_field('product_method') ): ?>
                    <li>
                        <b>
                            Method
                        </b>

                        <span>
                            <?php the_field('product_method'); ?>
                        </span>
                    </li>
                    <?php endif; ?>
                    <li>
                        <b>
                            Tags
                        </b>

                        <div class="tagsDes">
                        <?php
                            global $product;

                            $terms = get_the_terms( $product->get_id(), 'product_tag' );
                            foreach ( $terms as $term ) { ?>
                            <span>
                                <?php echo $term->name; ?>
                            </span>
                            <?php }
                        ?>
                        </div>
                    </li>
                    <li>
                        <b>
                            Category
                        </b>
                        <div class="tagsDes">
                        <?php
                            global $product;

                            $terms = get_the_terms( $product->get_id(), 'product_cat' );
                            foreach ( $terms as $term ) { ?>
                            <span>
                                <?php echo $term->name; ?>
                            </span>
                            <?php }
                        ?>
                        </div>
                    </li>
                    <?php if( get_field('product_released_date') ): ?>
                    <li>
                        <b>
                            Released
                        </b>

                        <span>
                            <?php the_field('product_released_date'); ?>
                        </span>
                    </li>
                    <?php endif; ?>
                    <?php if( get_field('dimensions') ): ?>
                    <li>
                        <b>
                            Dimensions
                        </b>

                        <span>
                            <?php the_field('dimensions'); ?>
                        </span>
                    </li>
                    <?php endif; ?>
                    <li>
                        <b>
                            Downloads
                        </b>

                        <span>
                            Downloads 1350 Total / 1099 Last week
                        </span>
                    </li>
                    <?php if( get_field('short_link') ): ?>
                    <li>
                        <b>
                            Shortlink
                        </b>

                        <span class="shortLink">
                            <input type="text" value="<?php the_field('short_link'); ?>" id="shrtLnkCopy" onClick="copyShortLink()">
                            <span id="copiedMsg" style="display:none;">copied to clipboard!</span>
                        </span>
                    </li>
                    <?php endif; ?>
                </ul>
            </div>










        </div>
    </div>

    <?php
	/**
	 * Hook: woocommerce_after_single_product_summary.
	 *
	 * @hooked woocommerce_output_product_data_tabs - 10
	 * @hooked woocommerce_upsell_display - 15
	 * @hooked woocommerce_output_related_products - 20
	 */
//	do_action( 'woocommerce_after_single_product_summary' );
	?>
</div>

<?php ///do_action( 'woocommerce_after_single_product' ); ?>
