<?php
/*
  Template Name: Gallery Page Vietnamese
*/
?>

  <?php get_header(); ?>

  <main id="gallery-main">

    <section id="gallery-section" class="section banner">
      <div class="container">
        <hgroup class="content has-text-centered">
          <h2 class="title">Vallery</h2>
          <hr>
        </hgroup>
        <div id="smartslider">
          <?php echo do_shortcode('[smartslider3 slider=4]'); ?>
        </div>
      </div>
    </section>


  </main>

  <?php get_footer(); ?>
