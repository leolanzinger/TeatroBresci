<?php 
/*
 *  Persona single page
 */
get_header(); ?>

<div class="container">
	<?php
	  if ( have_posts() ) {
	    while ( have_posts() ) {
	      the_post(); 
	      ?>
	      <h1>
	      <?php the_title(); ?>
	      </h1><?php
	      the_post_thumbnail();
	      the_content();
	    }
	  }
	?>
</div>

<?php get_footer(); ?>
