<?php 
/*
 *	Spettacoli archive template
 */
get_header(); ?>

  <div class="container">
    <h1>Spettacoli</h1>
  </div>
    
  <div id="spettacoli-container">
    <div class="spettacoli-mask">
      <h2 class="spettacoli-title">Prosa</h2>
      <div class="spettacoli-hover">
        <p>Scopri</p>
      </div>
      <img src="<?php bloginfo( 'template_url' ); ?>/img/home.jpg">
    </div>
    <div class="spettacoli-mask">
      <h2 class="spettacoli-title">Teatro Ragazzi</h2>
      <div class="spettacoli-hover">
        <p>Scopri</p>
      </div>
      <img src="<?php bloginfo( 'template_url' ); ?>/img/home.jpg">
    </div>
    <div class="spettacoli-mask">
      <h2 class="spettacoli-title">Commemorativi</h2>
      <div class="spettacoli-hover">
        <p>Scopri</p>
      </div>
      <img src="<?php bloginfo( 'template_url' ); ?>/img/home.jpg">
    </div>
    <div class="spettacoli-mask">
      <h2 class="spettacoli-title">Lezioni spettacolo</h2>
      <div class="spettacoli-hover">
        <p>Scopri</p>
      </div>
      <img src="<?php bloginfo( 'template_url' ); ?>/img/home.jpg">
    </div>
  </div>

  <ul>
    <li><a href="<?php echo home_url(); ?>/category/prosa">Prosa</a></li>
    <li><a href="<?php echo home_url(); ?>/category/teatro-ragazzi">Teatro ragazzi</a></li>
    <li><a href="<?php echo home_url(); ?>/category/commemorativi">Commemorativi</a></li>
    <li><a href="<?php echo home_url(); ?>/category/lezioni-spettacolo">Lezioni spettacolo</a></li>
  </ul>

<?php get_footer(); ?>