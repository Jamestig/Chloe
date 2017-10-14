<?php
/*
  Template Name: Contact Page (Vietnamese)
*/
?>

  <?php get_header(); ?>

  <main id="contact-main">

    <section class="section intro">
      <h2 class="remove-header">Introduction</h2>
      <div class="container side-padding">
        <hgroup class="content has-text-centered">
          <h2>Vocation/Contact Us</h2>
          <hr>
          <h3><i>how to reach us</i></h3>
        </hgroup>
        <p class="has-text-centered">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, sint? Sed suscipit incidunt debitis modi voluptate.</p>
      </div>
    </section>

    <section class="section grey-f4">
      <div class="container">
        <div class="columns">
          <div class="column center is-one-third is-one-quarter-widescreen is-offset-1 is-offset-2-widescreen">
            <div id="contact-map-info" class="has-text-left-tablet">
              <h3>emai da lat</h3>
              <address>1B Thi Sach, Da lat<br>Lam Dong, Vietnam</address>
              <a href="tel: +84 147 1994">+84 147 1994</a>
            </div>
            <div class="link-button-container">
              <a href="https://www.google.com/maps/place/1B+Thi+S%C3%A1ch,+Ph%C6%B0%E1%BB%9Dng+6,+Tp.+%C4%90%C3%A0+L%E1%BA%A1t,+L%C3%A2m+%C4%90%E1%BB%93ng,+Vietnam/@11.9468417,108.4303862,17z/data=!3m1!4b1!4m5!3m4!1s0x3171132a36980751:0x1ceec5a70b8cc54d!8m2!3d11.9468417!4d108.4325695" class="link-button">View on Google Maps</a>
            </div>
          </div>
          <div class="column is-half">
            <figure id="contact-map-image" class="image">
              <a href="https://www.google.com/maps/place/1B+Thi+S%C3%A1ch,+Ph%C6%B0%E1%BB%9Dng+6,+Tp.+%C4%90%C3%A0+L%E1%BA%A1t,+L%C3%A2m+%C4%90%E1%BB%93ng,+Vietnam/@11.9468417,108.4303862,17z/data=!3m1!4b1!4m5!3m4!1s0x3171132a36980751:0x1ceec5a70b8cc54d!8m2!3d11.9468417!4d108.4325695">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/images/icon/map.jpg" alt="">
              </a>
            </figure>
          </div>
        </div>
      </div>
    </section>

    <section id="contact-form-section" class="section banner">
      <div class="container">
        <div class="columns">

          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          <div id="contact-form" class="column is-two-thirds-tablet has-text-centered grey-f4">
            <h3 class="padded">say hello</h3>

            <?php the_content(); ?>

          </div>

          <?php endwhile; else : ?>

          <p>
            <?php _e( 'Index: No Results.'); ?>
          </p>

          <?php endif; ?>

        </div>
      </div>
    </section>

  </main>

  <?php get_footer(); ?>
