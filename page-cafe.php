<?php
/*
  Template Name: Cafe page
*/
?>

  <?php get_header(); ?>

  <main id="cafe-main">

    <section class="section intro">
      <div class="container side-padding">
        <hgroup class="content has-text-centered">
          <h1 class="title">café émai</h1>
          <hr>
          <h2><i>wholesome and indulgent</i></h2>
        </hgroup>
        <p>From heartwarming mulled wine panna cottas to delightfully creamy passionfruit cheesecakes, our charming treats go perfectly with a warm cup of coffee or tea made from some of the world's best coffee beans and tea leaves, or any one of our own creative and healthy drink concoctions. </p>
      </div>
    </section>

    <div id="cafe-first-background" class="banner"></div>

    <section id="restaurant-menu" class="section grey-f4">
      <h1 class="remove-header">Menu</h1>
      <div class="container">

        <article id="restaurant-menu-article" class="columns">
          <div id="restaurant-menu-right" class="column is-half">
            <div itemscope itemType="http://schema.org/hasMenu" class="content">
              <h3>The world's finest beans and leaves, diligently studied and passionately prepared</h3>
              <br>
              <p>Dalat, with her special soil, latitude, and frostless winters, is the certified best coffee growing region of Vietnam. At émai, we are trained under one of Vietnam's best coffee experts, and our coffee is made with some of the world's finest farm-to-cup beans, brought to you by the French. Our teas, too, are handpicked from Vietnams finest.</p>
              <div class="link-button-container">
                <a href="https://emaidalat.com/wp-content/uploads/2017/11/émai_café_menu.pdf" class="link-button" target="_blank">Café Menu</a>
              </div>
            </div>
          </div>
          <div id="restaurant-menu-left" class="column is-half">
            <div class="restaurant-menu-modal modal">
              <div class="modal-background"></div>
              <div class="modal-content">
                <figure>
                  <img src="<?php bloginfo('stylesheet_directory'); ?>/images/photo/cafe_tall_01.jpg" alt="">
                </figure>
              </div>
              <button class="modal-close"></button>
            </div>
            <figure id="restaurant-menu-figure" class="image restaurant-portrait">
              <img id="show-restaurant-menu-modal" class="image-modal" src="<?php bloginfo('stylesheet_directory'); ?>/images/photo/cafe_tall_01.jpg" alt="">
            </figure>
          </div>
        </article>

      </div>
    </section>

    <section id="restaurant-food" class="section grey-f4">
      <h1 class="remove-header">Café</h1>
      <div class="container">

        <article id="restaurant-food-article" class="columns">
          <div id="restaurant-food-left" class="column is-half center">
            <div itemscope itemType="http://schema.org/servesCuisine" class="content">
              <h3>Decadent homemade cakes and desserts, exquisite yet unpretentious</h3>
              <br>
              <p>Our drinks go perfectly with our charming homemade treats.</p>
              <br>
              <p>From heartwarming mulled wine panna cottas to delightfully creamy passionfruit cheesecakes, have a taste of heaven with our handpicked selection of special homemade cakes and desserts.</p>
              <div class="link-button-container">
                <a href="https://emaidalat.com/gallery/" class="link-button">Gallery</a>
              </div>
            </div>
          </div>
          <div id="restaurant-food-right" class="column is-half">
            <div class="restaurant-food-modal modal">
              <div class="modal-background"></div>
              <div class="modal-content">
                <figure>
                  <img src="<?php bloginfo('stylesheet_directory'); ?>/images/photo/panna_large.jpg" alt="">
                </figure>
              </div>
              <button class="modal-close"></button>
            </div>
            <figure id="restaurant-food-figure" class="image restaurant-portrait">
              <img id="show-restaurant-food-modal" class="image-modal" src="<?php bloginfo('stylesheet_directory'); ?>/images/photo/panna_tall_lowres.jpg" alt="">
            </figure>
          </div>
        </article>
        
      </div>
    </section>

    <section id="restaurant-welcome" class="section banner">
      <div class="container">
      <div class="black-background"></div>
        <div class="columns-is-mobile">
          <div class="column content inverse is-half">
            <h3>It would please us greatly to welcome you to our home with a complimentary starter.</h3>
            <p>Please kindly let us know while you make your booking if you would also like a table reservation at our contemporary Mediterranean restaurant - or simply drop in any time you like. To thank you for your stay, our talented chef will prepare a starter of your choosing, free of charge.</p>
            <p>Of course, we think you’ll find that the rest of our menu will, too, be of utmost delight to you and your company.</p>
            <div class="link-button-container">
              <a href="https://emaidalat.com/contact/" class="link-button">Make a reservation</a>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main>

  <?php get_footer(); ?>
