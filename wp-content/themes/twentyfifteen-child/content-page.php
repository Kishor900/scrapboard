<div class="row user-pre-head">
    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
        <?php
        the_title();
        ?>
    </div>
</div>
<div class="row user-info">
    <div class="col-md-12">
<!--                        <span class="text-muted"><span class="fa fa-user"></span> By <?php the_author(); ?></span>-->
        <span class="text-muted" style='position:relative;'>
            <span style="border-radius: 40px;" >
                <?php echo get_avatar(get_the_author_ID()); ?>
            </span>
            <div style="position:absolute;position: absolute; width: 300px; top: 0; left: 102px;">
                By 
                <a target="new" href="<?php echo $a_link; ?>" style="text-decoration: none; color: #383838;"> <?php the_author(); ?></a>
                <br>
                <span class="fa fa-clock-o"></span> On <?php the_date(); ?>
            </div>
        </span>
    </div>
</div>
<div class="row content-desc">
    <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
        <span class="text-muted" style="font-size: 23px; font-style: italic;"><?php echo $bio; ?></span>
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