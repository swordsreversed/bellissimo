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
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

global $product;
/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked wc_print_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<!-- <div id="product-<?php //the_ID(); ?>" <?php //wc_product_class(); ?>> -->
    <div class="span3">
	<?php
		/**
		 * Hook: woocommerce_before_single_product_summary.
		 *
		 * @hooked woocommerce_show_product_sale_flash - 10
		 * @hooked woocommerce_show_product_images - 20
		 */
		do_action( 'woocommerce_before_single_product_summary' );
	?>
    </div>
	<div class="span3 summary entry-summary product-summary">
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
			do_action( 'woocommerce_single_product_summary' );
		?>
	</div>

	<?php
		/**
		 * Hook: woocommerce_after_single_product_summary.
		 *
		 * @hooked woocommerce_output_product_data_tabs - 10
		 * @hooked woocommerce_upsell_display - 15
		 * @hooked woocommerce_output_related_products - 20
		 */
		//do_action( 'woocommerce_after_single_product_summary' );
	?>
<!-- </div> -->


    </div><!-- end css grid -->
</div><!-- product-subcontainer  -->
</div><!-- product-container -->

<div class="product-container bottom-diagonal">

    <div class="product-subcontainer remove-top-p remove-top-m no-diagonal">
        <div class="grid">
            <div class="span3">
                <h4>MORE INFORMATION</h4>
                <p class="marg-bottom-m more-info">
                    <?php echo $product->description;
                    ?>
                </p>
                <?php
                    if ($product->get_attribute('pa_best-suited-for')) {
                        echo "<h5>BEST SUITED FOR:</h5>";
                    }
                ?>
                <p class="more-info">
                <?php echo $product->get_attribute('pa_best-suited-for'); ?>
                </p>
                </div>
                <div class="span3">
                    <img src="/wp-content/uploads/2018/09/coffeepour.jpg" alt="Coffee Pour">
                </div>
            </div>
        </div>
    </div><!-- product-subcontainer  -->
</div><!-- product-container  -->



<section class="full-back-light-beige">
    <div>
        <div>
            <?php
                echo do_shortcode('[related_products per_page=6 columns=3 orderby="date" order="desc"]');
            ?>
        </div>
    </div>
</section>

<!-- image -->
<div class="hero fixed-image3"></div>
<!-- 2nd product section -->
<section class="pad-top-m full-back-light-beige">
    <div>
        <div class="">
            <?php
                echo do_shortcode('[product_category category="equipment" per_page=3 columns=3 orderby="date" order="desc"]');
            ?>
        </div>
    </div>
</section>

<!-- call to action -->
<section class="cta cta-extra-pad grid diagonal-flip">
    <div class="left span3 center-align">
        <h3>PARTNER WITH US</h3>
        <p>
            We believe the partnership we create with you is not just about supplying you with top quality coffee beans. We also take a genuine and personal interest to ensure your café or coffee-selling business gets the best possible outcome.
        </p>
        <div class=""><a href="#" class="button fixed-button"> CAFE PARTNERSHIP</a></div>
        <div class=""><a href="#" class="button fixed-button"> COFFEE FOR YOUR WORKPLACE</a></div>
    </div>
    <div class="right span3">
        <img src="/wp-content/uploads/2018/09/partner-background.png" alt="coffee pour">
    </div>
</section>
<?php // do_action( 'woocommerce_after_single_product' ); ?>
