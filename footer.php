    <footer>
      <div class="container">
        <div class="row">  
          <div class="col-sm-4">
            <p id="footer-contatti">
              <img src="<?php bloginfo( 'template_url' ); ?>/img/facebook.svg">
              <img src="<?php bloginfo( 'template_url' ); ?>/img/twitter.svg">
              <img src="<?php bloginfo( 'template_url' ); ?>/img/instagram.svg">
              <br>
              Contatti
            </p>
          </div>
          <div class="col-sm-4">  
            <p id="footer-logo"><img src="<?php bloginfo( 'template_url' ); ?>/img/logo.svg"></p>
          </div>
          <div class="col-sm-4">
            <p id="footer-credits">Site by Babbies Production</p>
          </div>
        </div>
      </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/menu.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/modernizr.js"></script>
    <script>
      $(function() {
        cbpHorizontalMenu.init();
      });
    </script>

    <?php wp_footer(); ?>
  </body>
</html>