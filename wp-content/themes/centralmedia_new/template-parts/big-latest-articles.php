<div class="full-width-mob col l8 s12 m7 ">
    <?php
        $args = array(
            'post_type' => 'articles',
            'posts_per_page' => 6,
            //'numberposts' => 10,
            'publish' => true,
            'orderby' => 'date',
            'order' => 'DESC'
        );
        $query = new WP_Query( $args );
        $exclude_posts = array();
        $display_posts = 1;
        if ( $query->have_posts() ) {
            while ( $query->have_posts() ) {
                $query->the_post();
                $exclude_posts[] = get_the_ID();
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
            echo 'Статтей не знайдено';
        }
        wp_reset_postdata();
    ?>