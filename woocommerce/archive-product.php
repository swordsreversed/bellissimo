<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

defined('ABSPATH') || exit;

get_header();

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
// do_action( 'woocommerce_before_main_content' );

?>
<div class="">
  <div class="">
  <a href="/">
    <img class="top-logo" src="/wp-content/uploads/2018/09/dark-logo.png" alt="Logo">
    <?php echo do_shortcode('[smartslider3 slider=2]'); ?>
  </a>
  </div>
</div>
<?php
    do_action('woocommerce_archive_description');
?>
<?php
if (woocommerce_product_loop()) {

    /**
     * Hook: woocommerce_before_shop_loop.
     *
     * @hooked wc_print_notices - 10
     * @hooked woocommerce_result_count - 20
     * @hooked woocommerce_catalog_ordering - 30
     */
    // do_action('woocommerce_before_shop_loop');

    // woocommerce_product_loop_start();

    // if ( wc_get_loop_prop( 'total' ) ) {
    // 	while ( have_posts() ) {
    // 		the_post();

    // 		/**
    // 		 * Hook: woocommerce_shop_loop.
    // 		 *
    // 		 * @hooked WC_Structured_Data::generate_product_data() - 10
    // 		 */
    // 		do_action( 'woocommerce_shop_loop' );

    // 		wc_get_template_part( 'content', 'product' );
    // 	}
    // }

    // woocommerce_product_loop_end();

    /**
     * Hook: woocommerce_after_shop_loop.
     *
     * @hooked woocommerce_pagination - 10
     */
    // do_action( 'woocommerce_after_shop_loop' );
} else {
    /**
     * Hook: woocommerce_no_products_found.
     *
     * @hooked wc_no_products_found - 10
     */
    // do_action( 'woocommerce_no_products_found' );
}

/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
// do_action( 'woocommerce_after_main_content' );
?>

<?php
/**
 * Hook: woocommerce_sidebar.
 *
 * @hooked woocommerce_get_sidebar - 10
 */
// do_action( 'woocommerce_sidebar' );

?>

<!-- <section class="grid no-diagonal">
  <div class="product-group span6 center-align pad-top-s">
    <div class="product-grid ">
      <h2 class="product-cat-header"><span class="full-back-light-beige">EQUIPMENT</span></h2>
      <?php
        // echo do_shortcode('[product_category category="coffee-blends" per_page=12 columns=3 orderby="date" order="desc"]');
      ?>
    </div>
  </div>
</section> -->

<section class="product-grid">
    <h2 class="product-cat-header"><span class="back-white">coffee beans</span></h2>
  <?php
    echo do_shortcode('[product_category category="coffee" per_page=6 columns=3 orderby="date" order="desc"]');
  ?>
</section>

<!-- equipment -->

<section class="full-back-light-beige">
    <div class="product-grid">
        <h2 class="product-cat-header"><span class="full-back-light-beige">EQUIPMENT</span></h2>
        <div>
            <?php
                echo do_shortcode('[product_category category="coffee-making-accessories" per_page=6 columns=3 orderby="date" order="desc"]');
            ?>
        </div>
    </div>
</section>

<!-- <section class="grid no-diagonal">
  <div class="product-group span6 full-back-light-beige center-align pad-top-s">
    <div class="product-grid ">
      <h2 class="product-cat-header"><span class="full-back-light-beige">EQUIPMENT</span></h2>
      <?php
    //   echo do_shortcode('[product_category category="coffee-making-accessories" per_page=12 columns=3 orderby="date" order="desc"]');
      ?>
    </div>
  </div>
</section> -->
<!-- call to action -->
<section class="cta cta-med grid no-diagonal">
    <div class="left span3 center-align">
        <h3>PARTNER WITH US</h3>
        <p>We believe the partnership we create with you is not just about providing you with great quality coffee, we wish to take a genuine and personal interest in your business, understand your objectives and work together with you to enable you to manage your business for the best outcome possible.</p>
        <div><a href="#" class="button fixed-button"> COFFEE FOR YOUR WORKPLACE</a></div>
        <div><a href="#" class="button fixed-button"> CAFE PARTNERSHIP</a></div>
    </div>
    <div class="right span3">
        <img src="/wp-content/uploads/2018/09/partner-background.png" alt="coffee pour">
    </div>
</section>
<?php


get_footer('shop');
