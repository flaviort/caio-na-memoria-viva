<?php
	/* Template Name: Projeto - Interna */

	$template_args = array(
		'body_class' => 'blog-internal',
		'css_files' => array(

		),
		'js_files' => array(

		)
	);

	get_header( null, $template_args );
?>

<main id="main-content">

	<!-- banner blog internal -->
	<section id="banner-blog-internal">

		<div class="bg"></div>
		
		<div class="container-fluid no-padding">
			<div class="row">
				<div class="col-12">

					<div class="image" style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID(),'full') ?>');"></div>

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
					<div class="white-box">
						
						<div class="top-part text-medium">
							
							<p class="date">
								<?php echo get_the_date('j/m/Y') ?>
							</p>

							<a href="<?=get_site_url()?>/projeto/" class="back">
								voltar <span>para o projeto</span>
							</a>

						</div>

						<h1 class="text-big title">
							<?php echo the_title(); ?>
						</h1>

						<div class="featured-image">
							<img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full') ?>" alt="<?php echo the_title(); ?>">
						</div>

						<div class="post-content">
							<?php the_content() ?>
						</div>

						<!-- share -->
						<?php get_template_part('template-parts/share', 'none') ?>

					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- news -->
	<section id="news">

		<div class="bg"></div>
	
		<div class="container container-big">
			<div class="row">
				<div class="col-12">
	
					<div class="top">
	
						<div class="left">
	
							<p class="title-big trapeze-title">
								Você <br />
								<span>pode Gostar</span>
							</p>
	
							<a href="<?=get_site_url()?>/projeto/" class="text-medium">
								voltar para o projeto
							</a>
	
						</div>
	
						<div class="right">
							<div class="news-slider-nav">
	
								<button class="prev">
									<?php get_template_part('assets/svg/arrow-left', 'none') ?>
								</button>
	
								<button class="next">
									<?php get_template_part('assets/svg/arrow-right', 'none') ?>
								</button>
	
							</div>
						</div>
						
					</div>
	
					<div class="bottom">
						<div class="news-slider swiper-container">
							<div class="swiper-wrapper">
	
								<?php $args = array(
									'numberposts' => 6,
									'post__not_in' => array($post->ID)
								);
								$related_posts = get_posts( $args );
								if($related_posts) {
									foreach ( $related_posts as $post ) : setup_postdata( $post ); 
								?>

									<div class="swiper-slide">
										<a href="<?php echo get_permalink(); ?>" class="news-block">

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
													<?php echo wp_trim_words(get_the_title(), 20, '...'); ?>
												</h2>

												<p class="text-medium link">
													leia mais
												</p>

											</div>

										</a>
									</div>

								<?php endforeach; } wp_reset_postdata(); ?>
	
							</div>
						</div>
					</div>
	
				</div>
			</div>
		</div>
	</section>

</main>

<?php get_footer( null, $template_args ); ?>