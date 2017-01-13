<?php get_header(); ?>

<div class="row content">
	<div class="col l9 s12 m6 all-blogs">
	<?php 
		if ( have_posts() ) :
			while ( have_posts() ) : the_post(); // Start the Loop.
				$author_id = get_the_author_meta('ID');
	?>
				<div class="col l12 m12 s12">
					<img src="<?php echo get_wp_user_avatar_src( $author_id ); ?>" alt="user" width="5%" class="blogger-crop-photo top10-blogger-photo-pos-single">
					<div class="top10-blogger-name-single">
						<div><?php echo get_the_author_meta('first_name'); ?></div>
						<div><?php echo get_the_author_meta('last_name'); ?></div>
					</div>
				</div>
				<div class="single-blogs-sign "><?php the_title(); ?></div>
				<div class="text-blog-single">
					<?php the_content(); ?>
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
			<div class="top10-same-blogger-states-list-name">
				<a href="<?php the_permalink(); ?>">
					<?php the_title(); ?>
				</a>
			</div><br>
			<div class="top10-same-blogger-states-list-text">
				<a href="<?php the_permalink(); ?>" class="blog-short-desc" >
					<?php
						short_desc_post(100);		// display short content (100 symbols)
					?>
				</a>
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