<?php
/*
Plugin Name: WP Mini Admin Bar
Plugin URI: http://devstech.com/shrink-the-admin-bar-expand-on-hover-wordpress/
Description: Makes the admin bar a small button on the left and expands on hover.
Author: Ataul Ghani
Version: 1.0
Author URI: http://devstech.com/
*/

add_action('get_header', 'wp_mini_head');
function wp_mini_head() { remove_action('wp_head', '_admin_bar_bump_cb'); }
 
function wp_mini_admin() {
        if ( is_user_logged_in() ) {
        ?>
        <style type="text/css">
            #wpadminbar {
                width: 47px;
                min-width: auto;
                overflow: hidden;
                -webkit-transition: .4s width;
                -webkit-transition-delay: 1s;
                -moz-transition: .4s width;
                -moz-transition-delay: 1s;
                -o-transition: .4s width;
                -o-transition-delay: 1s;
                -ms-transition: .4s width;
                -ms-transition-delay: 1s;
                transition: .4s width;
                transition-delay: 1s;
            }
            
            #wpadminbar:hover {
                width: 100%;
                overflow: visible;
                -webkit-transition-delay: 0;
                -moz-transition-delay: 0;
                -o-transition-delay: 0;
                -ms-transition-delay: 0;
                transition-delay: 0;
            }
        </style>
        <?php }
}
add_action('wp_head', 'wp_mini_admin');

?>