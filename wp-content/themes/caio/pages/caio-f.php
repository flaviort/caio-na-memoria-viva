<?php
	/* Template Name: Caio F */

	$template_args = array(
		'body_class' => 'caio-f',
		'css_files' => array(),
		'js_files' => array()
	);

	get_header( null, $template_args );
?>

<main id="main-content">

	<!-- banner internal -->
	<section id="banner-internal">

		<div class="bg"></div>
		
		<div class="container-fluid no-padding">
			<div class="row">
				<div class="col-12">

					<div class="image" style="background-image: url('<?=get_site_url()?>/wp-content/themes/caio/assets/img/banner-caio-f.jpg');">

						<?php if( get_field('direitos_autorais_banner') ) { ?>
							<p class="text-small photo-rights">
								<?php the_field('direitos_autorais_banner'); ?>
							</p>
						<?php } ?>

						<img src="<?=get_site_url()?>/wp-content/themes/caio/assets/img/sunflower.png" alt="Girassol" class="sunflower-01">
						<img src="<?=get_site_url()?>/wp-content/themes/caio/assets/img/sunflower-blur-01.png" alt="Girassol" class="sunflower-02">

						<h1 class="title-big trapeze-title">
							Tudo sobre <br />
							<span>Caio F. de Abreu</span>
						</h1>
						
					</div>

					<div class="cf"></div>

					<nav class="social">
						<ul>
							<?php get_template_part('template-parts/social', 'none') ?>
						</ul>
					</nav>
					
				</div>
			</div>
		</div>
	</section>

	<!-- caio -->
	<section id="caio">
		<div class="container container-big">
			<div class="row">

				<div class="col-lg-6 left">

					<div class="image">
						
						<div class="yellow-circle">
							<?php get_template_part('assets/svg/doodle', 'none'); ?>
						</div>

						<p class="text-small copyrights">
							Foto: <span>Juvenal Pereira</span>
						</p>

						<img src="<?=get_site_url()?>/wp-content/themes/caio/assets/img/caio-f.jpg" alt="Caio F. | Foto: Juvenal Pereira">

					</div>

					<div class="black-trapeze"></div>

				</div>

				<div class="col-lg-6 right">

					<p class="title-big title">
						Conheça <br />
						Caio F. de Abreu
					</p>

					<p class="text-medium desc">
						Caio era um homem sensível, contestador, místico e gentil. Tinha um olhar curioso sobre o mundo, estudava os astros, cuidava de girassóis, amava seus amigos, escrevia cartas, gostava de ouvir música para escrever e conhecia a finitude de estar vivo, por isso a experimentou em toda a sua intensidade.<br /><br />

						Escreveu 12 livros. Premiado com 4 prêmios Jabutis de literatura e o prêmio Moliére de Teatro, premiação esta que foi recebida em conjunto com o diretor  Luis Artur Nunes. Foi um grande observador da alma humana. É unanimidade entre estudiosos da moderna literatura nacional. Representante da contracultura, ele foi jornalista, dramaturgo, contista , cronista,  romancista e escritor, apontado como expoente da sua geração. Através de situações cotidianas, contestou valores da sociedade e falou sobre assuntos que até hoje são tabus, como aids, homossexualidade e espiritualidade.<br /><br />

						Traduzido para o alemão, espanhol, francês, inglês, italiano e holandês, segue conquistando uma incrível legião de leitores, principalmente entre os jovens. Suas frases e pensamentos são constantemente compartilhados nas redes sociais pelo público que reconhece a contemporaneidade de sua obra.	A obra de Caio Fernando Abreu, ao longo dos anos, tem sido cada vez mais valorizada popularmente, estudada na academia, encenada nos palcos e tematizada no cinema, divulgada amplamente na internet, com literalmente “milhões de fãs” em todos os continentes, atestando sua importância para este momento social, cultural e político.

					</p>

				</div>

			</div>
		</div>
	</section>

	<!-- merchan -->
	<section id="merchan">

		<div class="bg"></div>

		<div class="container container-big">
			<div class="row">
				<div class="col-12">

					<h3 class="title-medium title">
						Toda a obra de Caio F. têm direitos autorais conectados com a família.
					</h3>

					<a href="https://www.agenciariff.com.br/" target="_blank" class="yellow-button text-medium">
						www.agenciariff.com.br
					</a>

					<br />

					<a href="tel:+55-21-22876299" class="text-medium link">
						+55 (21) 2287-6299
					</a>

				</div>
			</div>
		</div>
	</section>

	<!-- timeline -->
	<section id="timeline">
		<div class="container container-big">
			<div class="row">
				<div class="col-12">

					<h3 class="title-big main-title">
						Cronologia
					</h3>

					<div class="timeline gradient">
						<div class="row">

							<div class="col-md-5 left">
								<div>

									<h2 class="trapeze-title title-big">
										<span>1948</span>
									</h2>

									<p class="title-small subtitle">
										O nascimento
									</p>

								</div>

								<div class="line">
									<div class="circle"></div>
								</div>

							</div>

							<div class="col-md-7 right text-medium">

								<p>
									<strong>Às 8 horas de 12 de setembro em Santiago, Rio Grande do Sul, nasce o primogênito de Zaél Menezes Abreu e Nair Loureiro de Abreu. Caio Fernando Loureiro de Abreu, irmão de José Cláudio, Luis Felipe, Márcia e Claudia.</strong>
								</p>

							</div>

							<div class="col-md-5 left">
								<div>

									<h2 class="trapeze-title title-medium">
										<span>1954 - 1968</span>
									</h2>

									<p class="title-small subtitle">
										O início
									</p>

								</div>

								<div class="line">
									<div class="circle"></div>
								</div>

							</div>

							<div class="col-md-7 right text-medium">

								<p>
									<strong>1954 –</strong> Inicia a escrever,  ainda criança: a palavra escrita já é para ele uma forma de reinventar o mundo.
								</p>

								<p>
									<strong>1962 –</strong> O adolescente em Santiago escreve a “Maldição de Saint-Marie”, conto incluído na obra “Ovelhas Negras”, editora Sulina. Em carta a Marta Lígia Magliani,narra que foi daí que nasceu “A Maldição do Vale Negro”. O conto é dedicado à sua amiga da vida inteira e primeira leitora, a santiaguense Ilone Madalena Dri Almeida.
								</p>

								<p>
									<strong>1966 –</strong> O conto “O Príncipe Sapo” é publicado na revista Cláudia. Escreve o romance “Limite Branco”.
								</p>

								<p>
									<strong>1967 –</strong> Inicia os cursos de Letras e Arte Dramática da UFRGS.
								</p>

								<p>
									<strong>1968 –</strong> Já em São Paulo integra como repórter a primeira equipe da revista Veja; concorre ao Prêmio José Lins do Rego com “Três Tempos Mortos” pelo qual recebe menção honrosa. 
								</p>

								<p>
									<strong>1969 –</strong> A obra de contos “Inventário do Irremediável” pela editora  Movimento recebe o prêmio Fernando Chinaglia. Publica contos no jornal Correio do Povo e no Diário de Notícias de Porto Alegre. 
								</p>

								<p>
									<strong>1970 –</strong> Caio publica “Limite Branco” pela editora Expressão e Cultura, e pela editora Movimento “Inventário do Irremediável”. 
								</p>

								<p>
									<strong>1971 –</strong> Já no Rio de Janeiro, trabalha como pesquisador e redator de Manchete e Pais e Filhos. Forma um grupo de teatro para concorrer ao Festival de Ouro Preto. 
								</p>

								<p>
									<strong>1972 –</strong> Trabalha como copydesk do jornal Zero Hora de Porto Alegre e colabora com o Suplemento Literário de Minas Gerais; conto “Visita” recebe o Prêmio do Instituto Estadual do Livro. 
								</p>

								<p>
									<strong>1973 –</strong> Publica o livro de contos “O Ovo Apunhalado”, que recebe menção honrosa do Prêmio Nacional de Ficção do Instituto Nacional do Livro. Mora um tempo em Estocolmo e Londres.
								</p>

								<p>
									<strong>1974 –</strong> Novamente em Porto Alegre, trabalha com o grupo Província como autor e ator na peça “Sarau das Nove às Onze”; colabora na imprensa alternativa. Escreve a peça “Vamos fazer festa enquanto o dia não chega?”. 
								</p>

								<p>
									<strong>1975 –</strong> A obra de contos “O Ovo Apunhalado”, publicado pelo Instituto Estadual do Livro em convênio com a Globo é indicado pela Veja como uma dos melhores do ano. Recebe o Prêmio Leitura do Serviço Nacional de Teatro pela peça “Uma visita ao Fim do Mundo”, mais tarde denominada “Pode ser que seja só o leiteiro lá fora”.
								</p>

							</div>

							<div class="col-md-5 left">
								<div>

									<h2 class="trapeze-title title-medium">
										<span>1969 - 1975</span>
									</h2>

									<p class="title-small subtitle">
										Primeiras <br />
										Publicações
									</p>

								</div>

								<div class="line">
									<div class="circle"></div>
								</div>

							</div>

							<div class="col-md-7 right text-medium">

								<p>
									<strong>1969 –</strong> A obra de contos “Inventário do Irremediável” pela editora  Movimento recebe o prêmio Fernando Chinaglia. Publica contos no jornal Correio do Povo e no Diário de Notícias de Porto Alegre. 
								</p>

								<p>
									<strong>1970 –</strong> Caio publica “Limite Branco” pela editora Expressão e Cultura, e pela editora Movimento “Inventário do Irremediável”. 
								</p>

								<p>
									<strong>1971 –</strong> Já no Rio de Janeiro, trabalha como pesquisador e redator de Manchete e Pais e Filhos. Forma um grupo de teatro para concorrer ao Festival de Ouro Preto. 
								</p>

								<p>
									<strong>1972 –</strong> Trabalha como copydesk do jornal Zero Hora de Porto Alegre e colabora com o Suplemento Literário de Minas Gerais; conto “Visita” recebe o Prêmio do Instituto Estadual do Livro. 
								</p>

								<p>
									<strong>1973 –</strong> Publica o livro de contos “O Ovo Apunhalado”, que recebe menção honrosa do Prêmio Nacional de Ficção do Instituto Nacional do Livro. Mora um tempo em Estocolmo e Londres.
								</p>

								<p>
									<strong>1974 –</strong> Novamente em Porto Alegre, trabalha com o grupo Província como autor e ator na peça “Sarau das Nove às Onze”; colabora na imprensa alternativa. Escreve a peça “Vamos fazer festa enquanto o dia não chega?”. 
								</p>

								<p>
									<strong>1975 –</strong> A obra de contos “O Ovo Apunhalado”, publicado pelo Instituto Estadual do Livro em convênio com a Globo é indicado pela Veja como uma dos melhores do ano. Recebe o Prêmio Leitura do Serviço Nacional de Teatro pela peça “Uma visita ao Fim do Mundo”, mais tarde denominada “Pode ser que seja só o leiteiro lá fora”.
								</p>

							</div>

						</div>
					</div>

					<button class="hollow-black-button text-medium" id="show-more">
						<b>Ver mais</b>
					</button>

					<div class="hidden timeline">
						<div class="row">

							<div class="col-md-5 left">
								<div>

									<h2 class="trapeze-title title-medium">
										<span>1976 - 1983</span>
									</h2>

									<p class="title-small subtitle">
										Obras <br />
										Aclamadas
									</p>

								</div>

								<div class="line">
									<div class="circle"></div>
								</div>

							</div>

							<div class="col-md-7 right text-medium">

								<p>
									<strong>1976 –</strong> É crítico teatral do jornal Folha da Manhã de Porto Alegre. Participa das antologias “Assim Escrevem os Gaúchos” e “Teia”. Publica o conto “O inimigo secreto”.
								</p>

								<p>
									<strong>1978 –</strong> Retorna para São Paulo e trabalha como redator de Pop; participa da “Antologia da Literatura Rio-Grandense Contemporânea”.
								</p>

								<p>
									<strong>1980 –</strong> “Sargento Garcia” recebe o Prêmio Status de Literatura. Escreve críticas de livros para revista Veja e para a revista Nova.
								</p>

								<p>
									<strong>1981 –</strong> Torna-se editor do periódico Leia Livros.
								</p>

								<p>
									<strong>1882 –</strong> “Morangos Mofados”, obra de contos, é publicado pela editora Brasiliense. 
								</p>

								<p>
									<strong>1983 –</strong> Já morando no Rio de Janeiro, trabalha como colaborador da revista Isto É. Publica o livro de novelas “Triângulo das Águas” pela editora Nova Fronteira. Obra vencedora do Prêmio Jabuti. Roteiriza para o cinema o conto “Aqueles Dois”, que foi dirigido por Sergio Amon. Trabalha em “As Frangas”, história infantil.
								</p>

							</div>

							<div class="col-md-5 left">
								<div>

									<h2 class="trapeze-title title-medium">
										<span>1984 - 1990</span>
									</h2>

									<p class="title-small subtitle">
										Obras <br />
										Aclamadas
									</p>

								</div>

								<div class="line">
									<div class="circle"></div>
								</div>

							</div>

							<div class="col-md-7 right text-medium">

								<p>
									<strong>1976 –</strong>1984 – Recebe o prêmio Jabuti. A peça “Pode ser que seja só o leiteiro lá fora” é encenada por Luciano Alabarse no Clube de Cultura de Porto Alegre. Recebe o convite para adaptar “Pela Noite” para o Teatro.
								</p>

								<p>
									1985 – Novamente em São Paulo, trabalha como editor da revista A-Z; escreve  o roteiro de Joana Repórter, para Regina Duarte; “Morangos Mofados” é adaptado para o teatro e levado em cena por Paulo Yutaka. Escreve para seu amigo e conterrâneo Ruy Jornada Krebs; nessa carta, relata estar tentando uma nova técnica de escrita que denominou “calendoscópio verbal”. 
								</p>

								
								<p>
									<strong>1986 –</strong> Trabalha como redator do Caderno 2 do Estado de São Paulo; Luciano Alabarse dirige, em Porto Alegre, a adaptação para o teatro de “Morangos Mofados”.
								</p>

								<p>
									<strong>1987 –</strong> Escreve o roteiro de “Romance”, longa-metragem de Sérgio Bianchi; com Luis Arthur Nunes, Caio compõe a peça “A Maldição do Vale Negro”.
								</p>

								<p>
									<strong>1988 –</strong> Trabalha novamente como redator de A-Z; publica “Os Dragões não Conhecem o Paraíso”, obra de contos pela Companhia das Letras. Sua biografia é publicada pelo Instituto Estadual do Livro (obra nº 19) da série Autores Gaúchos. Publica antologia de contos de livros anteriores “Mel e Girassóis” pela editora Mercado Aberto.
								</p>

								<p>
									<strong>1989 –</strong> É citado elogiosamente no suplemento literário do Times de Londres, por seu livro “Dragons dont’go Heaven”,em crítica de John Gledson. Com Luis Arthur Nunes ganha o prêmio Moliére por “A Maldição do Vale Negro”. Publica “As Frangas”.
								</p>

								<p>
									<strong>1990 –</strong> Publica o romance “Onde Andará Dulce Veiga”, pela Companhia das Letras.
								</p>

							</div>

							<div class="col-md-5 left">
								<div>

									<h2 class="trapeze-title title-medium">
										<span>1991 - 1990</span>
									</h2>

									<p class="title-small subtitle">
										O Fim
									</p>

								</div>

								<div class="line">
									<div class="circle"></div>
								</div>

							</div>

							<div class="col-md-7 right text-medium">

								<p>
									<strong>1991 –</strong> Londres e Paris – Lançamento das traduções para inglês e francês de “Os Dragões Não Conhecem o Paraíso”. Premiado pela Associação Paulista de Críticos de Arte com o Prêmio Melhor Romance do ano, editado em 1990. 
								</p>

								<p>
									<strong>1992 –</strong> É citado no guia de programação parisiense Télérama. Elabora resenhas para a revista Playboy.
								</p>

								<p>
									<strong>1993 –</strong> Berilm – Participou do Congresso Internacional de Literatura e Homossexualismo. Erlagem – representou o Brasil na III Interlit, Encontro Internacional de Escritores, juntamente com Rubem Fonseca e Sonia Coutinho. 
								</p>

								<p>
									<strong>1994 –</strong> Reedição de seu primeiro romance “Limite Branco”, pela Siciliano. Colaborou no Caderno Cultura, do jornal Zero Hora de Porto Alegre. Frankfurt – Participou da 46ª Feira Internacional do Livro, que teve o Brasil como país-tema. É motivo de meia página na revista francesa L’Express e na revista Les In rockuptibles. Escreve  para o jornal Estado de São Paulo. Comunica em sua coluna quinzenal, que está com Aids. Publica “Molto Lontano di Mariembad”,uma antologia de contos em francês, sem edição no Brasil, pela editora Arcade 17. É patrono da 41ª Feira do Livro de Porto Alegre. 
								</p>

								<p>
									<strong>1995 –</strong> Foi incluído na antologia de The Penguim Book of International Gay Writing, com “Linda, Uma História Horrível”. Aparece na novela A próxima vítima, em homenagem ao autor Silvio de Abreu. Relança, em edição revisada, a obra “Inventário do Ir-remediável” e publica “Ovelhas Negras”, contos e novelas, pela Sulina. Em dezembro retorna a Santiago, para inauguração de sua foto na galeria dos Escritores Santiaguenses no Centro Cultural. Publica no jornal Zero Hora a crônica “A Raiz do Pampa”.
								</p>

								<p>
									<strong>1996 – Na tarde de 25 de fevereiro, faleceu em Porto Alegre, depois de ter lutado bravamente pela vida.</strong>
								</p>

								<p>
									<strong>* -</strong> Uma coleção inédita de obras em verso encontra-se sob a guarda do Instituto de Letras da UFRGS.
								</p>

								<p>
									<strong>** -</strong> “Pequenas Epifanias” reúne crônicas publicadas no Estadão e em Zero Hora. “Estranhos Estrangeiros” obra de contos. Essas obras foram publicadas postumamente. 
								</p>

								<p>
									<strong>Fonte:</strong> Santiago do Boqueirão, seus poetas quem são?: Caio Fernando Abreu/ Rosane V. Rodrigues e Orlando Fonseca (orgs.) – Frederico Westphalen, RS: URI, 2008.
								</p>

							</div>

						</div>
					</div>

				</div>
			</div>
		</div>
	</section>

	<!-- gallery -->
	<section id="gallery">

		<div class="bg"></div>
	
		<div class="container container-big">
			<div class="row">
				<div class="col-12">
	
					<div class="top">
	
						<div class="left">
	
							<p class="title-big trapeze-title">
								Caio <br />
								<span>na Intimidade</span>
							</p>
	
							<p class="text-medium">
								clique para ampliar as fotos
							</p>
	
						</div>
	
						<div class="right">
							<div class="gallery-slider-nav">
	
								<button class="prev">
									<?php get_template_part('assets/svg/arrow-left', 'none'); ?>
								</button>
	
								<button class="next">
									<?php get_template_part('assets/svg/arrow-right', 'none'); ?>
								</button>
	
							</div>
						</div>
						
					</div>
	
					<div class="bottom">
						<div class="gallery-slider swiper-container">
							<div class="swiper-wrapper">
								<?php
									if( have_rows('fotos_caio_na_intimidade') ):
										while( have_rows('fotos_caio_na_intimidade') ) : the_row(); ?>
											<div class="swiper-slide">
												<a href="<?php the_sub_field('foto'); ?>" data-fancybox="gallery" class="gallery-block">

													<p class="text-small photo-rights">
														<?php the_sub_field('direitos'); ?>
													</p>

													<div class="thumbnail">
														<img src="<?php the_sub_field('foto'); ?>" alt="<?php the_sub_field('direitos'); ?>" />
													</div>
												</a>
											</div>
										<?php endwhile;
									endif;
								?>
							</div>
						</div>
					</div>

					<div class="desc">
						<p class="text-medium">
							Caio foi uma pessoa amada por muitas pessoas. Por isso cuidados em acrescentar todos créditos das fotos. Caso precisemos acrescentar ou retificar algo nos escreva para <a href="mailto:caiofentrenos@gmail.com" class="hover-multiple-lines">caiofentrenos@gmail.com</a>
						</p>
					</div>
	
				</div>
			</div>
		</div>
	</section>

	<!-- links -->
	<section id="links">
		<div class="container container-big">
			<div class="row">
				<div class="col-12">

					<h2 class="trapeze-title title-big">
						<span>Biblioteca Colaborativa</span>
					</h2>

					<div class="grid text-big">

						<a href="#" target="_blank" style="background-image: url('<?=get_site_url()?>/wp-content/themes/caio/assets/img/library-01.jpg');">
							<p>Notion</p>
						</a>

						<a href="#" target="_blank" style="background-image: url('<?=get_site_url()?>/wp-content/themes/caio/assets/img/library-02.jpg');">
							<p>Cartas, Contos e Crônicas</p>
						</a>

						<a href="#" target="_blank" style="background-image: url('<?=get_site_url()?>/wp-content/themes/caio/assets/img/library-03.jpg');">
							<p>Áudios</p>
						</a>

						<a href="#" target="_blank" style="background-image: url('<?=get_site_url()?>/wp-content/themes/caio/assets/img/library-04.jpg');">
							<p>Cinema</p>
						</a>

						<a href="#" target="_blank" style="background-image: url('<?=get_site_url()?>/wp-content/themes/caio/assets/img/library-05.jpg');">
							<p>Entrevistas</p>
						</a>

						<a href="#" target="_blank" style="background-image: url('<?=get_site_url()?>/wp-content/themes/caio/assets/img/library-06.jpg');">
							<p>Filmes e Espetáculos</p>
						</a>

					</div>

				</div>
			</div>
		</div>
	</section>

</main>

<?php get_footer( null, $template_args ); ?>