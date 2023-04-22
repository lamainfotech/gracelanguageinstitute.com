<?php

/**
 * @package gracelanguageinstitute
 * 
 * ==========================
 * FRONTEND ENQUEUE FUNCTIONS
 * ==========================
 */

function gli_load_scripts() {
    wp_enqueue_style( 'gli-style', get_template_directory_uri() . '/style.css', array(), '1.0.0', 'all' );
}

add_action( 'wp_enqueue_scripts', 'gli_load_scripts' );
