<?php

/**
 * @package gracelanguageinstitute
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo wp_title(); ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php if (is_singular() && pings_open(get_queried_object())) : ?>
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php endif; ?>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header>
        <nav>
            <?php
            wp_nav_menu(array(
                'theme_location'  => 'primary',
                'depth'              => 3, // 1 = no dropdowns, 2 = with dropdowns.
                'container'       => 'div',
                'menu_class'      => 'nav navbar-nav',
                // 'walker'         => new WP_Bootstrap_NavWalker(),
                // 'fallback_cb'    => 'WP_Bootstrap_NavWalker::fallback',
            ));
            ?>
        </nav>
    </header>