<?php

/**
 * @package gracelanguageinstitute
 */

require get_template_directory() . '/inc/enqueue.php';
require get_template_directory() . '/inc/theme-support.php';
require get_template_directory() . '/inc/cleanup.php';
// require get_template_directory() . '/inc/customization.php';
// require get_template_directory() . '/inc/custom-post-type.php';

// ACF Options Activating
if(function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title'        =>      'Theme General Settings',
        'menu_title'        =>      'Theme Settings',
        'menu_slug'         =>      'theme-general-settings',
        'capability'        =>      'edit_posts',
        'redirect'          =>      false
    ));

    acf_add_options_sub_page(array(
        'page_title'        =>      'Theme Header Settings',
        'menu_title'        =>      'Header',
        'parent_slug'       =>      'theme-general-settings'
    ));

    acf_add_options_sub_page(array(
        'page_title'        =>      'Theme Footer Settings',
        'menu_title'        =>      'Footer',
        'parent_slug'       =>      'theme-general-settings'
    ));
}