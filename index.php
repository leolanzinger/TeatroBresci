<?php get_header(); ?>

<div id="parallax-wrapper">
  <div data-stellar-background-ratio="0.6" data-stellar-vertical-offset="45" id="home-parallax">
    <a href="#home-intro">
      <p id="scroll-me" >
        Scopri<br>
        <img class="floatx" src="<?php bloginfo( 'template_url' ); ?>/img/scroll.png">
      </p>
    </a>
  </div>
</div>

<?php

  $args = array( 'post_type' => 'festival banner', 'posts_per_page' => 1 );
  $loop = new WP_Query( $args );
  while ( $loop->have_posts() ) : $loop->the_post();

     ?>
      <div class="container">
        <div class="festival-banner">
          <img class="festival-banner-img" src="<?php bloginfo( 'template_url' ); ?>/img/antiche-mura-banner.png" />
          <div class="festival-banner-desc clearfix">
            <h3> 
              <?php the_title(); ?>
            </h3>
            <a href="http://www.antichemurafestival.com">
              <?php echo get_the_content(); ?>
            </a>
          </div>
        </div>
      </div>
      <?php
  endwhile;
  wp_reset_query();
?>

<!-- <div class="container">
    <div class="festival-banner">
      <img class="festival-banner-img" src="<?php bloginfo( 'template_url' ); ?>/img/antiche-mura-banner.png" />
      <div class="festival-banner-desc clearfix">
        <h3>Antiche Mura Teatro Festival</h3>
        <a href="http://www.antichemurafestival.com">scopri tutti i dettagli</a>
      </div>
    </div>
</div> -->

<div class="container">
  <p id="home-intro">Facciamo il teatro che pensiamo necessario, lo facciamo con passione e crediamo che il buon teatro sia fatto per lasciare il segno. Un teatro di qualità per tutti.</p>
</div>

<div class="container">
  <div class="row">
    <div class="col-sm-7">
      <h2>Prossimi eventi</h2>
        <?php
        if (class_exists('EM_Events')) {
          echo EM_Events::output( array('limit'=>10,'orderby'=>'name') );
        }
        ?>
        
        <p><a href="<?php echo home_url(); ?>/calendario"><button>Eventi successivi</button></a></p>
    </div>

    
    <div class="col-sm-5" id="facebook">
      <h2>News</h2>
      <!-- Begin Facebook widget -->
      <iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2FCompagniaTeatroBresci&amp;height=500&amp;colorscheme=light&amp;show_faces=false&amp;header=false&amp;stream=true&amp;show_border=true" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:100%; height:500px;" allowTransparency="true"></iframe>
      <!-- End Facebook widget -->
      
      <!-- Begin MailChimp Signup Form -->
      <link href="//cdn-images.mailchimp.com/embedcode/classic-081711.css" rel="stylesheet" type="text/css">
      <style type="text/css">
        .homepage-newsletter#mc_embed_signup{background: #DFDFDF; clear:left; font-size:16px; border-radius: 5px; margin-top: 2em;}
        .homepage-newsletter#mc_embed_signup .button {background-color: #DB6453; font-size: 18px;}
        .homepage-newsletter#mc_embed_signup input { border: transparent; -webkit-appearance: none; border-radius: 5px;}
        .homepage-newsletter#mc_embed_signup .clear {text-align: center;}
        .homepage-newsletter#mc_embed_signup h2 { margin: 0 0 1em 0; font-size: 1em; }
        /* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
           We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
      </style>
      <div class="homepage-newsletter" id="mc_embed_signup">
      <form action="//teatrobresci.us8.list-manage.com/subscribe/post?u=cb37c01b5622dac69f092e069&amp;id=bc778e8184" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
        <h2>Iscriviti alla newsletter per non perdere spettacoli e corsi di Teatro Bresci.</h2>
      <div class="mc-field-group">
        <label for="mce-EMAIL">Email
      </label>
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
  </div>
</div>

<?php get_footer(); ?>