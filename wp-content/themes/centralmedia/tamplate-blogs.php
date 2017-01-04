<?php
/*
Template Name: Шаблон блогів
*/
	get_header(); 
?>
	<section id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
			<?php 
				$args = array(
	                'post_type' => 'blogs',
	                'publish' => true,
	                'paged' => get_query_var('paged'),
	            );
	            
	            query_posts($args);
				if ( have_posts() ) :
					// Start the Loop.
					while ( have_posts() ) : the_post();
				?>
						<!-- blogs content -->
						<div>
							<div> <?php the_title(); ?> </div>	
						</div>
						<br>
						<!-- end blogs content -->
				<?php
					endwhile;
				else :
					// If no content, include the "No posts found" template.
					echo '<div> Блогів не знайдено </div>';
				endif;
			?>
		</div><!-- #content -->
	</section><!-- #primary -->

<?php
	get_footer();
?>