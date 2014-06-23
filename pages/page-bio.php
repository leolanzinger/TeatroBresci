<?php 
/*
Template Name: Chi siamo Page
*/
get_header(); ?>
<h1>Chi siamo</h1>
<?php
  if ( have_posts() ) {
    while ( have_posts() ) {
      the_post();
      the_content();
    }
  }
?>

<hr/>

<?php
	$args = array( 'post_type' => 'persone', 'posts_per_page' => 100 );
	$loop = new WP_Query( $args );
	while ( $loop->have_posts() ) : $loop->the_post();
	?>	<a href="<?php the_permalink(); ?>"><h2> <?php the_title(); ?></h2></a>
		<?php the_content(); ?>
	<?php endwhile;
?>

<?php get_footer(); ?>