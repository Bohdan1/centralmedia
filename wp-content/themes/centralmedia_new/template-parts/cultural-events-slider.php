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
					show_slider_cultural_event($post_id = $post->ID);
				}
			}
			wp_reset_postdata();
		?>			
	</div>
	<!-- Arrow Navigator -->
	<span data-u="arrowleft" class="jssora22l" style="top:0px;left:8px;width:40px;height:58px;" data-autocenter="2"></span>
	<span data-u="arrowright" class="jssora22r" style="top:0px;right:8px;width:40px;height:58px;" data-autocenter="2"></span>
</div>