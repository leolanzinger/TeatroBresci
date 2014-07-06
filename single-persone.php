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
	      <h1 id="bio-title">
	      	<?php the_title(); ?>
	      </h1>
	      <div class="persone-header">
	      	<?php
	      	the_post_thumbnail(); ?>
	      </div>
	      <?php
	      the_content();
	    }
	  }
	?>
</div>

<?php get_footer(); ?>
