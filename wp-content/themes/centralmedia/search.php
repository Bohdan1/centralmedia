<?php get_header(); ?>
	
	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			
			<h3> Ви шукали "<?php the_search_query(); ?>" </h3>
			<h4> Результати пошуку: </h4>
		<?php 
				if ( have_posts() ) :
					while ( have_posts() ) : the_post(); // Start the Loop.
			?>
					<div class="entry-summary">
						<a href="<?php the_permalink(); ?>">
							<?php the_excerpt(); ?>
						</a>
					</div>
		<?php
					endwhile; // End the loop.
	    			echo '<div class="clear"></div>';
					the_posts_pagination( $pagination_args );
					wp_reset_postdata();
				else :
					echo '<div class=""> За вашим запитом нічого не знайдено </div>';
				endif;
		?>

		</main>
	</section>

<?php get_footer(); ?>
