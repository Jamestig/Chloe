<aside id="blog-sidebar" class="sidebar column is-one-third is-one-quarter-widescreen">

  <div class="content grey-f4">

    <section id="blog-sidebar-intro" class="">
      <hgroup>
        <h2>emai vietnamese blog</h2>
        <h4>On Art, Beauty, and Living Meaningfully</h4>
      </hgroup>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda deserunt doloribus, praesentium repellat molestiae sequi veniam, delectus distinctio at quisquam consequatur, explicabo est impedit minus error culpa officiis ab dicta?</p>
      <hr>
    </section>

    <section id="blog-sidebar-join">
      <h3>join the family</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci quasi laborum delectus consequatur omnis nobis inventore sapiente, ducimus tempora excepturi iste architecto nulla minima. Repellendus amet soluta in, veniam vel.</p>
      <input type="text">
      <div class="link-button-container">
        <a href="#" class="link-button">Subscribe</a>
      </div>
    </section>

    <section id="blog-sidebar-themes">
      <div class="columns-is-mobile is-multiline">
        <h3>themes</h3>

        <ul class="columns is-mobile is-multiline is-centered">

          <li class="cat-item theme-card-odd column">
            <div class="theme-card-background">
              <a href="http://localhost/wordpress/vi/category/vood/" class="theme-card-title">Foodv</a>
            </div>
          </li>

          <li class="cat-item theme-card-even column">
            <div class="theme-card-background">
              <a href="http://localhost/wordpress/vi/category/vature/" class="theme-card-title">Naturev</a>
            </div>
          </li>
          
          <li class="cat-item theme-card-odd column">
            <div class="theme-card-background">
              <a href="http://localhost/wordpress/vi/category/vusic/" class="theme-card-title">Musicv</a>
            </div>
          </li>

          <li class="cat-item theme-card-even column">
            <div class="theme-card-background">
              <a href="http://localhost/wordpress/vi/category/vecipe/" class="theme-card-title">Recipev</a>
            </div>
          </li>
          
          <li class="cat-item theme-card-odd column">
            <div class="theme-card-background">
              <a href="http://localhost/wordpress/vi/category/vart/" class="theme-card-title">Artv</a>
            </div>
          </li>

          <li class="cat-item theme-card-even column">
            <div class="theme-card-background">
              <a href="http://localhost/wordpress/vi/category/vealth/" class="theme-card-title">Healthv</a>
            </div>
          </li>

        </ul>
      </div>
    </section>

    <section id="sidebar-widget-area">
      <div>
        <?php if( !dynamic_sidebar( 'blog' ) ): ?>
      </div>
    </section>

  </div>

  <?php endif; ?>

</aside>
