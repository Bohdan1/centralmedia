<?php

function top3_big_stream( $posts_id ) {
	echo '
	<iframe class="stream-template" src="https://www.youtube.com/embed/' . youtube_iframe_url( get_post_meta( $posts_id, 'stream_url', true ) ) . '"  >
	</iframe>';
}

function top3_big_video( $posts_id ) {
	echo '
	<div style="background-size:cover; background-position:center; background-image: url(' . get_the_post_thumbnail_url( $posts_id, 'large' ) . ');"  class="left-block-content">
		<a href="' . get_the_permalink( $posts_id ) . '">
			<div class="mask">
				<div class="button-position  hide-on-small-only">
					<span>
						<img class="play-button button-hover center" src="' . get_template_directory_uri( $posts_id ) . '/img/play-button.svg" alt="Логотип">
					</span>
				</div>
				<div class="content-box fix-height-top3">';
					$category = get_the_category( $posts_id );
					if ( !empty( $category ) ) {
						echo '
					<div class="title-tag">';
						$max_categories = 3;    //the maximum number of categories that need to display
						if ( count( $category ) < $max_categories ) {
							$max_categories = count( $category );
						}
						for ( $i = 0; $i < $max_categories; $i++ ) {
							echo '<span class="no-hover-blog main-slider-tags">' . $category[$i]->cat_name . '</span>';
						}
						echo '
					</div>';
					}
					echo '
					<div class="box-title box-title-main">
						<span class="hover-link" >' .
							short_post_title( 70, $posts_id ) . '
						</span>
					</div>
					<div class="box-title-time box-title-time-main">' . 
						get_the_time('d.m.Y', $posts_id) . '
					</div>
				</div>
			</div>
		</a>
	</div>';
}

//template for news and articles
function top3_big_news( $posts_id ) {
	echo '
	<div style="background-position:center; background-image: url(' . get_the_post_thumbnail_url( $posts_id, 'large' ) . '); background-size:cover;" class="left-block-content">
		<a href="' . get_the_permalink( $posts_id ) . '">
			<div class="mask">
				<div class="content-box">';
					$category = get_the_category( $posts_id );
					if ( !empty( $category ) ) {
						echo '
					<div class="title-tag">';
						$max_categories = 3;    //the maximum number of categories that need to display
						if ( count( $category ) < $max_categories ) {
							$max_categories = count( $category );
						}
						for ( $i = 0; $i < $max_categories; $i++ ) {
							echo '<span  class="no-hover-blog main-slider-tags">' . $category[$i]->cat_name . '</span>';
						}
						echo '
					</div>';
					}
					echo '
					<div class="box-title box-title-main">
						<span class="hover-link">' .
							short_post_title( 70, $posts_id ) . '
						</span>
					</div>
					<div class="box-title-time box-title-time-main">' . get_the_time('d.m.Y', $posts_id) . '</div>
				</div>
			</div>
		</a>
	</div>';
}

function top3_small_stream( $posts_id ) {
	echo '
	<iframe class="right-block-video center" src="https://www.youtube.com/embed/' . youtube_iframe_url( get_post_meta( $posts_id, 'stream_url', true ) ) . '"  >
	</iframe>';
}

function top3_small_video( $posts_id ) {
	echo '
	<div style="background-position:center; background-image: url(' . get_the_post_thumbnail_url( $posts_id, 'medium' ) . ');" class="right-block-second ">
		<a href="' . get_the_permalink( $posts_id ) . '">
			<div class="mask">
				<div class="button-position-template hide-on-small-only">
					<span>
						<img class="play-button-template button-hover center" src="' . get_template_directory_uri() . '/img/play-button.svg" alt="Переглянути">
					</span>
				</div>';
					$category = get_the_category( $posts_id );
					if ( !empty( $category ) ) {
						echo '
						<div>';
							$category = $category[0];
							echo '
							<span class="title-tag-top3 no-hover-blog top-states-small">' .
								$category->cat_name . '
							</span>';
							echo '
						</div>';
					}
					echo '
			</div>
			<div class="right-block-second-sign ">
				<span class="hover-link">' .
					short_post_title( 55, $posts_id ) . '
				</span>
			</div>
		</a>
	</div>';
}

//template for news and articles
function top3_small_news( $posts_id ) {
	echo '
	<div style="background-position:center; background-image: url(' . get_the_post_thumbnail_url( $posts_id, 'medium' ) . ');" class="right-block-second ">
		<a href="' . get_the_permalink( $posts_id ) . '">
			<div class="mask">';
				$category = get_the_category( $posts_id );
				if ( !empty( $category ) ) {
					echo '
					<div class="title-tag-top3 no-hover-blog top-states-small">
						<span class="no-hover-blog">';
							$category = $category[0];
							echo '
							<span class="no-hover-blog">' . 
								$category->cat_name . '
							</span>';
							echo '
						</span>
					</div>';
				}
				echo '
			</div>
			<div class="right-block-second-sign ">
				<span class="hover-link">' .
					short_post_title( 55, $posts_id ) . '
				</span>
			</div>
		</a>
	</div>';
}
