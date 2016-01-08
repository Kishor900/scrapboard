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
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php
    $thumb = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
    $url = $thumb;
    ?>
    <header id="post-header" style="width:100%; height:100%; background-image:url('<?php echo $url; ?>'); background-repeat:none; background-attachment:scroll; background-position:center center;-webkit-background-size:cover;-moz-background-size:cover;background-size:cover;-o-background-size:cover;text-align:center;color:#fff">
        <div id="gradiant"></div>
        <?php
        if (is_single()) :
            ?>
            <div class="container" style="display:initial;">
                <div class="intro-text">
                    <div class="intro-lead-in" style="z-index: 999; position: relative; display: block;"><?php the_title(); ?></div>
                    <!--                    <div class="intro-heading" style="z-index: 999; position: relative; display: block;"><?php
                    the_title();
                else :
                    the_title(sprintf());
                endif;
                ?></div>-->
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
<!--        <div class="row" style="margin-top: 20px;">
            <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                 thenew 
                <ins class="adsbygoogle"
                     style="display:block"
                     data-ad-client="ca-pub-7361476368955757"
                     data-ad-slot="8772127622"
                     data-ad-format="auto"></ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            </div>
        </div>-->
        <div class="row">
            <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
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
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <?php if (get_next_post()) { ?>
                            <a href='<?php echo get_next_post()->guid; ?>' class="btn btn-warning pull-right nav-buttons" aria-hidden="true">>> <?php echo get_next_post()->post_title; ?></a>
                        <?php } if (get_previous_post()) { ?>   
                            <a href='<?php echo get_previous_post()->guid; ?>' class="btn btn-warning pull-left nav-buttons" aria-hidden="true"><< <?php echo get_previous_post()->post_title; ?></a> 
                        <?php } ?>
                    </div>
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
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 sidebar-theme-slug">
                <?php get_sidebar("theme-slug"); ?>
            </div>
        </div>
    </div>
</article><!-- #post-## -->
<?php get_footer(); ?>
