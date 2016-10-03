<?php get_header() ?>
<?php 
	$height = get_post_meta( $post->ID, '_cmb_height', true );
	$weight = get_post_meta( $post->ID, '_cmb_weight', true );
	$team = get_post_meta( $post->ID, '_cmb_team', true );
	$pic = get_post_meta( $post->ID, '_cmb_headshot', true );
	$bio = get_post_meta( $post->ID, '_cmb_bio', true );
	$position = get_post_meta( $post->ID, '_cmb_position', true );
?>

<div class="row page-container">
  
	<div class="col-sm-12">

		<div class="col-sm-7 page-content">
			
			<h2 class="page-title"><?php the_title(); ?></h2>
			<hr>

			<div class="col-sm-12 headshot-container">
		    	<img class="single-headshot img-circle" src="<?php echo $pic ?>">
			</div>

			<div class="single-stats">
			   	<h4 class="">Height: <?php echo $height; ?></h3>
			   	<h4 class="">Weight: <?php echo $weight; ?></h3>
			   	<h4 class="">Team: <?php echo $team; ?></h3>
			    <h4 class="">Position: <?php echo $position; ?></h3>
			</div>


		    <p><?php echo $bio; ?></p>

		</div>

		<div class="col-sm-1">
			<!-- Empty div just to keep two divs apart -->
		</div>

	    <div class="col-sm-4 page-content">
			
			<h2 class="page-title">Fundraising</h2>
			<hr>
		      
		    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	            <div>
	            	
	            	<div class="knob-container">
				    	<input type="text" value="" class="dial" readOnly="true">
	            	</div>

	            	<hr>

	               <?php the_content(); ?>

	                <hr>

	            	<div class="donors-container">
	            		<h3 class="donors-title">Top Donors</h3>
	            	</div>

	            </div>
	      	<?php endwhile; endif; ?>

	    </div>

	</div>

</div>

<?php get_footer() ?>