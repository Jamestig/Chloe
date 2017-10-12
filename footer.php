
  <footer class="footer">
    <h2 class="remove-header">emai footer</h2>
    <div class="container">
      <div class="content has-text-centered">
        <h3><a href="#">emai dalat</a></h3>
        <ul id="social-icon-list">
          <li><a href="https://twitter.com/emaidalat" target="_blank" class="fa fa-twitter-square"></a></li>
          <li><a href="#" target="_blank" class="fa fa-facebook-square"></a></li>
          <li><a href="#" target="_blank" class="fa fa-instagram"></a></li>
          <li><a href="#" target="_blank" class="fa fa-envelope"></a></li>
        </ul>
        <span><a href=""></a></span>
        <address><a href="">1B Thi Sach, Da lat, Vietnam</a></address>
        <a href="mailto:name@emaidalat.com">hello@emaidalat.com</a>
        <span>&vert;</span>
        <a href="tel: +84 147 1994">+84 147 1994</a>
      </div>

      <div id="footer-widget-area" class="">
        <?php if ( is_active_sidebar( 'footer-widget' ) ) : ?>
        <div class="center">
          <?php dynamic_sidebar ('footer-widget'); ?>
        </div>
        <?php endif; ?>
      </div>
    </div>
  </footer>

  <?php wp_footer(); ?>

</body>

</html>
