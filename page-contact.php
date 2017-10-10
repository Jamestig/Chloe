<?php
/*
  Template Name: Contact Page
*/
?>

  <?php get_header(); ?>

  <main id="contact-main">
    <section class="section">
      <div class="container">
        <div class="columns">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          <div class=" column is-half is-offset-3 has-text-left">
            <?php the_content(); ?>
          </div>

      	<?php endwhile; else : ?>

      	  <p><?php _e( 'Index: No Results.'); ?></p>

      	<?php endif; ?>

        </div>
      </div>
    </section>

  </main>

  <?php get_footer(); ?>
