<?php get_header(); ?>

<div class="header-margin-blog">
    <div class="row">
        <div class="col l8 s12 m8">
            <?php 
                if ( have_posts() ) :
                    while ( have_posts() ) : the_post(); // Start the Loop.
            ?>
                        <div class="one-video-post">
                            <div class="one-video-post-name">
                                <?php the_title(); ?>
                            </div>
                            <div class="box-title-time fix-mob-article one-video-post-time box-title-time-main-single">
                                <?php 
                                    the_time('j F Y, G:i');
                                    setPostViews( get_the_ID() );
                                    echo '<span style="float:right"> Кількість переглядів: ' . getPostViews( get_the_ID() ) . '</span>'; 
                                ?>
                            </div>
                            <div>
                                <img class="user-video-width" alt="video" src="<?php echo get_the_post_thumbnail_url( '', 'large' ); ?>">
                            </div>
                            <div class="single-post-text">
                                <?php the_content(); ?>
                            </div>
                            <?php echo getPostLikeLink(get_the_ID()); ?>
                        </div>
            <?php
                    endwhile; // End the loop.
                    echo '<div class="clear"></div>';
                    wp_reset_postdata();
                else :
                    // If no content, include the "No posts found" template.
                    echo '<div> Народних кориспондентів не знайдено </div>';
                endif;
            ?>
        </div>

        <div class="col l4 m4 s12">
            <div class="third-block-with-line">
                <div class="big-sign-line-one-video"><span>НОВИНИ</span></div>
                <div class="block-line"></div>
            </div>
            <?php
                //show latest news
                get_template_part('template-parts/latest', 'news');
            ?>
        </div>
    </div>
</div>

<div style="margin-bottom: 0px;" class="row">
    <div class="third-block-with-line">
        <div class="big-sign-line">КОМЕНТАРІ<span></span></div>
        <div class="block-line"></div>
    </div>
    <div  class="comment-block">
        <?php
            if ( comments_open() || get_comments_number() ) { 
                comments_template(); 
            }
        ?>
    </div>
    <div class="row one-news-content">
        <?php
            //slider for blogers
            get_template_part('template-parts/slider', 'blogers');
        ?>
    </div>

    <div class="third-block-with-line">
        <div class="big-sign-line">ПОПУЛЯРНІ <span>ВІДЕО</span></div>
        <div class="block-line"></div>
    </div>

    <div class="row">
        <div class="popular-video">
            <div class="row">
                <?php
                    $popular_days_post = 21;
                    $args = array(
                        'post_type' => 'video',
                        'posts_per_page' => 4,
                        'post__not_in' => $exclude_posts,
                        'publish' => true,
                        'date_query' => array(
                            'after' => $popular_days_post . ' days ago',
                        ),
                        'meta_key' => 'post_views_count',
                        'orderby' => 'meta_value_num'
                        //'order' => 'DESC'
                    );
                    $query = new WP_Query( $args );
                    $posts_count = 0;
                    //якщо є відео, які публіковані за останні $popular_days_post днів
                    if( $query->have_posts() ) {
                        while ( $query->have_posts() ) {
                            $query->the_post();
                            $posts_count++;

                            echo '<div class="col l3 s12 m6">';
                                show_small_video();
                            echo '</div>';
                        }
                    }
                    //якщо немає або недостатньо публікованих відео за останні $popular_days_post
                    if( $posts_count < 4 ) {
                        $args = array(
                            'post_type' => 'video',
                            'posts_per_page' => 4 - $posts_count,
                            'post__not_in' => $exclude_posts,
                            'publish' => true,
                            'date_query' => array(
                                'before' => $popular_days_post . ' days ago',
                                ),
                            'orderby' => 'date',
                            'order' => 'DESC'
                            );
                        $query = new WP_Query( $args );
                        if( $query->have_posts() ) {
                            while ( $query->have_posts() ) {
                                $query->the_post();
                                echo '<div class="col l3 s12 m6">';
                                    show_small_video();
                                echo '</div>';
                            }
                        }
                    }
                ?>
            </div>
        </div>
    </div>

    <div class="advertisment-all-blogs">
        <?php
            //show advertising block
            get_template_part('template-parts/advertising', 'block-1');
        ?>
    </div>

    <?php
        //latest news and polls
        get_template_part('content', 'footer');
    ?>
</div>
    <?php get_footer(); ?>