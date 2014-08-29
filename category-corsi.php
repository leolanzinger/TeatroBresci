<?php 
/*
 *	Corsi base archive template
 */
get_header(); 

        /*
         * Active header on navbar
         */
        $_SESSION['wordpress_page'] = false;
        $_SESSION['corsi'] = true; 
?>

<div class="container">
   <div class="row"> 
      <div class="col-sm-12">
        <?php
        	$cat_name = get_category(get_query_var('cat'))->name;
        ?>
        <?php query_posts( array( 
                         'post_type' => 'post',
                         'posts_per_page' => -1 ) 
              ); 
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
            <div class="col-sm-3 col-xs-12">  		
                <div class="corso-list-mask">
                  <div class="corso-list-overlay"></div>
                  <div class="corso-list-link">
                    <p>Visualizza <br> dettagli</p>
                  </div>
                  <?php the_post_thumbnail( array(400, 400) ); ?>
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