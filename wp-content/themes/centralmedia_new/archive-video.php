<?php get_header(); ?>

<div class="row home-content">
	<?php
		//template for top-3 posts
		get_template_part('template-parts/top3-posts/video', 'top3-posts');
	?>
</div>

<div class="all-content">
	<!-- second block home page -->
	<div class="block-with-line hide-on-small-only">
		<div class="big-sign-line">ПОПЕРЕДНІ <span>ВІДЕО</span></div>
		<div class="block-line"></div>
		<div class="small-sign-line"><img class="line-img" alt="line" src="<?php bloginfo('template_url') ?>/img/menu.svg"></div>
	</div>
	<div class="second-block-with-line hide-on-med-and-up">
		<div class="big-sign-line">ПОПЕРЕДНІ <span>ВІДЕО</span></div>
		<div class="block-line"></div>
	</div>

	<?php
        //big-latest-video
		global $exclude_posts;
		$exclude_posts = array();
        get_template_part('template-parts/big', 'latest-video');
    ?>

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

		                    echo '<div class="col l3 s12 m6">';
		                    	show_small_video();
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
		                        echo '<div class="col l3 s12 m6">';
			                    	show_small_video();
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
						'posts_per_page' => 9,
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
								show_small_video();
							echo '</div>';
						} //end while
					} //end if
					else {
						echo 'Новин не знайдено';
					}

					if ( $query->max_num_pages > 1 ) { ?>
	                    <script>
	                        var ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
	                        var true_posts = '<?php echo serialize( $query->query_vars ); ?>';
	                        var current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
	                        var max_pages = '<?php echo $query->max_num_pages; ?>';
	                    </script>
	                    <div id="video_loadmore" class="button_loadmore col l12 m12 s12">Більше відео</div>
	            <?php 
	                } //end if
	                wp_reset_postdata();
	            ?>

				<!--
				<div class="col l3 s12 m4 top-five-video-width">
					<div style="background-image: url('<?php bloginfo('template_url') ?>/img/3.jpg');" class="second-article-block-all-article-side">
						<div class="mask">
							<div class="view-count"><img class="count-width" alt="count" src="<?php bloginfo('template_url') ?>/img/eye.svg"><span class="count-number"> 523</span></div>
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
</div>
	<?php
        //show advertising block
        get_template_part('template-parts/advertising', 'block-1');

	    //latest news and polls
	    get_template_part('template-parts/content', 'footer');
		
		get_footer();
	?>