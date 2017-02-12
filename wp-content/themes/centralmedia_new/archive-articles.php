<?php get_header(); ?>
<!--header-->

<div class="row home-content">
	<div id="disable-mat-padding" class="col l9 s12 left-block">
		<div class="left-block-content">
			<div class="button-position  hide-on-small-only">
				<a href="#" ><img class="play-button button-hover center" src="<?php bloginfo('template_url') ?>/img/play-button.svg" alt="Логотип"></a>
			</div>
			<div class="content-box">
				<div class="title-tag"><a href="#" class="no-hover-blog">Політика</a></div>
				<div class="box-title "><a href="#">Під Києвом сплюндрували Биковнянський меморіал</a></div>
				<div class="box-title-small "><a href="#">У селищі Биківня селяний сплюндрували український та польський меморіали жертв НКВС.</a></div>
				<div class="box-title-time ">28.06.2016</div>
			</div>
			<div class="social-menu-bottom hide-on-large-only ">
				<div class="menu-list"><a href="#" ><img  class="social-logo" src="<?php bloginfo('template_url') ?>/img/social/youtube.svg" alt="Логотип"></a>
				</div>

				<div class="menu-list"><a href="#"><img class="social-logo" src="<?php bloginfo('template_url') ?>/img/social/facebook.svg" alt="Логотип"></a>
				</div>

				<div class="menu-list"><a href="#" ><img class="social-logo" src="<?php bloginfo('template_url') ?>/img/social/twitter.svg" alt="Логотип"></a>
				</div>
			</div>
		</div>

	</div>


	<div class="col l3 s12 right-block hide-on-med-and-down">
		<div class="social-menu-top ">
			<div class="menu-list"><a href="#modal1" ><img class="button-hover social-logo" src="<?php bloginfo('template_url') ?>/img/social/man.svg" alt="Логотип"></a></div>
			<div class="menu-list"><a href="#modal2"><img class="button-hover social-logo" src="<?php bloginfo('template_url') ?>/img/social/search.svg" alt="Логотип"></a></div>
		</div>
		<div class="video-container">

			<iframe class="right-block-video center" src="https://www.youtube.com/embed/MJ_aWV_-DF8" frameborder="0" ></iframe>

			<div class="right-block-second ">
			<div class="mask">
				<div class="right-block-second-tag ">
					<a href="#" class="no-hover-blog">АТО</a>
				</div>
				</div>
				<div class="right-block-second-sign ">
					<a href="#">Під Києвом сплюндрували Биковнянський меморіал</a>
				</div>
			</div>



			<div class="social-menu-bottom hide-on-med-and-down">
				<div class="menu-list"><a href="#" ><img  class="button-hover social-logo" src="<?php bloginfo('template_url') ?>/img/social/youtube.svg" alt="Логотип"></a>
				</div>

				<div class="menu-list"><a href="#" ><img class="button-hover social-logo" src="<?php bloginfo('template_url') ?>/img/social/twitter.svg" alt="Логотип"></a>
				</div>

				<div class="menu-list"><a href="#"><img class="button-hover social-logo" src="<?php bloginfo('template_url') ?>/img/social/facebook.svg" alt="Логотип"></a>
				</div>
			</div>
		</div>
	</div>
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
		<div class="full-width-mob col l8 s12 m7 ">
			<?php
	            $args = array(
	                'post_type' => 'articles',
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
	                        echo '<div class="col l12 s12 m12">';
	                            show_big_post();
	                        echo '</div>';
	                        $display_posts++;
	                    }
	                    else if ( $display_posts == 2 ) {
	                        echo '<div class="col l6 s12 m6 ">';
	                            show_small_post();
	                        echo '</div>';
	                        $display_posts++;
	                    }
	                    else if ( $display_posts == 3 ) {
	                        echo '<div class="col l6 s12 m6 ">';
	                            show_small_post();
	                        echo '</div>
	    </div>'; //end <div class="full-width-mob col l8 s12 m7"> 
	                         $display_posts++;
	                    }
	                    
	                    else {
	                        echo '<div class="col l4 s12 m5 ">';
	                            show_small_post( '260px' );
	                        echo '</div>';
	                    }
	                } //end while
	            } //end if
	            else {
	                echo 'Статтей не знайдено';
	            }
	            wp_reset_postdata();
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

	<div class="five-block-with-line hide-on-med-and-down">
		<div class="big-sign-line">НОВИНИ <span></span></div>
		<div class="block-line"></div>
		<div class="small-sign-line">ОПИТУВАННЯ<img class="line-img-five" src="<?php bloginfo('template_url') ?>/img/medical-result.svg"></div>
	</div>

	<div class="five-block-with-line hide-on-large-only">
		<div class="big-sign-line">НОВИНИ <span>ПАРТНЕРІВ</span></div>
		<div class="block-line"></div>

	</div>

	<div class="row">
		<div class="col l6 s12 m6 devider">
			<div class="main-news-content-footer">
				<?php
	                //show latest news
	                get_template_part('template-parts/latest', 'news');
	            ?>
			</div>
		</div>
		<div class="five-block-with-line hide-on-large-only">
			<div class="small-sign-line">ОПИТУВАННЯ<img class="line-img-five" src="<?php bloginfo('template_url') ?>/img/medical-result.svg"></div>
			<div class="block-line"></div>

		</div>
		<div class="col l6 s12 m6 ">
	<?php
            //show polls
            get_template_part('template-parts/polls');
        ?>
		</div>
	</div>


	<?php get_footer(); ?>
