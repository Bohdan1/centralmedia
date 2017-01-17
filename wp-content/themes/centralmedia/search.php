<?php get_header(); ?>
	
	<section id="primary" class="content-area container">
		<main id="main" class="site-main" role="main">
			
			<span class="search-request"> Ви шукали "<?php the_search_query(); ?>" </span>

			<div class="search-result"> Результати пошуку: </div>
			<div class="search-post-number"> За Вашим запитом знайдено 7845 записів.</div>
		<?php 
				if ( have_posts() ) :
					while ( have_posts() ) : the_post(); // Start the Loop.
			?>
					<div class="entry-summary">
					<div class="search-post-title"><a href="<?php the_permalink(); ?>" class="hover-link"> <?php the_title(); ?></a> </div>
						<a href=" <?php the_permalink(); ?>">
							<?php the_excerpt(); ?>
						</a>
					</div>
		<?php
					endwhile; // End the loop.
	    			echo '<div class="clear"></div>';
					the_posts_pagination( $pagination_args );
					wp_reset_postdata();
				else :
					echo '<div class="search-null"> За Вашим запитом нічого не знайдено. </div>';
				endif;
		?>

		</main>
	</section>

<?php get_footer(); ?>
