<?php get_header(); ?>

<div id="parallax-wrapper">
  <div id="home-parallax">
    <p id="scroll-me" >
      Scopri<br>
      <img class="floatx" src="<?php bloginfo( 'template_url' ); ?>/img/scroll.png">
    </p>
  </div>
</div>

<div class="container">
  <p id="home-intro">Facciamo il teatro che pensiamo necessario, lo facciamo con passione e crediamo che il buon teatro sia fatto per lasciare il segno. Un teatro di qualitá per tutti.</p>
</div>

<div class="container">
  <div class="row">
    <div class="col-sm-7">
      <h2>Prossimi eventi</h2>
      <ul>
        <li id="home-events">
          <div class="events-date-wrapper"><p class="events-date"><span>6</span><br>giu</p></div>
          <p class="events-name"><strong>Arbeit</strong></p>
          <p class="events-place"><em>Rolling Stone di Milano - 18.00</em></p>
        </li>
        <li id="home-events">
          <div class="events-date-wrapper"><p class="events-date"><span>7</span><br>giu</p></div>
          <p class="events-name"><strong>Buco</strong></p>
          <p class="events-place"><em>Rolling Stone di Milano - 18.00</em></p>
        </li>
        <li id="home-events">
          <div class="events-date-wrapper"><p class="events-date"><span>9</span><br>giu</p></div>
          <p class="events-name"><strong>Sunil Superstar</strong></p>
          <p class="events-place"><em>Rolling Stone di Milano - 18.00</em></p>
        </li>
        <button>Eventi successivi</button>
      </ul>

      <h2>Iscriviti alla newsletter</h2>
      <p><strong>Iscriviti per restare aggiornato sui nostri corsi ed eventi.</strong></p>
      <p>//Mailchimp plugin</p>
    </div>
    <div class="col-sm-5" id="facebook">
      <h2>News</h2>
      <iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2FCompagniaTeatroBresci&amp;height=800&amp;colorscheme=light&amp;show_faces=false&amp;header=false&amp;stream=true&amp;show_border=true" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:100%; height:800px;" allowTransparency="true"></iframe>
    </div>
  </div>
</div>

<?php get_footer(); ?>