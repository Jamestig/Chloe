<?php
/*
  Template Name: Home Page
*/
?>

  <?php get_header(); ?>

  <main id="home-main">

    <section id="home-intro" class="section intro">
      <h1 class="remove-header"><?php single_post_title(); ?></h1>
      <div class="container side-padding">
        <div class="content has-text-centered">
          
          <?php the_content(); ?>
          
          <p>Blending European romanticism, Nordic minimalism, and Japanese Zen aesthetics, émai is a bed & breakfast, art café, and contemporary Italian restaurant, all in a beautiful little cottage home in which to rest your heart and enchant your senses.</p>
          
          <hr>
        </div>
      </div>
    </section>

    <section id="home-menu" class="section grey-f4">
      <h1 class="remove-header">Menu</h1>
      <div class="container">
        <article id="home-menu-article" class="columns">
        <div class="home-menu-modal modal">
          <div class="modal-background"></div>
          <div class="modal-content">
              <figure>
                <img src="<?php bloginfo('stylesheet_directory'); ?>/images/photo/tomato_soup_large.jpg" alt="Italian garden-fresh and sun-dried Tomato Soup with Rosemary Cream">
              </figure>
          </div>
          <button class="modal-close"></button>
        </div>
          <div class="column is-half">
            <figure id="home-menu-figure" class="image portrait">
              <img id="show-home-menu-modal" class="image-modal" src="<?php bloginfo('stylesheet_directory'); ?>/images/photo/tomato_soup_tall_lowres.jpg" alt="Italian garden-fresh and sun-dried Tomato Soup with Rosemary Cream">
            </figure>
          </div>
          <div class="column is-half">
            <div itemscope itemType="http://schema.org/hasMenu" class="content tablet-text">
              <h3>Traditional italian flavours<br>with a contemporary touch</h3>
              <br>
              <p>Inspired by the elegant simplicity of the Tuscan countryside, the food at émai is an exquisite blend of traditional and contemporary styles to deliver a wholly unique gastronomic experience.</p>
              <br>
              <p>Every delectable dish is freshly cooked using vegetables and herbs farmed from Dalat's remarkable agricultural landscape, renowned across the country for its beautiful weather and clean, fresh Mediterranean produce.</p>
              <div class="link-button-container">
                <a href="https://emaidalat.com/restaurant/" class="link-button">Restaurant émai</a>
              </div>
            </div>
          </div>
        </article>
      </div>
    </section>

    <section id="home-cafe" class="section grey-f4">
      <h1 class="remove-header">Cafe</h1>
      <div class="container">
        <article id="home-cafe-article" class="columns">
        <div class="home-cafe-modal modal">
          <div class="modal-background"></div>
          <div class="modal-content">
              <figure>
                <img src="<?php bloginfo('stylesheet_directory'); ?>/images/photo/panna_large.jpg" alt="Panna Cotta with Dalat berries cooked in Mulled Wine">
              </figure>
          </div>
          <button class="modal-close"></button>
        </div>
          <div class="column is-half">
            <figure id="home-cafe-figure" class="image portrait">
              <img id="show-home-cafe-modal" class="image-modal" src="<?php bloginfo('stylesheet_directory'); ?>/images/photo/panna_tall_lowres.jpg" alt="Panna Cotta with Dalat berries cooked in Mulled Wine">
            </figure>
          </div>
          <div class="column is-half">
            <div itemscope itemType="http://schema.org/servesCuisine" class="content tablet-text">
              <h3>Wholesome, indulgent homemade cakes &amp; drinks</h3>
              <br>
              <p>Have a taste of heaven with our handpicked selection of special homemade cakes and desserts.</p>
              <br>
              <p>From heartwarming mulled wine panacottas to delightfully creamy passion fruit cheesecakes, our charming treats go perfectly with a warm cup of coffee or tea made from some of the world’s best beans and tea leaves, or any one of our own creative and healthy drink creations.</p>
              <div class="link-button-container">
                <a href="https://emaidalat.com/cafe/" class="link-button">Café émai</a>
              </div>
            </div>
          </div>
        </article>
      </div>
    </section>

    <div id="home-food-background" class="banner"></div>

    <section id="home-rooms" class="section">
      <h1 class="remove-header">Our Rooms</h1>
      <div class="container">
        <article id="home-rooms-article" class="columns">
          <div id="home-rooms-right" class="column is-half-tablet is-one-third-desktop">
            <div id="home-rooms-content" class="content center tablet-text">
              <h3>Gorgeous &amp; rustic little rooms</h3>
              <p>Our cosy guest rooms recall the picturesque charm of the Dalat countryside, with a touch of Zen and contemporary aesthetics from Europe and Japan.</p>
              <br>
              <p>If you would like to enjoy the full émai experience from morning to night, we would be so pleased to welcome you to get snug in one of the small, yet charming guestrooms at our beautiful wooden home.</p>
              <div class="link-button-container">
                <a href="https://emaidalat.com/homestay/" class="link-button">View Rooms</a>
              </div>
            </div>
          </div>
          <div id="home-rooms-mid" class="column is-half-tablet is-one-third-desktop">
           
            <div class="home-rooms-mid-modal modal">
              <div class="modal-background"></div>
              <div class="modal-content">
                  <figure>
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/photo/clara_large.jpg" alt="émai homestay room 2: Clara">
                  </figure>
              </div>
              <button class="modal-close"></button>
            </div>
           
            <figure id="home-rooms-figure-left" class="image portrait">
              <img id="show-home-rooms-mid-modal" class="image-modal" src="<?php bloginfo('stylesheet_directory'); ?>/images/photo/clara_tall_lowres.jpg" alt="émai homestay room 2: Clara">
            </figure>
          </div>
          <div id="home-rooms-left" class="column is-one-third-desktop">
           
            <div class="home-rooms-left-modal modal">
              <div class="modal-background"></div>
              <div class="modal-content">
                  <figure>
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/photo/may_large_01.jpg" alt="émai homestay room 3: May">
                  </figure>
              </div>
              <button class="modal-close"></button>
            </div>
           
            <figure id="home-rooms-figure-right" class="image portrait">
              <img id="show-home-rooms-left-modal" class="image-modal" src="<?php bloginfo('stylesheet_directory'); ?>/images/photo/may_tall_lowres.jpg" alt="émai homestay room 3: May">
            </figure>
          </div>
        </article>
      </div>
    </section>

    <section id="home-dalat" class="section">
      <h1 class="remove-header">Dalat, Vietnam</h1>
      <div class="columns banner">
        <div class="center column is-three-quarters center">
          <article itemscope itemtype="http://schema.org/City" id="home-dalat-article" class="content inverse">
            <h3>Let us welcome you to <span itemprop="name"><a href="https://www.google.com.vn/search?q=dalat&oq=dalat&aqs=chrome..69i57j69i60j69i61l2j69i59l2.1239j0j7&sourceid=chrome&ie=UTF-8">Dalat</a></span></h3>
            <p>We are situated in the central highlands city of Dalat, Vietnam, where misty pine forests blend into wide open lakes &amp; lush mountain landscapes to take your breath away.</p>
            <div class="link-button-container">
              <a href="https://www.google.com.vn/search?q=dalat&oq=dalat&aqs=chrome..69i57j69i60j69i61l2j69i59l2.1239j0j7&sourceid=chrome&ie=UTF-8" class="link-button">Explore Dalat</a>
            </div>
          </article>
        </div>
      </div>
    </section>

    <section id="home-nest" class="section grey-f4">
      <h1 class="remove-header">Gallery</h1>
      <div class="container">
        <article id="home-nest-article" class="columns">
          <div id="home-nest-right" class="column is-half-tablet is-one-third-desktop">
            <div class="home-nest-right-modal modal">
              <div class="modal-background"></div>
              <div class="modal-content">
                <figure>
                  <img src="<?php bloginfo('stylesheet_directory'); ?>/images/photo/grapes_large.jpg" alt="Fresh green and purple grapes on a set table">
                </figure>
              </div>
              <button class="modal-close"></button>
            </div>
            <figure id="home-nest-figure-left" class="image portrait">
              <img id="show-home-nest-right-modal" class="image-modal" src="<?php bloginfo('stylesheet_directory'); ?>/images/photo/grapes_tall_lowres.jpg" alt="Fresh grapes on a set table">
            </figure>
          </div>
          <div id="home-nest-mid" class="column is-hidden-tablet-only is-shown-desktop is-one-third-desktop">
            <div class="home-nest-mid-modal modal">
              <div class="modal-background"></div>
              <div class="modal-content">
                <figure>
                  <img src="<?php bloginfo('stylesheet_directory'); ?>/images/photo/table_setting_large.jpg" alt="Salad of Beets, Fresh Oranges and Strawberries, and Earthly Mixed Nuts">
                </figure>
              </div>
              <button class="modal-close"></button>
            </div>
            <figure id="home-nest-figure-right" class="image portrait">
              <img id="show-home-nest-mid-modal" class="image-modal" src="<?php bloginfo('stylesheet_directory'); ?>/images/photo/table_setting_tall_lowres.jpg" alt="Salad of Beets, Fresh Oranges and Strawberries, and Earthly Mixed Nuts">
            </figure>
          </div>
          <div id="home-nest-left" class="column center is-half-tablet is-one-third-desktop">
            <div id="home-nest-content" class="content tablet-text">
              <h3 class="title">a cosy nest,<br>a <i>joie de vivre.</i></h3>
              <p>Embodying the Danish concept of “hygge,” émai hosts a poetic, authentically European atmosphere of warmth, cosiness, and togetherness in all of its textures and sensibilities.</p>
              <br>
              <p>Let émai be yours and your loved ones’ sanctuary from the brisk Dalat weather. To come into émai is to envelop oneself in the embrace of sensory comfort, homely food &amp; drinks, gentle music and natural beauty.</p>
              <div class="link-button-container">
                <a href="https://emaidalat.com/gallery/" class="link-button">View Gallery</a>
              </div>
            </div>
          </div>
        </article>
      </div>
    </section>

    <section id="home-book" class="section">
      <h1 class="remove-header">Booking and Reservations</h1>
      <div class="container">
        <div class="columns banner">
          <div class="center column is-three-quarters center">
            <div class="content inverse">
              <p>Amidst Dalat’s sublimity, let émai be your nook for comfort and beauty, delighting your senses and palate in the most tender of ways.</p>
              <div class="link-button-container">
                <div class="link-button-left">
                  <a href="https://emaidalat.com/contact/" class="link-button">Reserve a table</a>
                </div>
                <div class="link-button-right">
                  <a href="https://emaidalat.com/homestay/" class="link-button">Book your stay</a>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>

  </main>

  <?php get_footer(); ?>
