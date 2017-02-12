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
                        <div class="box-title-time fix-mob-article one-video-post-time">
                            <?php 
                                the_time('j F Y, G:i');
                                setPostViews( get_the_ID() );
                                echo '<span style="float:right"> Кількість переглядів: ' . getPostViews( get_the_ID() ) . '</span>'; 
                            ?>
                        </div>
                        <div>
                            <img class="user-video-width" src="<?php echo get_the_post_thumbnail_url(); ?>">
                        </div>
                        <div class="single-post-text">
                            <?php the_content(); ?>
                        </div>
                        <?php echo getPostLikeLink(get_the_ID()); ?>
                    </div>
        <?php
                endwhile; // End the loop.
                echo '<div class="clear"></div>';
                the_posts_pagination( $pagination_args );
                wp_reset_postdata();
            else :
                // If no content, include the "No posts found" template.
                echo '<div> Новини не знайдено </div>';
            endif;
        ?>
    </div>

    <div class="col l4 m4 s12">
        <div class="third-block-with-line">
            <div class="big-sign-line-one-video">ПОПУЛЯРНЕ<span></span></div>
            <div class="block-line"></div>
        </div>
        <?php
            $popular_days_post = 21;
            $args = array(
                'post_type' => 'news',
                'posts_per_page' => 4,
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
                    show_small_post();
                }
            }
            //якщо немає або недостатньо публікованих відео за останні $popular_days_post
            if( $posts_count < 4) {
                $args = array(
                    'post_type' => 'news',
                    'posts_per_page' => 4 - $posts_count,
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
                        show_small_post();
                    }
                }
            }
        ?>
    </div>
</div>
</div>
<div class="row">
    <div class="third-block-with-line-single-news">
        <div class="big-sign-line">КОМЕНТАРІ<span></span></div>
        <div class="block-line"></div>
    </div>
</div>
<div class="comment-block">
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


<div class="block-with-line hide-on-small-only">
    <div class="big-sign-line">ОСТАННІ <span>НОВИНИ</span></div>
    <div class="block-line"></div>
    <div class="small-sign-line"><img class="line-img" src="<?php bloginfo('template_url') ?>/img/menu.svg"></div>
</div>
<div class="second-block-with-line hide-on-med-and-up">
    <div class="big-sign-line">ПОПЕРЕДНІ <span>СТАТТІ</span></div>
    <div class="block-line"></div>
</div>

<div class="row">

    <div class="full-width-mob col l8 s12 m7">
        <?php
            $args = array(
                'post_type' => 'news',
                'posts_per_page' => 6,
                //'numberposts' => 10,
                'publish' => true,
                'orderby' => 'date',
                'order' => 'DESC'
            );
            $query = new WP_Query( $args );
            $display_posts = 1;
            if ( $query->have_posts() ) {
                while ( $query->have_posts() ) {
                    $query->the_post();
                    if ( $display_posts == 1 ) {
                        echo '<div class="col l12 s12 m12">';
                            show_big_post();
                        echo '</div>';
                        $display_posts++;
                    }
                    else if ( $display_posts == 2 ) {
                        echo '<div class="col l6 s12 m6 ">';
                            show_small_post();
                        echo '</div>';
                        $display_posts++;
                    }
                    else if ( $display_posts == 3 ) {
                        echo '<div class="col l6 s12 m6 ">';
                            show_small_post();
                        echo '</div>
    </div>'; //end <div class="full-width-mob col l8 s12 m7"> 
                         $display_posts++;
                    }
                    
                    else {
                        echo '<div class="col l4 s12 m5 ">';
                            show_small_post( '260px' );
                        echo '</div>';
                    }
                } //end while
            } //end if
            else {
                echo 'Новин не знайдено';
            }
            wp_reset_postdata();
        ?>
</div>


<div class="advertisment-all-blogs">
    <div class="advertisment-block">
        <a href="#" ><img class="advertisment-img" src="<?php bloginfo('template_url') ?>/img/sponsors-wide.jpg" alt="Логотип"></a>
    </div>
</div>
<div class="five-block-with-line hide-on-med-and-down">
    <div class="big-sign-line">НОВИНИ <span> </span></div>
    <div class="block-line"></div>
    <div class="small-sign-line">ОПИТУВАННЯ<img class="line-img-five" src="<?php bloginfo('template_url') ?>/img/medical-result.svg"></div>
</div>

<div class="five-block-with-line hide-on-large-only">
    <div class="big-sign-line">НОВИНИ <span></span></div>
    <div class="block-line"></div>

</div>
<div class="row">

    <div class="col l6 s12 m6 devider">
        <div class="main-news-content-footer">
            <?php
                //show latest news
                get_template_part('template-parts/latest', 'news');
            ?>
        </div>
    </div>
    <div class="five-block-with-line hide-on-large-only">
        <div class="small-sign-line">ОПИТУВАННЯ<img class="line-img-five" src="<?php bloginfo('template_url') ?>/img/medical-result.svg"></div>
        <div class="block-line"></div>

    </div>
    <div class="col l6 s12 m6 ">
        <?php
            //show polls
            get_template_part('template-parts/polls');
        ?>
    </div>
</div>

<?php get_footer(); ?>
