<?php 
/*
Template Name: Chi siamo Page
*/
get_header(); ?>
<div class="container">
<h1 id="bio-title">Chi siamo</h1>
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

</div>

<?php get_footer(); ?>