<?php get_header(); ?>

<section class="section">
  <div class="container">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <h3>
        <?php the_title(); ?>
    </h3>
    <p>
        <?php the_content(); ?>
    </p>

    <?php endwhile; else : ?>

    <p>
        <?php _e( 'Page: No results found.'); ?>
    </p>

    <?php endif; ?>

  </div>
</section>

<?php get_footer(); ?>
