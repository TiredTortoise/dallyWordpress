<?php
/**
 * Template Name: Shepard Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0
 */

// Get the Genre field
if( get_field('shepard_description') ){
	$description = get_field('shepard_description');
}

get_header();
?>

<main id="site-content" role="main">
<div class="month-header">
	<div id="title">
		<h1 class="page-title"><?php echo get_the_title(); ?></h1>
	</div>
	<div class="shepard-description-container">
		<p class="shepard-description"><?php echo $description; ?></p>
	</div>
</div>


<div class="month-gallery">

	<?php

	// check if the repeater field has rows of data
	if( have_rows('month') ):

	 	// loop through the rows of data
	    while ( have_rows('month') ) : the_row();
	    ?>
		    <div class="month-gallery-post">
		    	<a class="month-link" href="<?php the_sub_field('month_page') ?>">
		    	<?php
		    	$image = get_sub_field('month_image');

				if( !empty( $image ) ): ?>
				    <img class="month-gallery-img" src="<?php echo esc_url($image['url']); ?>"/>
				<?php endif; ?>

				<div class="month-post-age">
					<?php
			        // display a sub field value
			        the_sub_field('babies_age');
			        ?>
		    	</div>
		    	</a>
		    </div>
	    <?php
	    endwhile;

	else :

	    // no rows found

	endif;

	?>
</div>

</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php get_footer(); ?>
