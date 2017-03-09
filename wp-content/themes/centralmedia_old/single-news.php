<?php get_header(); ?>

<div class="row content">
	<div class="col l8 s12 m6 news-block ">
		<?php 
			if ( have_posts() ) :
				while ( have_posts() ) : the_post(); // Start the Loop.
		?>
					<div class="single-news-sign"><?php the_title(); ?></div>
					<div style="text-align:right; margin: 10px 25px 0 0;">
						<?php 
							the_time('j F Y, G:i');
							setPostViews( get_the_ID() );
							echo '<div> Кількість переглядів: ' . getPostViews( get_the_ID() ) . '</div>'; 
						?>
					</div>
					<div class="text-news">
						<?php
							if( get_the_post_thumbnail_url() ) {
								echo '<img src="' . get_the_post_thumbnail_url() . '" width="100%" alt=""> ';
							}
							the_content();
							if ( comments_open() || get_comments_number() ) { 
								comments_template(); 
							}
						?>
					</div>
		<?php
				endwhile; // End the loop.
				echo '<div class="clear"></div>';
				the_posts_pagination( $pagination_args );
				wp_reset_postdata();
			else :
				// If no content, include the "No posts found" template.
				echo '<div> Новин не знайдено </div>';
			endif;
		?>
	</div>

	<div class="col l4 s12 m6">
		<div class="actual-list">
			<div class="actual-sign">По темі:</div>
			<div class="actual">
				<?php 
					 $args = array(
		                'post_type' => 'news',
		                'numberposts' => 10,
		                'publish' => true,
		                'orderby' => 'date',
		                'order' => 'DESC'
		            );
		            $myposts = get_posts( $args );

		            foreach( $myposts as $post ){
		            	setup_postdata($post);
		        ?>
				<div class="row other-actual">
					<div class="col s12 m12 l12">
						<a href="<?php the_permalink(); ?>" class="hover-link">
							<div class="actual-other-name"><?php the_title(); ?></div>
						</a>
						<div class="actual-other-text">
							<?php
								short_desc_post(120);	// display short content (120 symbols)
							?>
						</div>
					</div>
				</div>

				 <?php
		    		} /* end foreach */
					wp_reset_postdata();
				?>		
			</div>
		</div>
	</div>
</div>
<br>

<?php get_template_part('template-parts/content', 'footer') ?>

<?php get_footer(); ?>