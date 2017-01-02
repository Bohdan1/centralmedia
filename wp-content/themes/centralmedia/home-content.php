<!--home-content-->

<div style="height: 58px;"></div>
<div class="row slider-section">
	<!--slider-->
	<div class="col l8 s12 m12">
		<div class="carousel carousel-slider center" data-indicators="true">
			<div class="carousel-fixed-item center">
				<a class="btn waves-effect slider-button white-text darken-text-2">Перейти</a>
			</div>
			<div class="carousel-item slide-1 white-text" href="#one!">
				<h2 class="slider-sign-main">ТОП-5 Новин</h2>
				<p class="white-text slider-sign-small container">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
			</div>
			<div class="carousel-item slide-2 white-text" href="#two!">
				<h2 class="slider-sign-main">ТОП-5 Новин</h2>
				<p class="white-text slider-sign-small container">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
			</div>
			<div class="carousel-item slide-1 white-text" href="#three!">
				<h2 class="slider-sign-main">ТОП-5 Новин</h2>
				<p class="white-text slider-sign-small container">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
			</div>
			<div class="carousel-item slide-2 white-text" href="#four!">
				<h2 class="slider-sign-main">ТОП-5 Новин</h2>
				<p class="white-text slider-sign-small container">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
			</div>
		</div>
	</div>

	<!--Blogs-->
	<div class="col l4 s12 m12">
		<div class="blogs">
			<span class="blog-sign">БЛОГИ </span>

			<?php 
			 $args = array(
		                'post_type' => 'blogs',
		                'posts_per_page' => 3,
		                'publish' => true,
		                'orderby' => 'date',
		                'order' => 'DESC'
		            );
            $myposts = get_posts( $args );

            function short_desc_blog($charlength) {		// function for display short content for blogs
				$excerpt = get_the_excerpt();
				?>
				<a href="<?php the_permalink(); ?>" class="blog-short-desc" >
				<?php
					if ( mb_strlen( $excerpt ) > $charlength ) {
						$subex = mb_substr( $excerpt, 0, $charlength);
						echo $subex . '...';
					} else {
						echo $subex;
					}
					?>
				</a>
			<?php
			} // end function short_desc_blog()
            foreach( $myposts as $post ){
            	setup_postdata($post);
        ?>
		<div class="blog-block row">
			<div class="blogger-photo col l3 s1 center" >
				<img src="<?php bloginfo('template_url') ?>/img/users/user2.png" alt="user">
			</div> 
			<div class="blogger-article col l9 s11">
				<div class="blogger-name"><?php the_author(); ?></div>
				<div class="blogger-speach">
					<?php
						short_desc_blog(100);		// display short content
					?>
				</div>
			</div>
		</div>
        <?php
    		} /* end foreach */
			wp_reset_postdata();
		?>
		</div>
	</div>
</div>

<!--news-->
<div class="row content">
	<div class="col l6 s12 m6 news-block ">
		<div class="news-sign center">ОСТАННІ НОВИНИ</div>
		
		<?php 
			 $args = array(
		                'post_type' => 'news',
		                'posts_per_page' => 10,
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
				<a href="<?php the_permalink(); ?>" class="hover-link"><i class="fa fa-bar-chart" aria-hidden="true"></i>
					<?php the_title(); ?>
				</a>
			</div>
		</div>
        <?php
    		} /* end foreach */
			wp_reset_postdata();
		?>
		
		<div class="article"> 
			<div class="article-title">
				<a href="#" class="hover-link"><i class="fa fa-circle-o-notch fa-spin" aria-hidden="true"></i>
					Путін заявив, що Росія сильніша за будь-якого агресора
				</a>
			</div>
		</div>
		<div class="article"> 
			<div class="article-title">
				<a href="#" class="hover-link red-text "><em>фото</em>ДЕПУТАТ У ДНІПРІ ПОПАВСЯ НА ХАБАРІ</a>
			</div>
		</div>
		<div class="article"> 
			<div class="article-title">
				<a href="#" class="hover-link"><em>фото</em>В Росії цензура не пропустила три книги для Сущенка</a>
			</div>
		</div>
		
	</div>

	<!--Videos-->
	<div class="col l3 s12 m6 center video-block">
		<div class="news-sign-video center">ВІДЕО</div>
		<div class="video-list row">
			<div class="youtube col l6">
				<img width="80%" src="<?php bloginfo('template_url'); ?>/img/logo/youtube-icon.png" alt="альтернативный текст" />
				<div class="center">Канал YouTube</div>
			</div>
			<div class="youtube col l6">
				<img  width="80%" src="<?php bloginfo('template_url'); ?>/img/logo/youtube-icon-stream.png" alt="альтернативный текст" />
				<div class="center">Онлайн трансляція</div>
			</div>
		</div>

		<div class="top-video">Топ-5 Відео</div>
		<?php 
			 $args = array(
		                'post_type' => 'video',
		                'posts_per_page' => 5,
		                'publish' => true,
		                'orderby' => 'date',
		                'order' => 'DESC'
		            );
            $myposts = get_posts( $args );
            foreach( $myposts as $post ){
            	setup_postdata($post);
        ?>
		<div class="row video-padding">
			<div class="youtube-top-video col l4">
				<img width="80%" src="<?php video_thumbnail(); ?>" alt="альтернативный текст" />
			</div>
			<div class="video-text col l8">
				<a href="<?php the_permalink(); ?>" class="hover-link">
					<?php the_title(); ?>
				</a>
			</div>
		</div>
        <?php
    		} /* end foreach */
			wp_reset_postdata();
		?>
	</div>

	<!--state-->
	<div class="col l3 s12 m6 center state-block">
		<div class="state-list">
			<div class="state-sign center">СТАТТІ</div>
			<div class="blogs">
				<?php 
					$args = array(
		                'post_type' => 'articles',
		                'posts_per_page' => 3,
		                'publish' => true,
		                'orderby' => 'date',
		                'order' => 'DESC',
		                'paged' => get_query_var('paged')
		            );
		            $firstArticle = false;
		            $myposts = get_posts( $args );

		            function short_desc_article($charlength) {		// function for display short content for states
						$excerpt = get_the_excerpt();
						?>
						<?php
							if ( mb_strlen( $excerpt ) > $charlength ) {
								$subex = mb_substr( $excerpt, 0, $charlength);
								echo $subex . '...';
							} else {
								echo $subex;
							}
					}

					foreach( $myposts as $post ){
						setup_postdata($post);
						if ($firstArticle == false) {
				?>
				<div class="row main-state">
					<div class="col s12 m12 l12">
						<img src="<?php the_post_thumbnail_url(); ?>" width="100%" alt="">
						<a href="<?php the_permalink(); ?>" class="hover-link">
							<span class="state-first-name"><?php the_title(); ?></span>
						</a>
						<div>
							<?php
								short_desc_article(120);		// display short content
							?>
						</div>
					</div>
				</div>
				<?php
					} /* end if */
					else{
				?>
				<div class="row other-state">
					<div class="col s12 m12 l12">
						<img src="<?php the_post_thumbnail_url(); ?>" width="40%" alt="" class="state-other-float">
						<a href="<?php the_permalink(); ?>" class="hover-link">
							<div class="state-other-name"><?php the_title(); ?></div>
						</a>
						<div class="state-other-text">
							<?php
								short_desc_article(120);
							?>
						</div>
					</div>
				</div>

				<?php
						} /* end else */
					$firstArticle = true;
					} /* end foreach */
					wp_reset_postdata();
		        ?>		
			</div>
		</div>
	</div>
</div>
<br>

<!--polling-->
<div class="row polling">
	<div class="col l4 s12 m6 asking-block">
		<h5 class="asking">Опитування</h5>
		<div class='ajax-poll' tclass='poll-simple' style='width:450px;'></div>
	</div>
	<!--partners news-->
	<div class="col l4 s12 m6 news-partners-block">
		<h5 class="partners-news center">Новини партнерів</h5>
		<div class="article"> 
	<div class="article-title">
		<a href="#" class="hover-link"><i class="fa fa-bar-chart" aria-hidden="true"></i>
			Активісти на авто з єврономерами перекрили центр Києва</a>
		</div>
	</div>
	<div class="article"> 
		<div class="article-title">
			<a href="#" class="hover-link"><i class="fa fa-circle-o-notch fa-spin" aria-hidden="true"></i>
				Путін заявив, що Росія сильніша за будь-якого агресора</a>
			</div>

		</div>
		<div class="article"> 
			<div class="article-title">
				<a href="#" class="hover-link red-text "><em>фото</em>ДЕПУТАТ У ДНІПРІ ПОПАВСЯ НА ХАБАРІ</a>
			</div>

		</div>
	</div>
	<!--advertising-->
	<div class="col l4 s12 m6 center reklama">
		<img src="<?php bloginfo('template_url'); ?>/img/logo/logo_kodeks.png" width="40%">
	</div>
</div>
