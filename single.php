<?php get_header() ?>

<div class="row page-container">
  
	<div class="col-sm-12">

		<div class="col-sm-7 page-content">
			
			<h2 class="page-title"><?php the_title(); ?></h2>
			<div class="page-social">
        
		        <a href="https://twitter.com/share?url=<?php echo get_permalink(); ?>&text=<?php echo the_title(); ?>">
		        <span class="fa-stack fa-lg">
		          <i class="fa fa-circle fa-stack-2x"></i>
		          <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
		        </span></a>
		        
		        <a href="http://www.facebook.com/sharer.php?u=<?php echo get_permalink() ?>">
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
			<div class="post-div">			
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				        <?php  the_content(); ?>
			<? endwhile; ?>
			</div>
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
