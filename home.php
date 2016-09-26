<?php get_header("home"); ?>

<div class="container-fluid home-container">
  
  <div class="col-sm-12">
        <div>
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

      <p class="lead"><a class="ticket_link" href="#">Buy Tickets</a></p>
    </div>
  </div>

</div>

