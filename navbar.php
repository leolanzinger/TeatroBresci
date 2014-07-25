<div class="menu-container">
      <div class="main">
        <nav id="cbp-hrmenu" class="cbp-hrmenu">
          <ul>
            <li id="navbar-logo">
              <a href="<?php echo home_url(); ?>">
                <img src="<?php bloginfo( 'template_url' ); ?>/img/logo.svg">
              </a>
            </li>
            <li class="desktop-menu">
              <a href="<?php echo home_url(); ?>/chi-siamo">Chi siamo</a>
            </li>
            <li class="desktop-menu">
              <a href="<?php echo home_url(); ?>/calendario">Calendario</a>
            </li>
            <li class="desktop-menu dropdown">
              <a href="#">Spettacoli</a>
              <div class="cbp-hrsub">
                <div class="cbp-hrsub-inner"> 
                  <div class="container">
                    <h4><a href="<?php echo home_url(); ?>/spettacoli">Spettacoli</a></h4>
                    <ul>
                    <!-- retrieve spettacoli categories -->
                    <?php
                    $idObj = get_category_by_slug('spettacoli'); 
                    $cat_id = $idObj->term_id;
                    $categories =  get_categories('child_of='.$cat_id.'&hide_empty=0');
                    foreach ($categories as $category) :
                    ?>
                      <li><a href="<?php echo home_url(); ?>/category/<?php echo $category->slug; ?>"><?php echo $category->name; ?></a></li>
                      
                    <?php
                    endforeach;
                    ?>
                    </ul>
                  </div>
                </div><!-- /cbp-hrsub-inner -->
              </div><!-- /cbp-hrsub -->
            </li>
            <li class="desktop-menu dropdown">
              <a href="#">Corsi<span class="amp">&amp;</span>Lab</a>
              <div class="cbp-hrsub">
                <div class="cbp-hrsub-inner"> 
                  <div>
                    <h4><a href="<?php echo home_url(); ?>/corsi">Corsi <span class="amp">&amp;</span> Laboratori</a></h4>
                    <ul>
                      <!-- retrieve corsi categories -->
                      <?php
                      $idObj = get_category_by_slug('corsi'); 
                      $cat_id = $idObj->term_id;
                      $categories =  get_categories('child_of='.$cat_id.'&hide_empty=0');
                      foreach ($categories as $category) :
                      ?>
                        <li><a href="<?php echo home_url(); ?>/category/<?php echo $category->slug; ?>"><?php echo $category->name; ?></a></li>
                        
                      <?php
                      endforeach;
                      ?>
                    </ul>
                  </div>
                </div><!-- /cbp-hrsub-inner -->
              </div><!-- /cbp-hrsub -->
            </li>
            <li class="desktop-menu">
              <a href="<?php echo home_url(); ?>/gallery">Gallery</a>
            </li>
            <li class="desktop-menu">
              <a href="<?php echo home_url(); ?>/contatti">Contatti</a>
            </li>
            <a id="trigger-overlay" href="#">
              <li id="mobile-menu">
                <img id="hamburger" src="<?php bloginfo( 'template_url' ); ?>/img/hamburger.svg">
                Menu
              </li>
            </a>
          </ul>
        </nav>
      </div>
    </div>