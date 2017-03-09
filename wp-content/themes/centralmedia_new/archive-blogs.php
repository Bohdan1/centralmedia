<?php get_header(); ?>

<div class="header-margin-blog">
<div class="row ">
    <div class="col l8 s12 m7">
        <div class="previous-blog">
            <?php 
                $args = array(
                    'post_type' => 'blogs',
                    'posts_per_page' => 8,
                    'publish' => true,
                    'orderby' => 'date',
                    'order' => 'DESC'
                );
                $query = new WP_Query( $args );
                if( $query->have_posts() ) {
                    while ( $query->have_posts() ) {
                        $query->the_post();
                        echo '<div class="col l12 s12 m12">';
                            show_archive_blog();
                        echo '</div>';
                    } //end while
                } //end if
                else {
                    echo 'Блогів не знайдено';
                }
                
                if ( $query->max_num_pages > 1 ) { 
            ?>
                    <script>
                        var ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
                        var true_posts = '<?php echo serialize( $query->query_vars ); ?>';
                        var current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
                        var max_pages = '<?php echo $query->max_num_pages; ?>';
                    </script>
                    <div class="">
                    <div id="blogs_loadmore" class="button_loadmore col l12 m12 s12">Більше блогів</div>
                    </div>
            <?php 
                } //end if
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
                'posts_per_page' => 6,
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
            if( $posts_count < 6) {
                $args = array(
                    'post_type' => 'articles',
                    'posts_per_page' => 6 - $posts_count,
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
    get_template_part('template-parts/content', 'footer');
?>

<?php get_footer(); ?>