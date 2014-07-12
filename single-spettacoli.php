<?php 
/*
 *  Spettacoli single page
 */
get_header(); ?>

<div id="spettacolo-parallax" style="background: url("  ") " >
  <?php if ( has_post_thumbnail() ) {
    the_post_thumbnail();
  } ?>
  <div class="container">
    <h1 id="spettacolo-title">
      <?php
          the_title();
      ?>
    </h1>
  </div>
</div>

<div class="container">
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
