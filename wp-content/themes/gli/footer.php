<?php

/**
 * @package gracelanguageinstitute
 */
?>

<footer>
    <?php
    wp_nav_menu(array(
        'theme_location'  => 'footer_courses',
        'depth'              => 3, // 1 = no dropdowns, 2 = with dropdowns.
        'container'       => 'div',
        // 'menu_class'      => 'nav navbar-nav',
        // 'walker'         => new WP_Bootstrap_NavWalker(),
        // 'fallback_cb'    => 'WP_Bootstrap_NavWalker::fallback',
    ));
    ?>
    <?php
    wp_nav_menu(array(
        'theme_location'  => 'footer_about',
        'depth'              => 3, // 1 = no dropdowns, 2 = with dropdowns.
        'container'       => 'div',
        // 'menu_class'      => 'nav navbar-nav',
        // 'walker'         => new WP_Bootstrap_NavWalker(),
        // 'fallback_cb'    => 'WP_Bootstrap_NavWalker::fallback',
    ));
    ?>
</footer>

<?php
wp_footer();
?>
</body>

</html>