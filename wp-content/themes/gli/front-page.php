<?php

/**
 * @package gracelanguageinstitute
 */

get_header();
?>

<?php
if(have_rows('lit_home_sections')) :
    while(have_rows('lit_home_sections')) :
        the_row();
        if(get_row_layout() == 'lit_why_gli') :
            $why_heading = get_sub_field('lit_heading');
            $why_cards = get_sub_field('lit_cards');
        ?>
            <section class="why-sec pt-xxl-6 py-lg-4 py-sm-3 py-2">
                <div class="container">
                    <header class="block-title text-center">
                        <h2><?php echo $why_heading; ?></h2>
                    </header>
                    <div class="row justify-content-center">
                        <?php foreach($why_cards as $why_card) { ?>
                            <div class="col-lg-4 col-md-6 mb-1 mb-sm-2 mb-lg-0">
                                <div class="card-icon text-center">
                                    <div class="card-icon__top">
                                        <i><img src="<?php echo $why_card['lit_card_icon']['url']; ?>" alt="<?php echo $why_card['lit_card_icon']['alt']; ?>"></i>
                                        <h4><?php echo $why_card['lit_card_title']; ?></h4>
                                        <p><?php echo $why_card['lit_card_text']; ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </section>
<?php   elseif (get_row_layout() == 'lit_courses') :
            $courses_heading = get_sub_field('lit_courses_heading');
            $courses_subheading = get_sub_field('lit_courses_sub_title');
            $courses = new WP_Query(array(
                'post_type' =>  'course'
            ));
        ?>
            <section class="course bg-lightGreen py-xxl-6 py-lg-4 py-sm-3 py-2">
                <div class="container">
                    <header class="block-title text-center block-width-70 mx-auto mb-lg-3 mb-sm-2 mb-1">
                        <h2><?php echo $courses_heading; ?></h2>
                        <p><?php echo $courses_subheading; ?></p>
                    </header>
                    <div class="slider-col-4 slick-gutter-0 slick-no-dots">
                        <?php
                        if($courses->have_posts()) {
                            while($courses->have_posts()) {
                                $courses->the_post();
                                $title = get_the_title();
                                $link = get_the_permalink();
                                $feature_img = get_the_post_thumbnail_url( get_the_ID(), 'full' );
                        ?>
                            <div class="item">
                                <article class="card-media bg-cover">
                                    <img src="<?php echo $feature_img; ?>" width="1000" height="667" loading="lazy" alt="<?php echo $title; ?>">
                                    <div class="card-media__body text-center">
                                        <a href="<?php echo $link; ?>" class="stretched-link">
                                            <h3 class="h4"><?php echo $title; ?></h3>
                                        </a>
                                    </div>
                                </article><!-- /.card-media -->
                            </div><!-- /.item -->
                        <?php   }
                        }  wp_reset_query(); ?>
                    </div><!-- /.slider -->
                </div>
            </section> <!-- /.course -->
<?php   elseif (get_row_layout() == 'lit_call_to_action') :
            
            get_template_part( 'template-parts/global', 'cta' );

        elseif (get_row_layout() == 'lit_articles') :
            $heading = get_sub_field('lit_articles_heading');
            $subheading = get_sub_field('lit_articles_subheading');
            $posts = new WP_Query(array(
                'post_type'     =>  'post',
                'orderby'       =>  'date',
                'order'         =>  'DESC'
            )); ?>

            <section class="articles bg-lightGreen pt-xxl-5 pb-xxl-6 py-lg-4 py-sm-3 py-2">
                <div class="container">
                    <header class="block-title text-center block-width-70 mx-auto mb-lg-3 mb-sm-2 mb-1">
                        <h2><?php echo $heading; ?></h2>
                        <p><?php echo $subheading; ?></p>
                    </header>
                    <div class="row justify-content-center align-items-center">
                        <?php if($posts->have_posts()) :
                            while($posts->have_posts()) :
                            $posts->the_post();
                            $title = get_the_title();
                            $label = get_the_category();
                            $thumbnail = get_the_post_thumbnail_url( get_the_ID(), 'full' );
                            $link = get_the_permalink();
                        ?>
                            <div class="col-md-6 col-lg-4 mb-1 mb-sm-2 mb-lg-0">
                                <article class="card card-blog card-blog--alt">
                                    <picture class="card-blog__media">
                                        <img src="<?php echo $thumbnail; ?>" width="1000" height="667" loading="lazy" alt="<?php echo $title; ?>">
                                    </picture> <!-- /.card-blog__media -->

                                    <div class="card-blog__content">
                                        <div class="card-blog__head">
                                            <span class="card-blog__category"><?php echo $label[0]->name; ?></span>
                                        </div>
                                        <div class="card-blog__title text-center">
                                            <a href="<?php echo $link; ?>" class="stretched-link">
                                                <h3 class="h5 mb-0"><?php echo $title; ?></h3>
                                            </a>
                                        </div>
                                    </div> <!-- /.card-blog__content -->
                                </article><!-- /.card-blog -->
                            </div>
                        <?php endwhile;
                        endif; wp_reset_query(); ?>
                    </div>
                </div>
            </section> <!-- /.articles -->

<?php   elseif (get_row_layout() == 'lit_global_map') :
            get_template_part( 'template-parts/global', 'map' );
        endif;
    endwhile;
endif; ?>

<?php
get_footer();
?>