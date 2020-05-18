<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package DClab
 */

get_header();
?>

<main id="primary" class="site-main">

	<h1>La page Archive ca déchire!!</h1>

	<?php if (have_posts()) : ?>

		<header class="page-header">
			<?php
			the_archive_title('<h1 class="page-title">', '</h1>');
			the_archive_description('<div class="archive-description">', '</div>');
			?>
		</header><!-- .page-header -->

		<?php
		/* Start the Loop */
		while (have_posts()) :
			the_post();

			/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
			get_template_part('template-parts/content', get_post_type());

		endwhile;

		// the_posts_navigation();
		?>



	<?php

	else :

		get_template_part('template-parts/content', 'none');

	endif;
	?>

<?php
// var_dump($wp_query);
var_dump($wp_query->found_posts);
the_posts_pagination(); ?>
<!-- affiche la pagination pour les articles -->
		<div class="pagination">
			<?php  theme_pagination(); ?>
		</div>
</main><!-- #main -->

<?php
get_sidebar();
get_footer();
