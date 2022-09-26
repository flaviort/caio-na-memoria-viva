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

								<div class="tour">
									
									<button class="plus text-medium zoom-in" onclick="panzoom.zoomIn()">+</button>
									<button class="minus text-medium zoom-out" onclick="panzoom.zoomOut()">-</button>

									<div id="panzoom">

										<a href="#" class="pin pin-01 text-medium" aria-label="Estação do Conhecimento" data-balloon-pos="up">
											<span class="circle"></span>
											<b>1</b>
										</a>

										<a href="#" class="pin pin-02 text-medium" aria-label="Rua dos Poetas" data-balloon-pos="up">
											<span class="circle"></span>
											<b>2</b>
										</a>

										<a href="#" class="pin pin-03 text-medium" aria-label="Praça Moisés Viana" data-balloon-pos="up">
											<span class="circle"></span>
											<b>3</b>
										</a>

										<a href="#" class="pin pin-04 text-medium" aria-label="Memorial" data-balloon-pos="up">
											<span class="circle"></span>
											<b>4</b>
										</a>
										
										<svg class="line" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1980.81 1328.91"><polyline points="0.48 271.93 315.78 246.65 743.63 187.16 807.79 748.56 890.32 1320.46 1007.36 1272.87 1104.04 1185.58 1276.56 871.3 1976.14 3.77"/></svg>

										<img src="assets/img/map.png" alt="" class="map">

									</div>

								</div>

								<div class="row infos text-medium">

									<div class="col-12">
										<p class="desc">
											Caso esteja tendo problemas para visualizar o mapa, você pode acessar os pontos de interesse através dos links abaixo:<br /><br />
										</p>
									</div>

									<div class="col-sm-6">
										<a href="#" class="hvr-bounce-to-right">
											<b>1)</b> Estação do Conhecimento
										</a>
									</div>

									<div class="col-sm-6">
										<a href="#" class="hvr-bounce-to-right">
											<b>2)</b> Rua dos Poetas
										</a>
									</div>

									<div class="col-sm-6">
										<a href="#" class="hvr-bounce-to-right">
											<b>3)</b> Praça Moisés Viana
										</a>
									</div>

									<div class="col-sm-6">
										<a href="#" class="hvr-bounce-to-right">
											<b>4)</b> Memorial
										</a>
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