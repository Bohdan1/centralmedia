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

    <div class="col l4 m5 s12">
        <div class="third-block-with-line">
            <div class="big-sign-line-all-blogs"><span>ПОПУЛЯРНЕ</span></div>
            <div class="block-line"></div>
        </div>
        <div style="background-image: url('<?php bloginfo('template_url') ?>/img/3.jpg');" class="second-article-block-all-article-side">
            <div class="mask">
                <div class="view-count"><img class="count-width" src="<?php bloginfo('template_url') ?>/img/eye.svg"><span class="count-number"> 523</span></div>
                <div class="main-article-content-box">

                    <div class="title-tag"><a href="#" class="no-hover-blog">Родина</a></div>
                    <div class="box-title fix-mob-article "><a href="#" > Під Києвом сплюндрували Биковнянський меморіал</a></div>
                    <div class="box-title-small fix-mob-article "><a href="#" >У селищі Биківня селяний сплюндрували український та польський меморіали жертв НКВС.</a></div>
                    <div class="box-title-time fix-mob-article">28.06.2016</div>
                </div>
            </div>
        </div>
        <div style="background-image: url('<?php bloginfo('template_url') ?>/img/3.jpg');" class="second-article-block-all-article-side">
            <div class="mask">
                <div class="view-count"><img class="count-width" src="<?php bloginfo('template_url') ?>/img/eye.svg"><span class="count-number"> 523</span></div>
                <div class="main-article-content-box">

                    <div class="title-tag"><a href="#" class="no-hover-blog">Родина</a></div>
                    <div class="box-title fix-mob-article "><a href="#" > Під Києвом сплюндрували Биковнянський меморіал</a></div>
                    <div class="box-title-small fix-mob-article "><a href="#" >У селищі Биківня селяний сплюндрували український та польський меморіали жертв НКВС.</a></div>
                    <div class="box-title-time fix-mob-article">28.06.2016</div>
                </div>
            </div>
        </div>
        <div style="background-image: url('<?php bloginfo('template_url') ?>/img/3.jpg');" class="second-article-block-all-article-side">
            <div class="mask">
                <div class="view-count"><img class="count-width" src="<?php bloginfo('template_url') ?>/img/eye.svg"><span class="count-number"> 523</span></div>
                <div class="main-article-content-box">

                    <div class="title-tag"><a href="#" class="no-hover-blog">Родина</a></div>
                    <div class="box-title fix-mob-article "><a href="#" > Під Києвом сплюндрували Биковнянський меморіал</a></div>
                    <div class="box-title-small fix-mob-article "><a href="#" >У селищі Биківня селяний сплюндрували український та польський меморіали жертв НКВС.</a></div>
                    <div class="box-title-time fix-mob-article">28.06.2016</div>
                </div>
            </div>
        </div>
        <div style="background-image: url('<?php bloginfo('template_url') ?>/img/3.jpg');" class="second-article-block-all-article-side">
            <div class="mask">
                <div class="view-count"><img class="count-width" src="<?php bloginfo('template_url') ?>/img/eye.svg"><span class="count-number"> 523</span></div>
                <div class="main-article-content-box">

                    <div class="title-tag"><a href="#" class="no-hover-blog">Родина</a></div>
                    <div class="box-title fix-mob-article "><a href="#" > Під Києвом сплюндрували Биковнянський меморіал</a></div>
                    <div class="box-title-small fix-mob-article "><a href="#" >У селищі Биківня селяний сплюндрували український та польський меморіали жертв НКВС.</a></div>
                    <div class="box-title-time fix-mob-article">28.06.2016</div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<div class="row blogger-list">
    <div class="col l2 blogger-list-pad">
        <div class="blogger-list-pad">
            <div class="bloger-letter">
                <a href="#" class="black-text" >  A</a>
            </div>
            <div class="bloger-letter-list">
                <a href="#" class="black-text" > Романів Юрій<br></a>
                <a href="#" class="black-text" > Романів Юрій<br></a>
                <a href="#" class="black-text" > Романів Юрій<br></a>
                <a href="#" class="black-text" > Романів Юрій</a>
            </div>
        </div>
    </div>
    <div class="col l2 blogger-list-pad">
        <div class="blogger-list-pad">
            <div class="bloger-letter">
                <a href="#" class="black-text" >  A</a>
            </div>
            <div class="bloger-letter-list">
                <a href="#" class="black-text" > Романів Юрій<br></a>
                <a href="#" class="black-text" > Романів Юрій<br></a>
                <a href="#" class="black-text" > Романів Юрій<br></a>
                <a href="#" class="black-text" > Романів Юрій</a>
            </div>
        </div>
    </div>
    <div class="col l2 blogger-list-pad">
        <div class="blogger-list-pad">
            <div class="bloger-letter">
                <a href="#" class="black-text" >  A</a>
            </div>
            <div class="bloger-letter-list">
                <a href="#" class="black-text" > Романів Юрій<br></a>
                <a href="#" class="black-text" > Романів Юрій<br></a>
                <a href="#" class="black-text" > Романів Юрій<br></a>
                <a href="#" class="black-text" > Романів Юрій</a>
            </div>
        </div>
    </div>
    <div class="col l2 blogger-list-pad">
        <div class="blogger-list-pad">
            <div class="bloger-letter">
                <a href="#" class="black-text" >  A</a>
            </div>
            <div class="bloger-letter-list">
                <a href="#" class="black-text" > Романів Юрій<br></a>
                <a href="#" class="black-text" > Романів Юрій<br></a>
                <a href="#" class="black-text" > Романів Юрій<br></a>
                <a href="#" class="black-text" > Романів Юрій</a>
            </div>
        </div>
    </div>
    <div class="col l2 blogger-list-pad">
        <div class="blogger-list-pad">
            <div class="bloger-letter">
                <a href="#" class="black-text" >  A</a>
            </div>
            <div class="bloger-letter-list">
                <a href="#" class="black-text" > Романів Юрій<br></a>
                <a href="#" class="black-text" > Романів Юрій<br></a>
                <a href="#" class="black-text" > Романів Юрій<br></a>
                <a href="#" class="black-text" > Романів Юрій</a>
            </div>
        </div>
    </div>
    <div class="col l2 blogger-list-pad">
        <div class="blogger-list-pad">
            <div class="bloger-letter">
                <a href="#" class="black-text" >  A</a>
            </div>
            <div class="bloger-letter-list">
                <a href="#" class="black-text" > Романів Юрій<br></a>
                <a href="#" class="black-text" > Романів Юрій<br></a>
                <a href="#" class="black-text" > Романів Юрій<br></a>
                <a href="#" class="black-text" > Романів Юрій</a>
            </div>
        </div>
    </div>
    <div class="col l2 blogger-list-pad">
        <div class="blogger-list-pad">
            <div class="bloger-letter">
                <a href="#" class="black-text" >  A</a>
            </div>
            <div class="bloger-letter-list">
                <a href="#" class="black-text" > Романів Юрій<br></a>
                <a href="#" class="black-text" > Романів Юрій<br></a>
                <a href="#" class="black-text" > Романів Юрій<br></a>
                <a href="#" class="black-text" > Романів Юрій</a>
            </div>
        </div>
    </div>
    <div class="col l2 blogger-list-pad">
        <div class="blogger-list-pad">
            <div class="bloger-letter">
                <a href="#" class="black-text" >  A</a>
            </div>
            <div class="bloger-letter-list">
                <a href="#" class="black-text" > Романів Юрій<br></a>
                <a href="#" class="black-text" > Романів Юрій<br></a>
                <a href="#" class="black-text" > Романів Юрій<br></a>
                <a href="#" class="black-text" > Романів Юрій</a>
            </div>
        </div>
    </div>
    <div class="col l2 blogger-list-pad">
        <div class="blogger-list-pad">
            <div class="bloger-letter">
                <a href="#" class="black-text" >  A</a>
            </div>
            <div class="bloger-letter-list">
                <a href="#" class="black-text" > Романів Юрій<br></a>
                <a href="#" class="black-text" > Романів Юрій<br></a>
                <a href="#" class="black-text" > Романів Юрій<br></a>
                <a href="#" class="black-text" > Романів Юрій</a>
            </div>
        </div>
    </div>
    <div class="col l2 blogger-list-pad">
        <div class="blogger-list-pad">
            <div class="bloger-letter">
                <a href="#" class="black-text" >  A</a>
            </div>
            <div class="bloger-letter-list">
                <a href="#" class="black-text" > Романів Юрій<br></a>
                <a href="#" class="black-text" > Романів Юрій<br></a>
                <a href="#" class="black-text" > Романів Юрій<br></a>
                <a href="#" class="black-text" > Романів Юрій</a>
            </div>
        </div>
    </div>
    <div class="col l2 blogger-list-pad">
        <div class="blogger-list-pad">
            <div class="bloger-letter">
                <a href="#" class="black-text" >  A</a>
            </div>
            <div class="bloger-letter-list">
                <a href="#" class="black-text" > Романів Юрій<br></a>
                <a href="#" class="black-text" > Романів Юрій<br></a>
                <a href="#" class="black-text" > Романів Юрій<br></a>
                <a href="#" class="black-text" > Романів Юрій</a>
            </div>
        </div>
    </div>
    <div class="col l2 blogger-list-pad">
        <div class="blogger-list-pad">
            <div class="bloger-letter">
                <a href="#" class="black-text" >  A</a>
            </div>
            <div class="bloger-letter-list">
                <a href="#" class="black-text" > Романів Юрій<br></a>
                <a href="#" class="black-text" > Романів Юрій<br></a>
                <a href="#" class="black-text" > Романів Юрій<br></a>
                <a href="#" class="black-text" > Романів Юрій</a>
            </div>
        </div>
    </div>
    <div class="col l2 blogger-list-pad">
        <div class="blogger-list-pad">
            <div class="bloger-letter">
                <a href="#" class="black-text" >  A</a>
            </div>
            <div class="bloger-letter-list">
                <a href="#" class="black-text" > Романів Юрій<br></a>
                <a href="#" class="black-text" > Романів Юрій<br></a>
                <a href="#" class="black-text" > Романів Юрій<br></a>
                <a href="#" class="black-text" > Романів Юрій</a>
            </div>
        </div>
    </div>
    <div class="col l2 blogger-list-pad">
        <div class="blogger-list-pad">
            <div class="bloger-letter">
                <a href="#" class="black-text" >  A</a>
            </div>
            <div class="bloger-letter-list">
                <a href="#" class="black-text" > Романів Юрій<br></a>
                <a href="#" class="black-text" > Романів Юрій<br></a>
                <a href="#" class="black-text" > Романів Юрій<br></a>
                <a href="#" class="black-text" > Романів Юрій</a>
            </div>
        </div>
    </div>
    <div class="col l2 blogger-list-pad">
        <div class="blogger-list-pad">
            <div class="bloger-letter">
                <a href="#" class="black-text" >  A</a>
            </div>
            <div class="bloger-letter-list">
                <a href="#" class="black-text" > Романів Юрій<br></a>
                <a href="#" class="black-text" > Романів Юрій<br></a>
                <a href="#" class="black-text" > Романів Юрій<br></a>
                <a href="#" class="black-text" > Романів Юрій</a>
            </div>
        </div>
    </div>
    <div class="col l2 blogger-list-pad">
        <div class="blogger-list-pad">
            <div class="bloger-letter">
                <a href="#" class="black-text" >  A</a>
            </div>
            <div class="bloger-letter-list">
                <a href="#" class="black-text" > Романів Юрій<br></a>
                <a href="#" class="black-text" > Романів Юрій<br></a>
                <a href="#" class="black-text" > Романів Юрій<br></a>
                <a href="#" class="black-text" > Романів Юрій</a>
            </div>
        </div>
    </div>
    <div class="col l2 blogger-list-pad">
        <div class="blogger-list-pad">
            <div class="bloger-letter">
                <a href="#" class="black-text" >  A</a>
            </div>
            <div class="bloger-letter-list">
                <a href="#" class="black-text" > Романів Юрій<br></a>
                <a href="#" class="black-text" > Романів Юрій<br></a>
                <a href="#" class="black-text" > Романів Юрій<br></a>
                <a href="#" class="black-text" > Романів Юрій</a>
            </div>
        </div>
    </div>
    <div class="col l2 blogger-list-pad">
        <div class="blogger-list-pad">
            <div class="bloger-letter">
                <a href="#" class="black-text" >  A</a>
            </div>
            <div class="bloger-letter-list">
                <a href="#" class="black-text" > Романів Юрій<br></a>
                <a href="#" class="black-text" > Романів Юрій<br></a>
                <a href="#" class="black-text" > Романів Юрій<br></a>
                <a href="#" class="black-text" > Романів Юрій</a>
            </div>
        </div>
    </div>

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
            <div class="next-day-news">2 лютого, 2017 <span>четвер</span></div>
            <div class="news-block">
                <div class="news-main-img"><img class="news-main-img-width-cm" src="<?php bloginfo('template_url') ?>/img/logo/CMedia.svg"></div>
                <div class="news-main-title "><div class="news-time">10:16</div><a href="#" class="black-text">Під Києвом сплюндрували Биковнянський меморіал декілька раз</a></div>
            </div>
            <div class="news-block">
                <div class="news-main-img"><i class="fa fa-spinner fa-spin fa-1x fa-fw "></i></div>
                <div class="news-main-title "> <div class="news-time ">15:46</div><a href="#" class="black-text">Під Києвом сплюндрували Биковнянський меморіал декілька раз</a></div>
            </div>

            <div class="next-day-news">3 лютого, 2017 <span>п'ятниця</span></div>
            <div class="news-block">
                <div class="news-main-img"><img class="news-main-img-width-cm" src="<?php bloginfo('template_url') ?>/img/logo/CMedia.svg"></div>
                <div class="news-main-title "><div class="news-time">10:16</div><a href="#" class="black-text">Під Києвом сплюндрували Биковнянський меморіал декілька раз</a></div>
            </div>
            <div class="news-block">
                <div class="news-main-img"><i class="fa fa-spinner fa-spin fa-1x fa-fw "></i></div>
                <div class="news-main-title "> <div class="news-time ">15:46</div><a href="#" class="black-text">Під Києвом сплюндрували Биковнянський меморіал декілька раз</a></div>
            </div>
            <div class="news-block">
                <div class="news-main-img"><img class="news-main-img-width-cm" src="<?php bloginfo('template_url') ?>/img/logo/CMedia.svg"></div>
                <div class="news-main-title "><div class="news-time">10:16</div><a href="#" class="black-text">Під Києвом сплюндрували Биковнянський меморіал декілька раз</a></div>
            </div>
            <div class="news-block">
                <div class="news-main-img"><i class="fa fa-spinner fa-spin fa-1x fa-fw "></i></div>
                <div class="news-main-title "> <div class="news-time ">15:46</div><a href="#" class="black-text">Під Києвом сплюндрували Биковнянський меморіал декілька раз</a></div>
            </div>
            <div class="news-block">
                <div class="news-main-img"><img class="news-main-img-width-cm" src="<?php bloginfo('template_url') ?>/img/logo/CMedia.svg"></div>
                <div class="news-main-title "><div class="news-time">10:16</div><a href="#" class="black-text">Під Києвом сплюндрували Биковнянський меморіал декілька раз</a></div>
            </div>
            <div class="news-block">
                <div class="news-main-img"><i class="fa fa-spinner fa-spin fa-1x fa-fw "></i></div>
                <div class="news-main-title "> <div class="news-time ">15:46</div><a href="#" class="black-text">Під Києвом сплюндрували Биковнянський меморіал декілька раз</a></div>
            </div>
            <div class="news-block">
                <div class="news-main-img"><img class="news-main-img-width-cm" src="<?php bloginfo('template_url') ?>/img/logo/CMedia.svg"></div>
                <div class="news-main-title "><div class="news-time">10:16</div><a href="#" class="black-text">Під Києвом сплюндрували Биковнянський меморіал декілька раз</a></div>
            </div>
            <div class="news-block">
                <div class="news-main-img"><i class="fa fa-spinner fa-spin fa-1x fa-fw "></i></div>
                <div class="news-main-title "> <div class="news-time ">15:46</div><a href="#" class="black-text">Під Києвом сплюндрували Биковнянський меморіал декілька раз</a></div>
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