<?php get_header(); ?>
<?php
$thumb = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
$url = $thumb;
?>
<header id="post-header" style="width:100%; height:100%; background-image:url('<?php echo $url; ?>'); background-repeat:none; background-attachment:scroll; background-position:center center;-webkit-background-size:cover;-moz-background-size:cover;background-size:cover;-o-background-size:cover;text-align:center;color:#fff">
    <div id="gradiant"></div>
    <div class="container" style="display:initial;">
        <div class="intro-text">
            <div class="intro-lead-in" style="z-index: 999; position: relative; display: block;">
                <?php the_title(); ?>
            </div>
            <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                <ul class="list-inline social-buttons">
                    <li><a href="https://twitter.com/scrapboard123" target="new"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li><a href="https://www.facebook.com/scrapboard.co.in" target="new"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li><a href="http://www.stumbleupon.com/stumbler/kishorparida7777" target="new"><i class="fa fa-stumbleupon"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header><!-- .entry-header -->
<div class="container">
    <div class="row">
        <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
            <?php
// Start the loop.
            while (have_posts()) : the_post();

// Include the page content template.
                get_template_part('content', 'page');

// If comments are open or we have at least one comment, load up the comment template.
                if (comments_open() || get_comments_number()) :
                    comments_template();
                endif;

// End the loop.
            endwhile;
            ?>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 sidebar-theme-slug">
            <?php get_sidebar("theme-slug"); ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>
