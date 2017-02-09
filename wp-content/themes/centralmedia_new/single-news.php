<?php get_header(); ?>
<div class="header-margin-blog">
<div class="row">
    <div class="col l8 s12 m8">
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
                <img class="user-video-width" src="<?php bloginfo('template_url') ?>/img/1.jpg">
            </div>
            <div class="one-video-post-text">
                <?php the_content(); ?>
            </div>
            <?php echo getPostLikeLink(get_the_ID()); ?>
        </div>
    </div>

    <div class="col l4 m4 s12">
        <div class="third-block-with-line">
            <div class="big-sign-line-one-video">ПОПУЛЯРНЕ<span></span></div>
            <div class="block-line"></div>
        </div>
        <div>
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
        <div>
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
        <div>
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
    <div class="full-width-mob col l8 s12 m7 ">
        <div class="col l12 s12 m12">
            <div style="background-image: url('<?php bloginfo('template_url') ?>/img/3.jpg');" class="second-article-block-all-article">
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

        <div style="background-image: url('<?php bloginfo('template_url') ?>/img/3.jpg');" class="second-article-block-all-article-side">
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
        <div style="background-image: url('<?php bloginfo('template_url') ?>/img/3.jpg');" class="second-article-block-all-article-side">
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
        <div style="background-image: url('<?php bloginfo('template_url') ?>/img/3.jpg');" class="second-article-block-all-article-side">
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
