<?php get_header(); ?>

<div id="notfound-parallax" style="background: url(' <?php bloginfo( 'template_url' ); ?>/img/404-cropped.jpg') " >  
	<div class="container">
		<div id="notfound-title">
			<h1 >Ops, questa pagina non esiste!</h1>
			<p><a href="<?php echo home_url(); ?>"><button>Torna alla home</button></a></p>
		</div>
	</div>
</div>
<?php get_footer(); ?>