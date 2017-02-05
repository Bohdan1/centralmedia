<?php get_header(); ?>

<div class="row content">
	<div class="col l9 s12 m6 all-blogs">
		<?php 
			$author_id = get_the_author_meta('ID');
			$posts_count = author_posts_count( $author_id );
			$slovo = getNumEnding( $posts_count, array('запис', 'записи', 'записів') );
		?>
		<div class="col l12 m12 s12">
			<img src="<?php echo get_wp_user_avatar_src( $author_id ); ?>" alt="user" width="10%" class="blogger-crop-photo top10-blogger-photo-pos-single">
			<div class="top10-blogger-name-single">
				<?php echo get_the_author_meta('first_name') . ' ' . get_the_author_meta('last_name') . ' опублікував ' . $posts_count . ' ' . $slovo; ?>
			</div>
			<div class="about-author">
				<?php echo get_the_author_meta('description'); ?>
			</div>
		</div>
		<?php 
			if ( have_posts() ) :
				while ( have_posts() ) : the_post(); // Start the Loop.
		?>
					<div class="col l12 m12 s12">
						<div class="one-user-blog-name">
							<a href="<?php echo custom_post_permalink(); ?>"><?php the_title(); ?></a>
						</div>
						<div class="one-user-blog-text">
								<?php
									short_desc_post(300);
								?>
						</div>
					</div>
		<?php
				endwhile; // End the loop.
				echo '<div class="clear"></div>';
				the_posts_pagination( $pagination_args );
				wp_reset_postdata();
			else :
				// If no content, include the "No posts found" template.
				echo '<div> Блогів не знайдено </div>';
			endif;
		?>
	</div>

	<div class="col l3 s12 m6">
		<div class="top10-same-blogger-states">Дивіться також:</div>
		<?php 
			 $args = array(
                'post_type' => 'blogs',
                'numberposts' => 10,
                'publish' => true,
                'orderby' => 'date',
                'order' => 'DESC'
            );
            $myposts = get_posts( $args );

            foreach( $myposts as $post ){
            	setup_postdata($post);
        ?>
		        <div class="top10-same-blogger-states-list">
					<div class="top10-same-blogger-states-list-name ">
						<a href="<?php the_permalink(); ?>" class="hover-link">
							<?php the_title(); ?>
						</a>
					</div>
					<br>
					<div class="top10-same-blogger-states-list-text">
						<?php
							short_desc_post(100);		// display short content (100 symbols)
						?>
					</div>
				</div>
        <?php
    		} /* end foreach */
			wp_reset_postdata();
		?>
	</div>
</div>
<br>

<?php get_template_part('content', 'footer') ?>

<?php get_footer(); ?>