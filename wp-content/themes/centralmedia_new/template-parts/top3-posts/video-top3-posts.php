<?php
	get_template_part('template-parts/top3-posts/top3-posts', 'templates');

	$posts_id = array();
	$block1_post_id = get_option('video_block1_post_id');
	$block2_post_id = get_option('video_block2_post_id');
	$block3_post_id = get_option('video_block3_post_id');
	if ( $block1_post_id && $block2_post_id && $block3_post_id ) {
		$posts_id[] = intval( $block1_post_id ) ;
		$posts_id[] = intval( $block2_post_id );
		$posts_id[] = intval( $block3_post_id );
	} //end if
	else {
		$args = array(
			'post_type' => array ('news', 'articles', 'video'),
			'posts_per_page' => 3,
			'publish' => true,
			'orderby' => 'date',
			'order' => 'DESC'
		);
		$query = new WP_Query( $args );
		if( $query->have_posts() ) {
			while ( $query->have_posts() ) {
				$query->the_post();
				$posts_id[] = get_the_ID();
			} //end while
		} //end if
	} //end else

	echo '
	<div id="disable-mat-padding" class="col l9 s12 left-block">';
		if ( get_post_type( $posts_id[0] ) == 'streams' ) {
			top3_big_stream( $posts_id[0] );
		}
		else if ( get_post_type( $posts_id[0] ) == 'video' ) {
			top3_big_video( $posts_id[0] );
		}
		else if ( get_post_type( $posts_id[0] ) == 'news' || get_post_type( $posts_id[0] ) == 'articles' ) {
			top3_big_news( $posts_id[0] );
		}
	echo '
	</div>';
	
	echo '
	<div class="col l3 s12 right-block hide-on-med-and-down">';
		for ($i = 1; $i < 3; $i++) {
			if ( get_post_type( $posts_id[$i] ) == 'streams' ) {
				top3_small_stream( $posts_id[$i] );
			}
			else if ( get_post_type( $posts_id[$i] ) == 'video' ) {
				top3_small_video( $posts_id[$i] );
			}
			else if ( get_post_type( $posts_id[$i] ) == 'news' || get_post_type( $posts_id[$i] ) == 'articles' ) {
				top3_small_news( $posts_id[$i] );
			}
		} //end for
	echo '</div>';

?>