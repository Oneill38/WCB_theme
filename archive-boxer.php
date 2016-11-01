<?php get_header(); ?>

<div class="row page-container">
  
  <div class="col-sm-12">
    
    <div class="col-sm-8 page-content">
      <h2 class="page-title">Boxers</h2>

      <hr>
       <?php 
       $args = array(
            'post_type' => 'boxer',
            'orderby' => 'title',
            'order' => 'ASC',
            'posts_per_page'=>-1
        );
        $wp_query = new WP_Query($args);

       ?>
       <?php if ( $wp_query->have_posts() ) : while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
             <a class="boxer-archive-link" href="<?php echo the_permalink() ?>">
             <div class="archive-boxer-container col-sm-4">
             	<?php
             		$team = get_post_meta( $post->ID, '_cmb_team', true );
                 if (get_post_meta( $post->ID, '_cmb_headshot', true )){
                    $pic = get_post_meta( $post->ID, '_cmb_headshot', true );
                 }else{
                    $pic = get_template_directory_uri() . "/person-placeholder.jpg";
                 }
				?>
			
				<div class="col-sm-12">
			    	<img class="img-circle img-responsive" src="<?php echo $pic ?>">
				</div>

	            <?php the_title(); ?>
	            <p><?php echo $team; ?><p>


            </div>
         	</a>
      <?php endwhile; endif; ?>

      </div>

      <div class="col-sm-1"></div>
      
      <div class="col-sm-3">

        <?php if ( is_active_sidebar( 'twitter_area' ) ) : ?>
            <?php dynamic_sidebar( 'twitter_area' ); ?>
        <?php endif; ?>  

      </div>

  </div>

</div>

<?php get_footer(); ?>