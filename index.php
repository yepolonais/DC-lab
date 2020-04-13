<?php
/*
 * The main template file.
 */

get_header(); ?>

<div class="wrapper">
	<div class="container">
	
		<div class="blog-list">
			<div class="row">
				<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
				<div class="col-md-4 col-ms-6 col-xs-12 item">
					<?php get_template_part( 'template-parts/content', '' ); ?>
				</div>
				<?php endwhile; ?>
				<?php else : ?>
				<?php get_template_part( 'template-parts/content', 'none' ); ?>
				<?php endif; ?>
			</div>
		</div>
		<div class="pagination">
			<?php montheme_pagination(); ?>
		</div>
		
	</div><!--container-->
</div><!--wrapper-->

<?php get_footer(); ?>