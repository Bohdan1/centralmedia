<?php get_header(); ?>
	
	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			
			<h3> Ви шукали "<?php the_search_query(); ?>" </h3>
			<h4> Результати пошуку: </h4>
		<?php
			if ( have_posts() ) :
				// Start the loop.
				while ( have_posts() ) : the_post();
		?>
					<div class="entry-summary">
						<a href="<?php the_permalink(); ?>"> <?php the_excerpt(); ?> </a>
					</div>
		<?php
				// End the loop.
				endwhile;
				// Previous/next page navigation.
				the_posts_pagination( $pagination_args );

				// If no content, include the "No posts found" template.
			else :
				echo '<div class=""> За вашим запитом нічого не знайдено </div>';

			endif;
		?>

		</main>
	</section>

<?php get_footer(); ?>
