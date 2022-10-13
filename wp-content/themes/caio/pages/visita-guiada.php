<?php
	/* Template Name: Visita Guiada */

	$template_args = array(
		'body_class' => 'tour',
		'css_files' => array(),
		'js_files' => array()
	);

	get_header( null, $template_args );
?>

<main id="main-content">

	<!-- banner internal -->
	<section id="banner-internal">

		<div class="bg"></div>
		
		<div class="container-fluid no-padding">
			<div class="row">
				<div class="col-12">

					<div class="image" style="background-image: url('<?=get_site_url()?>/wp-content/themes/caio/assets/img/banner-visita.jpg');">

						<?php if( get_field('direitos_autorais_banner') ) { ?>
							<p class="text-small photo-rights">
								<?php the_field('direitos_autorais_banner'); ?>
							</p>
						<?php } ?>

						<img src="<?=get_site_url()?>/wp-content/themes/caio/assets/img/sunflower.png" alt="Girassol" class="sunflower-01">
						<img src="<?=get_site_url()?>/wp-content/themes/caio/assets/img/sunflower-blur-01.png" alt="Girassol" class="sunflower-02">

						<h1 class="title-big trapeze-title">
							Visita <br />
							<span>Guiada</span>
						</h1>
						
					</div>

					<div class="cf"></div>

					<nav class="social">
						<ul>
							<?php get_template_part('template-parts/social', 'none') ?>
						</ul>
					</nav>
					
				</div>
			</div>
		</div>
	</section>

	<!-- middle -->
	<section id="middle">
		<div class="container container-big">
			<div class="row">
				<div class="col-12">

					<p class="text-medium desc">
						Para saber mais sobre cada ponto de interesse, clique nos "números" animados no mapa. Clique e arraste o mouse para descobrir mais pontos!
					</p>

					<?php get_template_part('template-parts/tour-map', 'none') ?>

					<div class="row infos text-medium">

						<div class="col-12">
							<p class="desc">
								Caso esteja tendo problemas para visualizar o mapa, você pode acessar os pontos de interesse através dos links abaixo:<br /><br />
							</p>
						</div>

						<div class="tour-points">
							<div class="row">
								<?php get_template_part('template-parts/tour-points', 'none') ?>
							</div>
						</div>

					</div>

				</div>
			</div>
		</div>
	</section>

	<!-- tour els -->
	<?php get_template_part('template-parts/tour-els', 'none') ?>

</main>

<?php get_footer( null, $template_args ); ?>