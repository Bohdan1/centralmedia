<?php get_header(); ?>

<div class="row home-content">
	<?php
		//template for top-3 posts
		get_template_part('template-parts/top3', 'posts');
	?>
</div>

<!--header-->
<div class="all-content">
	<!-- second block home page -->
	<div class="block-with-line hide-on-small-only">
		<div class="big-sign-line">ПОПЕРЕДНІ <span>СТАТТІ</span></div>
		<div class="block-line"></div>
		<div class="small-sign-line"><img class="line-img" src="<?php bloginfo('template_url') ?>/img/menu.svg"></div>
	</div>
	<div class="second-block-with-line hide-on-med-and-up">
		<div class="big-sign-line">ТОП <span>СТАТТІ</span></div>
		<div class="block-line"></div>
	</div>

	<div class="row">
		<?php
	        //slider for blogers
			global $exclude_posts;
			$exclude_posts = array();
	        get_template_part('template-parts/big', 'latest-articles');
	    ?>
	</div>
	<div class="third-block-with-line">
		<div class="big-sign-line">ПОПУЛЯРНЕ <span></span></div>
		<div class="block-line"></div>
	</div>

	<div class="row">
		<div class="popular-video-all-state-archive">
			<div class="row">
				<?php
		            $popular_days_post = 21;
		            $args = array(
		                'post_type' => 'articles',
		                'posts_per_page' => 4,
		                'post__not_in' => $exclude_posts,
		                'publish' => true,
		                'date_query' => array(
		                    'after' => $popular_days_post . ' days ago',
		                ),
		                'meta_key' => 'post_views_count',
		                'orderby' => 'meta_value_num'
		                //'order' => 'DESC'
		            );
		            $query = new WP_Query( $args );
		            $posts_count = 0;
		            //якщо є відео, які публіковані за останні $popular_days_post днів
		            if( $query->have_posts() ) {
		                while ( $query->have_posts() ) {
		                    $query->the_post();
		                    $posts_count++;

		                    echo '<div class="col l3 s12 m3">';
		                    	show_small_post();
		                    echo '</div>';
		                }
		            }
		            //якщо немає або недостатньо публікованих відео за останні $popular_days_post
		            if( $posts_count < 4) {
		                $args = array(
		                    'post_type' => 'articles',
		                    'posts_per_page' => 4 - $posts_count,
		                    'post__not_in' => $exclude_posts,
		                    'publish' => true,
		                    'date_query' => array(
		                        'before' => $popular_days_post . ' days ago',
		                        ),
		                    'orderby' => 'date',
		                    'order' => 'DESC'
		                    );
		                $query = new WP_Query( $args );
		                if( $query->have_posts() ) {
		                    while ( $query->have_posts() ) {
		                        $query->the_post();
		                        echo '<div class="col l3 s12 m3">';
			                    	show_small_post();
			                    echo '</div>';
		                    }
		                }
		            }
		        ?>
			</div>
		</div>
	</div>

<?php
	//slider for blogers
	get_template_part('template-parts/slider', 'blogers');
?>

	<div class="second-block-with-line">
		<div class="big-sign-line">ВСІ <span>СТАТТІ</span></div>
		<div class="block-line"></div>
	</div>

	<div class="row">
		<div class="popular-video-all-state-archive">
			<div class="row">
				<?php
					$args = array(
						'post_type' => 'articles',
						'posts_per_page' => 12,
						//'post__not_in' => $exclude_posts,
						'publish' => true,
						'orderby' => 'date',
						'order' => 'DESC'
					);
					$query = new WP_Query( $args );
					$date = '';

					if ( $query->have_posts() ) {
						while ( $query->have_posts() ) {
							$query->the_post();
							echo '<div class="col l3 s12 m3">';
								show_small_post();
							echo '</div>';
						} //end while
					} //end if
					else {
						echo 'Новин не знайдено';
					}
					wp_reset_postdata();
				?>
			</div>
		</div>
	</div>
	<div class="advertisment-all-article">
		<div class="advertisment-block">
			<a href="#" ><img class="advertisment-img" src="<?php bloginfo('template_url') ?>/img/sponsors-wide.jpg" alt="Логотип"></a>
		</div>
	</div>

	<?php
        //latest news and polls
        get_template_part('content', 'footer');
    ?>


	<?php get_footer(); ?>
