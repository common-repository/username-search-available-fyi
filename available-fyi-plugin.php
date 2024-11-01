<?php
/**
 * Plugin Name: Username search - Available.FYI
 * Description: A widget to search for available usernames on Instagram, Twitter, TikTok, Facebook, Reddit, and YouTube. Uses an iframe to embed a check widget on your page.
 * Author: Available.FYI
 * Version: 0.1.0
 * Author URI: https://available.fyi
*/

function available_fyi_username_search_register_block() {
    register_block_type( __DIR__ );
}
add_action( 'init', 'available_fyi_username_search_register_block' );

?>