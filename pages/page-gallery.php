<?php 
/*
Template Name: Gallery Page
*/
get_header(); ?>

<div class="container">
  <h1>Galleria</h1>
</div>
<div id="gallery-instagram">
  //instagram
</div>
  <div class="container">
    //content
    <?php
      if ( have_posts() ) {
        while ( have_posts() ) {
          the_post();
          the_content();
        }
      }
    ?>
    ciao
  </div>

<?php get_footer(); ?>