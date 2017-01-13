<?php get_header(); ?>

<div class="row content">
	<div class="col l8 s12 m6 news-block ">
		<?php 
			if ( have_posts() ) :
				while ( have_posts() ) : the_post(); // Start the Loop.
		?>
					<div class="single-partners-news-sign ">
						<?php
							$post_thumbnail_url = get_the_post_thumbnail_url();
							$post_thumpnail = '<img src="' . $post_thumbnail_url . '" width="100%"';	//при закриванні тегу img('>'), перед зображенням на екран виводиться '">'
							echo types_render_field( "partner_news_url", array("title" => $post_thumpnail, "target" =>
"blank" ) );
							$post_title = get_the_title();
							echo types_render_field( "partner_news_url", array("title" => $post_title, "target" =>
"blank" ) );
						?>
					</div>
					<div class="partners-text-news">
						<?php the_content(); ?>
					</div>
		<?php
				endwhile; // End the loop.
				echo '<div class="clear"></div>';
				the_posts_pagination( $pagination_args );
				wp_reset_postdata();
			else :
				// If no content, include the "No posts found" template.
				echo '<div> Новин партнерів не знайдено </div>';
			endif;
		?>
	</div>

	<div class="col l4 s12 m6">
		<div class="partners-actual-list">
			<div class="partners-actual-sign">По темі:</div>
			<div class="partners-actual">
				<?php 
					 $args = array(
		                'post_type' => 'partner-news',
		                'numberposts' => 10,
		                'publish' => true,
		                'orderby' => 'date',
		                'order' => 'DESC'
		            );
		            $myposts = get_posts( $args );

		            foreach( $myposts as $post ) {
		            	setup_postdata($post);
		        ?>
				<div class="row partner-other-actual">
					<div class="col s12 m12 l12">
						<div class="partners-actual-other-name">
							<?php
								echo types_render_field( "partner_news_url", array("class" => "hover-link", "title" => get_the_title(), "target" =>
"blank" ) );
							?>
						</div>
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

<?php get_template_part('content', 'footer') ?>

<?php get_footer(); ?>