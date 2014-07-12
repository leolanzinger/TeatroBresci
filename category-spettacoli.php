<?php 
/*
 *	Spettacoli base archive template
 */
get_header(); ?>

<?php
	$cat_name = get_category(get_query_var('cat'))->name;
?>

<div class="container">
  <h1><?php echo $cat_name; ?></h1>

  <?php
  	if ( have_posts() ) {
  		while ( have_posts() ) {
  			the_post(); 
  			the_title();
  			the_content();
  		}
  	}
  ?>
</div>

<?php get_footer(); ?>