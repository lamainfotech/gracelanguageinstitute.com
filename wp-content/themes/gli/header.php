<?php

/**
 * @package gracelanguageinstitute
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">
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
    <div class="site-wrapper">
        <?php
        $header = get_field('lit_header_type', 'option');

        if ($header['value'] == 'header 1') {
        ?>
            <header class="site-header">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="container">
                        <?php
                        ?>
                        <a class="navbar-brand" href="/"><img src="/wp-content/uploads/GLI-logo.png" alt="Grace Language Institute" height="135" width="135" loading="lazy"></a>
                        <?php
                        wp_nav_menu(array(
                            'theme_location'  => 'primary',
                            'depth'              => 3, // 1 = no dropdowns, 2 = with dropdowns.
                            'container'       => 'div',
                            'container_class' => 'collapse navbar-collapse offset',
                            'container_id'    => 'nav-pri',
                            'menu_class'      => 'nav navbar-nav justify-content-center ml-auto',
                            'walker'         => new WP_Bootstrap_NavWalker(),
                            // 'fallback_cb'    => 'WP_Bootstrap_NavWalker::fallback',
                        ));
                        ?>

                        <div class="site-header__actions">
                            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#nav-pri" aria-controls="nav-pri" aria-expanded="false" aria-label="Toggle Navigation">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                            <a href="tel:9825495869" class="btn btn-primary btn-call d-none d-lg-block">982-5495869</a>
                        </div>
                </nav>
            </header>
        <?php
        } elseif ($header['value'] == 'header 2') {
        ?>
            <header class="site-header">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="container">
                        <?php
                        ?>
                        <a class="navbar-brand" href="/"><img src="/wp-content/uploads/GLI-logo.png" alt="Grace Language Institute" height="135" width="135" loading="lazy"></a>
                        <?php
                        wp_nav_menu(array(
                            'theme_location'  => 'primary',
                            'depth'              => 3, // 1 = no dropdowns, 2 = with dropdowns.
                            'container'       => 'div',
                            'container_class' => 'collapse navbar-collapse offset',
                            'container_id'    => 'nav-pri',
                            'menu_class'      => 'nav navbar-nav justify-content-center ml-auto',
                            'walker'         => new WP_Bootstrap_NavWalker(),
                            // 'fallback_cb'    => 'WP_Bootstrap_NavWalker::fallback',
                        ));
                        ?>

                        <div class="site-header__actions">
                            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#nav-pri" aria-controls="nav-pri" aria-expanded="false" aria-label="Toggle Navigation">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                            <a href="tel:9825495869" class="btn btn-primary btn-call d-none d-lg-block">982-5495869</a>
                        </div>
                </nav>
            </header>
        <?php } ?>

        <main class="site-content">
            <?php
            $banner_type = get_field('lit_banner_type');

            if ($banner_type['value'] == 'hero banner') {
            ?>
                <section class="banner bg-cover">
                    <img src="<?php echo site_url(); ?>/wp-content/uploads/guy-learning.jpg" alt="Banner">
                    <div class="container">
                        <div class="banner-content block-width-55">
                            <h1>Learning A <br> Language is Easier!</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <a href="https://www.youtube.com/watch?v=xcJtL7QggTI" data-fancybox class="btn btn-secondary btn-play">Play Video</a>
                        </div>
                    </div> <!-- /.container -->
                </section> <!-- /.banner -->
            <?php } elseif ($banner_type['value'] == 'courses') { ?>
                <section class="banner-inner">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="two-col__content mb-2 mb-lg-0">
                                    <h2 class="mb-1">Learn English <br> Basic to Advanced</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <div class="btn-wrap">
                                        <a href="#" class="btn btn-primary">Explore Courses</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="two-col__media mb-2 mb-lg-0">
                                    <img src="/wp-content/uploads/english-books-resting-table-working-space.jpg" alt="English book" width="1000" height="668" loading="lazy">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            <?php } elseif ($banner_type['value'] == 'course detail') { ?>
                <section class="banner-inner">
                    <div class="container">
                        <div class="row align-items-center mb-lg-1">
                            <div class="col-lg-7">
                                <div class="two-col__content mb-2 mb-lg-0 block-width-55">
                                    <h2 class="mb-1">General English Course
                                        <br> For Anyone
                                    </h2>
                                    <p>Find extra listening and reading practice to help you improve your level of English and practise language you can use in everyday situations.</p>
                                    <div class="btn-wrap pt-0 pt-md-1 pt-lg-2 pt-xxl-3">
                                        <a href="#" class="btn btn-primary">Submit Application</a>
                                        <a href="#" class="btn btn-link">Financial aid available</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="two-col__media text-center has-border mb-2 mb-lg-0">
                                    <img src="/wp-content/uploads/conference-class.jpg" alt="Conference class" width="474" height="474" loading="lazy">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Course Detail Page Banner Goes Here -->

            <?php } elseif ($banner_type['value'] == 'blog') { ?>

                <!-- Blog Archive Page Banner Goes Here -->

            <?php } elseif ($banner_type['value'] == 'contact') { ?>

                <!-- Contact Page Banner Goes Here -->

            <?php } elseif ($banner_type['value'] == 'none') {
            } ?>