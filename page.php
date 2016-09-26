<?php get_header(); ?>

<div class="row">
  
  <div class="col-sm-12">
    
    <div class="col-sm-8 page-content">
      <h2 class="page-title"><?php the_title(); ?></h2>
      <hr>

       <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
             <div>
               <?php the_content(); ?>
             </div>
      <?php endwhile; endif; ?>

      </div>
      
      <div class="col-sm-3">

        <?php if ( is_active_sidebar( 'twitter_area' ) ) : ?>
            <?php dynamic_sidebar( 'twitter_area' ); ?>
        <?php endif; ?>  

      </div>

  </div>

</div>

<?php get_footer(); ?>