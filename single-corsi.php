<?php 
/*
 *  Corsi single page
 */
get_header(); 

        /*
         * Active header on navbar
         */
        $_SESSION['wordpress_page'] = false;
        $_SESSION['corsi'] = true; 
?>

<?php 
  /*
   *  Retrieve background image url for header
   */
  $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
  $url = $thumb['0']; 
?>

<?php
    if ( have_posts() ) {
      while ( have_posts() ) {
        the_post(); ?>

<div id="corso-cover" style="background: url(' <?=$url?> ') ">
</div>

<div class="container">
  <h1 id="corso-title"><?php the_title(); ?></h1>

  <p>
        <?php 
          the_content();
        }
      }
    ?>
  </p>
</div>

<?php get_footer(); ?>
