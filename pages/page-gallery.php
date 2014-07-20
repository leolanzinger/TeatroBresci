<?php 
/*
Template Name: Gallery Page
*/
get_header(); ?>

<div class="container">
  <h1>Galleria</h1>
</div>
<div id="gallery-instagram">
  <div class="container">
    <h2 id="gallery-instagram-title">Instagram <a href="http://www.instagram.com/teatrobresci">@teatrobresci</a></h2>
    <!-- SnapWidget -->
    <iframe src="http://snapwidget.com/bd/?u=dGVhdHJvYnJlc2NpfGlufDIwMHw1fDF8fHllc3wyMHxub25lfG9uU3RhcnR8eWVz&v=7714" title="Instagram Widget" allowTransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:1110px; height:347px"></iframe>
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
    ciao
  </div>

<?php get_footer(); ?>