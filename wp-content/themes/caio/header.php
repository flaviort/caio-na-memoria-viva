<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="utf-8">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="format-detection" content="telephone=no">
	<meta name="author" content="Senz Design">

	<!-- css -->
	<link rel="stylesheet" href="<?=get_template_directory_uri()?>/assets/css/framework.min.css">
	<link rel="stylesheet" href="<?=get_template_directory_uri()?>/assets/css/main.css">

	<?php wp_head(); ?>

</head>

<body class="<?php echo $args['body_class']; ?>">
	<div class="body-overflow">
		<?php wp_body_open(); ?>

			<section id="top-menu">
				<div class="container container-big">
					<div class="row">
						<div class="col-12">

							<a href="<?=get_site_url()?>" class="logo">
								<?php include get_theme_file_path('assets/svg/logo.php') ?>
							</a>
			
							<nav class="menu text-medium">
								<ul>
			
									<li>
										<a href="<?=get_site_url()?>">
											Início
										</a>
									</li>
			
									<li class="has-sub">
										<p>
											Sobre
										</p>
			
										<div class="sub">
											<ul>
			
												<li>
													<a href="<?=get_site_url()?>/caio-f">
														Caio F.
													</a>
												</li>
			
												<li>
													<a href="<?=get_site_url()?>/amigos">
														Amigos
													</a>
												</li>
			
												<li>
													<a href="<?=get_site_url()?>/festival">
														Festival
													</a>
												</li>
			
											</ul>
										</div>
									</li>
			
									<li>
										<a href="<?=get_site_url()?>/visita-guiada">
											Visita Guiada
										</a>
									</li>
			
									<li>
										<a href="<?=get_site_url()?>/projeto">
											Projeto
										</a>
									</li>
			
									<li>
										<a href="<?=get_site_url()?>/contato">
											Contato
										</a>
									</li>
			
								</ul>
							</nav>
			
							<button id="open-fs">
								<?php include get_theme_file_path('assets/svg/menu.php') ?>
							</button>
							
						</div>
					</div>
				</div>
			</section>

			<section id="fs-menu">

				<div class="bg"></div>

				<button id="close-fs">
				<?php include get_theme_file_path('assets/svg/close.php'); ?>
				</button>

				<div class="container">
					<div class="row">
						<div class="col-12">
							<nav class="menu text-big">
								<ul>

									<li>
										<a href="<?=get_site_url()?>" class="active">
											Início
										</a>
									</li>

									<li>
										<a href="<?=get_site_url()?>/caio-f">
											Caio F.
										</a>
									</li>

									<li>
										<a href="<?=get_site_url()?>/amigos">
											Amigos
										</a>
									</li>

									<li>
										<a href="<?=get_site_url()?>/festival">
											Festival
										</a>
									</li>

									<li>
										<a href="<?=get_site_url()?>/visita-guiada">
											Visita Guiada
										</a>
									</li>

									<li>
										<a href="<?=get_site_url()?>/projeto">
											Projeto
										</a>
									</li>

									<li>
										<a href="<?=get_site_url()?>/contato">
											Contato
										</a>
									</li>

								</ul>
							</nav>
						</div>
					</div>
				</div>
				
			</section>