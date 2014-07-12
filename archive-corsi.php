<?php 
/*
 *	Corsi archive template
 */
get_header(); ?>

<div class="container">
  <div class="row">
    <h1>Corsi e laboratori</h1>

    <p>
      Me non paenitet nullum festiviorem excogitasse ad hoc. Contra legem facit qui id facit quod lex prohibet. Quis aute iure reprehenderit in voluptate velit esse. Magna pars studiorum, prodita quaerimus. Sed haec quis possit intrepidus aestimare tellus.
      Idque Caesaris facere voluntate liceret: sese habere. Pellentesque habitant morbi tristique senectus et netus. Unam incolunt Belgae, aliam Aquitani, tertiam. Quo usque tandem abutere, Catilina, patientia nostra?
    </p>
  </div>
  <div class="row">
    <div class="col-sm-12 corso-tile">
      <div class="row">
        <div class="corso-picture">
          <img src="<?php bloginfo( 'template_url' ); ?>/img/corso-bambini.jpg">
        </div>
        <div class="corso-caption">
          <h2 class="corso-title">Scuole</h2>
          <p>
            Unam incolunt Belgae, aliam Aquitani, tertiam. Excepteur sint obcaecat cupiditat non proident culpa. Etiam habebis sem dicantur magna mollis euismod. Quis aute iure reprehenderit in voluptate velit esse. Nihilne te nocturnum praesidium Palati, nihil urbis vigiliae.
          </p>
          <p class="text-right">
            <a href="<?php echo home_url(); ?>/category/scuole">
              <button class="tile-informazioni"><em>Ulteriori informazioni</em></button>
            </a>
          </p>
        </div>
      </div>
    </div>
    <div class="col-sm-12 corso-tile">
      <div class="row">
        <div class="corso-picture">
          <img src="<?php bloginfo( 'template_url' ); ?>/img/corso-adulti.jpg">
        </div>
        <div class="corso-caption">
          <h2 class="corso-title">Per tutti</h2>
          <p>
            Unam incolunt Belgae, aliam Aquitani, tertiam. Excepteur sint obcaecat cupiditat non proident culpa. Etiam habebis sem dicantur magna mollis euismod. Quis aute iure reprehenderit in voluptate velit esse. Nihilne te nocturnum praesidium Palati, nihil urbis vigiliae.
          </p>
          <p class="text-right">
            <a href="<?php echo home_url(); ?>/category/per-tutti">
              <button class="tile-informazioni"><em>Ulteriori informazioni</em></button>
            </a>
          </p>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>