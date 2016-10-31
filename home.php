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
      <!-- Validation -->
      <?php if ( is_active_sidebar( 'countdown_area' ) ) : ?>
        <div class="row countdown_area">
          <?php dynamic_sidebar( 'countdown_area' ); ?>
        </div>
      <?php endif; ?>

<!--       <p class="lead"><a class="ticket_link" href="#">Buy Tickets</a></p>
 -->
    </div>

    <hr>
    
    <div class="col-sm-12">
      
      <div class="col-md-6">
        
        <div class="video-container">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/vEAWriH3UrY" frameborder="0" allowfullscreen></iframe>
        </div>

      </div>

      <div class="col-md-6">
          <p>White Collar Boxing is a charity fundraising event organized by the Village Lions RFC. Sixteen athletes will endure three months of intense training to prepare for a USA Boxing sanctioned amateur fight on February 24th, 2017.
          <br><br>Proceeds from this year's event will benefit Play Rugby USA, a leading youth services charity in NYC.</p>
      </div>
      
    </div>

    <div class-"col-sm-12">
      <p>PHOTOS GO HERE</p>
    </div>
    
  </div>

</div>

<?php get_footer("home") ?>
