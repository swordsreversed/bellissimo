<?php /* Template Name: page-about-us */ ?>

<?php
    get_header();
	do_action( 'bel_add_menu' );
?>

<?php
	do_action( 'bel_add_menu' );
?>

<div class="site-main">

  <!-- header -->
  <div class="sticky-container">
  <div class="sticky-hero workplace-coffee">
    <h2>Workplace Coffee</h2>
  </div>
</div>
<!-- call to action -->
<div class="top-row">
    <h4>Cafe Partnerships</h4>
</div>

  <section class="cta cta-lrg grid no-diagonal">

    <div class="span1"></div>
    <div class="span4 cp-top">
        <p>We can provide your workplace with the same award winning coffee blends and single origins you love from our cafes, but at a discounted wholesale pricing for your workplace. Never settle for bad coffee again. We deliver fresh and ready to use coffee every business day.        </p>
        </p>
    </div>
    <div class="span1"></div>

    <div class="span1"></div>
    <div class="span4 cp-top form-in">
        <h3>Use Bellissimo Coffee at your workplace </h3>
        <h5>Fill in the form and we’ll get straight back to you.</h5>
    </div>
    <div class="span1"></div>
    <div class="span2"></div>
    <div class="span2">
    <?php
        echo do_shortcode('[contact-form-7 id="3063" title="Workplace Coffee"]');
    ?>
    </div>

    <div class="span3">
        <img src="/wp-content/uploads/2018/09/smile.jpg" alt="Making Coffee">
    </div>
    <div class="span3">
        <div class="find-us-info">

            <h5>Award Winning Coffee Delivered to your workplace</h5>
            <ul>
                <li>Roasted fresh and ready to use</li>
                <li>Boost morale in the office with Australia’s Highest awarded coffee in your workplace</li>
                <li>Various blends to choose from • Competitive wholesale pricing</li>
            </ul>
        </div>
    </div>

    <div class="span3 center-align marg-top-m">
        <div class="find-us-info">
            <h5>Equipment and Supply</h5>
            <ul>
                <li>We have partnerships with the world’s leading coffee machine manufacturers</li>
                <li>Option for either equipment purchasing, or leasing packages tailored to suit the office size</li>
                <li>Installation conducted by friendly, experienced technicians</li>
                <li>Responsive breakdown support and customer service</li>
            </ul>
            <h5 class="pad-top-l">Specialty Espresso Training</h5>
            <p class="pad-top-m">We know that the coffee beans you use is just one part of the recipe involved to make the perfect cup of coffee.  Bellissimo Coffee offers both signature and custom training programs for everyone from first-time coffee markers to experienced baristas wishing to take their coffee making skills to the world-class level.</p>

        </div>
    </div>
    <div class="span3 marg-top-m">
      <img src="/wp-content/uploads/2018/09/tech.jpg" alt="Tech">
    </div>

</section>

      <!-- image -->
<div class="hero fixed-image7"></div>

<!-- call to action -->
<section class="cta cta-med grid top-diagonal pad-bottom-none">
    <div class="left span3 center-align">
        <div class="find-us-info">
            <h5>Our Commitment to Quality Roasted Coffee Beans </h5>
            <p>
            Our dedicated training team can provide you with education guides and hands-on training to suit any level of barista skill and knowledge to help ensure that you, your management and baristas are consistently pouring great quality coffee. Our partnered espresso technicians are on call to provide any servicing and maintenance required to keep the equipment running in peak condition.             </p>
            <p> Our marketing and customer support team can offer you a tailored package of supply and support that best fits your business needs and are here to talk you through the intricacies of building a successful brand and reputation within the coffee industry.
             </p>
             <p>
             This industry expertise, service and support, together with our award-winning coffees and great quality equipment will give you the capabilities to serve the finest quality coffee cup after cup, after cup.
             </p>

             <h5>Our Ethos when it comes to café partnerships </h5>
            <p>
            We always take a genuine and personal interest in your business, learn to understand your objectives and work together to enable you to manage your business for the best possible outcome.
             </p>
        </div>
    </div>
    <div class="right span3">
        <img src="/wp-content/uploads/2018/09/partner-background.png" alt="coffee pour">
    </div>
</section>

<!-- products 2 -->
<section id="products2">
    <h4>COFFEE ACCESSORIES</h4>
    <?php
    echo do_shortcode('[product_category category="coffee-blends" per_page=3 columns=3 orderby="date" order="desc"]');
    ?>
</section>
<section>
    <div style="text-align:center;"><a href="/shop" class="button orange">MORE PRODUCTS</a></div>
</section>

</div> <!-- site main -->

<?php get_footer(); ?>