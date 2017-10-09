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
          <h2 class="title">Gallery</h2>
          <hr>
        </hgroup>
        <div id="smartslider">
          <?php echo do_shortcode('[smartslider3 slider=3]'); ?>
        </div>
      </div>
    </section>


  </main>

  <?php get_footer(); ?>
