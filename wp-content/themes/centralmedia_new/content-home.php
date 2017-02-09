<div class="row home-content">
	<div id="disable-mat-padding" class="col l9 s12 left-block">
		<div class="left-block-content">
			<div class="button-position  hide-on-small-only">
				<a href="#" >
					<img class="play-button button-hover center" src="<?php bloginfo('template_url') ?>/img/play-button.svg" alt="Логотип">
				</a>
			</div>
			<div class="content-box">
				<div class="title-tag">
					<a href="#" class="no-hover-blog">Політика</a>
				</div>
				<div class="box-title ">
					<a href="#">Під Києвом сплюндрували Биковнянський меморіал</a>
				</div>
				<div class="box-title-small ">
					<a href="#">У селищі Биківня селяний сплюндрували український та польський меморіали жертв НКВС.</a>
				</div>
				<div class="box-title-time ">28.06.2016</div>
			</div>
			<div class="social-menu-bottom hide-on-large-only ">
				<div class="menu-list">
					<a href="#" ><img  class="social-logo" src="<?php bloginfo('template_url') ?>/img/social/youtube.svg" alt="Логотип"></a>
				</div>
				<div class="menu-list">
					<a href="#"><img class="social-logo" src="<?php bloginfo('template_url') ?>/img/social/facebook.svg" alt="Логотип"></a>
				</div>

				<div class="menu-list">
					<a href="#" ><img class="social-logo" src="<?php bloginfo('template_url') ?>/img/social/twitter.svg" alt="Логотип"></a>
				</div>
			</div>
		</div>
	</div>

	<div class="col l3 s12 right-block hide-on-med-and-down">
		
		<div class="video-container">
			<iframe class="right-block-video center" src="https://www.youtube.com/embed/MJ_aWV_-DF8" frameborder="0" ></iframe>

			<div class="right-block-second ">
				<div class="right-block-second-tag ">
					<a href="#">АТО</a>
				</div>
				<div class="right-block-second-sign ">
					<a href="#">Під Києвом сплюндрували Биковнянський меморіал</a>
				</div>
			</div>

			<div class="social-menu-bottom hide-on-med-and-down">
				<div class="menu-list">
					<a href="#" ><img  class="button-hover social-logo" src="<?php bloginfo('template_url') ?>/img/social/youtube.svg" alt="Логотип"></a>
				</div>

				<div class="menu-list">
					<a href="#" ><img class="button-hover social-logo" src="<?php bloginfo('template_url') ?>/img/social/twitter.svg" alt="Логотип"></a>
				</div>

				<div class="menu-list">
					<a href="#"><img class="button-hover social-logo" src="<?php bloginfo('template_url') ?>/img/social/facebook.svg" alt="Логотип"></a>
				</div>
			</div>
		</div>
	</div>
</div>


<section class="center slider">
	<?php
		$popular_blogs_days = 21;
		$args = array(
			'post_type' => 'blogs',
			'posts_per_page' => 8,
			'publish' => true,
			'date_query' => array(
				'after' => $popular_blogs_days . ' days ago',
			),
			'meta_key' => 'post_views_count',
			'orderby' => 'meta_value_num'
		);
		$query = new WP_Query( $args );

		if( $query->have_posts() ) {
			$i = 0;
			while ( $query->have_posts() ) {
				$query->the_post();
				$author_id = get_the_author_meta( 'ID' );
				if( $i == 0 ) {
					echo '
						<div class="slider-box slider-box-remake-main">
					        <div class="slider-element">
					            <div class="blog-element-tag" class="no-hover-blog">ТОП БЛОГ</div>
				      			<img src="' . get_wp_user_avatar_src( $author_id ) . '" alt="Аватар">
				      			<div class="">
				      				<div class="slider-bloger-name-main">
				      					<a href="' . get_the_permalink() . '" class="no-hover-blog">' .
				      						get_the_author_meta('first_name') . ' ' . get_the_author_meta( 'last_name' ) . '
				      					</a>
				      				</div>
				      				<div class="slider-bloger-thema-main">
				      					<a href="' . get_the_permalink() . '" class="no-hover-blog">' .
											short_post_title(60) . '
										</a>
				      				</div>
				      			</div>
					        </div>
					    </div>';
					$i++;
				}
				else {
					echo '
						<div class="slider-box slider-box-remake">
							<div class="slider-element">
								<img src="' . get_wp_user_avatar_src( $author_id ) . '" alt="аватар">
								<div class="">
									<div class="slider-bloger-name">
										<a href="' . get_the_permalink() . '" class="black-text">' .
											get_the_author_meta('first_name') . ' ' . get_the_author_meta( 'last_name' ) . '
										</a>
									</div>
									<div class="slider-bloger-thema">
										<a href="' . get_the_permalink() . '" class="black-text">' .
											short_post_title(60) . '
										</a>
									</div>
								</div>
							</div>
						</div>';
				}
			} //end while
		} //end if
		else {
			echo 'Блогів не знайдено';
		}
		wp_reset_postdata();
	?>
</section>
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
					<div>
						<img data-u="image" class="second-slider-img" src="<?php bloginfo('template_url') ?>/img/1.jpg" />

						<div class="mask">
							<div class="view-count-top"><img class="count-width-top" src="<?php bloginfo('template_url') ?>/img/eye.svg"><span class="count-number-top"> 983</span></div>
							<div class="second-slider-content">
								<br>
								<div class="second-slider-title-tag"><a href="#" class="no-hover-blog">АТО</a></div>
								<div class="second-slider-box-title "><a href="#">Під Києвом сплюндрували Биковнянський меморіал</a></div>
								<div class="second-slider-box-title-small  "><a href="#">У селищі Биківня селяний сплюндрували український та польський меморіали жертв НКВС.</a></div>
								<div class="second-slider-box-title-time ">28.06.2016</div>
								<br>	
							</div>
						</div>
					</div>
					<div>
						<img data-u="image" class="second-slider-img"  src="http://life.pravda.com.ua/images/doc/f/2/f2a6d8d----------------------.---------street-art-fest-2011--.jpg" />
						<div class="mask">
							<div class="view-count-top"><img class="count-width-top" src="<?php bloginfo('template_url') ?>/img/eye.svg"><span class="count-number-top"> 465</span></div>
							<div class="second-slider-content">
								<br>
								<div class="second-slider-title-tag"><a href="#" class="no-hover-blog">Актуальні новини</a></div>
								<div class="second-slider-box-title "><a href="#">Під Києвом сплюндрували Биковнянський меморіал</a></div>
								<div class="second-slider-box-title-small "><a href="#">У селищі Биківня селяний сплюндрували український та польський меморіали жертв НКВС.</a></div>
								<div class="second-slider-box-title-time ">28.06.2016</div>
								<br>	
							</div>
						</div>
					</div>
					<div>
						<img data-u="image" src="http://life.pravda.com.ua/images/doc/9/4/94acb54---------.-------------------.--------------------------------------------------------------2000-.jpg" />
						<div class="mask">
							<div class="view-count-top"><img class="count-width-top" src="<?php bloginfo('template_url') ?>/img/eye.svg"><span class="count-number-top"> 49858</span></div>
							<div class="second-slider-content">
								<br>
								<div class="second-slider-title-tag "><a href="#" class="no-hover-blog">Новини</a></div>
								<div class="second-slider-box-title "><a href="#">Під Києвом сплюндрували Биковнянський меморіал</a></div>
								<div class="second-slider-box-title-small "><a href="#">У селищі Биківня селяний сплюндрували український та польський меморіали жертв НКВС.</a></div>
								<div class="second-slider-box-title-time ">28.06.2016</div>
								<br>	
							</div>
						</div>
					</div>
				</div>
				<!-- Arrow Navigator -->
				<span data-u="arrowleft" class="jssora22l" style="top:0px;left:8px;width:40px;height:58px;" data-autocenter="2"></span>
				<span data-u="arrowright" class="jssora22r" style="top:0px;right:8px;width:40px;height:58px;" data-autocenter="2"></span>
			</div>
		</div>

		
		<?php 
			$args = array(
				'post_type' => 'articles',
				'posts_per_page' => 2,
				'publish' => true,
				'orderby' => 'date',
				'order' => 'DESC'
			);
			$query = new WP_Query( $args );
			if( $query->have_posts() ) {
				while ( $query->have_posts() ) {
					$query->the_post();
					echo '
						<div class="col l6 s12 m6">
							<div class="second-article-block" style="background-image: url(' . get_the_post_thumbnail_url() . ');">
								<div class="mask">
									<div class="view-count">
										<img class="count-width" src="' . get_stylesheet_directory_uri() . '/img/eye.svg">
										<span class="count-number">' . getPostViews( get_the_ID() ) . '</span>
									</div>
									<div class="main-article-content-box">
										<div class="title-tag">
											<a href="#" class="no-hover-blog">Родина</a>
										</div>
										<div class="box-title fix-mob-article ">
											<a href="' . get_the_permalink() .'">' . short_post_title(75) . '</a>
										</div>
										<div class="box-title-small fix-mob-article ">
											<a href="' . get_the_permalink() .'">';
												echo short_post_desc(90) . '
											</a>
										</div>
										<div class="box-title-time fix-mob-article">' . get_the_time('d.m.Y') . '</div>
									</div>
								</div>
							</div>
						</div>';
				}
			}

		?>
	</div>

	<div class="col l4 s12 m5 ">

		<div class="main-news-content-box">
		<?php
			$args = array(
				'post_type' => 'news',
				'posts_per_page' => 10,
				//'numberposts' => 10,
				'publish' => true,
				'orderby' => 'date',
				'order' => 'DESC'
				);
			$query = new WP_Query( $args );
			$date = '';

			if( $query->have_posts() ) {
				while ( $query->have_posts() ) {
					$query->the_post();
					show_news_for_homepage();
				} //end while
			} //end if
			else {
				echo 'Новин не знайдено';
			}

			if(  $query->max_num_pages > 1 ) { ?>
				<script>
					var ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
					var true_posts = '<?php echo serialize($query->query_vars); ?>';
					var current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
					var max_pages = '<?php echo $query->max_num_pages; ?>';
				</script>
				<div id="true_loadmore">Більше новин</div>
		<?php 
			} //end if
			wp_reset_postdata();
		?>
		<!-- приклад інших іконок
		<div class="news-block">
		<div class="news-main-img">
		<i class="fa fa-spinner fa-spin fa-1x fa-fw "></i>
		</div>
		<div class="news-main-title ">
		<div class="news-time ">15:46</div>
		<a href="#" class="black-text">Під Києвом сплюндрували Биковнянський меморіал декілька раз</a>
		</div>
		</div>
		-->

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
			$popular_video_days = 21;
			$args = array(
				'post_type' => 'video',
				'posts_per_page' => 6,
				'publish' => true,
				'date_query' => array(
					'after' => $popular_video_days . ' days ago',
				),
				'meta_key' => 'post_views_count',
				'orderby' => 'meta_value_num'
				//'order' => 'DESC'
			);
			$query = new WP_Query( $args );
			$video_count = 0;
			//якщо є відео, які публіковані за останні $popular_video_days днів
			if( $query->have_posts() ) {
				while ( $query->have_posts() ) {
					$query->the_post();
					$video_count++;
					show_popular_video();
				}
			}
			//якщо немає або недостатньо публікованих відео за останні $popular_video_days
			if( $video_count < 6) {
				$args = array(
					'post_type' => 'video',
					'posts_per_page' => 6 - $video_count,
					'publish' => true,
					'date_query' => array(
						'before' => $popular_video_days . ' days ago',
						),
					'orderby' => 'date',
					'order' => 'DESC'
					);
				$query = new WP_Query( $args );
				if( $query->have_posts() ) {
					while ( $query->have_posts() ) {
						$query->the_post();
						show_popular_video();
						$video_count++;
					}
				}
			}

			?>
		</div>
	</div>
</div>


<div class="row">
	<div class="col l5 s12 m6">
		<div id="meteoprog_informer_standart" data-params="boy:Lviv:300x250:white:72x75" ><a href="https://www.meteoprog.ua/ua/">погода</a><br /><a href="https://www.meteoprog.ua/ua/weather/Lviv/">Погода в  Львові </a><br /></div><script src="https://www.meteoprog.ua/ua/weather/informer/standart.js"></script>
</div>


<div class="col l7 s12 m6 narod-korespond">
<div class="col l12">
	<div class="block-with-line">
		<a href="#" class="button-share-pad"><div class="big-sign-line btn button-share">ПОДІЛИТИСЯ&#160;НОВИНОЮ</div></a>
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
								<div class="previous-blog-img">
									<a href="' . get_the_permalink() . '" >
										<img class="previous-blog-img-width" src="' . get_wp_user_avatar_src( $author_id ) .'">
									</a>
								</div>
								<div class="previous-blog-name ">
									<a href="' . get_the_permalink() . '" class="black-text">' .
				      					get_the_author_meta('first_name') . ' ' . get_the_author_meta( 'last_name' ) . '
				      				</a>
								</div>
								<div class="previous-blog-time ">' . get_the_time('d.m.Y') . '</div>
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
	<div class="big-sign-line">НОВИНИ <span>ПАРТНЕРІВ</span></div>
	<div class="block-line"></div>
	<div class="small-sign-line">ОПИТУВАННЯ<img class="line-img-five" src="<?php bloginfo('template_url') ?>/img/medical-result.svg"></div>
</div>

<div class="five-block-with-line hide-on-large-only">
	<div class="big-sign-line">НОВИНИ <span>ПАРТНЕРІВ</span></div>
	<div class="block-line"></div>

</div>

<div class="row">

	<div class="col l6 s12 m6 devider">
		<div class="partner-news-block">
			<?php 
				$args = array(
	                'post_type' => 'partner-news',
	                'posts_per_page' => 6,
	                'publish' => true,
	                'orderby' => 'date',
	                'order' => 'DESC'
	            );
	            $query = new WP_Query( $args );
				if( $query->have_posts() ) {
					while ( $query->have_posts() ) {
						$query->the_post();
						echo '
							<div class="partner-news-block-content">
								<div class="news-main-title ">
									<a href="' . get_post_meta( $post->ID, 'partner_news_url', true ) . '" class="black-text" target="_blank">' .
										get_the_title() . '
									</a>
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
	<div class="five-block-with-line hide-on-large-only">
		<div class="small-sign-line">ОПИТУВАННЯ<img class="line-img-five" src="<?php bloginfo('template_url') ?>/img/medical-result.svg"></div>
		<div class="block-line"></div>

	</div>
	<div class="col l6 s12 m6 ">
		<?php
		if ( function_exists('vote_poll') && !in_pollarchive() ) : 
			echo '
		<ul>
			<li>' . get_poll() . '</li>
		</ul>';
		endif;
		?>
	</div>
</div>



