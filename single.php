<?php get_header(); ?>

<main id="post-main">

  <section id="blog-post-main-section" class="section">
    <div class="container">
      <div class="columns is-multiline is-two-thirds">

        <section id="blog-post-section" class="column">
          <div class="content grey-f4">

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <article class="blog-post">

              <?php if( get_the_post_thumbnail() ) : ?>

              <figure class="blog-figure image">
                <img src="<?php the_post_thumbnail(); ?>">
              </figure>

              <?php endif; ?>

              <div class="article-text">
                <hgroup class="has-text-centered">
                  <h2><?php the_title(); ?></h2>
                  <h4>
                    <?php the_time('F j, Y'); ?> &vert;
                    <?php the_category(' , '); ?> &vert; by
                    <?php the_author_posts_link(); ?>
                  </h4>
                </hgroup>
                <p>
                  <?php the_content(); ?>
                </p>
              </div>
            </article>

            <section id="blog-post-comments" class="section">
              <div class="center">
                <header>
                  <h2>Comments</h2>
                </header>

                <section id="comment-list">

                  <div class="comment has-text-left">
                    <hr>
                    <div class="side-padded">
                      <?php comments_template(); ?>
                    </div>
                  </div>

                </section>

                <?php endwhile; else : ?>

                <p>
                  <?php _e( 'Blog: No results found.'); ?>
                </p>

                <?php endif; ?>

              </div>
            </section>

            <section id="post-blog-excerpts" class="blog-excerpts section">

              <header class="has-text-centered">
                <h2>more from <a href="#">our blog</a></h2>
                <hr>
                <p class="is-size-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
              </header>

              <div class="columns">

                <?php 
                  $args_latest = array(
                  'post_type' => 'post',
                  'ignore_sticky_posts' => 1,
                  'posts_per_page' => 3
                  );
                  $the_query = new WP_Query($args_latest); ?>
                <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

                <article id="" class="blog-excerpt column is-one-third has-text-left">
                  <figure id="" class="image">
                    <a href="<?php the_permalink() ?>">
                <img class="border" alt="image" src="<?php the_post_thumbnail(); ?>"/>
              </a>
                  </figure>
                  <div class="blog-excerpt-text">
                    <h3>
                      <a href="<?php the_permalink() ?>">
                        <?php the_title(); ?>
                      </a>
                    </h3>
                    <p>
                      <a href="http://localhost/wordpress/category/food/">Food</a> &vert; <a href="http://localhost/wordpress/category/recipe/">Recipe</a>
                    </p>
                    <p>
                      <?php echo substr(strip_tags($post->post_content), 0, 100);?>
                    </p>
                    <!-- <?php the_content( 'Read the full post »' ); ?>-->
                  </div>

                </article>

                <?php endwhile;?>

                <?php wp_reset_query();?>
              </div>
              <div class="link-button-container has-text-centered">
                <a href="http://localhost/wordpress/blog/" class="link-button">Return to blog</a>
              </div>
            </section>
          </div>
        </section>

        <?php get_sidebar( 'page' ); ?>

      </div>
    </div>


  </section>


</main>

<?php get_footer(); ?>
