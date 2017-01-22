<?php get_header(); ?>
	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="row">
				<div class="col l9 s12 m6 video-block-page">
					<div class="video-sign-page center">ВІДЕО</div>
					<div class="row video-page-padding center">
						<?php
							if ( have_posts() ) :
								while ( have_posts() ) : the_post(); // Start the Loop.
						?>
									<div class="col l3 m12 s12 video-page-section">
										<img class="video-page-photo" src="<?php video_thumbnail(); ?>">
										<div class="video-page-sign center">
											<a href="<?php echo get_post_meta( $post->ID, 'video_url', true ); ?>" class="hover-link" target="_blank">
												<?php the_title(); ?>
											</a> 
										</div>	
									</div>		
						<?php
								endwhile; // End the loop.
								the_posts_pagination( $pagination_args );
							else :
								// If no content, include the "No posts found" template.
								echo '<div> Публікацій не знайдено </div>';
							endif;
						?>
					</div>
				</div>

				<!--topvideo-->
				<div class="col l3 s12 m6 center topvideo-block">
					<div class="topvideo-list-page">
						<div class="topvideo-sign-page center">ТОП ВІДЕО</div>
						<div class="top-video-page">
							<?php 
								$args = array(
					                'post_type' => 'video',
					                'numberposts' => 5,
					                'publish' => true,
					                'orderby' => 'date',
					                'order' => 'DESC'
						        );
					            $myposts = get_posts( $args );
					            foreach( $myposts as $post ){
					            	setup_postdata($post);
		        			?>
							<div class="row video-padding">
								<div class="youtube-top-video col l4 s6">
									<img width="80%" src="<?php video_thumbnail(); ?>" alt="альтернативный текст" />
								</div>
								<div class="video-text col l8 s6">
									<a href="<?php echo get_post_meta( $post->ID, 'video_url', true ); ?>" class="hover-link" target="_blank">
										<?php the_title(); ?>
									</a> 
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
		</main>
	</section>

<?php get_template_part('content', 'footer') ?>
	
<?php get_footer(); ?>