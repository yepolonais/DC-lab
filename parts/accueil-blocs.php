<div class="container">
		<div class="row">
			<div class="col-sm">
				<h4>ACTUALITES</h4>
				<div class="actu">
					<?php while ( have_posts() ) : the_post(); ?>

						<article id="post-<?php the_ID(); ?>" <?php post_class('page-content'); ?>>
							<div class="post-content">
								<?php the_content(); ?>
							</div>
						</article>

					<?php endwhile; ?>

				</div>
			</div>
			<div class="col-sm">
				FORUM
				<div class="actu">
					<?php while ( have_posts() ) : the_post(); ?>

						<article id="post-<?php the_ID(); ?>" <?php post_class('page-content'); ?>>
							<div class="post-content">
								<?php the_content(); ?>
							</div>
						</article>

					<?php endwhile; ?>

				</div>
			</div>
			<div class="col-sm">
				ÉVÉNEMENTS
				<div class="actu">
					<?php while ( have_posts() ) : the_post(); ?>

						<article id="post-<?php the_ID(); ?>" <?php post_class('page-content'); ?>>
							<div class="post-content">
								<?php the_content(); ?>
							</div>
						</article>

					<?php endwhile; ?>

				</div>
			</div>
		</div>
	</div>