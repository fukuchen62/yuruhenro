<?php
function add_my_styles() {
if (is_single()) {
wp_enqueue_style( 'single-course', get_template_directory_uri() . '/assets/css/course.css' );
}
}
add_action( 'wp_enqueue_scripts', 'add_my_styles' ); ?>
