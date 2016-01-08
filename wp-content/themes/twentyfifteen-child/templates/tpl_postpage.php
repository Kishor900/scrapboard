<?php
/*
 * Template Name: Posts
 */
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
get_header("header1");
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
            $custom_query = new WP_Query('cat=-9'); // exclude category 9
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
<?php get_footer();
?>