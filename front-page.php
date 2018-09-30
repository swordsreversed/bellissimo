<?php /* Template Name: front-page */ ?>

<?php get_header(); ?>

<!-- header -->
<header class="hero front-hero">
  <div class="center-content">
  </div>
</header>

<div class="site-main front-products1">
<!-- top products -->
<section class="product-grid">
    <div style="width:75%; margin: 30px auto 50px;"><p> Bellissimo Coffee is a team of passionate and enthusiast coffee lovers. A young team on a steep learning curve but with a strong desire to share our appreciation of coffee with as many people as possible.</p>
</div><h4>BELLISSIMO COFFEE BEANS</h4>
    <?php
    echo do_shortcode('[product_category category="coffee-blends" per_page=6 columns=3 orderby="date" order="desc"]');
    ?>
    <div><a href="/shop" class="button orange">MORE PRODUCTS</a></div>
</section>

<!-- call to action -->
<section class="cta cta-med cta-extra-pad grid">
    <div class="left span3 center-align">
        <h3>PARTNER WITH US</h3>
        <p>We believe the partnership we create with you is not just about providing you with great quality coffee, we wish to take a genuine and personal interest in your business, understand your objectives and work together with you to enable you to manage your business for the best outcome possible.</p>
        <div class=""><a href="#" class="button fixed-button"> COFFEE FOR YOUR WORKPLACE</a></div>
        <div class=""><a href="#" class="button fixed-button"> CAFE PARTNERSHIP</a></div>
    </div>
    <div class="right span3">
        <img src="/wp-content/uploads/2018/09/partner-background.png" alt="coffee pour">
    </div>
</section>

<!-- image -->
<div class="hero fixed-image1">
</div>

<!-- products 2 -->
<section id="products2">
    <h4>COFFEE EQUIPMENT</h4>
    <?php
    echo do_shortcode('[product_category category="coffee-blends" per_page=3 columns=3 orderby="date" order="desc"]');
    ?>
</section>
<section>
    <div><a href="/shop" class="button orange">MORE PRODUCTS</a></div>
</section>
</div>
<?php get_footer(); ?>