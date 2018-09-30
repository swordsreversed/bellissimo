<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package storefront
 */

get_header(); ?>

	<div id="primary" class="">
    <header class="hero cart-hero">
  <div class="center-content">
  </div>
</header>
		<main id="main" class="site-main" role="main">
            <!-- header -->

                <a href="/">
                    <img class="top-logo" src="/wp-content/uploads/2018/09/dark-logo.png" alt="Logo">
                </a>


            </div>
            <div class="cart-subcontainer">

			<?php while ( have_posts() ) : the_post();

				do_action( 'storefront_page_before' );

				get_template_part( 'content', 'page' );

				/**
				 * Functions hooked in to storefront_page_after action
				 *
				 * @hooked storefront_display_comments - 10
				 */
				do_action( 'storefront_page_after' );

			endwhile; // End of the loop. ?>
            </div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
