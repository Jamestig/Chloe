<?php
/*
  Template Name: Contact Page
*/
?>

  <?php get_header(); ?>

  <main id="contact-main">

    <section class="section intro">
      <div class="container side-padding">
        <hgroup class="content has-text-centered">
          <h1>Location / Contact Us</h1>
          <hr>
          <h2><i>Reaching émai</i></h2>
        </hgroup>
        <p class="has-text-centered">To send us a message, kindly use the form below or email us at <a href="mailto:contact@emaidalat.com">contact@emaidalat.com</a>
          <br>We are open from 7am to 10pm every day, seven days a week.
        </p>
      </div>
    </section>

    <section class="section grey-f4">
      <div class="container">
        <div class="columns">
          <div id="contact-location-info" class="column center is-half">
            <div id="contact-map-info" class="content has-text-left-tablet">
              <h2><a href="https://emaidalat.com">emai da lat</a></h2>
              <address>1B Thi Sach, Da lat, Lam Dong, Vietnam</address>
              <a href="tel: 02633839001">02 633 839 001</a>
            </div>
            <figure id="contact-map-image" class="image">
              <a target="_blank" href="https://www.google.com/maps/place/1B+Thi+S%C3%A1ch,+Ph%C6%B0%E1%BB%9Dng+6,+Tp.+%C4%90%C3%A0+L%E1%BA%A1t,+L%C3%A2m+%C4%90%E1%BB%93ng,+Vietnam/@11.9468417,108.4303862,17z/data=!3m1!4b1!4m5!3m4!1s0x3171132a36980751:0x1ceec5a70b8cc54d!8m2!3d11.9468417!4d108.4325695">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/images/icon/map.jpg" alt="">
              </a>
            </figure>
            <div class="link-button-container">
              <a target="_blank" href="https://www.google.com/maps/place/1B+Thi+S%C3%A1ch,+Ph%C6%B0%E1%BB%9Dng+6,+Tp.+%C4%90%C3%A0+L%E1%BA%A1t,+L%C3%A2m+%C4%90%E1%BB%93ng,+Vietnam/@11.9468417,108.4303862,17z/data=!3m1!4b1!4m5!3m4!1s0x3171132a36980751:0x1ceec5a70b8cc54d!8m2!3d11.9468417!4d108.4325695" class="link-button">View on Google Maps</a>
            </div>
          </div>
          <div id="contact-booking-info" class="column is-half">
            <div class="content">
              <h2>reserve a table at restaurant emai</h2>
              <p>To make reservations at our Mediterranean restaurant, please call us on <a href="tel: 02633839001">0263 3839 001</a> (English and Vietnamese) between 8:00am - 5:00pm</p>
              <h2>make a booking at emai homestay</h2>
              <p>to book your stay in one of our charming guestrooms, please either:</p>
              <p>&hybull; make your selection on <a href="https://emaidalat.com/our-rooms/">our rooms</a> page to book on airbnb or
                <br>&hybull; call us at <a href="tel: 02633839001">02 633 839 001</a> or email us at any time and we will respond as soon as possible.</p>
              <p>stop by at our cafe between 7:00am - 7:00pm and enjoy our</p>
            </div>
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
