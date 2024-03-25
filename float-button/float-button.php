<?php
/*
Plugin Name: Float Button - [Mart Haarman]
Plugin URI: https://github.com/marthaarman/wordpress-float-button
Description: Float button ing
Version: 1.0
Author: Mart Haarman
Author URI: https://github.com/marthaarman
License: GPL3
*/

function add_float_button_html() {
    include_once('settings.php');
    if(!$float_button_show_button) return;
    ?>
    <style>
         .ing-float-button {
            position: fixed;
            top: <?php echo $float_button_dist_top_px; ?>px;
            right: <?php echo $float_button_dist_right_px; ?>px;
            z-index: 9999; /* Ensure it's above other elements */
            background-color:none!important;
            height:50px;
        }

        .ing-float-button img {
            max-width:100%;
            max-height:100%;
            height:auto;
            width:auto;
        }
    </style>
    <div class="ing-float-button">
        <a href="<?php echo $float_button_stream_url; ?>" target='_blank'>
            <img src="<?php echo $float_button_image_url; ?>" />
        </a>
    </div>
    <?php
}

// Hook the function to the wp_footer action
add_action('wp_footer', 'add_float_button_html');
