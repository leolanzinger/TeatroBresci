<?php 
/*
Template Name: Contatti Page
*/
get_header(); ?>

<div class="container">
  <h1>Contatti</h1>


    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <?php 
        $post_id = get_the_ID();
        $tel = get_post_custom_values('email', $post_id); 
        echo $email[0];
      ?>
      <?php the_content(); ?>
    <?php endwhile; else: ?>
    <?php endif; ?>

</div>

<?php get_footer(); ?>