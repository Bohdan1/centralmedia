<?php
   
    require( dirname(__FILE__) . '/wp-load.php' );
    
    get_header();
    
    if ( is_user_logged_in() ) {
        wp_redirect( bloginfo('url') . '/wp-admin/profile.php' );
    }
    else {
        
        echo '<div style="height: 10px;"></div>';
    ?>

        <div class="row register-bg">
            <div class="col offset-l3 l6 s12 m12">
                <?php custom_registration_function(); ?>
            </div>
        </div>

<?php 
    }
    //$footer_url = get_template_directory_uri() . '/footer.php';
    //get_template_part( $footer_url );
    //get_footer(); 
?>