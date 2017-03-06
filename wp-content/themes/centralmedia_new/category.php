<?php get_header(); ?>

<div class="header-margin-tag">
	<div class="row">
		<div class="col l8 m7 s12"> 
			<div class="tag-name"><?php single_cat_title(); ?></div>
			<div class="tag-name-description">Матеріали за темою</div>
			<?php
				$cat_id = get_cat_ID( single_cat_title('', 0) ); //ID required category

				$args = array(
                    'post_type' => array('news', 'articles', 'video', 'blogs', 'cultural_events', 'partner-news' , 'streams', 'folk_correspondent'),
                    'cat' => $cat_id,
                    'posts_per_page' => 10,
                    'publish' => true,
                    'orderby' => 'date'
                    //'order' => 'DESC'
                );
                $query = new WP_Query( $args );
                if( $query->have_posts() ) {
                    while ( $query->have_posts() ) {
                        $query->the_post();
                        show_no_img_post();
                    }
                }
				else {
					echo '<div> Публікацій за даною категорією не знайдено </div>';
				}
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