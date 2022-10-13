<?php
	/* Template Name: Projeto */

	$template_args = array(
		'body_class' => 'project',
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

					<div class="image" style="background-image: url('<?=get_site_url()?>/wp-content/themes/caio/assets/img/banner-projeto.jpg');">

						<?php if( get_field('direitos_autorais_banner') ) { ?>
							<p class="text-small photo-rights">
								<?php the_field('direitos_autorais_banner'); ?>
							</p>
						<?php } ?>

						<img src="<?=get_site_url()?>/wp-content/themes/caio/assets/img/sunflower.png" alt="Girassol" class="sunflower-01">
						<img src="<?=get_site_url()?>/wp-content/themes/caio/assets/img/sunflower-blur-01.png" alt="Girassol" class="sunflower-02">

						<h1 class="title-big trapeze-title">
							Sobre o <br />
							<span>Projeto</span>
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
					
					<div class="project-posts">

						<?php
							$args = array(
								'posts_per_page' => 10,
								'post_type' => 'post',
								'orderby' => 'date',
								'order' => 'DESC',
								'post_status' => array('publish','future'),
							);

							$wp_query = new WP_Query( $args );
						?>

						<?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>

							<a href="<?php echo get_permalink(); ?>" class="project-block">
								
								<div class="image">

									<?php if( get_field('direitos') ) { ?>
										<p class="text-small photo-rights">
											<?php the_field('direitos'); ?>
										</p>
									<?php } ?>

									<div class="yellow-circle"></div>

									<div class="thumbnail">
										<img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'big') ?>" alt="<?php echo get_the_title(); ?>">
									</div>

								</div>

								<div class="content">

									<h2 class="text-medium-big title">
										<?php echo get_the_title(); ?>
									</h2>

									<p class="text-medium link">
										leia mais
									</p>

								</div>
							</a>

						<?php endwhile; ?>

					</div>

					<!-- pagination -->
					<?php get_template_part('template-parts/pagination', 'none') ?>

				</div>
			</div>
		</div>
	</section>

</main>

<?php get_footer( null, $template_args ); ?>