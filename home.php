<?php get_header(); ?>

<main id="blog-main">

  <section id="blog-intro" class="section intro">
    <h2 class="remove-header">Introduction</h2>
    <div class="container side-padding">
      <hgroup class="content has-text-centered">
        <h3 class="title is-uppercase">emai lifestyle blog</h3>
        <hr>
        <h4 class="is-lowercase"><i>on art, beauty, and living meaningfully</i></h4>
      </hgroup>
    </div>
  </section>

  <section id="blog-home-featured" class="section banner">
    <h2 class="remove-header">Featured article</h2>

    <article id="blog-featured-article" class="combine-container content">

      <?php query_posts('posts_per_page=1 & cat=22'); if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      <div class="columns">
        <figure class="figure-background column">
          <img src="<?php the_post_thumbnail(); ?>">
        </figure>
        <div class="combine-inner column is-half is-one-third-desktop is-one-quarter-fullhd is-offset-1 is-offset-2-desktop">
          <h3 class="featured-article-header">
            <a href="<?php the_permalink(); ?>">
              <?php the_title(); ?>
            </a>
          </h3>
          <p class="featured-article-excerpt">
            <?php the_excerpt(); ?>
          </p>
          <div class="link-button-container">
            <a href="<?php the_permalink(); ?>" class="link-button">Continue reading</a>
          </div>
        </div>
      </div>

      <?php endwhile; ?>
      <?php wp_reset_query(); ?>

    </article>

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

            <div class="post-link-container">
              <?php the_posts_pagination( $args ); ?>
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
