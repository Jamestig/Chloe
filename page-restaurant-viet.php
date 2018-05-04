<?php
/*
  Template Name: Restaurant page Vietnamese
*/
?>

  <?php get_header(); ?>

  <main id="restaurant-main">

    <section class="section intro">
      <div class="container side-padding">
        <hgroup class="content has-text-centered">
          <h1 class="title">Restaurant émai</h1>
          <hr>
          <h2><i>treat yourself to the sublime</i></h2>
        </hgroup>
        <p>The food at émai is an exquisitely incomparable blend of traditional and contemporary, European and international inspirations, with special appreciation for the elegant simplicity of the Tuscan countryside.</p>
        <br>
        <p>Every delectable dish is freshly cooked using organic vegetables and herbs farmed from Dalat's unique agricultural landscape, renowned across the country for its beautiful weather and clean, fresh Mediterranean produce.</p>
      </div>
    </section>

    <div id="home-food-background" class="banner"></div>

    <section id="restaurant-menu" class="section grey-f4">
      <h1 class="remove-header">Menu</h1>
      <div class="container">

        <article id="restaurant-menu-article" class="columns">

          <div class="column is-half">
            <div itemscope itemType="http://schema.org/hasMenu" class="content">
              <h3>Time-honoured traditions from the Mediterranean countryside - with a contemporary touch</h3>
              <br>
              <p>Our dishes are created from a unique coalescence of traditional Tuscan customs, contemporary European dining, and international techniques that we have gathered over the years of creating and refining our recipes to reveal our most exquisite yet homely flavours and aromas.</p>
              <div class="link-button-container">
                <a href="https://emaidalat.com/restaurant/" class="link-button">View Menu</a>
              </div>
            </div>
          </div>
          <div class="column is-half">
            <figure id="restaurant-menu-figure" class="image">
              <img src="<?php bloginfo('stylesheet_directory'); ?>/images/placeholder/food_tall_01.jpg" alt="">
            </figure>
          </div>
        </article>

      </div>
    </section>

    <section id="restaurant-food" class="section grey-f4">
      <h1 class="remove-header">Cafe</h1>
      <div class="container">

        <article id="restaurant-food-article" class="columns">
          <div class="column is-half center">
            <div itemscope itemType="http://schema.org/servesCuisine" class="content">
              <h3>The finest flavours from our farm-to-table vegetables and herbs cultivated from Dalat’s impeccable agricultural landscape</h3>
              <br>
              <p>At émai, we find elegance in the refined simplicity of our flavours: each ingredient is carefully selected and prepared to reveal its most delicious natural taste and nutritional value. Other than exported aged parmesan from Italy, all of our ingredients are the best farm-to-table local produce that Dalat has to offer.</p>
              <div class="link-button-container">
                <a href="https://emaidalat.com/restaurant/" class="link-button">Cafe Menu</a>
              </div>
            </div>
          </div>
          <div class="column is-half">
            <figure id="restaurant-food-figure" class="image">
              <img src="<?php bloginfo('stylesheet_directory'); ?>/images/placeholder/coffee_tall_01.jpg" alt="">
            </figure>
          </div>
        </article>

      </div>
    </section>

    <section id="restaurant-welcome" class="section banner">
      <div class="container">
        <div class="columns-is-mobile">
          <div class="column content inverse is-half">
            <h3>Book a room with us and receive our warm welcome with a complimentary starter.</h3>
            <p>For the full émai experience, we would love to have you stay with us at one of our intimate and wonderful guestrooms. Brimming with cosiness, good food, and calming music, our bed & breakfast cottage house makes for a charming space in which to rest your mind and body and to soak in the gentle beauties of life.</p>
            <p>Please kindly let us know while you make your booking if you would also like a table reservation at our restaurant - or simply drop in any time you like. To thank you for your stay, our talented chef will prepare a starter of your choosing, free of charge.</p>
            <div class="link-button-container">
              <a href="https://emaidalat.com/contact/" class="link-button">Make a reservation</a>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main>

  <?php get_footer(); ?>
