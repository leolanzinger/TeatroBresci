<?php 
/*
 *  Corsi single page
 */
get_header(); ?>

<h1>Corsi single page</h1>
<?php
  if ( have_posts() ) {
    while ( have_posts() ) {
      the_post(); 
      the_title();
      the_content();
    }
  }
?>

<?php get_footer(); ?>
