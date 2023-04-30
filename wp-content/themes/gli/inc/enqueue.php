<?php

/**
 * @package gracelanguageinstitute
 * 
 * ==========================
 * FRONTEND ENQUEUE FUNCTIONS
 * ==========================
 */

function gli_load_scripts()
{
    wp_enqueue_style('gli-style-fancybox-css', get_template_directory_uri() . '/vendors/fancybox/jquery.fancybox.min.css');
    wp_enqueue_style('gli-style', get_template_directory_uri() . '/style.css', array(), '1.0.0', 'all');
    
    wp_enqueue_script('gli-fancybox-js', get_template_directory_uri() . '/vendors/fancybox/jquery.fancybox.min.js', '', null, true);
    wp_enqueue_script('gli-style-bundle', get_template_directory_uri() . '/js/bundle.js', array('jquery'), null, true);
}

add_action('wp_enqueue_scripts', 'gli_load_scripts');
