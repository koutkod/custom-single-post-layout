<?php
/*
Plugin Name: Custom Single Post Layout
Plugin URI: https://www.koutkod.com/custom-single-post-layout
Description: This plugin modifies the single post template to look like a page so you can use any page builder template.
Version: 1.0
Author: Apollonnius Alex Fils Desir
Author URI: https://www.koutkod.com
License: GPL2
*/

function custom_single_post_template($single_template) {
    global $post;

    if ($post->post_type == 'post') {
        $single_template = dirname( __FILE__ ) . '/single-post.php';
    }
    return $single_template;
}
add_filter( 'single_template', 'custom_single_post_template' );
