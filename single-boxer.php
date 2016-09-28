<?php get_header() ?>
<?php 
	$name = get_post_meta( $post->ID, '_cmb_name', true );
	$height = get_post_meta( $post->ID, '_cmb_height', true );
	$weight = get_post_meta( $post->ID, '_cmb_weight', true );
	$hometown = get_post_meta( $post->ID, '_cmb_hometown', true );
	$job = get_post_meta( $post->ID, '_cmb_occupation', true );
	$pic = get_post_meta( $post->ID, '_cmb_headshot', true );
	$bio = get_post_meta( $post->ID, '_cmb_bio', true );
	$position = get_post_meta( $post->ID, '_cmb_position', true );
?>

<div class="row page-container">
  
	<div class="col-sm-12">

		<div class="col-sm-9 page-content">
			
			<h2 class="page-title"><?php the_title(); ?></h2>
		    <img src="<?php echo $pic ?>">

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

<?php get_footer() ?>