<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
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
                    <div class="intro-lead-in" style="z-index: 999; position: relative; display: block;">Welcome To The ScrapBoard!</div>
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
        <div class="row" style="margin-top: 20px;">
            <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                <!-- thenew -->
                <ins class="adsbygoogle"
                     style="display:block"
                     data-ad-client="ca-pub-7361476368955757"
                     data-ad-slot="8772127622"
                     data-ad-format="auto"></ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
                <div class="row user-pre-head">
                    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                        <?php
                        the_title();
                        ?>
                    </div>
                </div>
                <div class="row user-info">
                    <div class="col-md-12">
                        <span class="text-muted"><span class="fa fa-user"></span> By <?php the_author(); ?></span>
                    </div>
                </div>
                <div class="row user-date">
                    <div class="col-md-12">
                        <span class="text-muted"><span class="fa fa-clock-o"></span> On <?php the_date(); ?></span>
                    </div>
                </div>
                <div class="row content-desc">
                    <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
                        <?php
                        /* translators: %s: Name of current post */
                        the_content(sprintf(
                                        __('Continue reading %s', 'twentyfifteen'), the_title('<span class="screen-reader-text">', '</span>', false)
                        ));

                        wp_link_pages(array(
                            'before' => '<div class="page-links"><span class="page-links-title">' . __('Pages:', 'twentyfifteen') . '</span>',
                            'after' => '</div>',
                            'link_before' => '<span>',
                            'link_after' => '</span>',
                            'pagelink' => '<span class="screen-reader-text">' . __('Page', 'twentyfifteen') . ' </span>%',
                            'separator' => '<span class="screen-reader-text">, </span>',
                        ));
                        ?>
                    </div><!-- .entry-content -->
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="tags">
                            <span>Tags : </span>
                            <?php
                            $tag_list = get_the_tag_list();
                            str_replace(",", '', $tag_list);
                            if ($tag_list) {
                                echo $tag_list;
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 sidebar-theme-slug">
                <?php get_sidebar("theme-slug"); ?>
            </div>
        </div>
    </div>
    <?php
// Author bio.
    if (is_single() && get_the_author_meta('description')) :
        get_template_part('author-bio');
    endif;
    ?>
</article><!-- #post-## -->
