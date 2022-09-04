<!DOCTYPE html>
<html lang="pt-BR">

	<?php include('includes/head.php'); ?>

	<body class="contact">
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

								<div class="image" style="background-image: url('assets/img/banner-contato.jpg');">

									<img src="assets/img/sunflower.png" alt="Girassol" class="sunflower-01">
									<img src="assets/img/sunflower-blur-01.png" alt="Girassol" class="sunflower-02">

									<h1 class="title-big trapeze-title">
										Entre em <br />
										<span>Contato</span>
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

			</main>

			<!-- footer -->
			<?php include('includes/footer.php'); ?>
			<?php include('includes/popups.php'); ?>

			<footer>
				<script src="assets/js/framework.js"></script>
				<script src="assets/js/contact.js" defer></script>
			</footer>

		</div>
	</body>
</html>