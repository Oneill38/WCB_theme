<?php get_header() ?>

<div class="row page-container">
  
	<div class="col-sm-12">

		<div class="col-sm-7 page-content">
			
			<h2 class="page-title"><?php the_title(); ?></h2>
			<hr>
			
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				        <?php  the_content(); ?>
			<? endwhile; ?>
			
		</div>

		<div class="col-sm-1">
			<!-- Empty div just to keep two divs apart -->
		</div>

	    <div class="col-sm-4">
		      
	            	
	    	<div>
		    	<?php if ( is_active_sidebar( 'twitter_area' ) ) : ?>
		            <?php dynamic_sidebar( 'twitter_area' ); ?>
		        <?php endif; ?> 
	    	</div>


	    </div>

	</div>

</div>

<?php get_footer() ?>