<?php get_header(); ?>

<div class="row home-content">
	<?php
		//template for top-3 posts
		get_template_part('template-parts/top3', 'posts');
	?>
</div>

<div class="all-content">
	<!-- second block home page -->
	<div class="block-with-line hide-on-small-only">
		<div class="big-sign-line">ПОПЕРЕДНІ <span>ВІДЕО</span></div>
		<div class="block-line"></div>
		<div class="small-sign-line"><img class="line-img" src="<?php bloginfo('template_url') ?>/img/menu.svg"></div>
	</div>
	<div class="second-block-with-line hide-on-med-and-up">
		<div class="big-sign-line">ПОПЕРЕДНІ <span>ВІДЕО</span></div>
		<div class="block-line"></div>
	</div>

	<div class="row">
		<div class="full-width-mob col l8 s12 m7 ">
			<?php
		        $args = array(
		            'post_type' => 'video',
		            'posts_per_page' => 6,
		            //'numberposts' => 10,
		            'publish' => true,
		            'orderby' => 'date',
		            'order' => 'DESC'
		        );
		        $query = new WP_Query( $args );
		        $exclude_posts = array();
		        $display_posts = 1;
		        if ( $query->have_posts() ) {
		            while ( $query->have_posts() ) {
		                $query->the_post();
		                $exclude_posts[] = get_the_ID();
		                if ( $display_posts == 1 ) {
		                    tests_show_big_video();
		                    $display_posts++;
		                }
		                else if ( $display_posts == 2 ) {
		                    echo '
		                    	<div class="col l6 s12 m6 ">';
									tests_show_small_video();
								echo '
								</div>';
		                    $display_posts++;
		                }
		                else if ( $display_posts == 3 ) {
		                    echo '
		                    	<div class="col l6 s12 m6 ">';
									tests_show_small_video();
							echo '
								</div>
		</div>'; //end <div class="full-width-mob col l8 s12 m7"> 
		                     $display_posts++;
		                }
		                else if ( $display_posts == 4 ) {
		                    echo '
		                    	<div class="col l4 s12 m5 ">
									<div class="all-video-last-side-video">';
							tests_show_small_video();
							$display_posts++;
		                }
		                else if ( $display_posts == 5 ) {
		                	tests_show_small_video();
							$display_posts++;
		                }
		                else {
		                	tests_show_small_video();
		                	echo '
									</div>
								</div>';
							$display_posts++;
		                }
		            } //end while
		        } //end if
		        else {
		            echo 'Відео не знайдено';
		        }
		        wp_reset_postdata();
		    ?>
	</div>
	<div class="third-block-with-line">
		<div class="big-sign-line">ПОПУЛЯРНІ <span>ВІДЕО</span></div>
		<div class="block-line"></div>
	</div>

	<div class="row top-five-list">
		<div class="popular-video">
			<div class="row">
				<?php
		            $popular_days_post = 21;
		            $args = array(
		                'post_type' => 'video',
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

		                    echo '<div class="col l3 s12">';
		                    	tests_show_small_video();
		                    echo '</div>';
		                }
		            }
		            //якщо немає або недостатньо публікованих відео за останні $popular_days_post
		            if( $posts_count < 4 ) {
		                $args = array(
		                    'post_type' => 'video',
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
		                        echo '<div class="col l3 s12">';
			                    	tests_show_small_video();
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

	<div class="third-block-with-line">
		<div class="big-sign-line">ВСІ <span>ВІДЕО</span></div>
		<div class="block-line"></div>
	</div>

	<div class="row">
		<div class="popular-video">
			<div class="row">
				<?php
					$args = array(
						'post_type' => 'video',
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
							echo '<div class="col l3 s12 m4 top-five-video-width">';
								tests_show_small_video();
							echo '</div>';
						} //end while
					} //end if
					else {
						echo 'Новин не знайдено';
					}
					wp_reset_postdata();
				?>

				<!--
				<div class="col l3 s12 m4 top-five-video-width">
					<div style="background-image: url('<?php bloginfo('template_url') ?>/img/3.jpg');" class="second-article-block-all-article-side">
						<div class="mask">
							<div class="view-count"><img class="count-width" src="<?php bloginfo('template_url') ?>/img/eye.svg"><span class="count-number"> 523</span></div>
							<div  class="button-position-popular-video-content-box-main">
								<a href="#" ><img class="button-hover button-position-popular-video-content-box-width" src="<?php bloginfo('template_url') ?>/img/play-button.svg" alt="Логотип"></a>
							</div>
							<div class="main-article-content-box">

								<div class="title-tag"><a href="#" class="no-hover-blog">Родина</a></div>
								<div class="box-title fix-mob-article "><a href="#">Під Києвом сплюндрували Биковнянський меморіал</a></div>
							</div>
						</div>
					</div>
				</div>
				-->
			</div>
		</div>
	</div>


	<div class="advertisment">
		<div class="advertisment-block">
			<a href="#" ><img class="advertisment-img" src="<?php bloginfo('template_url') ?>/img/sponsors-wide.jpg" alt="Логотип"></a>
		</div>
	</div>

	<?php
	    //latest news and polls
	    get_template_part('content', 'footer');
	?>

	<?php get_footer(); ?>