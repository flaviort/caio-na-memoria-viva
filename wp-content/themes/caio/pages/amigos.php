<?php
	/* Template Name: Amigos */

	$template_args = array(
		'body_class' => 'friends',
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

					<div class="image" style="background-image: url('<?=get_site_url()?>/wp-content/themes/caio/assets/img/banner-amigos.jpg');">

						<?php if( get_field('direitos_autorais_banner') ) { ?>
							<p class="text-small photo-rights">
								<?php the_field('direitos_autorais_banner'); ?>
							</p>
						<?php } ?>

						<img src="<?=get_site_url()?>/wp-content/themes/caio/assets/img/sunflower.png" alt="Girassol" class="sunflower-01">
						<img src="<?=get_site_url()?>/wp-content/themes/caio/assets/img/sunflower-blur-01.png" alt="Girassol" class="sunflower-02">

						<h1 class="title-big trapeze-title">
							<span>Amigos</span>
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

	<!-- network -->
	<section id="network">
		<div class="container container-big">
			<div class="row">
				<div class="col-12">

					<div class="top">

						<h3 class="title-big trapeze-title">
							<span>Rede de Amigos</span>
						</h3>

						<h3 class="title-medium title">
							Participe da Rede de Amigos do Caio F. de Abreu.
						</h3>

					</div>

					<div class="infos">

						<p class="text-medium desc">
							Este espaço é dedicado a conectar amigos, fãs, pesquisadores e admiradores de Caio F. Participe! Entre em contato pelo e-mail:
						</p>

						<a href="mailto:caiofentrenos@gmail.com" target="_blank" class="yellow-button text-medium">
							caiofentrenos@gmail.com
						</a>

					</div>

				</div>
			</div>
		</div>
	</section>

	<!-- merchan -->
	<section id="merchan">

		<div class="bg"></div>

		<div class="container container-big">
			<div class="row">
				<div class="col-12">

					<h3 class="title-big trapeze-title">
						Associação de Amigos <br />
						<span>Caio Fernando de Abreu</span>
					</h3>

				</div>
			</div>
		</div>
	</section>

	<!-- caio -->
	<section id="caio">
		<div class="container container-big">
			<div class="row">

				<div class="col-lg-6 left">

					<div class="image">
						
						<div class="yellow-circle">
							<?php get_template_part('assets/svg/doodle', 'none'); ?>
						</div>

						<p class="text-small copyrights">
							Foto: <span>Juvenal Pereira</span>
						</p>

						<img src="<?=get_site_url()?>/wp-content/themes/caio/assets/img/caio-f.jpg" alt="Caio F. | Foto: Juvenal Pereira">

					</div>

					<div class="black-trapeze"></div>

				</div>

				<div class="col-lg-6 right">

					<p class="text-medium desc">
						A <strong>Associação de Amigos do Caio Fernando Abreu - AACF</strong> é uma entidade sem fins lucrativos que surgiu em 2010, com Fórum na Cidade de Porto Alegre, e com o objetivo de preservar, organizar e divulgar a obra e biografia do escritor gaúcho.<br /><br />

						A primeira ação da AACF consistiu na arrecadação de apoio para um projeto já existente, de construção de um Centro Cultural na casa onde CaioF viveu com a família. <strong>Localizada no Bairro do Menino de Deus, em Porto Alegre, o endereço seria ponto de encontro de todo o acervo do escritor. No entanto, o imóvel foi vendido, o que impossibilitou a continuação do projeto.</strong><br /><br />

						Após a venda do espaço, a ideia foi redesenhada pela associação, que redirecionou seus esforços para a criação de um espaço público virtual destinado à reunião, organização e democratização da obra do autor, o Site Oficial Caio Fernando Abreu.<br /><br />

						Fazem parte da AACF artistas, associados e demais voluntários que, através do blog <a href="http://associacaocaiof.blogspot.com/" target="_blank">www.associacaocaiof.blogspot.com</a> e das mídias sociais.
					</p>

					<a href="https://docs.google.com/forms/d/e/1FAIpQLScJVb8f5VtdOSgFT5mCRT8k3_G_euxNH6pGxFUwx0zb6kQ2Qg/viewform" target="_blank" class="black-button text-medium">
						Associe-se
					</a>

				</div>

			</div>
		</div>
	</section>

	<!-- partners -->
	<section id="partners">

		<div class="bg"></div>
	
		<div class="container container-big">
			<div class="row">
				<div class="col-12">
	
					<div class="top">
	
						<div class="left">
	
							<p class="title-big trapeze-title">
								Colaboradores <br />
								<span>Parceiros e Pesquisadores</span>
							</p>
	
						</div>
	
						<div class="right">
							<img src="<?=get_site_url()?>/wp-content/themes/caio/assets/img/sunflower.png" alt="Girassol" class="sunflower">
						</div>
						
					</div>
	
					<div class="bottom">
						<div class="box">
							<ul class="list text-medium">
								<?php
									if( have_rows('amigos') ):
										while( have_rows('amigos') ) : the_row(); ?>
											<li>
												<p>
													<?php the_sub_field('nome'); ?>
												</p>
											</li>
										<?php endwhile;
									endif;
								?>
							</ul>
						</div>
					</div>
	
				</div>
			</div>
		</div>
	</section>

</main>

<?php get_footer( null, $template_args ); ?>