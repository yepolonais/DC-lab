<?php
/*
Template Name: Accueil
*/
get_header(); ?>

	<div class="home-banner" style="background: url(<?php bloginfo('template_directory'); ?>/images/slides/slide-01.jpg) center no-repeat;"></div>
	
	<div class="wrapper">
		<div class="container">
		
        <!--<img src="<?php //the_field('image_presentation'); ?>"/>-->
        <?php //the_field('texte_presentation'); ?>
            <div class="row">
                <div class="col-md-6 col-ms-6 col-xs-12">
                    <div class="bio-image">
                    <?php
                    $bioimage = get_field('image_presentation');
                    //$thumb = 'thumbnail'; // (thumbnail, medium, large, full or custom size)
                    //$medium = 'medium'; // (thumbnail, medium, large, full or custom size)
                    //$large = 'large'; // (thumbnail, medium, large, full or custom size)
                    $perso = 'col_6'; // (thumbnail, medium, large, full or custom size)
                    $imageperso = $bioimage['sizes'][ $perso ];
                    if ($imageperso): ?>
                        <img src="<?php echo $imageperso; ?>" title="<?php echo $bioimage['title']; ?>" alt="<?php echo $bioimage['alt']; ?>" />
                    <?php endif;
                    ?>
                    </div>
                </div>
                <div class="col-md-6 col-ms-6 col-xs-12">
                    <div class="bio-text">
                    <?php
                    $biotext = get_field('texte_presentation');
                    if ($biotext): ?>
                        <div class=""><?php echo $biotext; ?></div>
                    <?php endif;
                    ?>
                    </div>
                </div>
            </div>
            
            <section id="" class="home-about2">
                <h2>Produits choisis</h2>
                
                <?php
                    $posts = get_field('liens_produits');
                    if($posts): 
                ?>
                <div class="row">
                    <?php 
                        foreach( $posts as $post): // ne pas changer $post IMPORTANT
                            setup_postdata($post); 
                    ?>

                    <div class="col-md-4 col-ms-6 col-xs-12 item">
                        <?php get_template_part( 'template-parts/product', 'loop' ); ?>
                    </div>

                    <?php endforeach; ?>
                </div>

                <?php 
                    wp_reset_postdata(); // IMPORTANT - réinitialiser l'objet $post sur la requête principale
                    endif; 
                ?>
            </section>

            <section id="" class="home-product">
                <h2>Meilleures ventes</h2>
                <?php
				$params = array(
					'post_type' => 'product',
					'meta_key' => 'total_sales',
					'orderby' => 'meta_value_num',
					'posts_per_page' => 3,
				);
                $wc_query = new WP_Query($params);
                ?>

                <?php if ($wc_query->have_posts()) : ?>
                <div class="row">
                    <?php while ($wc_query->have_posts()) :
                    $wc_query->the_post(); ?>
                    <div class="col-md-4 col-ms-6 col-xs-12 item">
                        <?php get_template_part( 'template-parts/product', 'loop' ); ?>
                    </div>
                    <?php endwhile; ?>
                </div>
                    <?php wp_reset_postdata(); ?>
                    <?php else:  ?>
                    <div>
                        <p><?php _e( 'Désolé, aucun produit à afficher.', 'montheme' ); ?></p>
                    </div>
                <?php endif; ?>
            </section>
            
            <section id="" class="home-product">
                <h2>QUERY des Produits</h2>
                <?php
                $params = array(
                    'posts_per_page' => 3,
                    'post_type' => 'product'
                );
                $wc_query = new WP_Query($params);
                ?>

                <?php if ($wc_query->have_posts()) : ?>
                <div class="row">
                    <?php while ($wc_query->have_posts()) :
                    $wc_query->the_post(); ?>
                    <div class="col-md-4 col-ms-6 col-xs-12 item">
                        <?php get_template_part( 'template-parts/product', 'loop' ); ?>
                    </div>
                    <?php endwhile; ?>
                </div>
                    <?php wp_reset_postdata(); ?>
                    <?php else:  ?>
                    <div>
                        <p><?php _e( 'Désolé, aucun produit à afficher.', 'montheme' ); ?></p>
                    </div>
                <?php endif; ?>
            </section>
            
            <section id="" class="home-blog">
                <h2>QUERY des articles du Blog</h2>
                <?php 
                $args = array(
                    'post-type' =>'post',
                    'showposts' =>'3',
                    //'cat' => '3',
                    //'category_name' => 'categorie-02',
                    'orderby' =>'date',
                    'order' => 'desc',
                    'ignore_sticky_post' => 1,
                ); ?>
                <?php
                $the_query = new WP_Query( $args ); ?>
                <?php if ( $the_query->have_posts() ) : ?>
                <div class="row">
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <div class="col-md-4 col-ms-6 col-xs-12 item">
                    <?php get_template_part( 'template-parts/content', '' ); ?>
                    </div>
                <?php endwhile; ?>
                <!-- end of the loop -->
                </div>
                    <?php wp_reset_postdata(); ?>
                <?php else : ?>
                    <p><?php _e( 'Désolé, aucun article ne correspond à votre recherche.', 'montheme' ); ?></p>
                <?php endif; ?>
            </section>
    
		</div><!--container-->
	</div><!--wrapper-->
            
<?php get_footer(); ?>