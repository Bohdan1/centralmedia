<?php get_header(); ?>
<div class="header-margin-blog">
<div class="row ">
    <div class="col l8 s12 m7">
        <div class="previous-blog">
            <?php 
                $args = array(
                    'post_type' => 'blogs',
                    'posts_per_page' => 10,
                    'publish' => true,
                    'orderby' => 'date',
                    'order' => 'DESC'
                );
                $query = new WP_Query( $args );
                if( $query->have_posts() ) {
                    while ( $query->have_posts() ) {
                        $query->the_post();
                        $author_id = get_the_author_meta( 'ID' );
                        echo '
                            <div class="col l12 s12 m12">
                                <div class="previous-blog-box">
                                    <div class="view-count-blog">
                                        <img class="count-width" src="' . get_stylesheet_directory_uri() . '/img/eye-black.svg">
                                        <span class="count-number">' . getPostViews( get_the_ID() ) . '</span>
                                    </div>
                                    <div class="row">
                                        <div class="col l2 m5 s12">
                                            <div class="previous-blog-img">
                                                <a href="' . get_the_permalink() . '" >
                                                    <img class="previous-blog-img-width" src="' . get_wp_user_avatar_src( $author_id ) .'">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col l10 m7 s12">
                                            <div class="previous-blog-name ">
                                                <a href="' . get_author_posts_url($author_id) . '" class="black-text">' .
                                                    get_the_author_meta('first_name') . ' ' . get_the_author_meta( 'last_name' ) . '
                                                </a>
                                            </div>
                                            <div class="previous-blog-time ">' . get_the_time('d.m.Y') . '</div>
                                        </div>
                                    </div>`
                                    <div class="previous-blog-title ">
                                        <a href="' . get_the_permalink() . '" class="black-text">' .
                                            short_post_title(55) . '
                                        </a>
                                    </div>
                                    <div class="previous-blog-tag">';
                                        $category = get_the_category( $post_id );
                                        if ( !empty($category) ) {
                                            $category = $category[0];
                                            echo '<a href="' . get_category_link( $category->cat_ID ) . '" class="no-hover-blog">' . $category->cat_name . '</a>';
                                        }
                                        echo '
                                    </div>
                                </div>
                            </div>';
                    } //end while
                } //end if
                else {
                    echo 'Блогів не знайдено';
                }
                wp_reset_postdata();
            ?>
        </div>
    </div>

    <div class="col l4 m5 s12">
        <div class="third-block-with-line">
            <div class="big-sign-line-all-blogs"><span>ПОПУЛЯРНЕ</span></div>
            <div class="block-line"></div>
        </div>
        <?php
            $popular_days_post = 21;
            $args = array(
                'post_type' => 'articles',
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
                    'post_type' => 'articles',
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

<div class="row blogger-list">
    <?php
        $args = array(
            'role'         => 'contributor',
            'orderby'      => 'display_name',
            'order'        => 'ASC',
            'has_published_posts' => true,
            'fields'       => 'all', //ID, display_name, user_login, user_nicename, user_email, user_url, user_registered
        );
        $alphabet_letter = '';
        $not_closed_block = false;
        $users = get_users( $args );
        foreach( $users as $user ) {
            $first_author_letter = mb_substr( $user->display_name, 0, 1 );
            
            if ( $alphabet_letter != $first_author_letter ) {
                if ( $not_closed_block == true ) {
                    echo '</div>';
                }
                $alphabet_letter = $first_author_letter;
                echo '
                    <div class="col l2 blogger-list-pad">
                        <div class="bloger-letter">
                            <span class="black-text" >' . $first_author_letter . '</span>
                        </div>
                        <div>
                            <a href="' . get_author_posts_url($user->ID) . '" class="black-text">' .
                                $user->display_name . '
                            </a>
                        </div>';
                $not_closed_block = true;
            }
            else if ( $alphabet_letter == $first_author_letter) {
                echo '
                    <div>
                        <a href="' . get_author_posts_url($user->ID) . '" class="black-text">' .
                            $user->display_name . '
                        </a>
                    </div>';
            }
        }
        if ( $not_closed_block == true ) {
            echo '</div>';
        }
    ?>
</div>

<div class="row home-content">
    <?php
        //template for top-3 posts
        get_template_part('template-parts/top3', 'posts');
    ?>
</div>

<div class="advertisment-all-blogs-fix">
    <?php
        //show advertising block
        get_template_part('template-parts/advertising', 'block-1');
    ?>
</div>


<?php
    //latest news and polls
    get_template_part('content', 'footer');
?>

<?php get_footer(); ?>