<div class="row polling">
	<!--polling-->
	<div class="col l4 s12 m6 asking-block">
		<h5 class="asking">ОПИТУВАННЯ</h5>
		<div class='ajax-poll' tclass='poll-simple' style='width:450px;'></div>
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
						<i class="fa fa-bar-chart" aria-hidden="true"></i>
						<?php
							echo types_render_field( "partner_news_url", array("class" => "hover-link", "title" => get_the_title(), "target" =>
"blank" ) );
						?>
					</div>
				</div>
		<?php
    		} /* end foreach */
			wp_reset_postdata();
		?>

	</div>
	<!--advertising-->
	<div class="col l4 s12 m6 center">
		<img src="<?php bloginfo('template_url'); ?>/img/logo/logo_kodeks.png" width="40%">
	</div>
</div>
