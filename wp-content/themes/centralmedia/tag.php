<?php get_header(); ?>
	
	<div class="row content">
		<div class="col l8 s12 m6 tag-results-block">
			<div class="tag-name-back">
				<div class="tag-name">
					<?php printf('#%s', single_tag_title('', false)); // заголовок тэга ?>
				</div>

			</div>
			<?php 
				if (have_posts()) : 
					while (have_posts()) : the_post(); // если посты есть - запускаем цикл wp
			?>
						<div>
							<div class="tag-post-name">
								<a href="<?php echo custom_post_permalink(); ?>" class="hover-link" target="_blank">
									<?php the_title(); ?>
								</a>
							</div>
							<div class="tag-post-text">
								<?php short_desc_post(350); ?>
							</div>
						</div>
			<?php
					endwhile; // конец цикла
				else: echo '<p>Не має записів із цим тегом.</p>'; endif; // если записей нет, напишим "простите"
			?>	 
		</div>

	
		<!--important-->
		<div class="col l4 s12 m6 center state-block">
			<div class="state-list">
				<div class="tagpage-state-sign center">АКТУАЛЬНЕ</div>
				<div class="blogs">
					<?php 
						$args = array(
			                'post_type' => 'news',
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
									<a href="<?php the_permalink(); ?>">
										<img src="<?php the_post_thumbnail_url(); ?>" width="40%" alt="" class="state-other-float">
									</a>
									<a href="<?php the_permalink(); ?>" class="hover-link">
										<?php the_title(); ?>
									</a> 
									<div class="state-other-text">
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

<?php get_template_part('content', 'footer') ?>

<?php get_footer(); ?>