<?php
/*
  Template Name: Our Rooms Page
*/
?>

  <?php get_header(); ?>

    <main id="our-rooms-main">

        <section id="our-rooms-intro" class="section intro">
            <div class="container side-padding">
                <hgroup class="content has-text-centered">
                    <h2 class="title">Our Rooms</h2>
                    <hr>
                    <h3><i>welcome to emai</i></h3>
                </hgroup>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, sint? Sed suscipit incidunt debitis modi voluptate illum soluta beatae quisquam quam velit! Officia, amet sint incidunt error consequatur dolorum eos.</p>
            </div>
        </section>

        <section id="our-rooms-section" class="section grey-f4">
            <div class="container">
                <article id="our-rooms-bnb" class="columns">
                    <div class="column is-half">
                        <figure class="image">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/placeholder/room_tall_01.jpg" alt="ALT">
                        </figure>
                    </div>
                    <div class="column is-half content padded center has-text-left">
                        <h3 class="title">emai b&amp;b, restaurant &amp; cafe</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id cumque maiores totam eius ipsam, doloremque. Quo tenetur hic ab velit eos fugit, unde tempore ea dolore laboriosam perspiciatis, maiores error.</p>
                        <div class="link-button-container">
                          <a href="https://emaidalat.com/emai-bnb/" class="link-button">View Rooms</a>
                        </div>
                    </div>
                </article>

                <article id="our-rooms-cottage" class="columns">
                    <div class="column is-half">
                        <figure class="image">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/placeholder/room_tall_02.jpg" alt="ALT">
                        </figure>
                    </div>
                    <div class="column is-half content padded center  has-text-left">
                        <h3 class="title">emai cottage</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id cumque maiores totam eius ipsam, doloremque. Quo tenetur hic ab velit eos fugit, unde tempore ea dolore laboriosam perspiciatis, maiores error.</p>
                        <div class="link-button-container">
                          <a href="https://emaidalat.com/emai-cottage/" class="link-button">View Rooms</a>
                        </div>
                    </div>
                </article>
            </div>
        </section>

        <section id="our-rooms-welcome" class="section banner">
            <div class="container">
                <div class="columns-is-mobile">
                    <div class="column content inverse is-half padded">
                        <h3>It would please us greatly to welcome you to our home with a complimentary starter.</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias explicabo unde nulla animi. Fugiat officiis nemo, doloremque optio nulla eligendi animi distinctio itaque culpa, esse, eveniet reprehenderit consectetur officia ipsa.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam laudantium sit maiores nemo delectus.</p>
                        <div class="link-button-container">
                          <a href="http://localhost/wordpress/emai-cottage/" class="link-button">Make a reservation</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

  <?php get_footer(); ?>
