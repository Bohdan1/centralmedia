<?php get_header(); ?>

<div class="header-margin-blog">
    <div class="row">
        <div class="col l8 s12 m8">
            <?php 
                if ( have_posts() ) :
                    while ( have_posts() ) : the_post(); // Start the Loop.
                    $author_id = get_the_author_meta('ID');
            ?>
                        <div class="one-video-post">
                            <div class="col l12 s12 m12 "> 
                                <div class="one-blog-sign-content">
                                    <div class="one-blog-sign-img">
                                        <a href="#">
                                            <img class="one-blog-sign-img-width" src="<?php echo get_wp_user_avatar_src( $author_id ); ?>">
                                        </a>
                                    </div>
                                    <div class="one-blog-sign-title">
                                        <a href="#" class="black-text">
                                        <?php echo get_the_author_meta('first_name') . ' ' . get_the_author_meta('last_name'); ?>
                                        </a>
                                    </div>
                                    <div class="one-blog-sign-text">
                                        <?php echo get_the_author_meta('description'); ?>
                                    </div>
                                    <div class="one-blog-sign-date">
                                    <?php 
                                        the_time('j F Y, G:i');
                                        setPostViews( get_the_ID() );
                                        echo '<div> Кількість переглядів: ' . getPostViews( get_the_ID() ) . '</div>'; 
                                    ?>
                                    </div>
                                </div>
                            </div>
                            <div class="one-video-post-name">
                                <?php the_title(); ?>
                            </div>
                            <div class="single-post-text">
                                <?php the_content(); ?>
                            </div>
                        </div>
            <?php
                    endwhile; // End the loop.
                    echo '<div class="clear"></div>';
                    wp_reset_postdata();
                else :
                    // If no content, include the "No posts found" template.
                    echo '<div> Блогів не знайдено </div>';
                endif;
            ?>
        </div>

        <div class="col l4 m4 s12">
            <div class="third-block-with-line">
                <div class="big-sign-line-one-video">ВІД <span>АВТОРА</span></div>
                <div class="block-line"></div>
            </div>
                 <div class="previous-blog">
            <?php 
                $args = array(
                    'post_type' => 'blogs',
                    'posts_per_page' => 3,
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
                                    <div class="col l12 m12 s12">
                                    <div class="previous-blog-img-archive">
                                        <a href="' . get_the_permalink() . '" >
                                            <img class="previous-blog-img-width" src="' . get_wp_user_avatar_src( $author_id ) .'">
                                        </a>
                                    </div>
                                    </div>
                                    <div class="col l12 m12 s12">
                                    <div class="previous-blog-name ">
                                        <a href="' . get_the_permalink() . '" class="black-text">' .
                                            get_the_author_meta('first_name') . ' ' . get_the_author_meta( 'last_name' ) . '
                                        </a>
                                    </div>
                                    <div class="previous-blog-time ">' . get_the_time('d.m.Y') . '</div>
                                    </div>
                                    </div>

                                    
                                    <div class="previous-blog-title ">
                                        <a href="' . get_the_permalink() . '" class="black-text">' .
                                            short_post_title(55) . '
                                        </a>
                                    </div>
                                    <div class="previous-blog-tag">
                                        <a href="#" class="no-hover-blog">Блог</a>
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

    <div class="block-with-line hide-on-small-only">
        <div class="big-sign-line">ТОП <span>СТАТТІ</span></div>
        <div class="block-line"></div>
        <div class="small-sign-line">НОВИНИ<img class="line-img" src="<?php bloginfo('template_url') ?>/img/menu.svg"></div>
    </div>
    <div class="second-block-with-line hide-on-med-and-up">
        <div class="big-sign-line">ТОП <span>СТАТТІ</span></div>
        <div class="block-line"></div>
    </div>

    <div class="row">
        <div class="full-width-mob col l8 s12 m7 ">
            <div class="col l12 s12 m12 full-width-mob ">
                <div  class="second-article-block">
                    <div class="mask">
                        <div class="view-count"><img class="count-width" src="<?php bloginfo('template_url') ?>/img/eye.svg"><span class="count-number"> 523</span></div>
                        <div class="main-article-content-box">

                            <div class="title-tag"><a href="#" class="no-hover-blog">Родина</a></div>
                            <div class="box-title fix-mob-article "><a href="#">Під Києвом сплюндрували Биковнянський меморіал</a></div>
                            <div class="box-title-small fix-mob-article "><a href="#">У селищі Биківня селяний сплюндрували український та польський меморіали жертв НКВС.</a></div>
                            <div class="box-title-time fix-mob-article">28.06.2016</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col l6 s12 m6 ">
                <div  class="second-article-block">
                    <div class="mask">
                        <div class="view-count"><img class="count-width" src="<?php bloginfo('template_url') ?>/img/eye.svg"><span class="count-number"> 523</span></div>
                        <div class="main-article-content-box">

                            <div class="title-tag"><a href="#" class="no-hover-blog">Родина</a></div>
                            <div class="box-title fix-mob-article "><a href="#">Під Києвом сплюндрували Биковнянський меморіал</a></div>
                            <div class="box-title-small fix-mob-article "><a href="#">У селищі Биківня селяний сплюндрували український та польський меморіали жертв НКВС.</a></div>
                            <div class="box-title-time fix-mob-article">28.06.2016</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col l6 s12 m6 ">
                <div  class="second-article-block">
                    <div class="mask">
                        <div class="view-count"><img class="count-width" src="<?php bloginfo('template_url') ?>/img/eye.svg"><span class="count-number"> 523</span></div>
                        <div class="main-article-content-box">

                            <div class="title-tag"><a href="#" class="no-hover-blog">Родина</a></div>
                            <div class="box-title fix-mob-article "><a href="#">Під Києвом сплюндрували Биковнянський меморіал</a></div>
                            <div class="box-title-small fix-mob-article "><a href="#">У селищі Биківня селяний сплюндрували український та польський меморіали жертв НКВС.</a></div>
                            <div class="box-title-time fix-mob-article">28.06.2016</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col l4 s12 m5 ">
            <div class="main-news-content-box">
                <?php
                    //show latest news
                    get_template_part('template-parts/latest', 'news');
                ?>
            </div>
        </div>
    </div>


<div class="advertisment-all-blogs">
    <div class="advertisment-block">
        <a href="#" ><img class="advertisment-img" src="<?php bloginfo('template_url') ?>/img/sponsors-wide.jpg" alt="Логотип"></a>
    </div>
</div>
<div class="five-block-with-line hide-on-med-and-down">
    <div class="big-sign-line">НОВИНИ <span>ПАРТНЕРІВ</span></div>
    <div class="block-line"></div>
    <div class="small-sign-line">ОПИТУВАННЯ<img class="line-img-five" src="<?php bloginfo('template_url') ?>/img/medical-result.svg"></div>
</div>

<div class="five-block-with-line hide-on-large-only">
    <div class="big-sign-line">НОВИНИ <span>ПАРТНЕРІВ</span></div>
    <div class="block-line"></div>

</div>
<div class="row">

    <div class="col l6 s12 m6 devider">
        <div class="partner-news-block">
            <div class="partner-news-block-content">
                <div class="news-main-img"><img class="news-main-img-width" src="<?php bloginfo('template_url') ?>/img/loading-circles.svg"></div>
                <div class="news-main-title "> <a href="#" class="black-text" >Під Києвом сплюндрували Биковнянський меморіал декілька.</a></div>
            </div>
            <div class="partner-news-block-content">
                <div class="news-main-img"><img class="news-main-img-width" src="<?php bloginfo('template_url') ?>/img/loading-circles.svg"></div>
                <div class="news-main-title "> <a href="#" class="black-text" >Під Києвом сплюндрували Биковнянський меморіал декілька.</a></div>
            </div>
            <div class="partner-news-block-content">
                <div class="news-main-img"><img class="news-main-img-width" src="<?php bloginfo('template_url') ?>/img/loading-circles.svg"></div>
                <div class="news-main-title "> <a href="#" class="black-text" >Під Києвом сплюндрували Биковнянський меморіал декілька.</a></div>
            </div>
            <div class="partner-news-block-content">
                <div class="news-main-img"><img class="news-main-img-width" src="<?php bloginfo('template_url') ?>/img/loading-circles.svg"></div>
                <div class="news-main-title "> <a href="#" class="black-text" >Під Києвом сплюндрували Биковнянський меморіал декілька.</a></div>
            </div>
            <div class="partner-news-block-content">
                <div class="news-main-img"><img class="news-main-img-width" src="<?php bloginfo('template_url') ?>/img/loading-circles.svg"></div>
                <div class="news-main-title "> <a href="#" class="black-text" >Під Києвом сплюндрували Биковнянський меморіал декілька.</a></div>
            </div>
            <div class="partner-news-block-content">
                <div class="news-main-img"><img class="news-main-img-width" src="<?php bloginfo('template_url') ?>/img/loading-circles.svg"></div>
                <div class="news-main-title "> <a href="#" class="black-text" >Під Києвом сплюндрували Биковнянський меморіал декілька.</a></div>
            </div>
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