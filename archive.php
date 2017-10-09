<?php get_header(); ?>

<main id="blog-main">

  <section id="blog-intro" class="section intro">
    <h2 class="remove-header">Introduction</h2>
    <div class="container side-padding">
      <hgroup class="content has-text-centered">
        <h3 class="title is-uppercase">emai blog archive</h3>
        <hr>
        <h4 class="is-lowercase"><i>on art, beauty, and living meaningfully</i></h4>
      </hgroup>
    </div>
  </section>

  <section id="blog-home-main-section" class="section">
    <h2 class="remove-header">Blog</h2>
    <div class="container">
      <div class="columns">

        <section id="blog-home-excerpt-section" class="column is-two-thirds is-three-quarters-widescreen">
          <h2 class="remove-header">Blog post excerpts</h2>
          <div class="content grey-f4">

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <article class="blog-home-excerpt">

              <?php if( get_the_post_thumbnail() ) : ?>

              <figure class="blog-home-figure image">
                <img src="<?php the_post_thumbnail(); ?>">
              </figure>

              <?php endif; ?>

              <div class="article-text">
                <hgroup class="has-text-centered">
                  <h3 class="custom-text">
                    <a href="<?php the_permalink(); ?>">
                      <?php the_title(); ?>
                    </a>
                  </h3>
                  <h5>
                    <?php the_time('F j, Y'); ?> &vert;
                    <?php the_category(' , '); ?>
                  </h5>
                </hgroup>
                <p>
                  <?php echo strip_tags (get_the_excerpt() ); ?>
                </p>
                <div class="has-text-centered link-button-container">
                  <a href="<?php the_permalink(); ?>" class="link-button">Read more</a>
                </div>
              </div>
              <hr>
            </article>

            <?php endwhile; else : ?>

            <p>
              <?php _e( 'Blog: No results found.'); ?>
            </p>

            <?php endif; ?>

            <div class="post-link-container link-button-container center">
              <span class=""><?php previous_posts_link( 'Previous Page' ); ?> &vert; <?php next_posts_link( 'Next Page' , 5 ); ?></span>
            </div>

          </div>
        </section>
        
        <?php
          if (get_locale() == 'vi') {
            get_template_part( 'sidebar', 'viet' );
          } else {
            get_sidebar( 'blog' );
          }
        ?>

      </div>

    </div>
  </section>

</main>

<?php get_footer(); ?>
