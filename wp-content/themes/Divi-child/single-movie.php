<?php get_header(); ?>


<?php 

// Declare needed variables

// Get The featured image
if( has_post_thumbnail() ){
	$featuredimg = get_the_post_thumbnail_url();
} else {
	$featuredimg = 'PATH-TO-DEFAULT-IMAGE';
}

// Get the Genre field
if( get_field('genre') ){
	$genres = get_field('genre');
}

// Get Duration field
if( get_field('duration') ){
	$duration = get_field('duration');
}

// Get Rating field
if( get_field('rating') ){
	$rating = get_field('rating');
}

// Get Movie Image field
if( get_field('movie_picture') ){
	$movie_image = get_field('movie_picture');
}

// Get Release date field
if( get_field('release_date') ){
	$release_date = get_field('release_date', false, false);
	$releaseDate = new DateTime($release_date);
}
// Get country field
if( get_field('country') ){
	$countries = get_field('country');
}
// Get language field
if( get_field('language') ){
	$language = get_field('language');
}
// Get budget field
if( get_field('budget') ){
	$number = get_field('budget');
	// let's print the international format for the en_US locale
	setlocale(LC_MONETARY, 'en_US.UTF-8');
	$budget = money_format('%.2n ', $number);
}
// Get opening_weekend field
if( get_field('opening_weekend') ){
	$number = get_field('opening_weekend');
	// let's print the international format for the en_US locale
	setlocale(LC_MONETARY, 'en_US.UTF-8');
	$opening_weekend = money_format('%.2n ', $number);
}
// Get movie storyline field
if( get_field('movie_plot') ){
	$movie_storyline = get_field('movie_plot');
}
?>

<div id="main" class="main-content clearfix">
	<?php while ( have_posts() ) : the_post(); ?>
		<div class="banner-section clearfix" style="background-image: url(<?php echo $featuredimg; ?>);">
			<div class="container">
				<div class="col column1 clearfix"></div>
				<div class="col column2 clearfix">
					<h1 class="post-title"><?php echo get_the_title(); ?></h1>
					<div class="post-details">
						<p class="genre">
							<?php
								foreach( $genres as $genre ){
								echo '<span>' . $genre . '</span>';
								}
							?> <span class="duration">| <?php echo $duration . ' mins'; ?></span>
						</p>
						<p class="rating">Rating: <?php echo $rating; ?></p>
					</div>
				</div>
			</div>
		</div>
		<div class="body-section clearfix">
			<div class="container">
				<div class="col column1 clearfix">
					<div class="movie-image" style="background-image: url(<?php echo $movie_image; ?>);">
					</div>
					<h2>Movie Info</h2>
					<div class="movieinfo">
						<p><strong>Release Date:</strong> <?php echo $releaseDate->format('j F Y'); ?> (<?php echo $countries[0]; ?>)</p>
						<p class="genre2"><strong>Genres:</strong> 
							<?php
								foreach( $genres as $genre ){
									echo '<span>' . $genre . '</span>';
								}
							?>
						</p>
						<p><strong>Country:</strong>
							<?php
								foreach( $countries as $country ){
									echo '<span>' . $country . '</span>';
								}
							?>
						</p>
						<p><strong>Language:</strong> <?php echo $language; ?></p>
						<p><strong>Budget:</strong> <?php echo $budget; ?> (estimated)</p>
						<p><strong>Opening Weekend:</strong> <?php echo $opening_weekend; ?></p>
					</div>
				</div>
				<div class="col column2 clearfix">
					<div class="storyline">
						<h2>Movie Storyline</h2>
						<p><?php echo $movie_storyline; ?></p>
					</div>
					<div class="trailer">
						<h2>Trailer</h2>
						<div class="video-frames">
							<?php // Get Trailer fields
								if( have_rows('movie_trailers') ){
									while( have_rows('movie_trailers') ): the_row(); 
									// Subfields
										if( get_sub_field('trailer_link') ){
	 										$trailer_url = get_sub_field('trailer_link');
	 										echo '<div class="embed-container"><iframe width="560" height="315" src="'. $trailer_url . '" frameborder="0" allowfullscreen></iframe></div>';
										}
									endwhile;
								} 
							?>
						</div>
					</div>
					<div class="cast">
						<h2>Cast</h2>
						<div class="cast-list clearfix">
							<?php // Get cast fields
								if( have_rows('cast_info') ){
									while( have_rows('cast_info') ): the_row(); 
									// Subfields
										if( get_sub_field('cast_member_image') ){
	 										$cast_member_image = get_sub_field('cast_member_image');
										}
										if( get_sub_field('cast_info_real_name') ){
	 										$cast_member_real_name = get_sub_field('cast_info_real_name');
										}
										if( get_sub_field('cast_info_movie_name') ){
	 										$cast_member_character_name = get_sub_field('cast_info_movie_name');
										}
									echo '<div class="casts">';
									echo '<img src="' . $cast_member_image . '" alt="">';
									echo '<h3 class="cast-real-name">' . $cast_member_real_name . '</h3>';
									echo '<p class="cast-char-name"> as <strong>' . $cast_member_character_name . '</strong></p>';									
									echo '</div>';

									endwhile;
								} 
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php endwhile; ?>
</div>



<?php get_footer(); ?>