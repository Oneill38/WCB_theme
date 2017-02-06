<?php get_header("home"); ?>

<div class="container-fluid home-container">
  
  <div class="col-sm-12">
        <div class="home-text-container">
          <h1 class="cover-heading">Village Lions</h1>
          <hr>
          <h1  class="cover-heading bottom-heading">White Collar Boxing</h1>
        </div>
  </div>

  <div class="col-sm-12">
    <div class="inner">
      

      <?php if ( is_active_sidebar( 'countdown_area' ) ) : ?>
        <div class="row countdown_area">

          <h2>Friday, February 24th at The Highline Ballroom in NYC</h2>

          <?php dynamic_sidebar( 'countdown_area' ); ?>
          
        </div>
      <?php endif; ?>

<!--       <p class="lead"><a class="ticket_link" href="#">Buy Tickets</a></p>
 -->
    </div>

  <hr>

  <div class="col-sm-12 presenter-pics">
    <h2 class="about-header">Featuring</h2>

    <div class="col-sm-6 presenter-info">
      <img class="hp-pic img-responsive" src="<?php echo get_template_directory_uri(); ?>/Kieran.jpg"/>
      <ul>
        <li>Emcee Kieran Holohan</li>
      </ul>
    </div>


    <div class="col-sm-6 presenter-info">
      <a href="https://soundcloud.com/Remeice"><img class="hp-pic img-responsive" src="<?php echo get_template_directory_uri(); ?>/Me_Dj.jpg"/></a>
      <ul>
        <li><a href="https://soundcloud.com/Remeice">DJ Remeice Ellis</a></li>
        <li><a href="https://www.instagram.com/novibynature/">@novibynature</a></li>
      </ul>
    </div>

  </div>

    <hr>
    
    <div class="col-sm-12">
      <h2 class="about-header">About White Collar Boxing</h2>

      <div class="col-md-6">
        
        <div class="video-container">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/vEAWriH3UrY" frameborder="0" allowfullscreen></iframe>
        </div>

      </div>

      <div class="col-md-6 about-text">
          <p>The Inaugural Village Lions White Collar Boxing Event held on June 6th, 2014, at the B.B. King Blues Club in Times Square, New York, NY. Organized by club member Hamish Keith, formerly a senior producer at inVNT, a global brand communications agency, who saw the potential that this kind of event had to elevate the Village Lions in the growing Northeastern rugby landscape. Since 2014, White Collar Boxing has become a stronghold in the NYC rugby community and continues to be a premier, sold-out event year after year.
          <br><br>
          White Collar Boxing has been featured in publications including <a href="//www.therugbybreakdown.com/single-post/2016/1/22/Going-Premium-One-Event-All-the-Money">The Rugby Breakdown</a> and <a href="//manslife.com/21010/gleasons-gym-village-lions-white-collar-boxing/">Man's Life Magazine</a>.</p>
      </div>
      
    </div>
    
  </div>

</div>

<?php get_footer("home") ?>
