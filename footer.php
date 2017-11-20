
  <footer class="footer">
    <h2 class="remove-header">emai footer</h2>
    <div class="container">
      <div class="content has-text-centered">
        <h3><a href="#">emai dalat</a></h3>
        <ul id="social-icon-list">
          <li><a href="https://www.facebook.com/emaidalat/" target="_blank" class="fa fa-facebook-square"></a></li>
          <li><a href="https://www.instagram.com/emaidalat/" target="_blank" class="fa fa-instagram"></a></li>
          <li><a href="mailto:family@emaidalat.com" target="" class="fa fa-envelope"></a></li>
          <li><a href="https://twitter.com/emaidalat" target="_blank" class="fa fa-twitter-square"></a></li>
        </ul>
        <span><a href=""></a></span>
        <address><a href="https://www.google.com/maps/place/1+Thi+S%C3%A1ch,+Ph%C6%B0%E1%BB%9Dng+6,+Tp.+%C4%90%C3%A0+L%E1%BA%A1t,+L%C3%A2m+%C4%90%E1%BB%93ng,+Vietnam/@11.9468468,108.4303808,17z/data=!3m1!4b1!4m5!3m4!1s0x3171132bcb6e21e1:0x45649b7517deb5b!8m2!3d11.9468416!4d108.4325695">1 Thi Sach, Da lat, Vietnam</a></address>
        <a href="mailto:family@emaidalat.com">family@emaidalat.com</a>
        <span>&vert;</span>
        <a href="tel: +84 2633 839 001">+84 2633 839 001</a>
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
