<div id="jssor_2" >
	<!--Loading Screen -->
	<div id="slider-option" data-u="loading" >
		<div id="slider-option2"></div>
		<div id="slider-option3"></div>
	</div>
	<div data-u="slides" class="slider-option4" >
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
					<div class="user-news-block">
						<div class=" col l12 m7 s12 " style="width: 50% !important;">
							<img alt="img" class="user-video-width" src="' . get_the_post_thumbnail_url( '', 'medium' ) . '">
						</div>
						<div class="col l12 m4 s12" style="width: 50% !important;">
							<div class="user-video-name">' . get_post_meta( $post->ID, 'folk_correspondent_name', true ) . '</div>
							<div class="user-video-date">' . get_the_time('j F Y') . '</div>
							<div class="user-video-time">' . get_the_time('G:i') . '</div>
							<div class="user-news-title">' . short_post_desc( 400 ) . '</div>
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
	<!-- Arrow Navigator -->
	<span data-u="arrowleft" class="jssora08l" style="top:8px;left:1000px !important;width:50px;height:50px;" data-autocenter="1">
	</span>
	<span data-u="arrowright" class="jssora08r" style="top:240px;left:1000px;width:50px;height:50px;" data-autocenter="1">
	</span>
</div>