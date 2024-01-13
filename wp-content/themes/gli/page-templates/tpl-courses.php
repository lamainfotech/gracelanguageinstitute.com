<?php
/* Template Name: Courses */
get_header();
$img = get_field('lit_cp_image');
$heading = get_field('lit_cp_heading');
$content = get_field('lit_cp_content');
$btn = get_field('lit_cp_button');
?>
<section class="explore-courses bg-lightGreen pt-2 py-sm-3 py-lg-4 pb-xxl-6">
    <div class="container">
        <div class="row align-items-center flex-row-reverse">
            <div class="col-lg-6">
                <div class="two-col__content mb-2 mb-lg-0 text-left text-lg-right">
                    <h2 class="mb-1"><?php echo $heading; ?></h2>
                    <?php echo wpautop($content); ?>
                    <div class="btn-wrap justify-content-lg-end">
                        <a href="<?php echo $btn['url']; ?>" class="btn btn-primary"><?php echo $btn['title']; ?></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="two-col__media mb-2 mb-lg-0">
                    <img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>" width="587" height="466" loading="lazy">
                </div>
            </div>
        </div>
    </div>
</section> <!-- /explore-courses -->
<?php
get_template_part('template-parts/global', 'cta');
get_template_part('template-parts/global', 'map');

get_footer();
?>