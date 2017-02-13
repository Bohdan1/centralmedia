<?php get_header(); ?>

<div class="header-margin-blog">
<div class="row">
    <div class="col l8 s12 m8">
        <?php 
        	$post_categories = array();
            if ( have_posts() ) :
                while ( have_posts() ) : the_post(); // Start the Loop.
					foreach( get_the_category() as $category ){ 
						$post_categories[] = $category->cat_ID;
					}
        ?>
			        <div class="one-video-post">
			            <div class="one-video-post-name"><?php the_title(); ?></div>
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
                wp_reset_postdata();
			endif;
		?>
    </div>

    <div class="col l4 m4 s12">
        <div class="third-block-with-line">
            <div class="big-sign-line-one-video">ПО <span>ТЕМІ</span></div>
            <div class="block-line"></div>
        </div>
        <?php
            $popular_days_post = 30;
            $args = array(
                'post_type' => array( 'news', 'articles', 'video', 'blogs' ),
                'posts_per_page' => 4,
                'category__in' => $post_categories,
                'publish' => true,
                'date_query' => array(
                    'after' => $popular_days_post . ' days ago',
                ),
                'orderby' => 'date',
                'order' => 'DESC'
            );
            $query = new WP_Query( $args );
            $posts_count = 0;
            $posts_exclude = array();
            
            //якщо є публікації з такими категоріями, які публіковані за останні $popular_days_post днів
            if( $query->have_posts() ) {
                while ( $query->have_posts() ) {
                    $query->the_post();
                    if ( get_post_type( get_the_ID() ) == 'news' || get_post_type( get_the_ID() ) == 'articles' ) {
                        show_small_post();
                    }
                    else if ( get_post_type(get_the_ID() ) == 'video' ) {
                        show_small_video();
                    }
                    else if ( get_post_type(get_the_ID() ) == 'blogs' ) {
                        show_small_post();
                    }
                    $posts_count++;
                    $posts_exclude[] = get_the_ID();
                }
            }
            if ( $posts_count < 4 ) {
                echo '<div>' . $test .'</div>';
                $args = array(
                    'post_type' => 'articles',
                    'posts_per_page' => 4 - $posts_count,
                    'publish' => true,
                    'post__not_in' => $posts_exclude, //displays all articles, other than those
                    'orderby' => 'date',
                    'order' => 'DESC'
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
            }
            wp_reset_postdata();
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
    <div class="big-sign-line">ПОПЕРЕДНІ <span>СТАТТІ</span></div>
    <div class="block-line"></div>
    <div class="small-sign-line"><img class="line-img" src="<?php bloginfo('template_url') ?>/img/menu.svg"></div>
</div>
<div class="second-block-with-line hide-on-med-and-up">
    <div class="big-sign-line">ПОПЕРЕДНІ <span>СТАТТІ</span></div>
    <div class="block-line"></div>
</div>

<div class="row">
    <?php
        //big template for latest articles
        get_template_part('template-parts/big', 'latest-articles');
    ?>
</div>


<div class="advertisment-all-blogs">
    <div class="advertisment-block">
        <a href="#" ><img class="advertisment-img" src="<?php bloginfo('template_url') ?>/img/sponsors-wide.jpg" alt="Логотип"></a>
    </div>
</div>

<?php
    //latest news and polls
    get_template_part('content', 'footer');
?>

<?php get_footer(); ?>
