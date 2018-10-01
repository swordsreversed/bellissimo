<?php /* Template Name: page-about-us */ ?>

<?php
    get_header();
?>


<div class="site-main">
  <!-- header -->
  <div class="sticky-container">
  <div class="sticky-hero find-us">
    <h2>Menus</h2>
  </div>
</div>
<!-- call to action -->
<div class="top-row">
    <h4>Menus</h4>
</div>

  <section class="cta cta-lrg grid bottom-diagonal">

    <div class="span3">
        <img src="/wp-content/uploads/2018/09/food2.jpg" alt="Food and Coffee">
    </div>
    <div class="span3">
        <p>
        Our food and drink menus are constantly evolving and designed to go hand in hand
        with our delicious coffee. We always strive use best quality locally sourced
        ingredients and when possible utilise seasonal ingredients.
</p>
        <p>Visit our social media pages to see our latest specials and menu items, as well as our mouth-watering sweets and pastries – they’re freshly baked in-house every day.
        </p>
    </div>

    </section>

<!-- image -->
<div class="hero fixed-image5"></div>

<!-- products 2 -->
<section id="products2" class="top-diagonal">
    <h4>SOMETHING TO TAKE HOME WITH YOU</h4>
    <?php
    echo do_shortcode('[product_category category="coffee-blends" per_page=3 columns=3 orderby="date" order="desc"]');
    ?>
</section>


</div> <!-- site main -->

<?php get_footer(); ?>