  <!-- HUGE menu -->
  <div class="overlay overlay-hugeinc">
    <button type="button" class="overlay-close">Close</button>
    <nav>
      <ul>
        <li><a href="<?php echo home_url(); ?>">
          Home
        </a></li>
        <li><a href="<?php echo home_url(); ?>/chi-siamo">
          Chi siamo
        </a></li>
        <li><a href="<?php echo home_url(); ?>/calendario">
          Calendario
        </a></li>
        <li><a href="<?php echo home_url(); ?>/spettacoli">
          Spettacoli
        </a></li>
        <li><a href="<?php echo home_url(); ?>/corsi">
          Corsi<span class="amp">&amp;</span>lab
        </a></li>
        <li><a href="<?php echo home_url(); ?>/gallery">
          Gallery
        </a></li>
        <li><a href="<?php echo home_url(); ?>/contatti">
          Contatti
        </a></li>
      </ul>
    </nav>
  </div>
  <!-- end HUge menu -->

    <footer>
      <div class="container">
        <div class="row">  
          <div class="col-sm-4">
            
            <!-- Begin MailChimp Signup Form -->
            <link href="//cdn-images.mailchimp.com/embedcode/classic-081711.css" rel="stylesheet" type="text/css">
            <style type="text/css">
              .bottom-newsletter#mc_embed_signup {
                background: none; 
                clear:left; 
                font-size:16px; 
                border-radius: 5px; 
                margin-top: 1em; 
                margin-bottom: 2em; 
                padding: 2px 0px 0px 10px; 
                border: 1px solid white;
                margin-left: -10px;
              }
              .bottom-newsletter#mc_embed_signup form {padding: 0;}
              .bottom-newsletter#mc_embed_signup h2 {color: white; font-size: 16px;}
              .bottom-newsletter#mc_embed_signup .button {background-color: #DB6453; font-size: 18px;}
              .bottom-newsletter#mc_embed_signup input { border: transparent; -webkit-appearance: none; border-radius: 5px;}
              .bottom-newsletter#mc_embed_signup .clear {text-align: center;}
              input {color: black;}
              .bottom-newsletter#mc_embed_signup #mce-success-response {
                text-align: left;
                background: white;
                padding: 0.8em;
                width: 100%;
                border-radius: 5px;
                font-weight: 300;
              }
              /* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
                 We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
            </style>
            <div id="mc_embed_signup" class="bottom-newsletter">
              <form action="//teatrobresci.us8.list-manage.com/subscribe/post?u=cb37c01b5622dac69f092e069&amp;id=bc778e8184" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                <h2>Iscriviti alla newsletter per non perdere spettacoli e corsi di Teatro Bresci.</h2>
                <div class="mc-field-group">
                  <label for="mce-EMAIL">Email</label>
                  <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
                </div>
                <div id="mce-responses" class="clear">
                  <div class="response" id="mce-error-response" style="display:none"></div>
                  <div class="response" id="mce-success-response" style="display:none"></div>
                </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                <div style="position: absolute; left: -5000px;"><input type="text" name="b_cb37c01b5622dac69f092e069_bc778e8184" tabindex="-1" value=""></div>
                <div class="clear"><input type="submit" value="Iscriviti" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
              </form>
            </div>
            <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script>
            <script type='text/javascript'>
            (function($) {
            window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';
            /*
             * Translated default messages for the $ validation plugin.
             * Locale: IT
             */
            $.extend($.validator.messages, {
                   required: "Campo obbligatorio.",
                   remote: "Controlla questo campo.",
                   email: "Inserisci un indirizzo email valido.",
                   url: "Inserisci un indirizzo web valido.",
                   date: "Inserisci una data valida.",
                   dateISO: "Inserisci una data valida (ISO).",
                   number: "Inserisci un numero valido.",
                   digits: "Inserisci solo numeri.",
                   creditcard: "Inserisci un numero di carta di credito valido.",
                   equalTo: "Il valore non corrisponde.",
                   accept: "Inserisci un valore con un&apos;estensione valida.",
                   maxlength: $.validator.format("Non inserire pi&ugrave; di {0} caratteri."),
                   minlength: $.validator.format("Inserisci almeno {0} caratteri."),
                   rangelength: $.validator.format("Inserisci un valore compreso tra {0} e {1} caratteri."),
                   range: $.validator.format("Inserisci un valore compreso tra {0} e {1}."),
                   max: $.validator.format("Inserisci un valore minore o uguale a {0}."),
                   min: $.validator.format("Inserisci un valore maggiore o uguale a {0}.")
            });
            }(jQuery));
            var $mcj = jQuery.noConflict(true);
            </script>
            <!--End mc_embed_signup-->
          </div>
          <div class="col-sm-4">  
            <p id="footer-logo"><img src="<?php bloginfo( 'template_url' ); ?>/img/logo.svg"></p>
          </div>
          <div class="col-sm-4">
            <p id="footer-contatti">
              <a href="http://www.facebook.com/CompagniaTeatroBresci"><img src="<?php bloginfo( 'template_url' ); ?>/img/facebook.svg"></a>
              <a href="https://twitter.com/TeatroBresci"><img src="<?php bloginfo( 'template_url' ); ?>/img/twitter.svg"></a>
              <a href="http://instagram.com/teatrobresci"><img src="<?php bloginfo( 'template_url' ); ?>/img/instagram.svg"></a>
              <br>
              <a href="<?php echo home_url(); ?>/contatti">Contatti</a>
            </p>
            <a href="http://www.babbiesproduction.com"><p id="footer-credits">Website design:<br> Babbies Production</p></a>
          </div>
        </div>
      </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/menu.js"></script>
    <script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/modernizr.js"></script>
    <script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/justifiedGallery.js"></script>
    <script>
      $(function() {
        cbpHorizontalMenu.init();
      });
    </script>
    <script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/smooth-scroll.js"></script>
    <script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/jquery.stellar.js" ></script>
    <script type="text/javascript">
      var isMobile = {
          Android: function() {
              return navigator.userAgent.match(/Android/i);
          },
          BlackBerry: function() {
              return navigator.userAgent.match(/BlackBerry/i);
          },
          iOS: function() {
              return navigator.userAgent.match(/iPhone|iPad|iPod/i);
          },
          Opera: function() {
              return navigator.userAgent.match(/Opera Mini/i);
          },
          Windows: function() {
              return navigator.userAgent.match(/IEMobile/i);
          },
          any: function() {
              return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
          }
      };
      jQuery(document).ready(function(){
        if( !isMobile.any() ){
          $(window).stellar({ 
            horizontalScrolling: false,
          });
        }
      });
    </script>

    <!-- HUGE overlay -->
    <script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/modernizr.custom.js"></script>
    <script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/classie.js"></script>
    <script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/demo1.js"></script>
    
    <!-- active list item -->
    <script>
      <?php 
        if ($_SESSION['wordpress_page'] == true) { ?>
          $('#<?php echo the_slug(); ?>-nav').addClass('current');
        <?php
        }
        else { 
          if ($_SESSION['spettacoli'] == true) { ?>
            $('#spettacoli-nav').addClass('current');
          <?php
          }
          else if ($_SESSION['corsi'] == true) {
          ?>
            $('#corsi-nav').addClass('current');
        <?php
          } 
        } 
        ?>
    </script>

    <?php wp_footer(); ?>
  </body>
</html>