<?php

/**
 * @package gracelanguageinstitute
 */
?>

</main>

<footer class="site-footer pt-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="site-footer__item site-footer__links text-center text-sm-left">
                    <h3 class="h5">Courses</h3>
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
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="site-footer__item site-footer__links text-center text-sm-left">
                    <h3 class="h5">Follow Us</h3>
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
                </div>
            </div>
            <div class="col-lg-4">
                <div class="site-footer__item site-footer__social">
                    <h3 class="h5">Follow Us</h3>
                    <ul>
                        <li><a href="#" target="_blank"><i class="icon-facebook"></i></a></li>
                        <li><a href="#" target="_blank"><i class="icon-instagram"></i></a></li>
                        <li><a href="#" target="_blank"><i class="icon-twitter"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

</div>

<?php
wp_footer();
?>
</body>

</html>