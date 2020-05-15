<?php

/**
 *
 * Template de la page actualités
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package DClab
 */





?>
<div class="wrapper">
	<div class="container">



		<section id="" class="home-blog">
			<h2>Les dernières Actualités</h2>
			<?php
			$args = array(
				'post-type' => 'post',
				'showposts' => '6',
				//'cat' => '3',
				//'category_name' => 'categorie-02',
				'orderby' => 'date',
				'order' => 'desc',
				'ignore_sticky_post' => 1,
			); ?>

			<?php
			$the_query = new WP_Query($args); ?>
			<?php if ($the_query->have_posts()) : ?>
				<div class="row">
					<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
						<div class="col-md-4 col-ms-6 col-xs-12 item">


							<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
								<header class="entry-header">
									<?php
									the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
									if ('post' === get_post_type()) :
									?>
										<div class="entry-meta">
											<?php

											$datePublication = get_the_time('G');
											$dateActuelle = current_time('timestamp');
											echo 'publié il y a ' . human_time_diff($datePublication, $dateActuelle);
											?>

										</div><!-- .entry-meta -->
									<?php endif; ?>
								</header><!-- .entry-header -->

								<section>

									<div>
										<?php // dclab_post_thumbnail('article-size');
										?>
										<!--TODO: essayer de piger pkoi cela ne marche pas -->
										<?php //  the_post_thumbnail(array( 30, 10 ));
										?>

										<?php the_post_thumbnail('article-size'); ?>
										<?php the_excerpt(); ?>
									</div>

									<div id="commentaires" class="comments">
										<i class="fas fa-comments"></i>
										<?php echo get_comments_number(); ?>
									</div>

								</section>

								<footer class="entry-footer">
									<?php the_category(); ?>
								</footer><!-- .entry-footer -->
							</article>
							<!-- #post-<?php the_ID(); ?> -->

						</div>
					<?php endwhile; ?>
					<!-- end of the loop -->
				</div>
				<?php wp_reset_postdata(); ?>
			<?php else :	?>
				<p><?php _e('Désolé, aucun article ne correspond à votre recherche.', 'montheme'); ?></p>
			<?php endif;	?>
		</section>
		<!-- affiche la pagination pour les articles -->
		<!--TODO: ne fonctionne pas en l'état, pb avec l'objet WP-Query-->
		<?php

		// var_dump($wp_query->found_posts);
		// var_dump($wp_query);
		// the_posts_pagination($the_query);
		?>
		<div class="pagination">
			<?php
			var_dump($the_query);
			var_dump($the_query->max_num_pages);
			var_dump($the_query->query_vars['paged']);
			theme_pagination($the_query);
			?>
		</div>



	</div>
	<!--container-->
</div>
<!--wrapper-->
