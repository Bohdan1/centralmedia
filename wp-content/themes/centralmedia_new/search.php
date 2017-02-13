<?php get_header(); ?>
	<div class="header-margin-tag">
		<div class="tag-name">Ви шукали: "<?php the_search_query(); ?>"</div>
		<div class="tag-name-description">
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
					show_no_img_post();
				endwhile; // End the loop.
    			echo '<div class="clear"></div>';
				the_posts_pagination( $pagination_args );
				wp_reset_postdata();
			endif;
		?>
	</div>

<?php get_footer(); ?>
