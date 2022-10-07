<!DOCTYPE html>
<html lang="pt-BR">

	<?php include('includes/head.php'); ?>

	<body class="tour">
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
										Visita <br />
										<span>Guiada</span>
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

								<p class="text-medium desc">
									Para saber mais sobre cada ponto de interesse, clique nos "números" animados no mapa. Clique e arraste o mouse para descobrir mais pontos!
								</p>

								<?php include('includes/tour-map.php') ?>

								<div class="row infos text-medium">

									<div class="col-12">
										<p class="desc">
											Caso esteja tendo problemas para visualizar o mapa, você pode acessar os pontos de interesse através dos links abaixo:<br /><br />
										</p>
									</div>

									<div class="tour-points">
										<div class="row">
											<?php include('includes/tour-points.php') ?>
										</div>
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
				<script src="assets/js/tour.js"></script>
			</footer>

		</div>
	</body>
</html>