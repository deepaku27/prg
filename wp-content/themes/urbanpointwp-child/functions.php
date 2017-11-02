<?php
function urbanpointwp_child_scripts() {
    wp_enqueue_style( 'urbanpointwp-parent-style', get_template_directory_uri(). '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'urbanpointwp_child_scripts' );
 
// Your php code goes here
?>