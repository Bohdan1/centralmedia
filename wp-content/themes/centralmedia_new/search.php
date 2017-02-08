<?php get_header(); ?>
	
	<section id="primary" class="content-area container">
		<main id="main" class="site-main" role="main">
			
			<span class="search-request"> Ви шукали "<?php the_search_query(); ?>" </span>

			<div class="search-result"> Результати пошуку: </div>
			<div class="search-post-number">
				<?php
					global $wp_query;
					//echo 'За Вашим запитом знайдено ' . $wp_query->found_posts;
					$slovo = getNumEnding( $wp_query->found_posts, array('запис', 'записи', 'записів') );
					echo 'За Вашим запитом знайдено ' . $wp_query->found_posts . ' ' . $slovo;
				?>
			</div>
		<?php 
				if ( have_posts() ) :
					while ( have_posts() ) : the_post(); // Start the Loop.
						$post_type = get_post_type();
						if ( $post_type == 'video') {
			?>
							<div class="entry-summary">
								<div class="search-post-title">
									<a href="<?php echo get_post_meta( $post->ID, 'video_url', true ); ?>" class="hover-link" target="_blank">
										<?php the_title(); ?>
									</a>
								</div>
							</div>
			<?php
						}
						else if ( $post_type == 'partner-news') {
			?>
							<div class="entry-summary">
								<div class="search-post-title">
									<a href="<?php echo get_post_meta( $post->ID, 'partner_news_url', true ); ?>" class="hover-link" target="_blank">
										<?php the_title(); ?>
									</a>
								</div>
							</div>
			<?php
						}
						else {
			?>
							<div class="entry-summary">
								<div class="search-post-title">
									<a href="<?php the_permalink(); ?>" class="hover-link"> <?php the_title(); ?></a>
								</div>
								<a href="<?php the_permalink(); ?>">
									<p>
										<?php short_post_desc(350); ?>
									</p>
								</a>
							</div>
			<?php
						}
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
