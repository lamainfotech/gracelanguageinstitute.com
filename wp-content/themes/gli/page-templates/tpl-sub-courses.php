<?php
/* Template Name: Sub Courses */
get_header();
$heading = get_field('lit_scp_heading');
$courses_np = new WP_Query(array(
    'post_type'     =>      'course',
    'status'        =>      'publish',
    'orderby'       =>      'date',
    'order'         =>      'DESC',
    'meta_query'    =>  array(
        array(
            'key'   =>  'lit_course_language',
            'value' =>  'Nepali',
            'compare'=> 'LIKE'
        )
    )
));
$courses_en = new WP_Query(array(
    'post_type'     =>      'course',
    'status'        =>      'publish',
    'orderby'       =>      'date',
    'order'         =>      'DESC',
    'meta_query'    =>  array(
        array(
            'key'   =>  'lit_course_language',
            'value' =>  'English',
            'compare'=> 'LIKE'
        )
    )
));
?>
<section class="tab-section py-2 py-sm-3 py-lg-4 py-xxl-5">
    <div class="container">
        <header class="block-title text-center mt-7 mt-lg-5">
            <h2><?php echo $heading; ?></h2>
        </header><!-- /.block-title -->
        <div class="tab-nav tab-nav__sliderNav hide-dots py-2 py-sm-3 py-lg-4 py-xxl-5">
            <div class="slide-item">
                <div class="tab-nav__head">
                    <picture class="tab-nav__logo">
                        <source srcset="<?php echo site_url(); ?>/wp-content/uploads/nepal-flag.jpg" type="image/jpg">
                        <img src="<?php echo site_url(); ?>/wp-content/uploads/nepal-flag.jpg" width="20" height="24" loading="lazy" alt="Nepal Flag">
                    </picture> <!-- /.tab-nav__logo -->
                    <div class="tab-nav__title">
                        <h6>Nepali</h6>
                    </div>
                </div>
            </div> <!--/.slide-item -->
            <div class="slide-item">
                <div class="tab-nav__head">
                    <picture class="tab-nav__logo">
                        <source srcset="<?php echo site_url(); ?>/wp-content/uploads/usa-flag.jpg" type="image/jpg">
                        <img src="<?php echo site_url(); ?>/wp-content/uploads/usa-flag.jpg" width="38" height="21" loading="lazy" alt="USA Flag">
                    </picture> <!-- /.tab-nav__logo -->
                    <div class="tab-nav__title">
                        <h6>English</h6>
                    </div>
                </div>
            </div> <!--/.slide-item -->
        </div><!-- /tab-nav -->
    </div>

    <div class="bg-lightGreen pt-lg-4 pt-sm-3 pt-2 pb-1">
        <div class="container">
            <div class="tab-nav__main tab-nav__sliderMain slick-no-arrows slick-no-dots">
                <div class="slide-item">
                    <div class="row">
                        <?php if($courses_np->have_posts()) :
                            while($courses_np->have_posts()) :
                                $courses_np->the_post();
                                $title = get_the_title();
                                $thumbnail = get_the_post_thumbnail_url( get_the_ID(), 'full' );
                                $lesson = get_field('lit_course_total_lesson');
                                $duration = get_field('lit_course_duration');
                                $link = get_the_permalink();
                            ?>
                                <div class="col-lg-4 col-md-6 mb-2 mb-lg-3">
                                    <article class="card card-blog">
                                        <picture class="card-blog__media">
                                            <img src="<?php echo $thumbnail; ?>" width="1000" height="667" loading="lazy" alt="<?php echo $title; ?>">
                                        </picture> <!-- /.card-blog__media -->

                                        <div class="card-blog__content">
                                            <div class="card-blog__title mb-1 mb-md-2">
                                                <a href="<?php echo $link; ?>" class="stretched-link">
                                                    <h3 class="h5 mb-0"><?php echo $title; ?></h3>
                                                </a>
                                            </div>
                                            <div class="card-blog__body">
                                                <span class="card-blog__category"><?php echo $lesson; ?> Lessons</span>
                                                <span class="card-blog__date"><?php echo $duration; ?></span>
                                            </div>
                                        </div> <!-- /.card-blog__content -->
                                    </article><!-- /.card-blog -->
                                </div>
                        <?php endwhile;
                        endif; wp_reset_query(); ?>
                    </div>
                </div>
                <!--/.slide-item  -->
                <div class="slide-item">
                    <div class="row">
                        <?php if($courses_en->have_posts()) :
                            while($courses_en->have_posts()) :
                                $courses_en->the_post();
                                $title = get_the_title();
                                $thumbnail = get_the_post_thumbnail_url( get_the_ID(), 'full' );
                                $lesson = get_field('lit_course_total_lesson');
                                $duration = get_field('lit_course_duration');
                                $link = get_the_permalink();
                            ?>
                                <div class="col-lg-4 col-md-6 mb-2 mb-lg-3">
                                    <article class="card card-blog">
                                        <picture class="card-blog__media">
                                            <img src="<?php echo $thumbnail; ?>" width="1000" height="667" loading="lazy" alt="<?php echo $title; ?>">
                                        </picture> <!-- /.card-blog__media -->

                                        <div class="card-blog__content">
                                            <div class="card-blog__title mb-1 mb-md-2">
                                                <a href="<?php echo $link; ?>" class="stretched-link">
                                                    <h3 class="h5 mb-0"><?php echo $title; ?></h3>
                                                </a>
                                            </div>
                                            <div class="card-blog__body">
                                                <span class="card-blog__category"><?php echo $lesson; ?> Lessons</span>
                                                <span class="card-blog__date"><?php echo $duration; ?></span>
                                            </div>
                                        </div> <!-- /.card-blog__content -->
                                    </article><!-- /.card-blog -->
                                </div>
                        <?php endwhile;
                        endif; wp_reset_query(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.tab-nav__main -->
</section><!-- /.tab-section -->

<?php
get_template_part('template-parts/global', 'cta');
get_template_part('template-parts/global', 'map');

get_footer();
?>