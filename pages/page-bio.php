<?php 
/*
Template Name: Chi siamo Page
*/
get_header(); ?>
<div class="container">
	<div class="row">
		<h1 id="bio-title">Chi siamo</h1>
			<?php
			  if ( have_posts() ) {
			    while ( have_posts() ) {
			      the_post();
			      the_content();
			    }
			  }
			?>
	</div>
	<hr/>

	<?php
		$args = array( 'post_type' => 'persone', 'posts_per_page' => 100 );
		$loop = new WP_Query( $args );
		while ( $loop->have_posts() ) : $loop->the_post(); ?>	
			
			<div class="row">
				<div class="actor-photo">
					<?php if ( has_post_thumbnail() ) {
						the_post_thumbnail();
					} ?>
				</div>
				<a href="<?php the_permalink(); ?>">
					<h2 class="actor-name"> <?php the_title(); ?></h2>
				</a>
				<div class="actor-description">
					<?php the_excerpt(); ?>
				</div>
			</div>
		<?php endwhile;
	?>

</div>

<?php get_footer(); ?>