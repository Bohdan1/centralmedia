<div class="row polling">
	<!--polling-->
	<div class="col l4 s12 m6 asking-block">
	<?php
		if ( function_exists('vote_poll') && !in_pollarchive() ) : 
			echo '
				<ul>
					<li>' . get_poll() . '</li>
				</ul>';
		endif;
	?>
</div>
	<!--partners news-->
	<div class="col l4 s12 m6 news-partners-block">
		<h5 class="partners-news center"><a href="<?php echo get_post_type_archive_link('partner-news'); ?>">НОВИНИ ПАРТНЕРІВ</a></h5>
		<?php 
			 $args = array(
                'post_type' => 'partner-news',
                'numberposts' => 3,
                'publish' => true,
                'orderby' => 'date',
                'order' => 'DESC'
            );
            $myposts = get_posts( $args );

            foreach( $myposts as $post ){
            	setup_postdata($post);
        ?>
				<div class="article"> 
					<div class="article-title">
						<a href="<?php echo get_post_meta( $post->ID, 'partner_news_url', true ); ?>" class="hover-link" target="_blank">
							<?php the_title(); ?>
						</a>
					</div>
				</div>
		<?php
    		} /* end foreach */
			wp_reset_postdata();
		?>

	</div>
	<!--advertising-->
	<div class="col l4 s12 m12 center hide-on-med-and-down">
		<img src="<?php bloginfo('template_url'); ?>/img/logo/logo_kodeks.png" width="50%">
	</div>
</div>
