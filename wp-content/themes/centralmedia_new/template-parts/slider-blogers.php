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
						<a href="' . get_the_permalink() . '" class="no-hover-blog">
					        <div class="slider-element">
					            <div class="blog-element-tag no-hover-blog">ТОП БЛОГ</div>
				      			<img src="' . get_wp_user_avatar_src( $author_id, 'thumbnail' ) . '" alt="Аватар">
				      			<div>
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

										</a>
					    </div>';
					$i++;
				}
				else {
					echo '
						<div class="slider-box slider-box-remake">
						<a href="' . get_the_permalink() . '" class="black-text">
							<div class="slider-element">
								<img src="' . get_wp_user_avatar_src( $author_id, 'thumbnail' ) . '" alt="Аватар">
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
							</a>

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