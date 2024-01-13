<?php
$global_cta = get_field('lit_global_cta', 'option');
$heading = $global_cta['lit_global_cta_heading'];
$subheading = $global_cta['lit_global_cta_subheading'];
$banner = $global_cta['lit_global_cta_banner'];
$checkmarks = $global_cta['lit_global_cta_check_mark'];
$content = $global_cta['lit_global_cta_content'];
$form_title = $global_cta['lit_global_cta_form_title'];
$form_subtitle = $global_cta['lit_global_cta_form_subtitle'];
$form = $global_cta['lit_global_cta_form'];
?>
<section class="form bg-cover py-xxl-6 py-lg-4 py-sm-3 py-2">
    <div class="container">
        <header class="block-title text-center block-width-70 mx-auto mb-sm-2 mb-1">
            <h2><?php echo $heading; ?></h2>
            <?php echo wpautop($subheading); ?>
        </header>
        <div class="bg-cover minHeight-420 py-xl-10 py-lg-8 py-sm-6 py-4 mb-2 mb-sm-3 mb-lg-4">
            <img src="<?php echo $banner['url']; ?>" width="1500" height="1000" loading="lazy" alt="<?php echo $banner['alt']; ?>">
        </div>
        <div class="row">
            <div class="col-lg-6 mb-1 mb-sm-2 mb-lg-0">
                <div class="form-list list-check list-column block-width-50 mx-auto ">
                    <ul>
                        <?php foreach($checkmarks as $checkmark) { ?>
                            <li><?php echo $checkmark; ?></li>
                        <?php } ?>
                    </ul>
                    <?php echo wpautop($content); ?>
                </div>
            </div>
            <div class="col-lg-6 contact-form__wrapper mb-1 mb-sm-2 mb-lg-0">
                <div class="contact-form pt-xl-3 pt-sm-2 pt-1">
                    <div class="block-title text-center">
                        <h3 class="h4"><?php echo $form_title; ?></h3>
                        <p><?php echo $form_subtitle; ?></p>
                    </div>
                    <?php echo do_shortcode('[wpforms id="' . $form[0]->ID . '"]'); ?>
                </div>
            </div>
        </div>
    </div>
</section> <!-- /.form -->