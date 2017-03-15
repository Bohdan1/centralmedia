<?php get_header(); ?>

<div class="header-margin-tag">
	<div class="row">
		<div class="col l8 m7 s12"> 
			<div class="tag-name"><?php single_cat_title(); ?></div>
			<?php
				if ( have_posts() ) :
					$slovo = getNumEnding( $query->found_posts, array('запис', 'записи', 'записів') );
					echo '
					<div class="tag-name-description">
						Матеріали за темою (' . $wp_query->found_posts . ' ' . $slovo . ')
					</div>';
                    while ( have_posts() ) : the_post(); // Start the Loop
                        show_no_img_post();
                    endwhile; //end while
					echo '<div class="clear"></div>';
					the_posts_pagination( $pagination_args );
					wp_reset_postdata();
				else :
					echo '<div class="tag-name-description"> Публікацій за даною темою не знайдено </div>';
				endif; //end if
			?>
		</div>

		<div class="col l4 m5 s12">
			<div class="block-with-line hide-on-small-only">
				<div class="big-sign-line">ТОП <span>СТАТТІ</span></div>
				<div class="block-line"></div>
			</div>
				<?php 
				$args = array(
					'post_type' => 'articles',
					'posts_per_page' => 4,
					'publish' => true,
					'orderby' => 'date',
					'order' => 'DESC'
				);
				$query = new WP_Query( $args );
				if( $query->have_posts() ) {
					while ( $query->have_posts() ) {
						$query->the_post();
						echo '<div class="col l12 s12 m12">';
							show_small_post();
						echo '</div>';
					}
				}
			?>
		</div>
	</div>
</div>

<?php get_footer(); ?>