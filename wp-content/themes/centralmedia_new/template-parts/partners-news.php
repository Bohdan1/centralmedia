<div class="partner-news-block">
    <?php
        $need_posts = 6;
        $args = array(
            'post_type' => 'partner-news',
            'posts_per_page' => $need_posts,
            'publish' => true,
            'orderby' => 'date',
            'order' => 'DESC'
        );
        $query = new WP_Query( $args );
        if( $query->have_posts() ) {
            while ( $query->have_posts() ) {
                $query->the_post();
                echo '
                    <div class="partner-news-block-content">
                        <div class="news-main-img">
                            <img class="news-main-img-width" alt="main news" src="' . get_stylesheet_directory_uri() . '/img/loading-circles.svg">
                        </div>
                        <div class="news-main-title ">
                            <a href="' . get_post_meta( $post->ID, 'partner_news_url', true ) . '" class="black-text" target="_blank">' .
                                get_the_title() . '
                            </a>
                        </div>
                    </div>';
            } //end while
        } //end if
    ?>
</div>