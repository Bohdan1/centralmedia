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
			<iframe class="stream-template" src="https://www.youtube.com/embed/MJ_aWV_-DF8" frameborder="0" ></iframe>
		';
	}
	else if ( get_post_type( $posts_id[0] ) == 'video' ) {
		echo '
			<div style="background-image: url(' . get_template_directory_uri() . '/img/1.jpg);"  class="left-block-content">
			<div class="mask">
				<div class="button-position  hide-on-small-only">
					<a href="' . get_the_permalink( $posts_id[0] ) . '">
						<img class="play-button button-hover center" src="' . get_template_directory_uri( $posts_id[0] ) . '/img/play-button.svg" alt="Логотип">
					</a>
				</div>
				<div class="content-box">
					<div class="title-tag">';
                        $category = get_the_category( $posts_id[0] );
                        if ( !empty( $category ) ) {
                            $max_categories = 3;    //the maximum number of categories that need to display
                            if ( count( $category ) < $max_categories ) {
                                $max_categories = count( $category );
                            }
                            for ( $i = 0; $i < $max_categories; $i++ ) {
                                echo '<a href="' . get_category_link( $category[$i]->cat_ID ) . '" class="no-hover-blog main-slider-tags">' . $category[$i]->cat_name . '</a>';
                            }
                        }
                        echo '
                    </div>
					<div class="box-title box-title-main">
						<a href="' . get_the_permalink( $posts_id[0] ) . '">' .
							get_the_title( $posts_id[0] ) .'
						</a>
					</div>
					<div class="box-title-time box-title-time-main">' . get_the_time('d.m.Y', $posts_id[0]) . '</div>
				</div></div>

				<div class="social-menu-bottom hide-on-large-only ">
					<div class="menu-list">
						<a href="#" >
							<img class="social-logo" src="' . get_template_directory_uri() . '/img/social/youtube.svg" alt="Логотип">
						</a>
					</div>
					<div class="menu-list">
						<a href="#">
							<img class="social-logo" src="' . get_template_directory_uri() . '/img/social/facebook.svg" alt="Логотип">
						</a>
					</div>
					<div class="menu-list">
						<a href="#" >
							<img class="social-logo" src="' . get_template_directory_uri() . '/img/social/twitter.svg" alt="Логотип">
						</a>
					</div>
				</div>
			</div>';
	}
	else if ( get_post_type( $posts_id[0] ) == 'news' || get_post_type( $posts_id[0] ) == 'articles' ) {
		echo '
		<a class="mask-link" href="' . get_the_permalink( $posts_id[0] ) . '">
			<div style="background-image: url(' . get_template_directory_uri() . '/img/1.jpg); background-size:cover;" class="left-block-content">

			
			<div class="mask">
			
				<div class="content-box">
					<div class="title-tag">';
                        $category = get_the_category( $posts_id[0] );
                        if ( !empty( $category ) ) {
                            $max_categories = 3;    //the maximum number of categories that need to display
                            if ( count( $category ) < $max_categories ) {
                                $max_categories = count( $category );
                            }
                            for ( $i = 0; $i < $max_categories; $i++ ) {
                                echo '<a href="' . get_category_link( $category[$i]->cat_ID ) . '" class="no-hover-blog main-slider-tags">' . $category[$i]->cat_name . '</a>';
                            }
                        }
                        echo '
					</div>
					<div class="box-title box-title-main">
						<a href="' . get_the_permalink( $posts_id[0] ) . '">' .
							get_the_title( $posts_id[0] ) .'
						
					</div>
					<div class="box-title-time box-title-time-main">' . get_the_time('d.m.Y', $posts_id[0]) . '</div>

				</div>
						
				</div>
				</a>
			
				<div class="social-menu-bottom hide-on-large-only ">
					<div class="menu-list">
						<a href="#" >
							<img class="social-logo" src="' . get_template_directory_uri() . '/img/social/youtube.svg" alt="Логотип">
						</a>
					</div>
					<div class="menu-list">
						<a href="#">
							<img class="social-logo" src="' . get_template_directory_uri() . '/img/social/facebook.svg" alt="Логотип">
						</a>
					</div>
					<div class="menu-list">
						<a href="#" >
							<img class="social-logo" src="' . get_template_directory_uri() . '/img/social/twitter.svg" alt="Логотип">
						</a>
					</div>
				</div>
			</div>';
	}
?>
</div>

<div class="col l3 s12 right-block hide-on-med-and-down">
		<?php
			for ($i = 1; $i < 3; $i++) {
				if ( get_post_type( $posts_id[$i] ) == 'streams' ) {
					echo '
						<iframe class="right-block-video center" src="https://www.youtube.com/embed/MJ_aWV_-DF8" frameborder="0" ></iframe>
					';
				}
				else if ( get_post_type( $posts_id[$i] ) == 'video' ) {
					echo '
					<div style="background-image: url(' . get_the_post_thumbnail_url( $posts_id[$i] ) . ');" class="right-block-second ">
						<div class="mask">
							<div class="button-position-template hide-on-small-only">
								<a href="' . get_the_permalink( $posts_id[$i] ) . '" >
									<img class="play-button-template button-hover center" src="' . get_template_directory_uri() . '/img/play-button.svg" alt="Переглянути">
								</a>
							</div>
							<div class="right-block-second-tag ">';
		                        $category = get_the_category( $posts_id[$i] );
		                        if ( !empty( $category ) ) {
		                            $category = $category[0];
		                            echo '<a href="' . get_category_link( $category->cat_ID ) . '" class="no-hover-blog">' . $category->cat_name . '</a>';
		                        }
		                        echo '
							</div>
						</div>
						<div class="right-block-second-sign ">
							<a href="' . get_the_permalink( $posts_id[$i] ) . '">' .
								short_post_title( 80, $posts_id[$i] ) . '
							</a>
						</div>
					</div>';
				}
				else if ( get_post_type( $posts_id[$i] ) == 'news' || get_post_type( $posts_id[$i] ) == 'articles' ) {
					echo '
						<div style="background-image: url(' . get_the_post_thumbnail_url( $posts_id[$i] ) . ');" class="right-block-second ">
							<div class="mask">
								<div class="right-block-second-tag ">
									<a href="#" class="no-hover-blog">';
				                        $category = get_the_category( $posts_id[$i] );
				                        if ( !empty( $category ) ) {
				                            $category = $category[0];
				                            echo '<a href="' . get_category_link( $category->cat_ID ) . '" class="no-hover-blog">' . $category->cat_name . '</a>';
				                        }
				                        echo '
									</a>
								</div>
							</div>
							<div class="right-block-second-sign ">
								<a href="' . get_the_permalink( $posts_id[$i] ) . '">' .
									short_post_title( 80, $posts_id[$i] ) . '
								</a>
							</div>
						</div>';
				}
			}
		?>
</div>