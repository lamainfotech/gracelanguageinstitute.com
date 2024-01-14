<?php
/* Template Name: Components */
get_header();
?>

<section class="components">
    <div class="container">
        <h1>Heading 1 (45px)</h1>
        <h2>Heading 2 (40px)</h2>
        <h3>Heading 3 (30px)</h3>
        <h4>Heading 4 (26px)</h4>
        <h5>Heading 5 (24px)</h5>
        <h6>Heading 6 (18px)</h6>
        <i class="icon-play"></i>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellat assumenda laborum ea velit, vitae porro animi, reiciendis laboriosam tempora tenetur provident esse nemo quasi inventore cupiditate eos quae iusto accusantium!</p>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellat assumenda laborum ea velit, vitae porro animi, reiciendis laboriosam tempora tenetur provident esse nemo quasi inventore cupiditate eos quae iusto accusantium!</p>
        <h2>Buttons</h2>
        <p><a href="#" class="btn btn-primary">Explore Courses</a></p>
        <p><a href="tel:9825495869" class="btn btn-primary btn-call">982-5495869</a></p>
        <p><a href="#" class="btn btn-secondary">View All Reviews</a></p>
        <p><a href="#" class="btn btn-secondary btn-play">Play Video</a></p>
        <hr>
        <hr>

        <h4 class="mb-2"><em>.block-title.text-center</em></h4>
        <header class="block-title text-center">
            <h2>
                <span>Why GLI?</span>
                Language Courses to Help <br> You Explore The World
            </h2>
        </header>
        <hr>
        <hr>
        <h2 class="my-2 text-center"><em>[.card-icon]</em></h2>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="card-icon text-center">
                        <div class="card-icon__top">
                            <i class="icon-skill"></i>
                            <h4>Skilled Teachers</h4>
                            <p>Each one is a native English speaker and is certified by the New York State Education Department.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <hr>
        <h2 class="my-2 text-center"><em>[.card-blog]</em></h2>
        <div class="container py-2 bg-primary">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <article class="card card-blog">
                        <picture class="card-blog__media">
                            <source srcset="<?php echo site_url(); ?>/wp-content/uploads/man-watching-his-favorite-movie-tablet.jpg" type="image/jpg">
                            <img src="<?php echo site_url(); ?>/wp-content/uploads/man-watching-his-favorite-movie-tablet.jpg" width="1000" height="667" loading="lazy" alt="Man watching his favorite movie">
                        </picture> <!-- /.card-blog__media -->

                        <div class="card-blog__content">
                            <div class="card-blog__title mb-1 mb-md-2">
                                <a href="#" class="stretched-link">
                                    <h3 class="h5 mb-0">General English Class for Everyone</h3>
                                </a>
                            </div>
                            <div class="card-blog__body">
                                <span class="card-blog__category">10 Lessons</span>
                                <span class="card-blog__date">6 Weeks</span>
                            </div>
                        </div> <!-- /.card-blog__content -->
                    </article><!-- /.card-blog -->
                </div>
            </div>
        </div>
        <hr>
        <hr>
        <h2 class="my-2 text-center"><em>[.card-blog.card-blog--alt]</em></h2>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <article class="card card-blog card-blog--alt">
                        <picture class="card-blog__media">
                            <source srcset="<?php echo site_url(); ?>/wp-content/uploads/man-watching-his-favorite-movie-tablet.jpg" type="image/jpg">
                            <img src="<?php echo site_url(); ?>/wp-content/uploads/man-watching-his-favorite-movie-tablet.jpg" width="1000" height="667" loading="lazy" alt="Man watching his favorite movie">
                        </picture> <!-- /.card-blog__media -->

                        <div class="card-blog__content">
                            <div class="card-blog__head">
                                <span class="card-blog__category">Speaking</span>
                            </div>
                            <div class="card-blog__title text-center">
                                <a href="#" class="stretched-link">
                                    <h3 class="h5 mb-0">How to Quickly Improve Your English Listening Skills</h3>
                                </a>
                            </div>
                        </div> <!-- /.card-blog__content -->
                    </article><!-- /.card-blog -->
                </div>
            </div>
        </div>
    </div>
    <hr>
    <hr>
    </div><!-- /.container -->
</section>

<?php
get_footer();
