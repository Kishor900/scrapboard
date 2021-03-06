<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
get_header();
?>
<!-- Header -->
<header id="main-header" style="background-image:url(<?php echo get_stylesheet_directory_uri(); ?>/img/header-bg.jpg); background-repeat:none;background-attachment:scroll;background-position:center center;-webkit-background-size:cover;-moz-background-size:cover;background-size:cover;-o-background-size:cover;text-align:center;color:#fff">
    <div class="container">
        <div class="intro-text">
            <div class="intro-lead-in">Welcome To The ScrapBoard!</div>
            <div class="intro-heading">Crispy scraps for you !</div>
            <a href="#about" class="page-scroll btn btn-xl">Tell Me More</a>
        </div>
    </div>
</header>
<?php if (have_posts()) : ?>

    <section id="portfolio" class="bg-light-gray">
        <div class="container">

            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading"><?php
                        the_archive_title('<h1 class="page-title">', '</h1>');
                        the_archive_description('<div class="taxonomy-description">', '</div>');
                        ?></h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
            </div>
            <div class="row">
                <?php
                // Start the Loop.
                while (have_posts()) : the_post();

                    /*
                     * Include the Post-Format-specific template for the content.
                     * If you want to override this in a child theme, then include a file
                     * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                     */
                    get_template_part('content-archive', get_post_format());

                // End the loop.
                endwhile;

                // Previous/next page navigation.
                the_posts_pagination(array(
                    'prev_text' => __('Previous page', 'twentyfifteen'),
                    'next_text' => __('Next page', 'twentyfifteen'),
                    'before_page_number' => '<span class="meta-nav screen-reader-text">' . __('Page', 'twentyfifteen') . ' </span>',
                ));

            // If no content, include the "No posts found" template.
            else :
                get_template_part('content', 'none');

            endif;
            ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>
