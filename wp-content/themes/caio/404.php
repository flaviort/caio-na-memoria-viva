<?php
	/* Template Name: 404 */

	$template_args = array(
		'body_class' => 'error',
		'css_files' => array(

		),
		'js_files' => array(

		)
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

						<img src="<?=get_site_url()?>/wp-content/themes/caio/assets/img/sunflower.png" alt="Girassol" class="sunflower-01">
						<img src="<?=get_site_url()?>/wp-content/themes/caio/assets/img/sunflower-blur-01.png" alt="Girassol" class="sunflower-02">

						<h1 class="title-big trapeze-title">
							Página não <br />
							<span>Encontrada</span>
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

					<h2 class="title-bigger trapeze-title">
						Oops! <br />
						<span>Erro 404</span>
					</h2>

					<p class="text-medium desc">
						<b>Desculpe! A página que você buscou está indisponível.</b><br />
						Por favor, fique a vontade para buscar outras sessões em nosso site, ou volte para a página inicial.
					</p>

					<a href="<?=get_site_url()?>" class="text-medium black-button">
						Voltar a página inicial
					</a>

				</div>
			</div>
		</div>
	</section>

</main>

<?php get_footer();