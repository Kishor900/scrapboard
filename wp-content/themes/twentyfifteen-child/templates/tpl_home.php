<?php

/*
 * Template Name: Home
 */
get_header();
?>
<?php
// Start the Loop.
while (have_posts()) : the_post();
    the_content();
// End the loop.
endwhile;
?>
<?php get_footer();
?>
