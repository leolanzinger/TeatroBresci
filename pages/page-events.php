<?php 
/*
Template Name: Calendario Page
*/
get_header(); ?>
<div class="container">
	<h1>Calendario</h1>
	<?php
	  if ( have_posts() ) {
	    while ( have_posts() ) {
	      the_post(); 
	      the_content();
	    }
	  }
	?>
</div>

<?php get_footer(); ?>