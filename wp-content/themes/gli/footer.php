<?php

/**
 * @package gracelanguageinstitute
 */
?>

</main>

<footer class="site-footer">
    <div class="site-footer__top pt-lg-4 pb-lg-3 pt-sm-3 py-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6 mb-0 mb-sm-2 mb-lg-0">
                    <div class="site-footer__item text-center text-sm-left">
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
                <div class="col-lg-4 col-sm-6 mb-0 mb-sm-2 mb-lg-0">
                    <div class="site-footer__item text-center text-sm-left">
                        <h3 class="h5">About</h3>
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
                <div class="col-lg-4 col-12 mb-0 mb-sm-2 mb-lg-0">
                    <div class="site-footer__item site-footer__social text-center text-sm-left">
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
    </div>
    <div class="site-footer__bottom">
        <div class="container">
            <div class="copyright-wrap text-center py-1">
                <span class="copyright">Copyright © <?php echo date('Y'); ?> Grace Language Institute | Developed by <a href="https://khagendralama.com.np/" target="_blank">Lama InfoTech</a></span>
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