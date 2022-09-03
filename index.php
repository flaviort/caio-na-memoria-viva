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

				<!-- tour -->
				<section id="tour">
					<div class="container container-big">
						<div class="row">

							<div class="col-md-7 left">

								<img src="assets/img/sunflower.png" alt="Girassol" class="sunflower">
								<div class="yellow-block"></div>
								<div class="house"></div>

							</div>

							<div class="col-md-5 right">
								<div>

									<p class="title-big title">
										Acesse a <br />
										<span>Visita Guiada</span>
									</p>

									<a href="visita-guiada.php" class="black-button text-medium">
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
								<img src="assets/img/sunflower-blur-01.png" alt="Girassol" class="sunflower">

								<div class="content">

									<p class="text-bigger desc">

										<span class="quote-top">
											<?php include('assets/svg/quote-top.php') ?>
										</span>

										A única magia que existe é estarmos vivos e não entendermos nada disso. A única magia que existe é a nossa incompreensão.
										
										<span class="quote-bottom">
											<?php include('assets/svg/quote-bottom.php') ?>
										</span>
										
									</p>

									<p class="text-medium author">
										Caio Fernando Abreu. Ovelhas Negras - Porto Alegre : Sulina, 1995, p. 118.
									</p>

								</div>

							</div>
						</div>
					</div>
				</section>

				<!-- news -->
				<?php include('includes/news.php'); ?>

				<!-- partners -->
				<?php include('includes/partners.php'); ?>


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