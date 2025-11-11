<html>

</html>
<body>
<footer class="site-footer">
  <div class="container">
    <div class="row align-items-start">

      <!-- Navigation -->
      <div class="col-md-4 footer-nav">
        <h3 class="mb-3">Navigation</h3>
        <?php
        wp_nav_menu( array(
          'theme_location' => 'footer-menu',
          'container'      => 'nav',
          'container_class'=> 'footer-nav-container',
          'menu_class'     => 'footer-nav-list',
        ) );
        ?>
      </div>
      
      <!-- Legal -->
      <div class="col-md-4 footer-legal">
        <h3 class="mb-3">Legal</h3>
        <?php
        wp_nav_menu( array(
          'theme_location' => 'footer-legal',
          'container'      => 'nav',
          'container_class'=> 'legal-nav-container',
          'menu_class'     => 'legal-nav-list',
        ) );
        ?>
      </div>

      <!-- Contact Info -->
    <div class="col-md-4 footer-contact">
      <h3 class="mb-3">Get in Touch</h3>
        <ul class="contact-list">
          <li><a href="mailto:joonas.mankisenmaa@gmail.com">joonas.mankisenmaa@gmail.com</a></li>
        </ul>
    　</div>
    </div>
  </div>

  <!-- Bottom column -->
  <hr class="line-break">
    <div class="container">
        <div class="footer-description">
            <?php footer_watermark(); ?>
        </div>
    </div>
</footer>   
<?php wp_footer(); ?>
</body>