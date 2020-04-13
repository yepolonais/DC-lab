<?php
/*
Template Name: Page sidebar
*/
get_header(); ?>

<div class="wrapper">
	<div class="container">
        <div class="row">
            <div class="col-md-8 col-xs-12">
                <div class="page-title">
                    <h2><?php the_title(); ?></h2>
                </div>

                <div class="page-content">
                    <?php while ( have_posts() ) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class('page-content'); ?>>
                        <div class="post-content">
                            <?php the_content(); ?>
                        </div>
                    </article>
                    <?php endwhile; ?>
                </div>
            </div>
            <div class="col-md-4 col-xs-12"><?php dynamic_sidebar( 'sidebar-page' ); ?></div>
        </div>
	</div><!--container-->
</div><!--wrapper-->
            
<?php get_footer(); ?>