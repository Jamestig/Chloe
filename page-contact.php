<?php
/*
  Template Name: Contact page
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
        <p class="has-text-centered">To send us a message, kindly use the contact information below to reach us online or over the phone.
          <br>We are open from 7am to 11pm every day, seven days a week.
        </p>
      </div>
    </section>

    <section class="section grey-f4">
      <div class="container">
        <div class="columns">
          <div id="contact-location-info" class="column center is-half">
          <div class="contact-map-modal modal">
              <div class="modal-background"></div>
              <div class="modal-content">
                  <figure>
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/icon/dalat_map_large.PNG" alt="">
                  </figure>
              </div>
              <button class="modal-close"></button>
            </div>
            <div id="contact-map-info" class="content has-text-left-tablet">
              <h2><a href="https://emaidalat.com">émai da lat</a></h2>
              <address>1 Thi Sach, Da lat, Lam Dong, Vietnam</address>
              <a href="tel: +842633839001">+84 2633 839 001</a>
            </div>
            <figure id="contact-map-image" class="image">
                <img id="show-contact-map-modal" class="image-modal" src="<?php bloginfo('stylesheet_directory'); ?>/images/icon/map.jpg" alt="">
            </figure>
            <div class="link-button-container">
              <a target="_blank" href="https://www.google.com/maps/place/%C3%A9mai+dalat+restaurant,+cafe+%26+homestay/@11.9468416,108.4325695,15z/data=!4m5!3m4!1s0x0:0x1fd618a538787fe1!8m2!3d11.9468416!4d108.4325695" class="link-button">View on Google Maps</a>
            </div>
          </div>
          <div id="contact-booking-info" class="column is-half">
            <div class="content">
              <h2>reserve a table at restaurant émai</h2>
              <p>To make reservations at our Mediterranean restaurant, please call us on <a href="tel: +84 2633 839 001">+84 2633 839 001</a> (English and Vietnamese) between 8:00am - 5:00pm</p>
              <h2>make a booking at émai homestay</h2>
              <p>to book your stay in one of our charming guestrooms, please either:</p>
              <p>&hybull; make your selection on <a href="https://emaidalat.com/our-rooms/">our rooms</a> page to book on airbnb
              <br>&hybull; contact us on our<a href="https://www.facebook.com/emaidalat/" target="_blank"> Facebook </a>page or
                <br>&hybull; email us at <a href="mailto:family@emaidalat.com" target="">family@emaidalat.com</a> at any time and we will respond as soon as possible.</p>
              <p>stop by at our café between 7:00am - 7:00pm for tea and coffee and enjoy our selection of exquisite home-made cakes and desserts</p>
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
