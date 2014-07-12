<?php 
/*
 *  Corsi single page
 */
get_header(); ?>

<?php
    if ( have_posts() ) {
      while ( have_posts() ) {
        the_post(); ?>

<div id="corso-cover">
  <div class="container">
    <?php the_post_thumbnail(); ?>
  </div>
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
