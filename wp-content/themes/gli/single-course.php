<?php
/* Template Name: Course Detail */
get_header();
?>

<?php
if(have_rows('lit_course_details')) :
    while(have_rows('lit_course_details')) :
        the_row();
        if(get_row_layout() == 'lit_cd_outline') :
            $outline = get_sub_field('lit_cd_outline_item');
            ?>
            <section class="page-section__wrap">
                <div class="container">
                    <div class="block-header">
                        <?php foreach($outline as $item) { ?>
                            <a href="#<?php 
                                if($item['lit_cd_outline_item_section'] === 'first_section') {
                                    echo 'first-section';
                                } elseif($item['lit_cd_outline_item_section'] === 'second_section') {
                                    echo 'second-section';
                                } elseif($item['lit_cd_outline_item_section'] === 'third_section') {
                                    echo 'third-section';
                                } elseif($item['lit_cd_outline_item_section'] === 'fourth_section') {
                                    echo 'fourth-section';
                                } ?>" class="btn-title smooth-scroll"><?php echo $item['lit_cd_outline_item_title']; ?></a>
                        <?php } ?>
                    </div>
                </div>
            </section>
<?php   elseif(get_row_layout() == 'lit_cd_about_course') :
            $heading = get_sub_field('lit_cd_ac_heading');
            $content = get_sub_field('lit_cd_ac_content');
    ?>
            <section id="first-section" class="about-course pt-2 pt-lg-3">
                <div class="container">
                    <div class="block-title">
                        <h3 class="mb-1"><?php echo $heading; ?></h3>
                        <?php echo wpautop( $content ); ?>
                    </div>
                </div>
            </section>
<?php   elseif(get_row_layout() == 'lit_cd_instructors') :
            $heading = get_sub_field('lit_cd_is_heading');
            $instructors = get_sub_field('lit_cd_instructor');
        ?>
            <section id="instructor-block" class="instructor-block pt-2 pt-lg-2">
                <div class="container">
                    <div class="block-title">
                        <h3 class="mb-1 mb-lg-2"><?php echo $heading; ?></h3>
                        <div class="row">
                            <?php foreach($instructors as $instructor) { ?>
                                <div class="col-lg-6 mb-1 mb-sm-2 mb-lg-0">
                                    <div class="card-info">
                                        <div class="card-info__media mb-1 mb-sm-0">
                                            <picture>
                                                <source srcset="<?php echo site_url(); ?>/wp-content/uploads/angela-smith.jpg" type="image/jpg">
                                                <img src="<?php echo $instructor['lit_cd_instructor_image']['url']; ?>" width="100" height="100" loading="lazy" alt="<?php echo $instructor['lit_cd_instructor_image']['alt']; ?>">
                                            </picture>
                                        </div> <!-- /.card-info__media -->
                                        <div class="card-info__content">
                                            <h5><?php echo $instructor['lit_cd_instructor_name']; ?></h5>
                                            <p><?php echo $instructor['lit_cd_instructor_info']; ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </section>
<?php   elseif(get_row_layout() == 'lit_cd_reviews') : 
            $heading = get_sub_field('lit_cd_reviews_heading');
            $reviews = new WP_Query(array(
                'post_type'     =>  'review',
                'post_status'   =>  'publish',
                'meta_query'    =>  array(
                    array(
                        'key'   =>  'lit_review_display_on',
                        'value' =>  '"' . get_the_ID() . '"',
                        'compare'=> 'LIKE'
                    )
                )
            ));
            $view_more = get_sub_field('lit_cd_reviews_button');
        ?>
            <section id="review-block" class="review-block py-2 py-lg-3 py-xxl-4">
                <div class="container">
                    <div class="block-title">
                        <h3 class="mb-1 mb-lg-2"><?php echo $heading; ?></h3>
                    </div>
                    <?php if($reviews->have_posts()) :
                        while($reviews->have_posts()) :
                            $reviews->the_post();
                            $name = get_the_title();
                            $review = get_the_content();
                            $rating = get_field('lit_review_rating');
                            $date = get_field('lit_review_date');
                        ?>
                        <div class="review-content mb-1 mb-lg-2">
                            <ul class="star-ratings">
                                <?php for($x = 0; $x < $rating; $x++) { ?>
                                <li><i class="icon-star"></i></li>
                                <?php } ?>
                            </ul>

                            <div class="author-info">
                                <span>By <?php echo $name; ?></span>
                                <span class="date"><?php echo $date; ?></span>
                            </div>

                            <?php echo wpautop($review); ?>
                        </div>
                    <?php endwhile;
                    endif;
                    wp_reset_query(); ?>

                    <div class="btn-wrap text-center mb-1 mb-lg-0">
                        <a href="<?php echo $view_more['url']; ?>" class="btn btn-secondary"><?php echo $view_more['title']; ?></a>
                    </div>
                </div>
            </section>
<?php   elseif(get_row_layout() == 'lit_cd_faqs') :
            $heading = get_sub_field('lit_cd_faqs_heading');
            $faqs = new WP_Query(array(
                'post_type'     =>  'faq',
                'post_status'   =>  'publish',
                'orderby'       =>  'date',
                'order'         =>  'DESC',
                'meta_query'    =>  array(
                    array(
                        'key'   =>  'lit_faq_display_on',
                        'value' =>  '"' . get_the_ID() . '"',
                        'compare'=> 'LIKE'
                    )
                )
            ));
        ?>
        <section id="faq-block" class="faq-block pb-xxl-5 py-lg-4 py-sm-3 py-2">
            <div class="container">
                <header class="block-title block-width-95 mb-2">
                    <h2><?php echo $heading; ?></h2>
                </header>
                <div class="accordion faq-accordion" id="faqAccordion">
                    <?php if($faqs->have_posts()) :
                        $counter = 1;
                        while($faqs->have_posts()) :
                            $faqs->the_post();
                            $question = get_the_title();
                            $answer = get_the_content();
                        ?>
                            <div class="accordion-item <?php if($counter === 1) { echo "active"; } ?>">
                                <button class="<?php if($counter === 1) { echo "accordion-title"; } else { echo "accordion-title collapsed"; } ?>" type="button" data-toggle="collapse" data-target="#faq-<?php echo $counter; ?>" aria-expanded="false" aria-controls="faq-<?php echo $counter; ?>">
                                    <?php echo $question; ?>
                                </button>
                                <div id="faq-<?php echo $counter; ?>" class="<?php if($counter === 1) { echo "collapse show"; } else { echo "collapse"; } ?>" data-parent="#faqAccordion">
                                    <div class="accordion-content">
                                        <?php echo wpautop($answer); ?>
                                    </div>
                                </div>
                            </div><!-- /.accordion-item -->
                    <?php $counter++;
                        endwhile;
                    endif;
                    wp_reset_query(); ?>
                </div><!-- /.accordion -->
            </div><!-- /.container -->
        </section><!-- /.faq-block -->
<?php elseif(get_row_layout() == 'lit_cd_global_map') :
    
            get_template_part( 'template-parts/global', 'map' );

        endif;
    endwhile;
endif; ?>

<?php
get_footer();
?>