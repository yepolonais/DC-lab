<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	<h2 class="page-title"><?php _e( 'Aucun résultat', 'montheme' ); ?></h2>
	<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
	<p><?php printf( __( 'Prêt à publier votre premier post ? <a href="%1$s">C\'est par ici</a>.', 'montheme' ), admin_url( 'post-new.php' ) ); ?></p>
	<?php elseif ( is_search() ) : ?>
	<p><?php _e( 'Désolé, mais rien ne correspond à vos termes de recherche. Essayez s\'il vous plaît de nouveau avec des mots-clés différents.', 'montheme' ); ?></p>
	<?php else : ?>
	<p><?php _e( 'Il semble que nous ne trouvons pas ce que vous cherchez. Peut-être la recherche peut vous aider.', 'montheme' ); ?></p>
	<?php endif; ?>
</div><!-- .page-content -->
