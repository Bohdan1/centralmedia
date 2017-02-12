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
    <div id="disable-mat-padding" class="col l9 s12 left-block">
        <div class="left-block-content">
            <div class="button-position  hide-on-small-only">
                <a href="#" ><img class="play-button button-hover center" src="<?php bloginfo('template_url') ?>/img/play-button.svg" alt="Логотип"></a>
            </div>
            <div class="content-box">
                <div class="title-tag"><a href="#" class="no-hover-blog">Політика</a></div>
                <div class="box-title "><a href="#">Під Києвом сплюндрували Биковнянський меморіал</a></div>
                <div class="box-title-small "><a href="#">У селищі Биківня селяний сплюндрували український та польський меморіали жертв НКВС.</a></div>
                <div class="box-title-time ">28.06.2016</div>
            </div>

        </div>

    </div>


    <div class="col l3 s12 right-block hide-on-med-and-down">

        <div class="video-container">


            <iframe class="right-block-video center" src="https://www.youtube.com/embed/MJ_aWV_-DF8" frameborder="0" ></iframe>

            <div class="right-block-second ">
                <div class="mask">
                <div class="right-block-second-tag ">
                    <a href="#" class="no-hover-blog" >АТО</a>
                </div>
                  </div>
                <div class="right-block-second-sign ">
                    <a href="#">Під Києвом сплюндрували Биковнянський меморіал</a>
                </div>
            </div>




        </div>
    </div>
</div>
<div class="advertisment-all-blogs-fix">
    <div class="advertisment-block">
        <a href="#" ><img class="advertisment-img" src="<?php bloginfo('template_url') ?>/img/sponsors-wide.jpg" alt="Логотип"></a>
    </div>
</div>
<div class="five-block-with-line hide-on-med-and-down">
    <div class="big-sign-line">НОВИНИ <span></span></div>
    <div class="block-line"></div>
    <div class="small-sign-line">ОПИТУВАННЯ<img class="line-img-five" src="<?php bloginfo('template_url') ?>/img/medical-result.svg"></div>
</div>

<div class="five-block-with-line hide-on-large-only">
    <div class="big-sign-line">НОВИНИ <span>ПАРТНЕРІВ</span></div>
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