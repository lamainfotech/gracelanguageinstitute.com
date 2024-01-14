<?php
/* Template Name: Contact Us*/
get_header();

$contact_details = get_field('lit_cp_contact_details');
$form_area = get_field('lit_cp_form_col');
?>

<section class="contact-details pb-xl-5 py-lg-4 py-sm-3 py-2">
    <div class="container">
        <div class="row justify-content-lg-between">
            <div class="col-lg-7 col-xl-7 mb-2 mb-lg-0">
                <div class="block-title mb-2 mb-lg-3">
                    <h2><?php echo $contact_details['lit_cp_cd_heading']; ?></h2>
                </div>
                <div class="row justify-content-between">
                    <div class="col-sm-6">
                        <div class="card-tile">
                            <div class="card-tile__icon">
                                <i class="icon-pin"></i>
                            </div>
                            <div class="card-tile__content">
                                <?php echo wpautop($contact_details['lit_cp_cd_address']); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card-tile">
                            <div class="card-tile__icon">
                                <i class="icon-call"></i>
                            </div>
                            <div class="card-tile__content">
                                <?php echo wpautop($contact_details['lit_cp_cd_phone']); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card-tile">
                            <div class="card-tile__icon">
                                <i class="icon-time"></i>
                            </div>
                            <div class="card-tile__content">
                                <?php echo wpautop($contact_details['lit_cp_cd_business_hours']); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card-tile">
                            <div class="card-tile__icon">
                                <i class="icon-envelope"></i>
                            </div>
                            <div class="card-tile__content">
                                <?php echo wpautop($contact_details['lit_cp_cd_email']); ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 section-map">
                        <?php get_template_part( 'template-parts/global', 'map' ); ?>
                    </div> <!-- /map -->
                </div>
            </div>
            <div class="col-lg-5 col-xl-4 mb-2 mb-lg-0">
                <div class="block-title mb-2">
                    <h2><?php echo $form_area['lit_cp_form_heading']; ?></h2>
                </div>
                <div class="contact-form">
                    <?php echo do_shortcode('[wpforms id="'. $form_area['lit_cp_form'][0]->ID .'"]'); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
?>