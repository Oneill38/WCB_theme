<?php get_header(); ?>

<div class="row page-container">
  
  <div class="col-sm-12">
    
    <div class="col-sm-8 page-content">
      <h2 class="page-title">Fights</h2>

      <hr>
       <?php 
       $args = array(
            'post_type' => 'fight',
            'orderby' => 'title',
            'order' => 'ASC',
            'posts_per_page'=>-1
        );
        $wp_query = new WP_Query($args);

       ?>
       
       <?php if ( $wp_query->have_posts() ) : while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
            <?php
                 
                 $boxer_one = get_page_by_title( get_post_meta( $post->ID, '_cmb_boxer_one', true ), OBJECT, 'boxer');
                 $boxer_two = get_page_by_title( get_post_meta( $post->ID, '_cmb_boxer_two', true ), OBJECT, 'boxer');

                 if (get_post_meta( $boxer_one->ID, '_cmb_headshot', true )){
                    $pic_one = get_post_meta( $boxer_one->ID, '_cmb_headshot', true );
                 }else{
                    $pic_one = get_template_directory_uri() . "/person-placeholder.jpg";
                 }

                if (get_post_meta( $boxer_two->ID, '_cmb_headshot', true )){
                    $pic_two = get_post_meta( $boxer_two->ID, '_cmb_headshot', true );
                 }else{
                    $pic_two = get_template_directory_uri() . "/person-placeholder.jpg";
                 }


              ?>

          <div class="col-sm-12 fight-archive-title">
            <h3><?php the_title(); ?></h3>
          </div>

          <div class="archive-boxer-container col-sm-6">

			 
            <a href="<?php echo get_permalink( $boxer_one->ID ) ?>">
      				<div class="col-sm-12 fight-img">
      			    	<img class="img-circle img-responsive" src="<?php echo $pic_one ?>">
      				</div>
            </a>
            
            <a href="<?php echo get_permalink( $boxer_one->ID ) ?>">
              <h4><?php echo $boxer_one->post_title ?></h4>
            </a>

          </div>

        <div class="archive-boxer-container col-sm-6">

          <a href="<?php echo get_permalink( $boxer_two->ID ) ?>">
            <div class="col-sm-12 fight-img">
                <img class="img-circle img-responsive" src="<?php echo $pic_two ?>">
            </div>
          </a>
            
            <a href="<?php echo get_permalink( $boxer_two->ID ) ?>"><h4><?php echo $boxer_two->post_title ?></h4></a>

          </div>

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