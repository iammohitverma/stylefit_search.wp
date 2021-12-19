<?php

/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package stylefit-theme
 */

get_header(); ?>

<!-- include search result file -->

<section class="sb-shop-page">
	<div class="sb-product-filter">
        <?php echo do_shortcode('[smart_search id="1"]') ?>
		<?php echo do_shortcode('[searchandfilter id="product_filter"]') ?>
	</div>
	<div class="sb-product-section">
		<div class="row shop-inner">
			<?php if (have_posts()) : ?>

				<header class="header-inner search-page">
					<h3 class="page-title">
						<?php
						/* translators: %s: search query. */
						printf(esc_html__('Search Results for: %s', 'departmental-store'), '<span>' . get_search_query() . '</span>');
						?>
					</h3>
				</header><!-- .page-header -->

				<div class="col-sb-outer">
				<?php
				/* Start the Loop */
				while (have_posts()) :
					the_post();

					/**
					 * Run the loop for the search to output the results.
					 * If you want to overload this in a child theme then include a file
					 * called content-search.php and that will be used instead.
					 */
					get_template_part('template-parts/content', 'search');

				endwhile;

				the_posts_navigation();

			else :

				get_template_part('template-parts/content', 'none');

			endif;
				?>
			</div>
		</div>
	</div><!-- #main -->
</section>
<?php get_footer(); ?>