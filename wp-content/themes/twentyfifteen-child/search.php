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
                <h2 class="section-heading">Search Results</h2>
                <h3 class="section-subheading text-muted"></h3>
            </div>
        </div>
        <div class="row">
            <?php
            if (have_posts()) :
                // Start the loop.
                while (have_posts()) : the_post();

                    /*
                     * Run the loop for the search to output the results.
                     * If you want to overload this in a child theme then include a file
                     * called content-search.php and that will be used instead.
                     */
                    get_template_part('content', 'search');
                endwhile;
                wp_reset_postdata(); // reset the query 
            else :
                get_template_part('content', 'none');
            endif;
            ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>