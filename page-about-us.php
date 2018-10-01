<?php /* Template Name: page-about-us */ ?>

<?php
    get_header();
?>

<div class="site-main">
  <!-- header -->
<div class="sticky-container">
  <div class="sticky-hero about-us">

    <h2>About Us</h2>


  </div>
</div>
<!-- call to action -->
  <section class="cta cta-lrg grid top-diagonal">
    <div class="span1"></div>
    <div class="span4 text-align">
        <h5>Bellissimo Coffee was established in 2009 and started roasting from our flagship store at Wandoo Street in Brisbane’s Fortitude Valley in 2010.</h5>
    </div>
    <div class="span1"></div>

    <div class="span3">
        <img src="/wp-content/uploads/2018/09/working-team-background.jpg" alt="Fortitude Valley Store">
    </div>
    <div class="span3 center-align cta-quote">
      <h2 class="quote-header">Since then we’ve won multiple awards over the years to become the current highest awarded coffee roaster in Australia.</h2>
      <p>After our success at Wandoo Street we further expanded to the Bulimba roastery in December 2013, up-sizing to a larger coffee roaster to keep up with our quickly growing wholesale network.</p>
    </div>
    <div class="span3 center-align">
      <h6>WE’RE PROUD TO HAVE ACHIEVED A NUMBER OF AWARDS ALONG THE WAY</h6>
      <ul>
        <li>Champion Trophy and Gold Medal at the Sydney Royal Fine Food Awards</li>
        <li>Two Champion Trophies and two Gold Medals at the Melbourne Royal Fine Food Awards</li>
        <li>Reserve Champion Trophy and four Gold Medals at the Royal Hobart Fine Food Awards</li>
        <li>Overall Event Runner Up at the Golden Bean Roaster Competition</li>
        <li>Champion Cold Brew and Champion Direct Trade at the Australian International Coffee Awards 2016.</li>
        <li>Champion Cold Brew, Champion Direct Trade Coffee and Champion Milk-Based Coffee at the Australian International Coffee Awards 2017.</li>
      </ul>
    </div>
    <div class="span3">
      <img src="/wp-content/uploads/2018/09/SFPHOTOGRAPHER.NET-x-BELLISSIMO-BULIMBA-2.png" alt="Fresh Coffee">
    </div>
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
  <div class="hero fixed-image2"></div>

  <!-- products 2 -->
  <section id="products2" class="product-grid">
    <h4>OUR BEANS</h4>
    <?php
    echo do_shortcode('[product_category category="coffee-blends" per_page=6 columns=3 orderby="date" order="desc"]');
    ?>
  </section>

  <!-- call to action -->
  <section class="cta cta-med grid no-diagonal">
    <div class="left span3 center-align">
      <h3>THE BELLISSIMO TEAM</h3>
      <p>We’re fortunate to have a great team of very passionate and dedicated staff. Customer service is our priority and we work hard together with the aim to deliver the best possible experience.
      </p>
      <p>Our team comprises not only of our skilled baristas and cafe staff, but also a hard-working marketing, wholesale production, and technical support team. This team works across a number of operations including roasting, coffee machine servicing and installations, warehouse operations, coffee quality control, customer relations, business development and research and more. We’re very excited to work on a personal level with a number of great cafes and restaurants sharing our knowledge and love of coffee.</p>
      <div class=""><a href="#" class="button fixed-button"> DOWNLOAD OUR APPLICATION FORM</a></div>
    </div>
    <div class="right span3">
      <img src="/wp-content/uploads/2018/09/partner-background.png" alt="coffee pour">
    </div>
  </section>

</div> <!-- site main -->

<?php get_footer(); ?>