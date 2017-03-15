<?php
	get_header();
	
	$search_query = get_search_query();
	echo '
	<div class="header-margin-tag">
		<div class="tag-name">
			Ви шукали: "' . $search_query . '"
		</div>
	</div>';

	if ( have_posts() ) :
		$slovo = getNumEnding( $wp_query->found_posts, array('запис', 'записи', 'записів') );
		echo '
		<div class="tag-name-description">
			За Вашим запитом знайдено ' . $wp_query->found_posts . ' ' . $slovo . '
		</div>';
		while ( have_posts() ) : the_post(); // Start the Loop
			$post_type = get_post_type();
			show_no_img_post();
		endwhile; //end while
		echo '<div class="clear"></div>';
		the_posts_pagination( $pagination_args );
		wp_reset_postdata();
	else :
		echo '<div class="tag-name-description">За Вашим запитом нічого не знайдено</div>';
	endif; //end if

	/*
	if ( $query->max_num_pages > 1 ) { 
?>
		<script>
			var ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
			var true_posts = '<?php echo serialize( $query->query_vars ); ?>';
			var current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
			var max_pages = '<?php echo $query->max_num_pages; ?>';
		</script>
		<div class="">
			<div id="search_loadmore" class="button_loadmore col l12 m12 s12">Показати більше</div>
		</div>
<?php 
	} //end if
	*/
?>


<?php
	get_footer();
?>
