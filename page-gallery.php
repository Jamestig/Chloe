<?php
/*
  Template Name: Gallery Page
*/
?>

  <?php get_header(); ?>

  <main id="gallery-main">

    <section id="gallery-section" class="section banner">
      <div class="container">
        <hgroup class="content has-text-centered">
          <h1 class="title">Gallery</h1>
          <hr>
        </hgroup>
        <div id="smartslider">
          <?php echo do_shortcode('[smartslider3 slider=2]'); ?>
        </div>
      </div>
    </section>


  </main>

  <?php get_footer(); ?>
