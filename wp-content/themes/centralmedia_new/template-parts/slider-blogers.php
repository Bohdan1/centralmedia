<section class="center slider">
	<?php
		$popular_blogs_days = 21;
		$need_blogs = 8;
		$post_count = 0;
		$args = array(
			'post_type' => 'blogs',
			'posts_per_page' => $need_blogs,
			'publish' => true,
			'date_query' => array(
				'after' => $popular_blogs_days . ' days ago',
			),
			'meta_key' => 'post_views_count',
			'orderby' => 'meta_value_num'
		);
		$query = new WP_Query( $args );

		if( $query->have_posts() ) {
			while ( $query->have_posts() ) {
				$query->the_post();
				$author_id = get_the_author_meta( 'ID' );
				if( $post_count == 0 ) {
					echo '
						<div class="slider-box slider-box-remake-main">
							<a href="' . get_the_permalink() . '" class="no-hover-blog">
						        <div class="slider-element">
						            <div class="blog-element-tag no-hover-blog">ТОП БЛОГ</div>
					      			<img src="' . get_wp_user_avatar_src( $author_id, 'thumbnail' ) . '" alt="Аватар">
					      			<div>
					      				<div class="slider-bloger-name-main">
					      					<span class="no-hover-blog">' .
					      						get_the_author_meta('first_name') . ' ' . get_the_author_meta( 'last_name' ) . '
					      					</span>
					      				</div>
					      				<div class="slider-bloger-thema-main">
					      					<span class="no-hover-blog">' .
												short_post_title(60) . '
											</span>
					      				</div>
					      			</div>
						        </div>
							</a>
					    </div>';
					$i++;
				}
				else {
					show_blog_for_slider();
				}
				$post_count++;
			} //end while
		} //end if
		
		if ( $post_count < $need_blogs) {
			$args = array(
				'post_type' => 'blogs',
				'posts_per_page' => $need_blogs - $post_count,
				'publish' => true,
				'date_query' => array(
					'before' => $popular_blogs_days . ' days ago',
				),
				'orderby' => 'date',
				'order' => 'DESC'
			);
			$query = new WP_Query( $args );
			if( $query->have_posts() ) {
				while ( $query->have_posts() ) {
					$query->the_post();
					$author_id = get_the_author_meta( 'ID' );
					show_blog_for_slider();
				} //end while
			} //end if
		} //end if
		else {
			echo 'Блогів не знайдено';
		}
		wp_reset_postdata();
	?>
</section>