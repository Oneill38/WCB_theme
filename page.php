<?php get_header(); ?>

<div class="row page-container">
  
  <div class="col-sm-12">
    
    <div class="col-sm-8 page-content">
      <h2 class="page-title"><?php the_title(); ?></h2>
      <div class="page-social">
        
        <a href="https://twitter.com/share?url=<?php echo get_permalink(); ?>&text=<?php echo the_title(); ?>">
        <span class="fa-stack fa-lg">
          <i class="fa fa-circle fa-stack-2x"></i>
          <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
        </span></a>
        
        <a href="http://www.facebook.com/sharer.php?u=<?php echo the_title() ?>">
          <span class="fa-stack fa-lg">
            <i class="fa fa-circle fa-stack-2x"></i>
            <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
          </span>
        </a>

        <a href="mailto:?subject=<?php echo the_title() ?>&body=<?php echo get_permalink()?>">
          <span class="fa-stack fa-lg">
            <i class="fa fa-circle fa-stack-2x"></i>
            <i class="fa fa-envelope-o fa-stack-1x fa-inverse"></i>
          </span>
        </a>

      </div>
      <hr>

       <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
             <div class="page-text">
               <?php the_content(); ?>
             </div>
      <?php endwhile; endif; ?>

      </div>

      <div class="col-sm-1"></div>
      
      <div class="col-sm-3 twitter-div">

        <?php if ( is_active_sidebar( 'twitter_area' ) ) : ?>
            <?php dynamic_sidebar( 'twitter_area' ); ?>
        <?php endif; ?>  

      </div>

  </div>

</div>

<?php get_footer(); ?>