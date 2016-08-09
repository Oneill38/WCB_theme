<?php get_header(); ?>

<div class="site-wrapper row">
  <div class="site-wrapper-inner">
    <div class="cover-container">
      <div class="masthead clearfix">
        <div class="inner">
          <h3 class="masthead-brand"></h3>

          <ul class="nav masthead-nav">
            <li class="active">
              <a href="http://bootsnipp.com/iframe/g6GWQ" target=
              "_blank">View full screen</a>
            </li>

            <li>
              <a href="#">Features</a>
            </li>

            <li>
              <a href="#">Contact</a>
            </li>
          </ul>
        </div>
      </div>

      <div class="inner cover">
        <div class="col-sm-6">

        </div>
        <div class="col-sm-6">
          <h1 class="cover-heading">Village Lions</h1>
          <hr>
          <h1  class="cover-heading bottom-heading">White Collar Boxing</h1>
        </div>
      </div>

      <div class="mastfoot">
        <div class="inner">
          <!-- Validation -->
          <?php if ( is_active_sidebar( 'countdown_area' ) ) : ?>
            <div>
              <?php dynamic_sidebar( 'countdown_area' ); ?>
            </div>
          <?php endif; ?>

          <p class="lead"><a class="ticket_link" href="#">Buy Tickets</a></p>
        </div>
      </div>
    </div>
</div>
</div>