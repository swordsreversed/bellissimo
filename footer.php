<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

?>

	</div><!-- #content -->

	<?php do_action( 'storefront_before_footer' ); ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
        <div class="footer-wrapper">
            <div class="footer-logo-area">
                <div class="about">
                    <div style="margin: 30px 0 40px 110px;">
                        <a href="/"><img src="/wp-content/uploads/2018/09/light-icon.png" alt="Bellissimo"></a>
                    </div>
                    <div class="footer-logo">
                        <ul>
                            <li>Bulimba // (07) 3899 6704</li>
                            <li>Fortitude Valley // (07) 3666 0554</li>
                            <li>Wholesale // 0426 034 647</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-menu footer-menu-top uppercase">
                <ul>
                    <li><a href="/about-us">ABOUT US</a></li>
                    <li><a href="/shop">SHOP</a></li>
                    <li><a href="/cafe-partnerships">CAFE PARTNERSHIPS</a></li>
                    <li><a href="/workplace-coffee">Workplace Coffee</a></li>
                    <li><a href="/menus">MENUS</a></li>
                    <li>CONTACT US</li>
                    <li><a href="/"><img src="/wp-content/uploads/2018/09/bottom-logo.png" alt="Logo"></a></li>
                </ul>
            </div>
        </div>
            <div class="footer-menu footer-menu-bottom med-dark">
                <ul>
                    <li><strong>&copy; 2018 BELLISSIMO COFFEE</strong> All Rights Reserved</li>
                    <li>Terms & Conditions</li>
                    <li>Delivery & Returns</li>
                    <li>Privacy Policy</li>
                    <li>FAQs</li>
                    <li><i class="fab fa-instagram"></i></li>
                    <li><i class="fab fa-facebook-f"></i></li>
                    <li><i class="fab fa-linkedin-in"></i></li>
                    <li><i class="fab fa-twitter"></i></li>
                </ul>
            </div>
	</footer><!-- #colophon -->

	<?php do_action( 'storefront_after_footer' ); ?>

</div><!-- #page -->

<?php wp_footer(); ?>



</body>
</html>
