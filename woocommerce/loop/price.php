<?php
/**
 * Loop Price
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/price.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;
?>

<?php if ( $price_html = $product->get_price_html() ) : ?>
	<span class="price"><?php echo $price_html; ?>
<?php endif; ?>

<?php
$product_cats_ids = wc_get_product_term_ids( $product->get_id(), 'product_cat' );
foreach( $product_cats_ids as $cat_id ) {
    $term = get_term_by( 'id', $cat_id, 'product_cat' );
    $parentcats = get_ancestors($cat_id, 'product_cat');

    echo $term->name . " ";

    // foreach($parentcats as $parentcat){
    //     if ($parentcat) {
    //         if( $term = get_term_by( 'id', $parentcat, 'product_cat' ) ){
    //             echo "|<b>" . $term->name  . "</b><br>";
    //         }
    //     }
    // }
}

?>
</span>