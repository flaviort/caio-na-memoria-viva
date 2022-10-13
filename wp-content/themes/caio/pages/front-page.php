<?php
	/* Template Name: Home */

	$template_args = array(
		'body_class' => 'home',
		'css_files' => array(),
		'js_files' => array()
	);

	get_header( null, $template_args );
?>

<main id="main-content">

	<!-- banner -->
	<section id="banner">

		<div class="bg"></div>

		<div class="container-fluid no-padding">
			<div class="row">
				<div class="col-12">

					<div class="banner-slider swiper-container">
						<div class="swiper-wrapper">
							<?php
								if( have_rows('banner') ):
									while( have_rows('banner') ) : the_row(); ?>
										<div class="swiper-slide">
											<a href="<?php the_sub_field('banner_image_link'); ?>">
												<img src="<?php the_sub_field('banner_image_desktop'); ?>" alt="<?php the_sub_field('banner_image_alt'); ?>" class="desk">
												<img src="<?php the_sub_field('banner_image_mobile'); ?>" alt="<?php the_sub_field('banner_image_alt'); ?>" class="mob">
											</a>
										</div>
									<?php endwhile;
								endif;
							?>
						</div>
					</div>

					<div class="cf"></div>

					<div class="banner-slider-nav"></div>

					<nav class="social">
						<ul>
							<?php get_template_part('template-parts/social', 'none') ?>
						</ul>
					</nav>
					
				</div>
			</div>
		</div>
	</section>

	<!-- tour -->
	<section id="tour">
		<div class="container container-big">
			<div class="row">

				<div class="col-md-7 left">

					<img src="<?=get_site_url()?>/wp-content/themes/caio/assets/img/sunflower.png" alt="Girassol" class="sunflower">
					<div class="yellow-block"></div>
					<div class="house"></div>

				</div>

				<div class="col-md-5 right">
					<div>

						<p class="title-big trapeze-title">
							Acesse a <br />
							<span>Visita Guiada</span>
						</p>

						<a href="<?=get_site_url()?>/visita-guiada" class="black-button text-medium">
							Visite Agora
						</a>

					</div>
				</div>

			</div>
		</div>
	</section>

	<!-- featured text -->
	<section id="featured-text">
		<div class="container container-big">
			<div class="row">
				<div class="col-12">

					<div class="circle"></div>
					<div class="trapeze"></div>
					<img src="<?=get_site_url()?>/wp-content/themes/caio/assets/img/sunflower-blur-01.png" alt="Girassol" class="sunflower">

					<div class="content">

						<p class="text-bigger desc">

							<span class="quote-top">
								<?php get_template_part('assets/svg/quote-top', 'none'); ?>
							</span>

							<?php the_field('texto_destaque'); ?>
							
							<span class="quote-bottom">
								<?php get_template_part('assets/svg/quote-bottom', 'none'); ?>
							</span>
							
						</p>

						<p class="text-medium author">
							<?php the_field('texto_destaque_referencia'); ?>
						</p>

					</div>

				</div>
			</div>
		</div>
	</section>

	<!-- news -->
	<?php get_template_part('template-parts/news', 'none'); ?>

	<!-- partners -->
	<?php get_template_part('template-parts/partners', 'none'); ?>

</main>

<?php get_footer( null, $template_args ); ?>