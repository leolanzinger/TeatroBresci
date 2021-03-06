<?php 
/*
 *	Spettacoli archive template
 */
get_header(); 

/*
 * Active header on navbar
 */
$_SESSION['wordpress_page'] = false;
$_SESSION['spettacoli'] = true; 
?>

  <div class="container">
    <h1 id="spettacoli-title">Spettacoli</h1>
  </div>
    
  <div id="spettacoli-container">
    <a href="<?php echo home_url(); ?>/category/prosa">
      <div class="spettacoli-mask">
        <h2 class="spettacoli-title">Prosa</h2>
        <div class="spettacoli-hover">
          <p>Scopri</p>
        </div>
        <img src="<?php bloginfo( 'template_url' ); ?>/img/prosa.jpg">
      </div>
    </a>
    <a href="<?php echo home_url(); ?>/category/teatro-ragazzi">
      <div class="spettacoli-mask">
      <h2 class="spettacoli-title">Teatro Ragazzi</h2>
      <div class="spettacoli-hover">
        <p>Scopri</p>
      </div>
      <img src="<?php bloginfo( 'template_url' ); ?>/img/teatro-ragazzi.jpg">
      </div>
    </a>
    <a href="<?php echo home_url(); ?>/category/commemorativi">
      <div class="spettacoli-mask">
        <h2 class="spettacoli-title">Commemorativi</h2>
        <div class="spettacoli-hover">
          <p>Scopri</p>
        </div>
        <img src="<?php bloginfo( 'template_url' ); ?>/img/commemorativi.jpg">
      </div>
    </a>
    <a href="<?php echo home_url(); ?>/category/lezioni-spettacolo">
      <div class="spettacoli-mask">
      <h2 class="spettacoli-title">Lezioni spettacolo</h2>
      <div class="spettacoli-hover">
        <p>Scopri</p>
      </div>
      <img src="<?php bloginfo( 'template_url' ); ?>/img/lezioni-spettacolo.jpg">
      </div>
    </a>
  </div>

<?php get_footer(); ?>