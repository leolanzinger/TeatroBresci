<?php 
/*
Template Name: Contatti Page
*/
get_header(); ?>

<h1>Contatti</h1>
<?php
  if ( have_posts() ) {
    while ( have_posts() ) {
      the_post();
      the_content();
    }
  }
?>

<?php get_footer(); ?>