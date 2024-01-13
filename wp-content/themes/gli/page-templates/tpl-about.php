<?php
/* Template Name: About */
get_header();
?>

<section class="about-page pt-sm-6 pt-5 pb-xxl-5 pb-lg-4 pb-sm-3 pb-2">
    <div class="container">
        <div class="block-title mt-2">
            <div class="heading-secondary text-center mb-lg-3 mb-sm-2 mb-1">
                <h1><?php echo get_the_title(); ?></h1>
            </div>
            <?php echo wpautop(get_the_content()); ?>
        </div>
    </div>
</section>

<?php
get_footer();
?>