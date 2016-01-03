<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
get_header();
?>    
<script>
    document.getElementById("main-header").style.display = "none";
    document.getElementById("exchangable").innerHTML = "<li><a href='<?php echo get_site_url(); ?>' class='page-scroll'><span class='fa fa-home' style='font-size: 40px;'></span></a></li>"
</script>
<?php
// Start the loop.
while (have_posts()) : the_post();

    /*
     * Include the post format-specific template for the content. If you want to
     * use this in a child theme, then include a file called called content-___.php
     * (where ___ is the post format) and that will be used instead.
     */
    get_template_part('content', get_post_format());
    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12">
                <?php if (get_next_post()) { ?>
                    <a href="<?php get_next_post_link(); ?>" class="btn btn-warning pull-right nav-buttons" aria-hidden="true">>> <?php echo get_next_post()->post_title; ?></a>
                <?php } if (get_previous_post()) { ?>   
                    <a href="<?php get_previous_post_link(); ?>" class="btn btn-warning pull-left nav-buttons" aria-hidden="true"><< <?php echo get_previous_post()->post_title; ?></a> 
                <?php } ?></div>
        </div>
        <div class="row">
            <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
                <?php
                // If comments are open or we have at least one comment, load up the comment template.
                if (comments_open() || get_comments_number()) :
                    comments_template();
                endif;
                ?>
                <?php
// End the loop.
            endwhile;
            ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>
