<?php get_header(); ?>
	
	<div class="row">
		<!--slider-->
		<?php get_template_part('content', 'slider') ?>

		<div class="col l12 s12 m12  all-state-sing center">АКТУАЛЬНО</div>
			<div class="row state-bottom">
				<?php 
					$args = array(
		                'post_type' => 'articles',
		                'numberposts' => 4,
		                'publish' => true,
		                'orderby' => 'date',
		                'order' => 'DESC'
		            );
		            $myposts = get_posts( $args );
					foreach( $myposts as $post ){
						setup_postdata($post);
				?>
						<div class="col l3 s6 m6 ">
							<div class="all-state">
								<img src="<?php the_post_thumbnail_url(); ?>" width="100%" alt=""> 
								<a href="<?php the_permalink(); ?>" class="hover-link"> 
									<span class="state-first-name"><?php the_title(); ?></span> 
								</a> 
								<div> 
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
			
			<div class="row other-state-bottom">
				<div class="col l12 s12 m12 all-other-state-sing center">ВСІ СТАТТІ</div>
				<?php 
					if ( have_posts() ) :
						$article_numb = 0; //змінна для підрухунку кількості статтей в рядку
						while ( have_posts() ) : the_post(); // Start the Loop.
				?>
							<div class="col l2 s6 m6 ">
								<div class="all-state-other">
									<img src="<?php the_post_thumbnail_url(); ?>" width="100%" alt=""> 
									<a href="<?php the_permalink(); ?>" class="hover-link"> 
										<span class="state-first-name"><?php the_title(); ?></span> 
									</a> 
									<div> 
										<?php
											short_desc_post(120);	// display short content (120 symbols)
										?>
									</div> 
								</div>
							</div>
				<?php
					//
					$article_numb++;
					if ($article_numb == 6) {
						$article_numb = 0;
						echo '<div class="clear"></div>';
					}

	    			endwhile; // End the loop.
	    			echo '<div class="clear"></div>';
					the_posts_pagination( $pagination_args );
					wp_reset_postdata();
				else :
					// If no content, include the "No posts found" template.
					echo '<div> Статтей не знайдено </div>';
				endif;
			?>			
			</div>
		</div>
		<br>

<?php get_template_part('content', 'footer') ?>

<?php get_footer(); ?>
