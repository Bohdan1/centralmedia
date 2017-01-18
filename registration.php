<?php
    /**
     * WordPress User Page
     *
     * Handles authentication, registering, resetting passwords, forgot password,
     * and other user handling.
     *
     * @package WordPress
     */

    /** Make sure that the WordPress bootstrap has run before continuing. */
    require( dirname(__FILE__) . '/wp-load.php' );

    if ( is_user_logged_in() ) {
        wp_redirect( bloginfo('url') . '/wp-admin/profile.php' );
    }
    else {
        get_header();
        echo '<div style="height: 10px;"></div>';
    ?>

        <div class="row register-bg">
            <div class="col offset-l3 l6 s12 m12">
                <?php custom_registration_function(); ?>
            </div>
        </div>

<?php 
    }
    get_footer(); 
?>