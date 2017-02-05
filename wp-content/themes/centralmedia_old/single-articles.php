<?php get_header(); ?>
	<div class="row content">
    <div class="col l8 s12 m6 single-state-block ">
    	<?php
			while ( have_posts() ) : the_post();
		?>
				<div class="single-state-sign "><?php the_title(); ?></div>
                <div style="text-align:right; margin-right:25px;">
                     <?php
                        the_time('j F Y, G:i');
                        setPostViews( get_the_ID() );
                        echo '<div> Кількість переглядів: ' . getPostViews( get_the_ID() ) . '</div>'; 
                    ?>
                </div>
		    	<div class="text-state">
		            <img width="100%" src="<?php the_post_thumbnail_url(); ?>" alt="альтернативный текст">
		            <p class="single-state-font">
		            	<?php the_content(); ?>
		            </p>
		        </div>
		<?php
			endwhile;
		?>
    </div>

    <div class="col l4 s12 m6">
        <div class="actual-list">
            <div class="actual-sign">Актуальні статті:</div>
            <div class="actual">
                <?php 
                     $args = array(
                        'post_type' => 'articles',
                        'numberposts' => 10,
                        'publish' => true,
                        'orderby' => 'date',
                        'order' => 'DESC'
                    );
                    $myposts = get_posts( $args );

                    foreach( $myposts as $post ) {
                        setup_postdata($post);
                ?>
                <div class="row other-actual">
                    <div class="col s12 m12 l12">
                        <a href="<?php the_permalink(); ?>" class="hover-link">
                            <div class="actual-other-name"><?php the_title(); ?></div>
                        </a>
                        <div class="actual-other-text">
                            <?php
                                short_desc_post(120);   // display short content (120 symbols)
                            ?>
                        </div>
                    </div>
                </div>

                 <?php
                    } /* end foreach */
                    wp_reset_postdata();
                ?>      
            </div>
        </div>
    </div>
</div>
<br>
<?php get_footer(); ?>