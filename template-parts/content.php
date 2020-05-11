<article id="post-<?php the_ID(); ?>" <?php post_class( 'blog-post style-one'); ?>>
    <div class="blog-post-image">
        <?php
        $thumbnail_id = get_post_thumbnail_id( $post_id );
        $image_title = get_post(get_post_thumbnail_id())->post_title;
        $image_alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
        ?>
        <?php if ( has_post_thumbnail() ) { ?>
        <a href="<?php the_permalink(); ?>">
            <img src="<?php the_post_thumbnail_url('thumbnail'); ?>" title="<?php the_title_attribute(); ?>" alt="<?php echo $image_alt; ?>" />
        </a>
        <?php }
        else {}
        ?>
    </div>
    <div class="content-title">
        <div class="blog-post-title">
            <h3 class="title">
                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                    <?php the_title(); ?>
                </a>
            </h3>
        </div>

        <div class="blog-post-meta">
            <ul class="list-inline">
                <li class="meta-date"><span>Le <?php echo get_the_date(); ?></span></li>
                <li class="meta-category"><span class="fa fa-folder"><?php the_category(' , '); ?></span></li>
            </ul>
        </div>
    </div>
    <div class="blog-post-content">
        <p><?php the_excerpt(); ?></p>
    </div>
    <div class="blog-post-link">
        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="link">
            <?php _e( 'Lire la suite', 'montheme' ); ?>
        </a>
    </div>
</article>