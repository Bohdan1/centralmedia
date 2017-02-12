<div class="row home-content">
	<div id="disable-mat-padding" class="col l9 s12 left-block">
	<?php
		$posts_id = array();
		if ( get_option('block1_post_id') && get_option('block2_post_id') && get_option('block3_post_id') ) {
			$posts_id[] = intval( get_option('block1_post_id') );
			$posts_id[] = intval( get_option('block2_post_id') );
			$posts_id[] = intval( get_option('block3_post_id') );
		}

		if ( get_post_type( $posts_id[0] ) == 'streams' ) {
			echo '
				великий шаблон для стрімів
			';
		}
		else if ( get_post_type( $posts_id[0] ) == 'video' ) {
			echo '
				великий шаблон для відео
			';
		}
		else if ( get_post_type( $posts_id[0] ) == 'news' || get_post_type( $posts_id[0] ) == 'articles' ) {
			echo '
				великий шаблон для новин і статтей
			';
		}
	?>
	</div>
	
	<div class="col l3 s12 right-block hide-on-med-and-down">
			<?php
				for ($i = 1; $i < 3; $i++) {
					if ( get_post_type( $posts_id[$i] ) == 'streams' ) {
						echo '
							малий шаблон для стрімів
						';
					}
					else if ( get_post_type( $posts_id[$i] ) == 'video' ) {
						echo '
							малий шаблон для відео
						';
					}
					else if ( get_post_type( $posts_id[$i] ) == 'news' || get_post_type( $posts_id[$i] ) == 'articles' ) {
						echo '
							малий шаблон для новин і статтей
						';
					}
				}
			?>
	</div>
</div>

<?php
	//slider for blogers
	get_template_part('template-parts/slider', 'blogers');
?>

<!-- second block home page -->
<div class="block-with-line hide-on-small-only">
	<div class="big-sign-line">ТОП <span>СТАТТІ</span></div>
	<div class="block-line"></div>
	<div class="small-sign-line">НОВИНИ<img class="line-img" src="<?php bloginfo('template_url') ?>/img/menu.svg"></div>
</div>
<div class="second-block-with-line hide-on-med-and-up">
	<div class="big-sign-line">ТОП <span>СТАТТІ</span></div>
	<div class="block-line"></div>
</div>

<div class="row">
	<div class="full-width-mob col l8 s12 m7 ">
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
			$args = array(
				'post_type' => 'articles',
				'posts_per_page' => 2,
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
					show_popular_article();
				}
			}
			//якщо немає або недостатньо публікованих статтей за останні $popular_days_article
			if( $articles_count < 2) {
				global $latest_articles;
				$args = array(
					'post_type' => 'articles',
					'posts_per_page' => 2 - $articles_count,
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

	<div class="col l4 s12 m5 ">
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
						echo '<div class="col l4 s12 m4 video-devider" style="min-height:260px;">';
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
							echo '<div class="col l4 s12 m4 video-devider" style="min-height:260px;">';
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
	<div class="col l5 s12 m6">
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

<div class="col l7 s12 m6 narod-korespond">
	<div class="col l12">
		<div class="block-with-line">
			<a href="#modal4" class="button-share-pad"><div class="big-sign-line btn button-share">ПОДІЛИТИСЯ&#160;НОВИНОЮ</div></a>
			<div class="block-line"></div>
			<div class="small-sign-line"> <div id="big-sign-line-fix" class="big-sign-line sign-line-korespond">НАРОДНИЙ <span>КОРИСПОНДЕНТ</span></div></div><img data-u="image" class="technology-width" src="<?php bloginfo('template_url') ?>/img/technology.svg" />
		</div>
	</div>

	
	<div id="jssor_2" >
	<!--Loading Screen -->
        <div id="slider-option" data-u="loading" >
            <div id="slider-option2" ></div>
            <div id="slider-option3" ></div>
        </div>
        <div data-u="slides" class="slider-option4" >
           <div class="user-news-block">
			<div class=" col l12 m7 " style="width: 50% !important;">
				<img class="user-video-width" src="<?php bloginfo('template_url') ?>/img/1.jpg">
			</div>
			<div class="col l12 m4" style="width: 50% !important;">
				<div class="user-video-name">Yura Romaniv</div>
				<div class="user-video-date">28.06.1995</div>
				<div class="user-video-time">18:52</div>
				<div class="user-news-title">У селищі Биківня селяний сплюндрували У селищі Биківня селяний сплюндрували У селищі Биківня селяний сплюндрували</div>
			</div>
		</div>
		  <div class="user-news-block ">
			<div class=" col l12 m7 " style="width: 50% !important;">
				<img class="user-video-width" src="<?php bloginfo('template_url') ?>/img/1.jpg">
			</div>
			<div class="col l12 m4" style="width: 50% !important;">
				<div class="user-video-name">Yura Romaniv</div>
				<div class="user-video-date">28.06.1995</div>
				<div class="user-video-time">18:52</div>
				<div class="user-news-title">У селищі Биківня селяний сплюндрували У селищі Биківня селяний сплюндрували У селищі Биківня селяний сплюндрували</div>
			</div>
		</div>
		  <div class="user-news-block ">
			<div class=" col l12 m7 " style="width: 50% !important;">
				<img class="user-video-width" src="<?php bloginfo('template_url') ?>/img/1.jpg">
			</div>
			<div class="col l12 m4" style="width: 50% !important;">
				<div class="user-video-name">Yura Romaniv</div>
				<div class="user-video-date">28.06.1995</div>
				<div class="user-video-time">18:52</div>
				<div class="user-news-title">У селищі Биківня селяний сплюндрували У селищі Биківня селяний сплюндрували У селищі Биківня селяний сплюндрували</div>
			</div>
		</div>
            
        </div>
    </div>

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
					$author_id = get_the_author_meta( 'ID' );
					echo '
						<div class="col l4 s12 m6">
							<div class="previous-blog-box">
								<div class="view-count-blog">
									<img class="count-width" src="' . get_stylesheet_directory_uri() . '/img/eye-black.svg">
									<span class="count-number">' . getPostViews( get_the_ID() ) . '</span>
								</div>
								<div class="row">
								<div class="col l4 m5 s12">
								<div class="previous-blog-img">
									<a href="' . get_the_permalink() . '" >
										<img class="previous-blog-img-width" src="' . get_wp_user_avatar_src( $author_id ) .'">
									</a>
								</div>
								</div>
								<div class="col l8 m7 s12">
								<div class="previous-blog-name ">
									<a href="' . get_the_permalink() . '" class="black-text">' .
				      					get_the_author_meta('first_name') . ' ' . get_the_author_meta( 'last_name' ) . '
				      				</a>
								</div>
								<div class="previous-blog-time ">' . get_the_time('d.m.Y') . '</div>
								</div>
								</div>

								
								<div class="previous-blog-title ">
									<a href="' . get_the_permalink() . '" class="black-text">' .
										short_post_title(55) . '
									</a>
								</div>
								<div class="previous-blog-tag">
									<a href="#" class="no-hover-blog">Блог</a>
								</div>
							</div>
						</div>';
				} //end while
			} //end if
			else {
				echo 'Блогів не знайдено';
			}
			wp_reset_postdata();
		?>
	</div>
</div>
<div class="advertisment">
	<div class="advertisment-block">
		<a href="#" ><img class="advertisment-img" src="<?php bloginfo('template_url') ?>/img/sponsors-wide.jpg" alt="Логотип"></a>
	</div>
</div>
<div class="five-block-with-line hide-on-med-and-down">
	<div class="big-sign-line">КУЛЬТУРНІ <span>ПОДІЇ</span></div>
	<div class="block-line"></div>
	<div class="small-sign-line">ОПИТУВАННЯ<img class="line-img-five" src="<?php bloginfo('template_url') ?>/img/medical-result.svg"></div>
</div>

<div class="five-block-with-line hide-on-large-only">
	<div class="big-sign-line">КУЛЬТУРНІ <span>ПОДІЇ</span></div>
	<div class="block-line"></div>

</div>

<div class="row">
	<div class="col l7 m12 s12">
		<div id="jssor_3"  style="position:relative;margin:0 auto;top:0px;left:0px;width:1300px;height:500px;overflow:hidden;visibility:hidden;">
			<!-- Loading Screen -->
			<div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
				<div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
				<div style="position:absolute;display:block;background:url('<?php bloginfo('template_url') ?>/img/img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
			</div>
			<div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1300px;height:800px;overflow:hidden;">
				<?php
					$args = array(
						'post_type' => 'cultural_events',
						'posts_per_page' => 3,
						'publish' => true,
						'orderby' => 'date',
						'order' => 'DESC'
					);
					$latest_articles = array();
					$query = new WP_Query( $args );
					if ( $query->have_posts() ) {
						while ( $query->have_posts() ) {
							$query->the_post($post);
							show_slider_cultural_events($post_id = $post->ID);
						}
					}
					wp_reset_postdata();
				?>			
			</div>
			<!-- Arrow Navigator -->
			<span data-u="arrowleft" class="jssora22l" style="top:0px;left:8px;width:40px;height:58px;" data-autocenter="2"></span>
			<span data-u="arrowright" class="jssora22r" style="top:0px;right:8px;width:40px;height:58px;" data-autocenter="2"></span>
		</div>
	</div>





	<div class="five-block-with-line hide-on-large-only">
		<div class="small-sign-line">ОПИТУВАННЯ<img class="line-img-five" src="<?php bloginfo('template_url') ?>/img/medical-result.svg"></div>
		<div class="block-line"></div>

	</div>
	<div class="col l5 s12 m6 ">
		<?php
            //show polls
            get_template_part('template-parts/polls');
        ?>
	</div>
</div>

