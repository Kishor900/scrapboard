
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