<div class="row home-content">
	<?php
		//template for top-3 posts
		get_template_part('template-parts/top3-posts/homepage', 'top3-posts');
	?>
</div>

<?php
	//slider for blogers
	get_template_part('template-parts/slider', 'blogers');
?>

<!-- second block home page -->
<div class="block-with-line hide-on-small-only">
	<div class="big-sign-line">ТОП <span>СТАТТІ</span></div>
	<div class="block-line"></div>
	<div class="small-sign-line">НОВИНИ<img alt="img" class="line-img" src="<?php bloginfo('template_url') ?>/img/menu.svg"></div>
</div>
<div class="second-block-with-line hide-on-med-and-up">
	<div class="big-sign-line">ТОП <span>СТАТТІ</span></div>
	<div class="block-line"></div>
</div>

<div class="row">
	<div class="full-width-mob col l8 s12 m8 ">
		<div class="col l12 s12 m12 full-width-mob ">
			<div id="jssor_1"  style="position:relative;margin:0 auto;top:0px;left:0px;width:1300px;height:500px;overflow:hidden;visibility:hidden;">
				<!-- Loading Screen -->
				<div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
					<div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
					<div style="position:absolute;display:block;background:url('<?php bloginfo('template_url') ?>/img/img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
				</div>
				<div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1300px;height:800px;overflow:hidden;">
					<?php
						$args = array(
							'post_type' => 'articles',
							'posts_per_page' => 3,
							'publish' => true,
							'orderby' => 'date',
							'order' => 'DESC'
						);
						global $latest_articles;		//variable to prevent duplicate articles
						$latest_articles = array();
						$query = new WP_Query( $args );
						if( $query->have_posts() ) {
							while ( $query->have_posts() ) {
								$query->the_post();
								show_slider_post();
								$latest_articles[] = get_the_ID();
							}
						}
					?>
				</div>
				<!-- Arrow Navigator -->
				<span data-u="arrowleft" class="jssora22l" style="top:0px;left:8px;width:40px;height:58px;" data-autocenter="2"></span>
				<span data-u="arrowright" class="jssora22r" style="top:0px;right:8px;width:40px;height:58px;" data-autocenter="2"></span>
			</div>
		</div>
		
		<?php
			global $latest_articles;
			$popular_days_article = 21;
			$need_posts = 2;
			$args = array(
				'post_type' => 'articles',
				'posts_per_page' => $need_posts,
				'publish' => true,
				'date_query' => array(
					'after' => $popular_days_article . ' days ago',
				),
				'post__not_in' => $latest_articles, //displays all articles, other than those
				'meta_key' => 'post_views_count',
				'orderby' => 'meta_value_num'
				//'order' => 'DESC'
			);
			$query = new WP_Query( $args );
			$articles_count = 0;
			if( $query->have_posts() ) {
				while ( $query->have_posts() ) {
					$query->the_post();
					$articles_count++;
					echo '<div class="col l6 s12 m6">';
						show_small_post();
					echo '</div>';
				}
			}
			//якщо немає або недостатньо публікованих статтей за останні $popular_days_article
			if( $articles_count < $need_posts) {
				global $latest_articles;
				$args = array(
					'post_type' => 'articles',
					'posts_per_page' => $need_posts - $articles_count,
					'publish' => true,
					'date_query' => array(
						'before' => $popular_days_article . ' days ago',
					),
					'post__not_in' => $latest_articles, //displays all articles, other than those
					'orderby' => 'date',
					'order' => 'DESC'
					);
				$query = new WP_Query( $args );
				if( $query->have_posts() ) {
					while ( $query->have_posts() ) {
						$query->the_post();
						echo '<div class="col l6 s12 m6">';
							show_small_post();
						echo '</div>';
						$posts_count++;
					}
				}
			}
			wp_reset_postdata();
		?>
	</div>

	<div class="col l4 s12 m4 ">
		<div class="main-news-content-box">
			<?php
	            //show latest news
	            get_template_part('template-parts/latest', 'news');
	        ?>
		</div>
	</div>
</div>
<div class="third-block-with-line">
	<div class="big-sign-line">ПОПУЛЯРНІ <span>ВІДЕО</span></div>
	<div class="block-line"></div>
</div>

<div class="row">
	<div class="popular-video">			
		<div class="row">
			<?php
				$popular_days_video = 21;
				$args = array(
					'post_type' => 'video',
					'posts_per_page' => 6,
					'publish' => true,
					'date_query' => array(
						'after' => $popular_days_video . ' days ago',
					),
					'meta_key' => 'post_views_count',
					'orderby' => 'meta_value_num'
					//'order' => 'DESC'
				);
				$query = new WP_Query( $args );
				$video_count = 0;
				//якщо є відео, які публіковані за останні $popular_days_video днів
				if( $query->have_posts() ) {
					while ( $query->have_posts() ) {
						$query->the_post();
						$video_count++;
						echo '<div class="col l4 s12 m6" style="min-height:260px;">';
							show_small_video();
						echo '</div>';
					}
				}
				//якщо немає або недостатньо публікованих відео за останні $popular_days_video
				if( $video_count < 6) {
					$args = array(
						'post_type' => 'video',
						'posts_per_page' => 6 - $video_count,
						'publish' => true,
						'date_query' => array(
							'before' => $popular_days_video . ' days ago',
						),
						'orderby' => 'date',
						'order' => 'DESC'
						);
					$query = new WP_Query( $args );
					if( $query->have_posts() ) {
						while ( $query->have_posts() ) {
							$query->the_post();
							echo '<div class="col l4 s12 m6" style="min-height:260px;">';
								show_small_video();
							echo '</div>';
							$video_count++;
						}
					}
				}
				wp_reset_postdata();
			?>
		</div>
	</div>
</div>


<div class="row">
	<div class="col l4 s12 m12">
		<div id="weatherWidget">
			<ul id="rb-grid" class="rb-grid clearfix">
				<li id="today-icon1" class="rb-span-2">
					<h3>Погода у Львові</h3>
					<span id='rb-date'></span>
					<span id="rb-temp"></span>
					<div class="rb-overlay">
						<span class="rb-close">close</span>
						<div class="rb-week">
							<div>
								<span class="rb-city">Львів</span>
								<span id="today-icon2"></span>
								<span id="fullTemp"></span>
							</div>
							<div class="rb-week-cont">
								<span class="rb-week-date"></span>
								<span id="week-icon1"></span>
								<span class="rb-week-temp">19°C</span>
							</div>
							<div class="rb-week-cont">
								<span class="rb-week-date"></span>
								<span id="week-icon2"></span>
								<span class="rb-week-temp">19°C</span>
							</div>
							<div class="rb-week-cont">
								<span class="rb-week-date"></span>
								<span id="week-icon3"></span>
								<span class="rb-week-temp">18°C</span>
							</div>
							<div class="rb-week-cont">
								<span class="rb-week-date"></span>
								<span id="week-icon4"></span>
								<span class="rb-week-temp">17°C</span>
							</div>
							<div class="rb-week-cont">
								<span class="rb-week-date"></span>
								<span id="week-icon5"></span>
								<span class="rb-week-temp">19°C</span>
							</div>
							<div class="rb-week-cont">
								<span class="rb-week-date"></span>
								<span id="week-icon6"></span>
								<span class="rb-week-temp">22°C</span>
							</div>
							<div class="rb-week-cont">
								<span class="rb-week-date"></span>
								<span id="week-icon7"></span>
								<span class="rb-week-temp">18°C</span>
							</div>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</div>



	<div class="col l8 s12 m12 narod-korespond">
		<div class="block-with-line">
			<a href="#modal4" class="button-share-pad">
				<div class="big-sign-line btn button-share">НАДІШЛІТЬ&#160;НАМ&#160;НОВИНУ</div>
			</a>
			<div class="block-line"></div>
			<div class="small-sign-line">
				<div id="big-sign-line-fix" class="big-sign-line sign-line-korespond">НАРОДНИЙ <span>КОРЕСПОНДЕНТ</span></div>
			</div>
			<img alt="img" data-u="image" class="technology-width" src="<?php bloginfo('template_url') ?>/img/technology.svg" />
		</div>
		
		<?php
			//show folk correspondent for desctop
			get_template_part('template-parts/folk', 'correspondent-desktop');
		?>
	</div>
</div>


<div class="second-block-with-line">
	<div class="big-sign-line">ПОПЕРЕДНІ <span>БЛОГИ</span></div>
	<div class="block-line"></div>
</div>

<div class="row">
	<div class="previous-blog">
		<?php 
			$args = array(
				'post_type' => 'blogs',
				'posts_per_page' => 3,
				'publish' => true,
				'orderby' => 'date',
				'order' => 'DESC'
			);
			$query = new WP_Query( $args );
			if( $query->have_posts() ) {
				while ( $query->have_posts() ) {
					$query->the_post();
					//$author_id = get_the_author_meta( 'ID' );
					echo '<div class="col l4 s12 m6">';
            			show_homepage_blog();
					echo '</div>';
				} //end while
			} //end if
			else {
				echo 'Блогів не знайдено';
			}
			wp_reset_postdata();
		?>
	</div>
</div>

<?php
    //show advertising block
    get_template_part('template-parts/advertising', 'block-1');
?>

<div class="five-block-with-line hide-on-med-and-down">
	<div class="big-sign-line">КУЛЬТУРНІ <span>ПОДІЇ</span></div>
	<div class="block-line"></div>
	<div class="small-sign-line">ОПИТУВАННЯ<img alt="img" class="line-img-five" src="<?php bloginfo('template_url') ?>/img/medical-result.svg"></div>
</div>

<div class="five-block-with-line hide-on-large-only">
	<div class="big-sign-line">КУЛЬТУРНІ <span>ПОДІЇ</span></div>
	<div class="block-line"></div>

</div>

<div class="row">
	<div class="col l7 m12 s12">
		<?php
            //show polls
            get_template_part('template-parts/cultural', 'events-slider');
        ?>
	</div>

	<div class="five-block-with-line hide-on-large-only">
		<div class="small-sign-line">ОПИТУВАННЯ<img alt="img" class="line-img-five" src="<?php bloginfo('template_url') ?>/img/medical-result.svg"></div>
		<div class="block-line"></div>

	</div>
	<div class="col l5 s12 m12 ">
		<?php
            //show polls
            get_template_part('template-parts/polls');
        ?>
	</div>
</div>

