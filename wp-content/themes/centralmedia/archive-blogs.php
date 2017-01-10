<?php get_header(); ?>
	
	<div class="row content">
		<!--slider-->
		<?php get_template_part('content', 'slider') ?>
		
		<div class="col l9 s12 m6 all-blogs">
			<div class=" col l12 s12 m12 single-blogs-sign center">Блоги:</div>
			<?php 
				if ( have_posts() ) :
					while ( have_posts() ) : the_post(); // Start the Loop.
			?>
						<div class="col l4 s12 m6">
							<div class="blogger-article center all-blog-block">

								<img class="blogger-crop-photo" src="<?php $author_id = get_the_author_meta('ID'); echo get_avatar_url($author_id);?>" alt="user" width="30%">
								<div class="blogger-name">
									<?php echo get_the_author_meta('first_name') . ' ' . get_the_author_meta('last_name'); ?>
								</div>
								<div class="all-blogs-blogger-speach">
										<a href="<?php the_permalink(); ?>" class="blog-short-desc" >
											<?php
												short_desc_post(120);		// display short content (120 symbols)
											?>
										</a>
								</div>
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
			<div class="top10-bloggers-sign">Топ-10 блогерів:</div>
			<div class="top10-blogger-list col l12 m12 s12">
			<div class="top10-blogger-number">1.</div>
			<img class="blogger-crop-photo top10-blogger-photo-pos" src="http://2.gravatar.com/avatar/8342d4357eedbfac498710e3f5b908d2?s=96&d=mm&r=g" alt="user" width="10%">
			<div class="top10-blogger-name">Ім'я<br> Прізвище</div>
			</div>

			<div class="top10-blogger-list col l12 m12 s12">
			<div class="top10-blogger-number">2.</div>
			<img class="blogger-crop-photo top10-blogger-photo-pos" src="http://2.gravatar.com/avatar/8342d4357eedbfac498710e3f5b908d2?s=96&d=mm&r=g" alt="user" width="10%">
			<div class="top10-blogger-name">Ім'я<br> Прізвище</div>
			</div>

			<div class="top10-blogger-list col l12 m12 s12">
			<div class="top10-blogger-number">3.</div>
			<img class="blogger-crop-photo top10-blogger-photo-pos" src="http://2.gravatar.com/avatar/8342d4357eedbfac498710e3f5b908d2?s=96&d=mm&r=g" alt="user" width="10%">
			<div class="top10-blogger-name">Ім'я<br> Прізвище</div>
			</div>

			<div class="top10-blogger-list col l12 m12 s12">
			<div class="top10-blogger-number">4.</div>
			<img class="blogger-crop-photo top10-blogger-photo-pos" src="http://2.gravatar.com/avatar/8342d4357eedbfac498710e3f5b908d2?s=96&d=mm&r=g" alt="user" width="10%">
			<div class="top10-blogger-name">Ім'я<br> Прізвище</div>
			</div>

			<div class="top10-blogger-list col l12 m12 s12">
			<div class="top10-blogger-number">5.</div>
			<img class="blogger-crop-photo top10-blogger-photo-pos" src="http://2.gravatar.com/avatar/8342d4357eedbfac498710e3f5b908d2?s=96&d=mm&r=g" alt="user" width="10%">
			<div class="top10-blogger-name">Ім'я<br> Прізвище</div>
			</div>

			<div class="top10-blogger-list col l12 m12 s12">
			<div class="top10-blogger-number">6.</div>
			<img class="blogger-crop-photo top10-blogger-photo-pos" src="http://2.gravatar.com/avatar/8342d4357eedbfac498710e3f5b908d2?s=96&d=mm&r=g" alt="user" width="10%">
			<div class="top10-blogger-name">Ім'я<br> Прізвище</div>
			</div>

			<div class="top10-blogger-list col l12 m12 s12">
			<div class="top10-blogger-number">7.</div>
			<img class="blogger-crop-photo top10-blogger-photo-pos" src="http://2.gravatar.com/avatar/8342d4357eedbfac498710e3f5b908d2?s=96&d=mm&r=g" alt="user" width="10%">
			<div class="top10-blogger-name">Ім'я<br> Прізвище</div>
			</div>

			<div class="top10-blogger-list col l12 m12 s12">
			<div class="top10-blogger-number">8.</div>
			<img class="blogger-crop-photo top10-blogger-photo-pos" src="http://2.gravatar.com/avatar/8342d4357eedbfac498710e3f5b908d2?s=96&d=mm&r=g" alt="user" width="10%">
			<div class="top10-blogger-name">Ім'я<br> Прізвище</div>
			</div>

			<div class="top10-blogger-list col l12 m12 s12">
			<div class="top10-blogger-number">9.</div>
			<img class="blogger-crop-photo top10-blogger-photo-pos" src="http://2.gravatar.com/avatar/8342d4357eedbfac498710e3f5b908d2?s=96&d=mm&r=g" alt="user" width="10%">
			<div class="top10-blogger-name">Ім'я<br> Прізвище</div>
			</div>

			<div class="top10-blogger-list col l12 m12 s12">
			<div class="top10-blogger-number">10.</div>
			<img class="blogger-crop-photo top10-blogger-photo-pos" src="http://2.gravatar.com/avatar/8342d4357eedbfac498710e3f5b908d2?s=96&d=mm&r=g" alt="user" width="10%">
			<div class="top10-blogger-name">Ім'я<br> Прізвище</div>
			</div>
		</div>
	</div>
	<br>

<?php get_template_part('content', 'footer') ?>

<?php get_footer(); ?>