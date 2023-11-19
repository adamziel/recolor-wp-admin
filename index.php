<?php
/**
 * Plugin Name: Recolor wp-admin
 * Description: A simple plugin to change the admin UI colors.
 * Version: 1.0
 * Author: Adam Zieliński
 */

function blue_admin_nav_enqueue_styles() {
    // Use plugins_url to get the correct path to your CSS file
    wp_enqueue_style( 'blue-admin-nav-style', plugins_url( '/admin-style.css', __FILE__ ) );
}
add_action( 'admin_enqueue_scripts', 'blue_admin_nav_enqueue_styles' );
