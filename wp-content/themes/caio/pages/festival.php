<?php
	/* Template Name: Festival */

	$template_args = array(
		'body_class' => 'festival',
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

					<div class="image" style="background-image: url('<?=get_site_url()?>/wp-content/themes/caio/assets/img/banner-festival.jpg');">

						<?php if( get_field('direitos_autorais_banner') ) { ?>
							<p class="text-small photo-rights">
								<?php the_field('direitos_autorais_banner'); ?>
							</p>
						<?php } ?>

						<img src="<?=get_site_url()?>/wp-content/themes/caio/assets/img/sunflower.png" alt="Girassol" class="sunflower-01">
						<img src="<?=get_site_url()?>/wp-content/themes/caio/assets/img/sunflower-blur-01.png" alt="Girassol" class="sunflower-02">

						<h1 class="title-big trapeze-title">
							Sobre <br />
							<span>O Festival</span>
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

	<!-- what -->
	<section id="what">
		<div class="container container-big">
			<div class="row">

				<div class="col-12 top">

					<h2 class="title-big trapeze-title">
						<span>O que é o Festival?</span>
					</h2>

					<p class="title-medium desc">
						O Festival  Caio entre Nós é um evento que nasce do sonho de divulgar celebrar e homenagear a vida e obra do escritor Caio Fernando Abreu.
					</p>

				</div>

				<div class="col-lg-6 col-lg-push-6 right">

					<div class="image">
						
						<div class="circle">
							<?php get_template_part('assets/svg/doodle', 'none'); ?>
						</div>

						<p class="text-small copyrights">
							Foto: <span>Dulce Helfer</span>
						</p>

						<img src="<?=get_site_url()?>/wp-content/themes/caio/assets/img/contato.jpg" alt="Caio F. | Foto: Dulce Helfer">

					</div>

					<div class="trapeze"></div>

				</div>

				<div class="col-lg-6 col-lg-pull-6 left">

					<p class="text-medium desc">									
						Sua literatura, suas obras artísticas estão mais atuais do que nunca e Caio F, como é carinhosamente chamado segue conquistando uma legião de leitores, fãs , admiradores de todas gerações. Por entender a relevância e importância do escritor, autor, dramaturgo, cronista, contista, jornalista e romancista para as artes, é que em  2017 foi realizada a primeira edição do Festival, quando Caio completaria  70 anos.<br /><br />

						Foi uma semana inteira com mostra teatral, bate-papos literários e sessões de cinema, e diversas atividades com entrada franca. Para o próximo ano em que Caio completaria 75 anos os organizadores do projeto Luis Artur Nunes , Marcos Breda  Ivana Dalle e equipe,  Ana Lombardi, Israel Castro,  Luis Francisco Wasileski estão desde já iniciando os preparativos.<br /><br />

						<b>Você tem espetáculos da obra do Caio e gostaria de participar? Gostaria de colaborar?</b>
					</p>

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

					<h3 class="text-big title">
						Você tem espetáculos da obra do Caio e gostaria de participar? <br />
						<span>Gostaria de colaborar? Fale com a gente!</span>
					</h3>

					<div class="social">

						<a href="https://www.instagram.com/caiofentrenos/" target="_blank">
							<?php get_template_part('assets/svg/instagram', 'none'); ?>
						</a>

						<a href="https://www.facebook.com/caiofentrenos" target="_blank">
						<?php get_template_part('assets/svg/facebook', 'none'); ?>
						</a>

						<p class="text-medium">
							@caiofentrenos
						</p>

					</div>

				</div>
			</div>
		</div>
	</section>

	<!-- gallery -->
	<section id="gallery">
		<div class="container container-big">
			<div class="row">
				<div class="col-12">

					<h3 class="text-big title">
						Vem junto nesta grande onda de amor que é o 
					</h3>

					<h3 class="title-big trapeze-title">
						<span>Caio Fernando Abreu entre nós</span>
					</h3>

					<div class="gallery">
						<div class="row">
							<?php
								if( have_rows('fotos') ):
									while( have_rows('fotos') ) : the_row(); ?>
										<div class="col-6 col-md-4">
											<a href="<?php the_sub_field('foto'); ?>" data-fancybox="gallery">

												<span class="text-small photo-rights">
													<?php the_sub_field('direitos'); ?>
												</span>

												<img src="<?php the_sub_field('foto'); ?>" alt="<?php the_sub_field('direitos'); ?>">

											</a>
										</div>
									<?php endwhile;
								endif;
							?>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>

</main>

<?php get_footer( null, $template_args ); ?>