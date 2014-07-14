<?php 
/*
 *	Corsi base archive template
 */
get_header(); ?>

<div class="container">
   <div class="row"> 
      <div class="col-sm-12">
        <?php
        	$cat_name = get_category(get_query_var('cat'))->name;
        ?>

        <h1 id="corsi-list-title"><?php echo $cat_name; ?></h1>
      </div>
  </div>

  <div class="row">
    <?php
    	if ( have_posts() ) {
    		while ( have_posts() ) { ?>
          <?php the_post(); ?>
          <a href="<?php the_permalink(); ?>">
            <div class="col-sm-3 col-xs-6">  		
                <div class="corso-list-mask">
                  <div class="corso-list-overlay"></div>
                  <div class="corso-list-link">
                    <p>Visualizza <br> dettagli</p>
                  </div>
                  <?php the_post_thumbnail(); ?>
                </div>
          			
                <h2 class="corso-list-title">
                  <?php the_title();
          			   // the_content(); ?>
                </h2>
            </div>
          </a>
        <?php
    		}
    	}
    ?>
  </div>
</div>

<?php get_footer(); ?>