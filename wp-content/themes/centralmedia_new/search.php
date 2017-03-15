<?php
	get_header();
	
	$search_query = get_search_query();

	$args = array(
		//'post_type' => '',
		's' => $search_query,
		'posts_per_page' => 10,
		'publish' => true,
		'orderby' => 'date'
		//'order' => 'DESC'
	);
	$query = new WP_Query( $args );

	if( $query->have_posts() ) {
		echo '
		<div class="header-margin-tag">
			<div class="tag-name">
				Ви шукали: "' . $search_query . '"
			</div>';
		global $query;
		$slovo = getNumEnding( $query->found_posts, array('запис', 'записи', 'записів') );
		echo '
			<div class="tag-name-description">
				За Вашим запитом знайдено ' . $query->found_posts . ' ' . $slovo . '
			</div>
		</div>';

		while ( $query->have_posts() ) {
			$query->the_post();
			$post_type = get_post_type();
			show_no_img_post();
		}
	}
	else {
		echo 'За Вашим запитом нічого не знайдено';
	}

	/*
	if ( $query->max_num_pages > 1 ) { ?>
		<script>
			var news_ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
			var news_true_posts = '<?php echo serialize( $query->query_vars ); ?>';
			var news_current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
			var news_max_pages = '<?php echo $query->max_num_pages; ?>';
		</script>
		<div id="search_loadmore" class="button_loadmore">Показати більше</div>
<?php 
	} //end if
	*/

	wp_reset_postdata();
?>




	

<?php
	get_footer();
?>
