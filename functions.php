<?php

/**
 * Storefront automatically loads the core CSS even if using a child theme as it is more efficient
 * than @importing it in the child theme style.css file.
 *
 * Uncomment the line below if you'd like to disable the Storefront Core CSS.
 *
 * If you don't plan to dequeue the Storefront Core CSS you can remove the subsequent line and as well
 * as the sf_child_theme_dequeue_style() function declaration.
 */
//add_action( 'wp_enqueue_scripts', 'sf_child_theme_dequeue_style', 999 );

/**
 * Dequeue the Storefront Parent theme core CSS
 */
function sf_child_theme_dequeue_style()
{
    wp_dequeue_style('storefront-style');
    wp_dequeue_style('storefront-woocommerce-style');
}

function enqueue_required_stylesheets()
{
    wp_enqueue_style('font-awesome', 'https://use.fontawesome.com/releases/v5.3.1/css/all.css');
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700|Roboto+Mono:400,500,700|Old+Standard+TT:400i');
}
add_action('wp_enqueue_scripts', 'enqueue_required_stylesheets');
/**
 * Note: DO NOT! alter or remove the code above this text and only add your custom PHP functions below this text.
 */

/**
* Disable sidebar on product pages in Storefront.
*
* @param bool $is_active_sidebar
* @param int|string $index
*
* @return bool
*/
function wc_remove_sidebar($is_active_sidebar, $index)
{
    if ($index !== "sidebar-1") {
        return $is_active_sidebar;
    }

    if (! is_product()) {
        return $is_active_sidebar;
    }

    return false;
}

add_filter('is_active_sidebar', 'wc_remove_sidebar', 10, 2);

 // replace product list code

add_action('woocommerce_before_shop_loop_item_title', 'add_start_overlay', 5, 2);
add_action('woocommerce_before_shop_loop_item_title', 'add_end_overlay', 12, 2);

function add_start_overlay()
{
    echo "<div class=\"product-thumb\">";
}

function add_end_overlay()
{
    global $product;
    $tn = $product->get_attribute('pa_tasting-notes');
    if ($tn) {
        echo "<div class=\"product-thumb-overlay\"><h4>TASTING NOTES</h4>";
        echo "<p>" . $tn . "</p>";
        echo "</div>";
    }

    echo "</div>";
}

add_action('get_header', 'remove_storefront_sidebar');
function remove_storefront_sidebar()
{
    if (is_shop()) {
        remove_action('storefront_sidebar', 'storefront_get_sidebar', 10);
    }
}

function woocommerce_get_product_thumbnail($size = 'woocommerce_thumbnail', $deprecated1 = 0, $deprecated2 = 0)
{
    global $product;

    $image_size = apply_filters('single_product_archive_thumbnail_size', $size);

    return $product ? $product->get_image($image_size) : '';
}

// remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10 );
// add_action( 'woocommerce_before_shop_loop_item_title', 'custom_loop_product_thumbnail', 10 );
function custom_loop_product_thumbnail()
{
    global $product;
    $size = 'woocommerce_thumbnail';

    $image_size = apply_filters('single_product_archive_thumbnail_size', $size);
    return $product ? $product->get_image($image_size) : '';
}

remove_action('woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash');
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_sharing', 50);
add_action('woocommerce_single_product_summary', 'bell_show_custom_attributes', 40);

function bell_show_custom_attributes()
{
    global $product;

    $tn = $product->get_attribute('pa_tasting-notes');
    if ($tn) {
        echo "<div class=\"product-attributes\"><h5>TASTING NOTES:</h5><p>" . $tn . "</p></div>";
    }
}

function woocommerce_quantity_input($data = null)
{
    global $product;
    if (!$data) {
        $defaults = array(
            'input_name'   => 'quantity',
            'input_value'   => '1',
            'max_value'     => apply_filters('woocommerce_quantity_input_max', '', $product),
            'min_value'     => apply_filters('woocommerce_quantity_input_min', '', $product),
            'step'         => apply_filters('woocommerce_quantity_input_step', '1', $product),
            'style'         => apply_filters('woocommerce_quantity_style', 'float:left;', $product)
        );
    } else {
        $defaults = array(
            'input_name'   => $data['input_name'],
            'input_value'   => $data['input_value'],
            'step'         => apply_filters('cw_woocommerce_quantity_input_step', '1', $product),
            'max_value'     => apply_filters('cw_woocommerce_quantity_input_max', '', $product),
            'min_value'     => apply_filters('cw_woocommerce_quantity_input_min', '', $product),
            'style'         => apply_filters('cw_woocommerce_quantity_style', '', $product)
        );
    }

    if (! empty($defaults['min_value'])) {
        $min = $defaults['min_value'];
    } else {
        $min = 1;
    }

    if (! empty($defaults['max_value'])) {
        $max = $defaults['max_value'];
    } else {
        $max = 10;
    }

    if (! empty($defaults['step'])) {
        $step = $defaults['step'];
    } else {
        $step = 1;
    }
    $options = '<option>QTY</option>';

    for ($i=1; $i < 11; $i++) {
        $selected = $i === $defaults['input_value'] ? ' selected' : '';
        $options .= '<option value="' . $i . '">' . $i . '</option>';
    }

    echo '<div class="qty-drop"><select name="' . esc_attr($defaults['input_name']) . '" title="' . _x('Qty', 'Product Description', 'woocommerce') . '" class="button">' . $options . '</select></div>';
}

add_filter( 'woocommerce_add_to_cart_form_action', 'go_to_cart_page' );

function go_to_cart_page() {
    return "/cart";
}

// hide coupon field on cart page
function hide_coupon_field_on_cart( $enabled ) {
	if ( is_cart() ) {
		$enabled = false;
	}
	return $enabled;
}
add_filter( 'woocommerce_coupons_enabled', 'hide_coupon_field_on_cart' );
// hide coupon field on checkout page
function hide_coupon_field_on_checkout( $enabled ) {
	if ( is_checkout() ) {
		$enabled = false;
	}
	return $enabled;
}
add_filter( 'woocommerce_coupons_enabled', 'hide_coupon_field_on_checkout' );

/**
 * Ensure cart contents update when products are added to the cart via AJAX
 */
function my_header_add_to_cart_fragment( $fragments ) {

    ob_start();
    $count = WC()->cart->cart_contents_count;
    ?>
        <a class="cart-contents" href="<?php echo WC()->cart->get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>">

        <span class="cart-contents-count"><?php echo esc_html( $count ); ?></span>

        </a>
        <?php

    $fragments['a.cart-contents'] = ob_get_clean();

    return $fragments;
}
// add_filter( 'woocommerce_add_to_cart_fragments', 'my_header_add_to_cart_fragment' );

remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart');
remove_filter( 'the_content', 'wpautop' );

add_filter('woocommerce_sale_flash', 'woo_custom_hide_sales_flash');
function woo_custom_hide_sales_flash()
{
    return false;
}

function add_weight_to_product_price( $price ) {
    global $product;

        $weight = get_field("weight", $product->id);
        if ($weight) {
            $price .= " / " . $weight;
        }

    return $price;
}
add_filter( 'woocommerce_get_price_html', 'add_weight_to_product_price' );
add_filter( 'woocommerce_cart_item_price', 'add_weight_to_product_price' );

add_action('bel_add_menu', 'bel_minicart', 10);
add_action('bel_add_menu', 'bel_main_logo', 10);


function bel_main_logo() {
    echo '
        <div class="main-logo">
        <a href="/">
            <img class="top-logo" src="/wp-content/uploads/2018/09/dark-logo.png" alt="Logo">
        </a>
        </div>
    ';
}



function bel_minicart() {

        $count = WC()->cart->cart_contents_count;
        echo '
            <div id="mini-cart" class="mini-cart-container">
                <div id="menuToggle" class="pod">
                <input style="margin-left: 20px;" type="checkbox" />
                <span style="margin-left:4px"></span>
                <span style="margin-left:4px"></span>
                <span style="margin-left:4px"></span>
                <div id="menu" class="grid">
                    <div class="span2" style="padding-left:40px;">
                        <div>
                            <img src="/wp-content/uploads/2018/09/dark-logo.png" style="width:100px;" />
                        </div>
                        <ul style="margin:50px 0 100px 0;">
                            <li><a href="/find-us">ABOUT US</a></li>
                            <li><a href="/shop">SHOP</a></li>
                            <li><a href="/find-us">FIND US</a></li>
                            <li><a href="/menu">MENUS</a></li>
                            <li><a href="/cafe-partnerships">CAFE PARTNERSHIPS</a></li>
                            <li><a href="/workplace-coffee">COFFEE FOR YOUR WORKPLACE TRAINING</a></li>
                        </ul>

                        <ul class="straight-list">
                            <li><i class="fab fa-instagram"></i></li>
                            <li><i class="fab fa-facebook-f"></i></li>
                            <li><i class="fab fa-linkedin-in"></i></li>
                            <li><i class="fab fa-twitter"></i></li>
                        </ul>
                        <p style="font-size:0.7em;">© 2018 BELLISSIMO COFFEE All Rights Reserved</p>
                    </div>
                    <div class="span4" style="padding:40px;">
                        <div>
                            <div style="float:left;">
                                <h6>FORTITUDE VALLEY</h6>
                                <ul style="margin:0;">
                                    <li>30 Wandoo St,<li>
                                    <li>Fortitude Valley<li>
                                    <li>QLD, 4006<li>
                                    <li>Phone // (07) 3666 0554<li>
                                </ul>
                                <br>
                            </div>
                            <div style="float:left;padding-left:20px;">
                                <img style="width:60%;" src="/wp-content/uploads/2018/10/valley.png"/>
                                <br>
                            </div>
                        </div>
                        <div>
                            <div style="float:left;">
                                <h6>BULIMBA</h6>
                                <ul style="margin:0;">
                                    <li>30 Wandoo St,<li>
                                    <li>Fortitude Valley<li>
                                    <li>QLD, 4006<li>
                                    <li>Phone // (07) 3666 0554<li>
                                </ul>

                            </div>
                            <div style="float:left;padding-left:20px;">
                                <img style="width:60%;" src="/wp-content/uploads/2018/10/valley.png"/>
                                <br>
                            </div>
                        </div>
                        <div>
                            <div style="float:left;">
                                <h6>COORPAROO</h6>
                                <ul style="margin:0;">
                                    <li>30 Wandoo St,<li>
                                    <li>Fortitude Valley<li>
                                    <li>QLD, 4006<li>
                                    <li>Phone // (07) 3666 0554<li>
                                </ul>

                            </div>
                            <div style="float:left;padding-left:20px;">
                                <img style="width:60%;" src="/wp-content/uploads/2018/10/valley.png"/>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="pod">

                   <a class="mini-cart" href="';
                   echo WC()->cart->get_cart_url();
                   echo '" title="">
                       <i class="fas fa-shopping-cart fa-2x"></i>
                       <span class="fa-layers-counter" >';
                       echo esc_html( $count );
                       echo '</span>
                   </a>
            </div>
            <div class="pod" style="margin-left:6px">
                   <a href="/account"><div class="far fa-user fa-2x"></div></a>
            </div>
        </div>
       ';
}