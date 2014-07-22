<?php 
/*
 *	Corsi archive template
 */
get_header(); ?>

<div class="container">
  <div class="row">
    <h1 id="corsi-title">Corsi <span class="amp">&amp;</span> laboratori</h1>
    <p>
      <?php
        /*
         * Get corsi categori description
         */ 
        $corsi = get_category_by_slug('corsi'); 
        $desc = $corsi->description;
        echo $desc;
      ?>
    </p>
  </div>
  <div class="row">

    <?php
      /*
       * Get subcategory information
       */ 
      $corsi_id = $corsi->term_id;
      $categories =  get_categories('child_of='.$corsi_id.'&hide_empty=0');
      foreach ($categories as $category) :
      ?>
      <div class="col-sm-12 corso-tile">
        <div class="row">
          <div class="corso-picture">
            <img src="<?php bloginfo( 'template_url' ); ?>/img/<?php echo $category->slug; ?>.jpg">
          </div>
          <div class="corso-caption">
            <h2 class="corso-title"><?php echo $category->name; ?></h2>
            <p>
              <?php echo $category->description; ?>   
            </p>
            <p class="text-right">
              <a href="<?php echo home_url(); ?>/category/<?php echo $category->slug; ?>">
                <button class="tile-informazioni"><em>Ulteriori informazioni</em></button>
              </a>
            </p>
          </div>
        </div>
      </div>

    <?php
      endforeach;
    ?>
  </div>
</div>

<?php get_footer(); ?>