<?php
get_header(); ?>
	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<?php if ( have_posts() ) :
			while ( have_posts() ) : the_post(); // Start the Loop.
		?>
				<!-- content -->
				<div>
					<div> <?php the_title(); ?> </div>	
				</div>
				<br>
				<!-- end content -->
		<?php
			endwhile; // End the loop.
			
			the_posts_pagination( array( // Previous/next page navigation.
				'prev_text'          => __( 'Previous page' ),
				'next_text'          => __( 'Next page' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page' ) . ' </span>',
			) );

		else :
			// If no content, include the "No posts found" template.
			echo '<div> Публікацій не знайдено </div>';
		endif;
		?>
		</main><!-- .site-main -->
	</section><!-- .content-area -->
<?php get_footer(); ?>
