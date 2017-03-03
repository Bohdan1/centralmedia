<?php get_header(); ?>
	<div class="header-margin-tag">
		<div class="tag-name">Ви шукали: "<?php the_search_query(); ?>"</div>
		<?php 
			if ( have_posts() ) {
				global $wp_query;
				$slovo = getNumEnding( $wp_query->found_posts, array('запис', 'записи', 'записів') );
				echo '
						<div class="tag-name-description">
							За Вашим запитом знайдено ' . $wp_query->found_posts . ' ' . $slovo . '
						</div>
	</div>';
				while ( have_posts() ) { //start the Loop.
					the_post();
					$post_type = get_post_type();
					show_no_img_post();
				} //end while
			} //end if
			else {
				echo 'За Вашим запитом нічого не знайдено';
			} //end else

			/*
			if ( $wp_query->max_num_pages > 1 ) { ?>
                    <script>
			            var news_ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
			            var news_true_posts = '<?php echo serialize( $wp_query->query_vars ); ?>';
			            var news_current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
			            var news_max_pages = '<?php echo $wp_query->max_num_pages; ?>';
			        </script>
			        <div id="search_loadmore" class="button_loadmore">Показати більше</div>
	        <?php 
	            } //end if
	        */
	        wp_reset_postdata();
		?>
	</div>

<?php get_footer(); ?>
