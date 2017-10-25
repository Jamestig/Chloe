<?php
/*
  Template Name: Restaurant page
*/
?>

  <?php get_header(); ?>

  <main id="restaurant-main">

    <section class="section intro">
      <div class="container side-padding">
        <hgroup class="content has-text-centered">
          <h1 class="title">Restaurant emai</h1>
          <hr>
          <h2><i>treat yourself to the sublime</i></h2>
        </hgroup>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, sint? Sed suscipit incidunt debitis modi voluptate illum soluta beatae quisquam quam velit! Officia, amet sint incidunt error consequatur dolorum eos.</p>
        <br>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, sint? Sed suscipit incidunt debitis modi voluptate illum soluta beatae quisquam quam velit! Officia, amet sint incidunt error consequatur dolorum eos.</p>
      </div>
    </section>

    <div id="home-food-background" class="banner"></div>

    <section id="restaurant-menu" class="section grey-f4">
      <h1 class="remove-header">Menu</h1>
      <div class="container">

        <article id="restaurant-menu-article" class="columns">

          <div class="column is-half">
            <div itemscope itemType="http://schema.org/hasMenu" class="content">
              <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime dicta, natus, rem quis veritatis.</h3>
              <br>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, dolore. Voluptatibus iure atque illum incidunt, natus sunt corporis cupiditate maxime vitae error aliquid, odit a, perspiciatis alias quibusdam officia similique.</p>
              <div class="link-button-container">
                <a href="#" class="link-button">View Menu</a>
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
              <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime dicta, natus, rem quis veritatis.</h3>
              <br>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, dolore. Voluptatibus iure atque illum incidunt, natus sunt corporis cupiditate maxime vitae error aliquid, odit a, perspiciatis alias quibusdam officia similique.</p>
              <div class="link-button-container">
                <a href="#" class="link-button">Cafe Menu</a>
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
            <h3>It would please us greatly to welcome you to our home with a complimentary starter.</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias explicabo unde nulla animi. Fugiat officiis nemo, doloremque optio nulla eligendi animi distinctio itaque culpa, esse, eveniet reprehenderit consectetur officia ipsa.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam laudantium sit maiores nemo delectus.</p>
          </div>
        </div>
      </div>
    </section>

  </main>

  <?php get_footer(); ?>