<?php
	/* Template Name: Conatct */

	$template_args = array(
		'body_class' => 'contact',
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

					<div class="image" style="background-image: url('<?=get_site_url()?>/wp-content/themes/caio/assets/img/banner-contato.jpg');">

						<?php if( get_field('direitos_autorais_banner') ) { ?>
							<p class="text-small photo-rights">
								<?php the_field('direitos_autorais_banner'); ?>
							</p>
						<?php } ?>

						<img src="<?=get_site_url()?>/wp-content/themes/caio/assets/img/sunflower.png" alt="Girassol" class="sunflower-01">
						<img src="<?=get_site_url()?>/wp-content/themes/caio/assets/img/sunflower-blur-01.png" alt="Girassol" class="sunflower-02">

						<h1 class="title-big trapeze-title">
							Entre em <br />
							<span>Contato</span>
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

				<div class="col-md-6 left">

					<div class="image">
						
						<div class="yellow-circle"></div>

						<p class="text-small copyrights">
							Foto: <span>Dulce Helfer</span>
						</p>

						<img src="<?=get_site_url()?>/wp-content/themes/caio/assets/img/contato.jpg" alt="Caio F. | Foto: Dulce Helfer">

					</div>

					<div class="black-trapeze"></div>

				</div>

				<div class="col-md-6 right">

					<p class="text-big title">
						Alguma dúvida ou sugestão? 
					</p>

					<p class="text-medium desc">
						Entre em contato e logo entraremos em contato!
					</p>

					<?php echo do_shortcode( '[contact-form-7 id="25" title="Formulário de Contato"]' ); ?>

				</div>

			</div>
		</div>
	</section>

	<!-- contact success -->
	<div id="contact-success" class="popup">
		<div class="box">
			<div class="fix">
			
				<h2 class="title-big title">
					Sucesso
				</h2>

				<p class="text-medium desc">
					Sua mensagem foi enviada com sucesso! <br />
					Entraremos em contato o mais breve possível.
				</p>
				
				<button class="black-button text-medium" onclick="$.fancybox.close()">
					Fechar
				</button>

			</div>
		</div>
	</div>

	<!-- contact error -->
	<div id="contact-error" class="popup">
		<div class="box">
			<div class="fix">
			
				<h2 class="title-big title">
					Erro
				</h2>

				<p class="text-medium desc">
					Ocorreu um erro ao enviar a sua mensagem. <br />
					Por favor, tente novamente em alguns minutos.
				</p>

				<button class="black-button text-medium" onclick="$.fancybox.close()">
					Fechar
				</button>

			</div>
		</div>
	</div>

</main>

<?php get_footer( null, $template_args ); ?>