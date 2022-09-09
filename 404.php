<!DOCTYPE html>
<html lang="pt-BR">

	<?php include('includes/head.php'); ?>

	<body class="error">
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
										Página não <br />
										<span>Encontrada</span>
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

								<h2 class="title-bigger trapeze-title">
									Oops! <br />
									<span>Erro 404</span>
								</h2>

								<p class="text-medium desc">
									<b>Desculpe! A página que você buscou está indisponível.</b><br />
									Por favor, fique a vontade para buscar outras sessões em nosso site, ou volte para a página inicial.
								</p>

								<a href="./" class="text-medium black-button">
									Voltar a página inicial
								</a>

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
			</footer>

		</div>
	</body>
</html>