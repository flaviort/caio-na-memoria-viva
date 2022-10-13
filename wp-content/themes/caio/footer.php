		<section id="footer">
			
			<div class="top">
				<div class="container container-big">
					<div class="row">
						<div class="col-12">

							<a href="<?=get_site_url()?>" class="logo">
								<?php get_template_part('assets/svg/logo', 'none'); ?>
							</a>

							<div class="right">

								<nav class="menu text-medium">
									<ul>

										<li>
											<a href="<?=get_site_url()?>">
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

								<nav class="social">
									<ul>
										<?php get_template_part('template-parts/social', 'none'); ?>
									</ul>
								</nav>

							</div>

						</div>
					</div>
				</div>
			</div>

			<div class="bottom">

				<div class="bg">
				<?php get_template_part('assets/svg/footer-bg.php', 'none'); ?>
				</div>
				
				<div class="container container-big">
					<div class="row">
						<div class="col-12 text-small">

							<p class="copyright">
								© 2022 Caio na Memória Viva
							</p>

							<nav class="links">
								<ul>

									<li>
										<a href="https://docs.google.com/forms/d/e/1FAIpQLScJVb8f5VtdOSgFT5mCRT8k3_G_euxNH6pGxFUwx0zb6kQ2Qg/viewform" target="_blank">
											Cadastro AACF
										</a>
									</li>

									<li>
										<a href="mailto:caiofentrenos@gmail.com" target="_blank">
											Junte-se a nós
										</a>
									</li>

								</ul>
							</nav>

						</div>
					</div>
				</div>
			</div>

		</section>

		<?php wp_footer(); ?>

	</body>
</html>