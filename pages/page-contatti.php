<?php 
/*
Template Name: Contatti Page
*/
get_header(); ?>

<div class="container" id="contatti">
  <h1>Contatti</h1>


    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <?php 
        $post_id = get_the_ID(); ?>
        
        <div class="row">
          <div class="col-sm-7">
            <h2>Sede Legale</h2>
            <p><?php $SedeLegale = get_post_custom_values('SedeLegale', $post_id); 
                    echo $SedeLegale[0]; ?></p>

            <h2>Sede Operativa</h2>
            <p><?php $SedeOperativa = get_post_custom_values('SedeOperativa', $post_id); 
                    echo $SedeOperativa[0]; ?></p>

            <h2>Telefono</h2>
            <p><?php $telefono = get_post_custom_values('telefono', $post_id); 
                    echo $telefono[0]; ?></p>

            <h2>Email</h2>
            <p>
              <strong>Info:</strong> 
              <?php $emailinfo = get_post_custom_values('emailinfo', $post_id); echo $emailinfo[0]; ?> <br>
              
              <strong>Distribuzione spettacoli:</strong> 
              <?php $emailDistribuzione = get_post_custom_values('emailDistribuzione', $post_id); echo $emailDistribuzione[0]; ?> <br>

              <strong>Direzione:</strong>
              <?php $emailDirezione = get_post_custom_values('emailDirezione', $post_id); echo $emailDirezione[0]; ?>
            </p>

            <h2>Amministrazione</h2>
            <p>
              <strong>C.F.</strong>
              <?php $codiceFiscale = get_post_custom_values('codiceFiscale', $post_id); echo $codiceFiscale[0]; ?> <br>
              <strong>P.I.</strong>
              <?php $partitaIva = get_post_custom_values('partitaIva', $post_id); echo $partitaIva[0]; ?> <br>
            </p>
          </div>

          <div class="col-sm-5">
            <h2>News</h2>
            <iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2FCompagniaTeatroBresci&amp;height=500&amp;colorscheme=light&amp;show_faces=false&amp;header=false&amp;stream=true&amp;show_border=true" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:100%; height:500px;" allowTransparency="true"></iframe>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <h2 id="contatti-instagram-title">Instagram <a href="http://www.instagram.com/teatrobresci">@teatrobresci</a></h2>
            <!-- SnapWidget -->
            <iframe src="http://snapwidget.com/bd/?u=dGVhdHJvYnJlc2NpfGlufDIwMHw1fDF8fHllc3wyMHxub25lfG9uU3RhcnR8eWVz&v=7714" title="Instagram Widget" allowTransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:1110px; height:347px"></iframe>
          </div>  
        </div>

      <?php the_content(); ?>
    <?php endwhile; else: ?>
    <?php endif; ?>

</div>

<?php get_footer(); ?>