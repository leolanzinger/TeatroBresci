<?php 
/*
 *  Spettacoli single page
 */
get_header(); 

/*
 * Active header on navbar
 */
$_SESSION['wordpress_page'] = false;
$_SESSION['spettacoli'] = true; 
?>


<?php 
  /*
   *  Retrieve background image url for header
   */
  $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
  $url = $thumb['0']; 
?>

<div id="spettacolo-parallax" style="background: url(' <?=$url?> ') " >
  
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
