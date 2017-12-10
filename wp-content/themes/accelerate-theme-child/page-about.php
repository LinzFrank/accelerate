<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */


get_header(); ?>

  <div id="primary" class="home-page hero-content">
    <div class="main-content" role="main">
      <?php while ( have_posts() ) : the_post(); ?>

        <div class="homepage-hero">
          <h3>Accelerate is a strategy and marketing agency located int he heart of NYC. Our goal is to build businesses by making our clients visible and making their customers smile.</h3>
        </div>

      <?php endwhile; // end of the loop. ?>
    </div><!-- .site-content -->
  </div><!-- .home-page -->


  <section class="about">
    <div class="site-content">
      <div class="about-title">
        <h5>Our Services</h5>
      </div>
      <div class="about-description">
          <p>We take pride in our clients and the content we create for them. Here's a brief overview of our offered services.</p>
          </div>
    </div>
  </section>

<section class="about-services">

   <?php while ( have_posts() ) : the_post(); 
          $image_1 = get_field("image_1");
          $image_2 = get_field("image_2");
          $image_3 = get_field("image_3");
          $image_4 = get_field("image_4");
          $size = "full";
      ?>

  <ul class="about-services-content">
    <li class="about-icon-left">
      <img src="<?php echo $image_1; ?>"/>
    </li>

    <li class="about-description-right">
      <h5>Content Strategy</h5>
        <p>Maecenas sed diam eget risus varius blandit sit amet non magna. Donec ullamcorper nulla non metus auctor fringilla.</p>
      </li>
</ul>

<ul class="about-services-influencer">
  <li class="about-description-left">
    <h5>Influencer Mapping</h5>
      <p>Fusce dapib us, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p></li>
    <li class="about-icon-right">
      <img src="<?php echo $image_2; ?>"/>
    </li>
</ul>

<ul class="about-services-social">
  <li class="about-icon-left">
   <img src="<?php echo $image_3; ?>"/>
  </li>
  <li class="about-description-right">
    <h5>Social Media Strategy</h5>
      <p>Donec id elit non mi porta gravida at eget metus. Donec id elit non mi porta gravida at eget metus. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
    </li>
</ul>

<ul class="about-services-design">
  <li class="about-description-left">
    <h5>Design and Development</h5>
      <p>Etiam porta sem malesuada magna mollis euismod. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
    </li>
  <li class="about-icon-right">
    <img src="<?php echo $image_4; ?>"/>
  </li>
</ul>
</section>


<section class="about-contact-footer">
  <ul>
    <li><h3>Interested in working with us?</h3></li>
    <li><a class="button" href="<?php echo site_url('/contact/') ?>">Contact Us</a></li>
  </ul>
 </section>
      <?php endwhile; // end of the loop. ?>
    </div><!-- .main-content -->
  </div><!-- #primary -->

<?php get_footer(); ?>
