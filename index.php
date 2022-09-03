<!DOCTYPE html>
<html lang="pt-BR">

	<?php include('includes/head.php'); ?>

	<body class="home">
		<div class="body-overflow">

			<?php include('includes/fs-menu.php'); ?>
			<?php include('includes/top-menu.php'); ?>

			<main id="main-content">

				<!-- banner -->
				<section id="banner">
					<div class="container-fluid no-padding">
						<div class="row">
							<div class="col-12">

								<div class="banner-slider swiper-container">
									<div class="swiper-wrapper">

										<div class="swiper-slide">
											<a href="#">
												<img src="assets/img/banner-01-desk.jpg" alt="Visita online pelos caminhos da poesia em Santiago!" class="desk">
												<img src="assets/img/banner-01-mob.jpg" alt="Visita online pelos caminhos da poesia em Santiago!" class="mob">
											</a>
										</div>

										<div class="swiper-slide">
											<a href="#">
												<img src="assets/img/banner-02-desk.jpg" alt="Visita online pelos caminhos da poesia em Santiago!" class="desk">
												<img src="assets/img/banner-02-mob.jpg" alt="Visita online pelos caminhos da poesia em Santiago!" class="mob">
											</a>
										</div>

										<div class="swiper-slide">
											<a href="#">
												<img src="assets/img/banner-03-desk.jpg" alt="Visita online pelos caminhos da poesia em Santiago!" class="desk">
												<img src="assets/img/banner-03-mob.jpg" alt="Visita online pelos caminhos da poesia em Santiago!" class="mob">
											</a>
										</div>

									</div>
								</div>

								<div class="cf"></div>
								
							</div>
						</div>
					</div>
				</section>

				<section style="width: 100%; height: 50vh; background-color: #ddd; position: relative; z-index: -1; margin-top: 100px"></section>

			</main>

			<!-- footer -->
			<?php include('includes/footer.php'); ?>
			<?php include('includes/popups.php'); ?>

			<footer>
				<script src="assets/js/framework.js"></script>
				<script src="assets/js/home.js" defer></script>
			</footer>

		</div>
	</body>
</html>