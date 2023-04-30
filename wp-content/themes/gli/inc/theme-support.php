<?php

/**
 * @package gracelanguageinstitute
 * 
 * =====================
 * THEME SUPPORT OPTIONS
 * =====================
 */

add_theme_support( 'custom-header' );
add_theme_support( 'post-thumbnails' );
add_theme_support(
    'custom-logo',
    array(
        'height'      => 250,
        'width'       => 250,
        'flex-width'  => true,
        'flex-height' => true,
    )
);

// Activate Nav Menu Option
function gli_register_nav_menu() {
    register_nav_menu( 'primary', 'Primary' );
    register_nav_menu( 'footer_courses', 'Footer Courses' );
    register_nav_menu( 'footer_about', 'Footer About' );
}

add_action( 'after_setup_theme', 'gli_register_nav_menu' );

/**
 * Load Custom Nav Walker.
 */
if (!file_exists(get_template_directory() . '/inc/bootstrap-navwalker.php')) {
    wp_die('<div style="text-align:center"><h1 style="font-weight:normal">Custom Walker Nav Not Found</h1><p>Opps we have got error!<br>It appears the bootstrap-navwalker.php file may be missing.</p></div>', 'Custom Walker Nav Not Found');
} else {
    require_once get_template_directory() . '/inc/bootstrap-navwalker.php';
}
