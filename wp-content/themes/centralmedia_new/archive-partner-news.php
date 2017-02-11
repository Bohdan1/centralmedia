<?php get_header(); ?>
	
	<div class="row content">
		<!--slider-->
		<?php get_template_part('content', 'slider') ?>
		
		<div class="col l8 s12 m6 news-partners-block">
			<div class="news-partners-sign center">НОВИНИ ПАРТНЕРІВ</div>
			<?php 
				if ( have_posts() ) :
					while ( have_posts() ) : the_post(); // Start the Loop.
			?>
						<div class="article"> 
							<div class="article-title">
								<a href="<?php echo get_post_meta( $post->ID, 'partner_news_url', true ); ?>" class="hover-link" target="_blank">
									<?php the_title(); ?>
								</a> 
							</div>
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
	
		<!--important-->
		<div class="col l4 s12 m6 center state-block">
			<div class="state-list">
				<div class="state-sign center">АКТУАЛЬНЕ</div>
				<div class="blogs">
					<?php 
						$args = array(
			                'post_type' => 'partner-news',
			                'numberposts' => 3,
			                'publish' => true,
			                'orderby' => 'date',
			                'order' => 'DESC'
			            );
			            $myposts = get_posts( $args );
						foreach( $myposts as $post ){
							setup_postdata($post);
					?>
							<div class="row other-state">
								<div class="col s12 m12 l12">
									<a href="#"><img src="<?php the_post_thumbnail_url(); ?>" width="40%" alt="" class="state-other-float"></a>
									<a href="<?php echo get_post_meta( $post->ID, 'partner_news_url', true ); ?>" class="hover-link" target="_blank">
										<?php the_title(); ?>
									</a> 
									<div class="state-other-text">
										<?php
											short_post_desc(120);	// display short content (120 symbols)
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



<?php get_footer(); ?>