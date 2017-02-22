<?php
    $args = array(
        'post_type' => 'news',
        'posts_per_page' => 10,
        'publish' => true,
        'orderby' => 'date',
        'order' => 'DESC'
    );
    $query = new WP_Query( $args );
    $date = '';

    if ( $query->have_posts() ) {
        while ( $query->have_posts() ) {
            $query->the_post();
            show_short_latest_news();
        } //end while
    } //end if
    else {
        echo 'Новин не знайдено';
    }

    if ( $query->max_num_pages > 1 ) { ?>
        <script>
            var news_ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
            var news_true_posts = '<?php echo serialize( $query->query_vars ); ?>';
            var news_current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
            var news_max_pages = '<?php echo $query->max_num_pages; ?>';
        </script>
        <div id="news_loadmore" class="button_loadmore">Більше новин</div>
<?php 
    } //end if
    wp_reset_postdata();
?>
