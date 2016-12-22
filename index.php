<?php get_header() ?>

<div class="row page-container">
  
	<div class="col-sm-12">

		<div class="col-sm-7 page-content">
			

			<?php 
		       $args = array(
		            'order' => 'ASC',
		            'posts_per_page'=>-1
		        );
		        $wp_query = new WP_Query($args);

		    ?>

			<?php if ( $wp_query->have_posts() ) : while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
				<h2 class="page-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<hr>
				<?php the_excerpt(); ?>
			<?php endwhile; endif; ?>
			
			<div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>
			<div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>

		</div>

		<div class="col-sm-1">
			<!-- Empty div just to keep two divs apart -->
		</div>

	    <div class="col-sm-4 twitter-div">
		      
	            	
	    	<div>
		    	<?php if ( is_active_sidebar( 'twitter_area' ) ) : ?>
		            <?php dynamic_sidebar( 'twitter_area' ); ?>
		        <?php endif; ?> 
	    	</div>


	    </div>

	</div>

</div>

<?php get_footer() ?>