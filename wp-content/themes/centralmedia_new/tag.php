<?php get_header(); ?>
	
	<div class="row content">
		
		<div class="col l8 s12 m6 tag-results-block">
		<div class="tag-name-back">
			<div class="tag-name">#Назва тегу</div>
		</div>
		<div>
			<div  class="tag-post-name">
				Опозиція Сирії заявила про готовність до переговорів з урядом
			</div>
			<div class="tag-post-text">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint ...
			</div>
		</div>

			<div>
			<div  class="tag-post-name">
				Опозиція Сирії заявила про готовність до переговорів з урядом
			</div>
			<div class="tag-post-text">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint ...
			</div>
		</div>

			<div>
			<div  class="tag-post-name">
				Опозиція Сирії заявила про готовність до переговорів з урядом
			</div>
			<div class="tag-post-text">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint ...
			</div>
		</div>

		</div>
	
		<!--important-->
		<div class="col l4 s12 m6 center state-block">
			<div class="state-list">
				<div class="tagpage-state-sign center">АКТУАЛЬНЕ</div>
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

<?php get_template_part('content', 'footer') ?>

<?php get_footer(); ?>