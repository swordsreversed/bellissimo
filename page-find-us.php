<?php /* Template Name: page-about-us */ ?>

<?php
    get_header();
?>

<div class="site-main">
  <!-- header -->
    <div class="sticky-container">
        <div class="sticky-hero find-us">
            <h2>Find Us</h2>
        </div>
    </div>
<!-- call to action -->
<div class="top-row">
    <h4>Our Cafes</h4>
</div>

  <section class="cta cta-lrg grid bottom-diagonal">
    <div class="span3">
        <img src="/wp-content/uploads/2018/09/about-us2.jpg" alt="Fortitude Valley Store">
    </div>
    <div class="span3">
        <div class="find-us-info">
            <h5>Flagship Store</h5>
            <h5 class="subheader">Fortitude Valley</h5>
        <p>
        After our success at Wandoo Street we further expanded to the Bulimba roastery in December 2013, up-sizing to a larger coffee roaster to keep up with our quickly growing wholesale network.
            </p>
            <ul>
                <li>30 Wandoo St,</li>
                <li>Fortitude Valley</li>
                <li>QLD, 4006</li>
                <li>Phone // (07) 3666 0554</li>
            </ul>
        </div>
    </div>

    <div class="span3 marg-top-m">
        <div class="find-us-info">
            <h5>First Warehouse</h5>
            <h5 class="subheader">Bulimba</h5>
            <p>
                Within sight of the Brisbane River and offering all-day breakfast in Bulimba, as well as Oxford Street’s best coffee.
            </p>
            <ul>
                <li>35 Oxford St,</li>
                <li>Bulimba</li>
                <li>QLD, 4171</li>
                <li>Phone //  (07) 3899 6704</li>
            </ul>
        </div>
    </div>
    <div class="span3 marg-top-m">
      <img src="/wp-content/uploads/2018/09/bulimba.jpg" alt="Bulimba">
    </div>

    <div class="span3 marg-top-m">
        <img src="/wp-content/uploads/2018/09/hosp.jpg" alt="Coorporoo Store">
    </div>
    <div class="span3 marg-top-m">
        <div class="find-us-info">
            <h5>New Roastery</h5>
            <h5 class="subheader">Coorparoo</h5>
            <p>
            The new Bellissimo headquarters and wholesale roastery, fully equipped with a barista training room and special event space.
            </p>
            <ul>
                <li>00 Secret Location St,</li>
                <li>Coorporoo</li>
                <li>QLD, 4151</li>
                <li>Phone //  (07) 0000 0000</li>
            </ul>
        </div>
    </div>
</section>

      <!-- image -->
<div class="hero fixed-image4"></div>

<!-- products 2 -->
<section id="products2" class="top-diagonal">
    <h4>Order Roasted Coffee Beans</h4>
    <?php
    echo do_shortcode('[product_category category="single-origin-coffee-beans" per_page=3 columns=3 orderby="date" order="desc"]');
    ?>
</section>

<!-- call to action -->
<section class="cta cta-med grid no-diagonal pad-bottom-none">
    <div class="left span3 center-align">
        <h3>PARTNER WITH US</h3>
        <p>We believe the partnership we create with you is not just about providing you with great quality coffee, we wish to take a genuine and personal interest in your business, understand your objectives and work together with you to enable you to manage your business for the best outcome possible.</p>
        <div class=""><a href="#" class="button fixed-button"> CAFE PARTNERSHIP</a></div>
        <div class=""><a href="#" class="button fixed-button"> COFFEE FOR YOUR WORKPLACE</a></div>
    </div>
    <div class="right span3">
        <img src="/wp-content/uploads/2018/09/partner-background.png" alt="coffee pour">
    </div>
</section>

</div> <!-- site main -->

<?php get_footer(); ?>