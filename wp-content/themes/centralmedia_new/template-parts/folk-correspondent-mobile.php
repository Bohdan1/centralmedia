<div class="nar-kor-mob">
	<?php 
		$args = array(
			'post_type' => 'folk_correspondent',
			'posts_per_page' => 4,
			'publish' => true,
			'orderby' => 'date',
			'order' => 'DESC'
			);
		$query = new WP_Query( $args );
		if ( $query->have_posts() ) {
			while ( $query->have_posts() ) {
				$query->the_post();
				echo '
					<div class="nar-kor-block">
						<div class="nar-kor-img-mob">
							<img alt="img" class="user-video-width" src="' . get_the_post_thumbnail_url( '', 'medium' ) . '">
						</div>
						<div class="nar-kor-text-mob">' .
							short_post_desc( 400 ) . '
						</div>
					</div>';
			} //end while
		} //end if
		else {
			echo 'Народних кориспондентів не знайдено';
		}
		wp_reset_postdata();
	?>
</div>