<div class="row">
	<div class="full-width-mob col l8 s12 m7 ">
		<?php
	        $args = array(
	            'post_type' => 'video',
	            'posts_per_page' => 6,
	            //'numberposts' => 10,
	            'publish' => true,
	            'orderby' => 'date',
	            'order' => 'DESC'
	        );
	        $query = new WP_Query( $args );
	        global $exclude_posts;
	        $exclude_posts = array();
	        $display_posts = 1;
	        if ( $query->have_posts() ) {
	            while ( $query->have_posts() ) {
	                $query->the_post();
	                $exclude_posts[] = get_the_ID();
	                if ( $display_posts == 1 ) {
	                    show_big_video();
	                    $display_posts++;
	                }
	                else if ( $display_posts == 2 ) {
	                    echo '
	                    	<div class="col l6 s12 m6 ">';
								show_small_video();
							echo '
							</div>';
	                    $display_posts++;
	                }
	                else if ( $display_posts == 3 ) {
	                    echo '
	                    	<div class="col l6 s12 m6 ">';
								show_small_video();
						echo '
							</div>
	</div>'; //end <div class="full-width-mob col l8 s12 m7"> 
	                     $display_posts++;
	                }
	                else if ( $display_posts == 4 ) {
	                    echo '
	                    	<div class="col l4 s12 m5 ">
								<div class="all-video-last-side-video">';
						show_small_video();
						$display_posts++;
	                }
	                else if ( $display_posts == 5 ) {
	                	show_small_video();
						$display_posts++;
	                }
	                else {
	                	show_small_video();
	                	echo '
								</div>
							</div>';
						$display_posts++;
	                }
	            } //end while
	        } //end if
	        else {
	            echo 'Відео не знайдено';
	        }
	        wp_reset_postdata();
	    ?>
</div>