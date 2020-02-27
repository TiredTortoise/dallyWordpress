<?php
/**
 * The template for displaying single posts and pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */

get_header();
?>


<?php 

// Declare needed variables

// Get The featured image
if( has_post_thumbnail() ){
	$featuredimg = get_the_post_thumbnail_url();
} else {
	$featuredimg = 'PATH-TO-DEFAULT-IMAGE';
}

// Get the Genre field
// if( get_field('genre') ){
// 	$genres = get_field('genre');
// }

//Get the post body
if( get_field('month_post') ) {
	$month_post = get_field('month_post');
}

?>

<div id="main" >
	<div id="title">
		<h1 class="post-title"><?php echo get_the_title(); ?></h1>
	</div>
	<div class="month-post">
		<p><?php echo $month_post; ?></p>
	</div>
	<div class="month-gallery">
		<?php 
			$images = get_field('month_gallery');
			if( $images ): ?>
			    <ul>
			        <?php foreach( $images as $image ): ?>
			            <li class="month-img">
			                <a href="<?php echo esc_url($image['url']); ?>">
			                     <img class="month-gallery-img" src="<?php echo esc_url($image['sizes']['medium']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
			                </a>
			                <p class="month-post-caption"><?php echo esc_html($image['caption']); ?></p>
			            </li>
			        <?php endforeach; ?>
			    </ul>
		<?php endif; ?>
	</div>
</div>


<?php get_footer(); ?>
