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
    <div class="site-wrapper">
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

        <main class="site-content">
            <section class="banner bg-cover">
                <img src="<?php echo site_url(); ?>/wp-content/uploads/guy-learning.jpg" alt="Banner">
                <div class="container">
                    <div class="banner-content block-width-55">
                        <h1>Learning A <br> Language is Easier!</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <a href="#" class="btn btn-secondary btn-play">Play Video</a>
                    </div>
                </div><!-- /.container -->
            </section><!-- /.banner -->