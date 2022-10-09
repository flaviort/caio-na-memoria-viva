<!DOCTYPE html>
<html lang="pt-BR">

	<?php include('includes/head.php'); ?>

	<body class="tour-internal">
		<div class="body-overflow">

			<?php include('includes/fs-menu.php'); ?>
			<?php include('includes/top-menu.php'); ?>

			<main id="main-content">

				<!-- banner internal -->
				<section id="banner-internal">

					<div class="bg"></div>
					
					<div class="container-fluid no-padding">
						<div class="row">
							<div class="col-12">

								<div class="image" style="background-image: url('assets/img/banner-visita.jpg');">

									<img src="assets/img/sunflower.png" alt="Girassol" class="sunflower-01">
									<img src="assets/img/sunflower-blur-01.png" alt="Girassol" class="sunflower-02">

									<h1 class="title-big trapeze-title">
										Rua dos Poetas <br />
										<span>Continuação</span>
									</h1>
									
								</div>

								<div class="cf"></div>

								<nav class="social">
									<ul>
										<?php include('includes/social.php') ?>
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

								<h2 class="title-big trapeze-title">
									<span>Visualização 3D</span>
								</h2>

								<div class="pano-viewer pano-viewer-01"></div>

								<h2 class="title-big trapeze-title">
									<span>Fotos</span>
								</h2>

								<div class="photo-gallery">
									<div class="row">

										<div class="col-sm-6">
											<a href="assets/img/tour/02-2/fotos/01.jpg" data-fancybox="gallery" class="gallery-block">
												<div class="thumbnail">
													<img src="assets/img/tour/02-2/fotos/01.jpg" alt="Rua dos Poetas">
												</div>
											</a>
										</div>

										<div class="col-sm-6">
											<a href="assets/img/tour/02-2/fotos/02.jpg" data-fancybox="gallery" class="gallery-block">
												<div class="thumbnail">
													<img src="assets/img/tour/02-2/fotos/02.jpg" alt="Rua dos Poetas">
												</div>
											</a>
										</div>

										<div class="col-sm-6">
											<a href="assets/img/tour/02-2/fotos/03.jpg" data-fancybox="gallery" class="gallery-block">
												<div class="thumbnail">
													<img src="assets/img/tour/02-2/fotos/03.jpg" alt="Rua dos Poetas">
												</div>
											</a>
										</div>

										<div class="col-sm-6">
											<a href="assets/img/tour/02-2/fotos/04.jpg" data-fancybox="gallery" class="gallery-block">
												<div class="thumbnail">
													<img src="assets/img/tour/02-2/fotos/04.jpg" alt="Rua dos Poetas">
												</div>
											</a>
										</div>

										<div class="col-sm-6">
											<a href="assets/img/tour/02-2/fotos/05.jpg" data-fancybox="gallery" class="gallery-block">
												<div class="thumbnail">
													<img src="assets/img/tour/02-2/fotos/05.jpg" alt="Rua dos Poetas">
												</div>
											</a>
										</div>

										<div class="col-sm-6">
											<a href="assets/img/tour/02-2/fotos/06.jpg" data-fancybox="gallery" class="gallery-block">
												<div class="thumbnail">
													<img src="assets/img/tour/02-2/fotos/06.jpg" alt="Rua dos Poetas">
												</div>
											</a>
										</div>

										<div class="col-sm-6">
											<a href="assets/img/tour/02-2/fotos/07.jpg" data-fancybox="gallery" class="gallery-block">
												<div class="thumbnail">
													<img src="assets/img/tour/02-2/fotos/07.jpg" alt="Rua dos Poetas">
												</div>
											</a>
										</div>

										<div class="col-sm-6">
											<a href="assets/img/tour/02-2/fotos/08.jpg" data-fancybox="gallery" class="gallery-block">
												<div class="thumbnail">
													<img src="assets/img/tour/02-2/fotos/08.jpg" alt="Rua dos Poetas">
												</div>
											</a>
										</div>

									</div>
								</div>

							</div>
						</div>
					</div>
				</section>

				<!-- bottom -->
				<section id="bottom">
					<div class="container container-big">
						<div class="row">
							<div class="col-12 text-medium">

								<p class="bottom-desc">
									<b>Confira abaixo todos os pontos de interesse:</b>
								</p>

								<?php include('includes/tour-map.php') ?>

								<div class="tour-points">
									<div class="row">
										<?php include('includes/tour-points.php') ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

			</main>

			<!-- footer -->
			<?php include('includes/footer.php'); ?>
			<?php include('includes/popups.php'); ?>

			<footer>
				<script src="assets/js/framework.js"></script>
				<script src="assets/js/tour-internal.js"></script>
				<script src="assets/js/tour-internal-02-2.js"></script>
			</footer>

		</div>
	</body>
</html>