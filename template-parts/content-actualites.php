<?php
 //* Template de la page actualités
?>

<div class="wrapper">
	<div class="container">
		<section class="home-blog">
			<h2>Les dernières Actualités</h2>
					<div class="tri">
			<?php dclab_tri_articles();?>
		</div>
			<?php dclab_display_articles() ?>
		</section>

		<div class="tri">
			<?php dclab_tri_articles(); ?>
		</div>
	</div> <!--container-->
</div> <!--wrapper-->

