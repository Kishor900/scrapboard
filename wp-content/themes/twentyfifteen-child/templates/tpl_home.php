<?php
/*
 * Template Name: Home
 */
get_header();
?>
<!-- Portfolio Grid Section -->
<section id="portfolio" class="bg-light-gray">
    <div class="container">

        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Blogs</h2>
                <h3 class="section-subheading text-muted"></h3>
            </div>
        </div>
        <div class="row">
            <?php
            $custom_query = new WP_Query('cat=-9,-3'); // exclude category 9
            while ($custom_query->have_posts()) : $custom_query->the_post();
                ?>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="<?php the_permalink(); ?>" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'large')[0]; ?>" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4><?php the_title(); ?></h4>
                        <p class="text-muted"><?php
                            $category = "";
                            foreach (get_the_category() as $object) {
                                $category .= $object->name . ",";
                            }
                            $category = rtrim($category, ",");
                            echo $category;
                            ?></p>
                    </div>
                </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); // reset the query  ?>
        </div>
    </div>
</section>
<!-- About Section --> 
<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">About</h2>
                <h3 class="section-subheading text-muted">A little bit spicy !</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <ul class="timeline">
                    <?php
                    $i = 0;
                    $custom_query = new WP_Query('cat=3'); // include about category only
                    while ($custom_query->have_posts()) : $custom_query->the_post();
                        ?>
                        <?php if ($i % 2 != 0) { ?>
                            <li>
                                <div class="timeline-image">
                                    <img class="img-circle img-responsive" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())); ?>" alt="">
                                </div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4 class="subheading"><?php the_title(); ?></h4>
                                    </div>
                                    <div class="timeline-body">
                                        <p class="text-muted"><?php the_content(); ?></p>
                                    </div>
                                </div>
                            </li>
                            <?php
                            $i++;
                        } else {
                            ?>
                            <li class="timeline-inverted">
                                <div class="timeline-image">
                                    <img class="img-circle img-responsive" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())); ?>" alt="">
                                </div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4 class="subheading"><?php the_title(); ?></h4>
                                    </div>
                                    <div class="timeline-body">
                                        <p class="text-muted"><?php the_content(); ?></p>
                                    </div>
                                </div>
                            </li>
                            <?php
                            $i++;
                        } endwhile;
                    ?>
                    <?php wp_reset_postdata(); // reset the query     ?>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>Be Part
                                <br>Of Our
                                <br>Story!</h4>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section id="team" class="bg-light-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">The Amazing Team</h2>
                <h3 class="section-subheading text-muted">They are cool trust me !</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="team-member">
                    <img style="width:60%;" src="<?php echo get_stylesheet_directory_uri() . "/img/team/1.jpg"; ?>" class="img-responsive img-circle" alt="">
                    <h4>Kishor Parida</h4>
                    <p class="text-muted">Lead Developer</p>
                    <ul class="list-inline social-buttons">
                        <li><a href="https://twitter.com/kishorparida1" target="new"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="https://www.facebook.com/kishor.kisho.kish.kis.ki.k.me" target="new"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="https://www.instagram.com/i_kishor/" target="new"><i class="fa fa-instagram"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="team-member">
                    <img style="width:60%;" src="<?php echo get_stylesheet_directory_uri() . "/img/team/2.jpg"; ?>" class="img-responsive img-circle" alt="">
                    <h4>Satyabrata Acharya</h4>
                    <p class="text-muted">Blogger</p>
                    <ul class="list-inline social-buttons">
                        <li><a href="https://www.instagram.com/satyabratacharya/" target="new"><i class="fa fa-instagram"></i></a>
                        </li>
                        <li><a href="https://www.facebook.com/satya.definecirius?fref=ts" target="new"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="team-member">
                    <img style="width:60%;" src="<?php echo get_stylesheet_directory_uri() . "/img/team/3.jpg"; ?>" class="img-responsive img-circle" alt="">
                    <h4>Nilanchal Nayak</h4>
                    <p class="text-muted">Photographer</p>
                    <ul class="list-inline social-buttons">
                        <li><a href="https://twitter.com/m_neel" target="new"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="https://www.facebook.com/nilanchal.nayak?fref=ts" target="new"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="https://www.instagram.com/neel_aa/" target="new"><i class="fa fa-instagram"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center">
                <p class="large text-muted">We see - we capture, we pick - we write, we put each bit of effort to share crispy scraps here :)</p>
            </div>
        </div>
    </div>
</section>
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Contact Us</h2>
                <h3 class="section-subheading text-muted">If you have poets, stories any anything to write and want it to be published, send us your testimony. We will add you as a member of the scrapboard.</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <?php
                echo do_shortcode('[contact-form-7 id="45" title="Contact form 1"]');
                ?>
            </div>
        </div>
    </div>
</section>
<?php get_footer();
?>
