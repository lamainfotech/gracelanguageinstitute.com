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
        $logo = get_field('lit_header_logo', 'option');
        $cta = get_field('lit_header_cta', 'option');
        ?>
        <header class="site-header sticky">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <a class="navbar-brand" href="/"><img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" height="135" width="135"></a>
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
                        <a href="<?php echo $cta['url']; ?>" class="btn btn-primary btn-call d-none d-lg-block"><?php echo $cta['title']; ?></a>
                    </div>
            </nav>
        </header>

        <main class="site-content">
            <?php
            $banner_type = get_field('lit_banner_type');

            if ($banner_type['value'] == 'hero banner') {
                $hero_banner = get_field('lit_hero_banner');
            ?>
                <section class="banner bg-cover">
                    <img src="<?php echo $hero_banner['lit_hero_banner_bg_image']['url']; ?>" alt="<?php echo $hero_banner['lit_hero_banner_bg_image']['alt']; ?>">
                    <div class="container">
                        <div class="banner-content block-width-55">
                            <?php echo wpautop($hero_banner['lit_hero_banner_content']); ?>
                            <a href="<?php echo $hero_banner['lit_hero_banner_button']['url']; ?>" data-fancybox class="btn btn-secondary btn-play"><?php echo $hero_banner['lit_hero_banner_button']['title']; ?></a>
                        </div>
                    </div> <!-- /.container -->
                </section> <!-- /.banner -->
            <?php } elseif ($banner_type['value'] == 'courses') {
                    $courses_banner = get_field('lit_courses_banner');
                    $heading = $courses_banner['lit_courses_banner_heading'];
                    $content = $courses_banner['lit_courses_banner_content'];
                    $image = $courses_banner['lit_courses_banner_image'];
                    $btn = $courses_banner['lit_courses_banner_button'];
                ?>
                <section class="banner-inner">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="two-col__content mb-2 mb-lg-0">
                                    <h2 class="mb-1"><?php echo $heading; ?></h2>
                                    <?php echo wpautop($content); ?>
                                    <div class="btn-wrap">
                                        <a href="<?php echo $btn['url']; ?>" class="btn btn-primary"><?php echo $btn['title']; ?></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="two-col__media mb-2 mb-lg-0">
                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" width="1000" height="668" loading="lazy">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            <?php } elseif ($banner_type['value'] == 'course detail') {
                $cd_banner = get_field('lit_course_detail');
            ?>
                <section class="banner-inner">
                    <div class="container">
                        <div class="row align-items-center mb-lg-1">
                            <div class="col-lg-7">
                                <div class="two-col__content mb-2 mb-lg-0 block-width-55">
                                    <h2 class="mb-1"><?php echo $cd_banner['lit_cd_banner_title']; ?></h2>
                                    <?php echo wpautop( $cd_banner['lit_cd_banner_content'] ); ?>
                                    <div class="btn-wrap pt-0 pt-md-1 pt-lg-2 pt-xxl-3">
                                        <?php if(!empty($cd_banner['lit_cd_banner_button_1'])) { ?>
                                            <a href="<?php echo $cd_banner['lit_cd_banner_button_1']['url']; ?>" class="btn btn-primary"><?php echo $cd_banner['lit_cd_banner_button_1']['title']; ?></a>
                                        <?php } ?>
                                        <?php if(!empty($cd_banner['lit_cd_banner_button_2'])) { ?>
                                            <a href="<?php echo $cd_banner['lit_cd_banner_button_2']['url']; ?>" class="btn btn-link"><?php echo $cd_banner['lit_cd_banner_button_2']['title']; ?></a>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="two-col__media text-center has-border mb-2 mb-lg-0">
                                    <img src="<?php echo $cd_banner['lit_cd_banner_image']['url']; ?>" alt="<?php echo $cd_banner['lit_cd_banner_image']['alt']; ?>" width="474" height="474" loading="lazy">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Course Detail Page Banner Goes Here -->

            <?php } elseif ($banner_type['value'] == 'blog') { ?>

                <!-- Blog Archive Page Banner Goes Here -->

            <?php } elseif ($banner_type['value'] == 'contact') {
                $cp_banner = get_field('lit_contact_page');
                ?>

                <section class="banner banner-contact bg-cover">
                    <img src="<?php echo $cp_banner['lit_cp_banner_bg']['url']; ?>" alt="<?php echo $cp_banner['lit_cp_banner_bg']['alt']; ?>">
                    <div class="container">
                        <div class="banner-content text-white block-width-75">
                            <h1><?php echo $cp_banner['lit_cp_banner_title']; ?></h1>
                            <p><?php echo $cp_banner['lit_cp_banner_content']; ?></p>
                        </div>
                    </div> <!-- /.container -->
                </section> <!-- /.banner -->

                <!-- Contact Page Banner Goes Here -->

            <?php } elseif ($banner_type['value'] == 'none') {
            } ?>