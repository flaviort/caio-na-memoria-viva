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

				<!-- middle -->
				<section id="middle">
					<div class="container container-big">
						<div class="row">

							<div class="col-md-6 left">

								<div class="image">
									
									<div class="yellow-circle"></div>

									<p class="text-small copyrights">
										Foto: <span>Dulce Helfer</span>
									</p>

									<img src="assets/img/contato.jpg" alt="Caio F. | Foto: Dulce Helfer">

								</div>

								<div class="black-trapeze"></div>

							</div>

							<div class="col-md-6 right">

								<p class="text-big title">
									Alguma dúvida ou sugestão? 
								</p>

								<p class="text-medium desc">
									Entre em contato e logo entraremos em contato!
								</p>

								<form id="contact-form" action="get">

									<div class="form-line">

										<label for="nome" class="text-medium label">
											Nome
										</label>

										<input type="text" class="input text-medium" id="nome" name="Nome" required>

									</div>

									<div class="form-line">

										<label for="email" class="text-medium label">
											Email
										</label>

										<input type="email" class="input text-medium" id="email" name="Email" required>

									</div>

									<div class="form-line">

										<label for="mensagem" class="text-medium label">
											Mensagem
										</label>

										<textarea class="input textarea text-medium" id="mensagem" name="Mensagem" required></textarea>

									</div>

									<div class="form-line">
										<div class="form-checkbox">

											<input type="checkbox" id="newsletter">

											<label for="newsletter" class="checkbox">
												<?php include('assets/svg/check.php') ?>
											</label>

											<label for="newsletter" class="text-medium-small">
												Eu aceito receber emails e novidades sobre o Projeto Caio na Memória Viva.
											</label>

										</div>
									</div>

									<button type="submit" class="text-medium black-button">
										Enviar
									</button>

									<a href="#contact-success" data-fancybox class="text-small" style="opacity: .2; float: right; text-align: right; padding-top: .5rem;">
										popup <br />
										sucesso
									</a>

								</form>

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