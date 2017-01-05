<?php
get_header(); ?>
	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<?php 
			if ( have_posts() ) :
				while ( have_posts() ) : the_post(); // Start the Loop.
		?>
					<div>
						<div> <a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a> </div>		
					</div>
					<br>
		<?php
				endwhile; // End the loop.
				the_posts_pagination( $pagination_args );
			else :
				// If no content, include the "No posts found" template.
				echo '<div> Публікацій не знайдено </div>';
			endif;
		?>
		</main>
	</section>
<?php get_footer(); ?>
