<?php
/* Template Name: Static Cources */
get_header();
?>

<section class="explore-courses bg-lightGreen pt-2 py-sm-3 py-lg-4 pb-xxl-6">
    <div class="container">
        <div class="row align-items-center flex-row-reverse">
            <div class="col-lg-6">
                <div class="two-col__content mb-2 mb-lg-0 text-left text-lg-right">
                    <h2 class="mb-1">Be Fluently
                        <br> In Nepali Language
                    </h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <div class="btn-wrap">
                        <a href="#" class="btn btn-primary">Explore Courses</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="two-col__media mb-2 mb-lg-0">
                    <img src="/wp-content/uploads/Nepali-alphabet.jpg" alt="Nepali Alphabet book" width="587" height="466" loading="lazy">
                </div>
            </div>
        </div>
    </div>
</section> <!-- /explore-courses -->

<section class="form bg-cover py-lg-4 py-sm-3 py-2">
    <div class="container">
        <header class="block-title text-center block-width-70 mx-auto mb-sm-2 mb-1">
            <h2>Sign Up For A Free Trial</h2>
            <p>Signing up with free trials can help you findthe right online education provider.</p>
        </header>
        <div class="bg-cover minHeight-420 py-xl-10 py-lg-8 py-sm-6 py-4 mb-2 mb-sm-3 mb-lg-4">
            <img src="<?php echo site_url(); ?>/wp-content/uploads/education-concept-student-studying-brainstorming-campus-concept-close-up-students-discussing-their-subject-books-textbooks-selective-focus.jpg" width="1500" height="1000" loading="lazy" alt="Reading">
        </div>
        <div class="row">
            <div class="col-lg-6 mb-1 mb-sm-2 mb-lg-0">
                <div class="form-list list-check list-column block-width-50 mx-auto ">
                    <ul>
                        <li><span>Speaking</span></li>
                        <li>Integrated Class</li>
                    </ul>
                    <p>Our ESL program is also licenced to operate by the State of California’s Bureau for Private Postsecondary and Vocational Education.</p>
                </div>
            </div>
            <div class="col-lg-6 contact-form__wrapper mb-1 mb-sm-2 mb-lg-0">
                <div class="contact-form pt-xl-3 pt-sm-2 pt-1">
                    <div class="block-title text-center">
                        <h3 class="h4">Free Trial</h3>
                        <p>Your data is safe with us!</p>
                    </div>
                    <?php echo do_shortcode('[wpforms id="70"]'); ?>
                </div>
            </div>
        </div>
    </div>
</section> <!-- /form -->

<section class="section-map">
    <h2 class="d-none">Map</h2>
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14130.946795029693!2d85.34463115!3d27.694531700000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2snp!4v1664393242972!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section> <!-- /map -->

<?php
get_footer();
?>