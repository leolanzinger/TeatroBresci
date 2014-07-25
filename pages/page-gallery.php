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
    <iframe class="instagram-full" src="http://snapwidget.com/bd/?u=dGVhdHJvYnJlc2NpfGlufDIwMHw1fDF8fHllc3wyMHxub25lfG9uU3RhcnR8eWVz&v=7714" title="Instagram Widget" allowTransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:1110px; height:347px"></iframe>

    <!-- SnapWidget tablet -->
    <iframe class="instagram-tablet" src="http://snapwidget.com/bd/?u=dGVhdHJvYnJlc2NpfGlufDIwMHwzfDF8fHllc3wyMHxub25lfG9uU3RhcnR8eWVz&v=22714" title="Instagram Widget" allowTransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:666px; height:347px"></iframe>
  </div>
</div>
  <div class="container">
    <div class="row">
      <div class="col-sm-8">
        <h2>Foto</h2>
        <?php
          if ( have_posts() ) {
            while ( have_posts() ) {
              the_post();
              the_content();
            }
          }
        ?>
      </div>
      <div class="col-sm-4">
        <h2>Video</h2>
        <iframe width="100%" height="315" src="//www.youtube.com/embed/Lc_EFMuXYTU?list=UURNEvBxrzCS3JlCoCkNcPpw" frameborder="0" allowfullscreen></iframe>
      </div>
    </div>
  </div>


<?php get_footer(); ?>