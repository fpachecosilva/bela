<!DOCTYPE HTML>
<html>

<head>

	<?php
	include 'assets/config.php';

	$tituloPagina = '' . $empresa;
	$descricaoCompartilhamento = '';

	$urlPagina = $url;
	$imagemCompartilhamento = $images . 'compartilhamento.jpg';
	$sessao = 'home';
	?>
	<title><?php echo $tituloPagina ?></title>
	<?php include 'assets/head.php'; ?>

	<meta property="og:title" content="<?php echo $tituloPagina ?>" />
	<meta name="description" content="<?php echo $descricaoCompartilhamento ?>" /> <!-- DESCRIÇÃO SEO GOOGLE -->
	<meta property="og:description" content="<?php echo $descricaoCompartilhamento ?>" /> <!-- DESCRIÇÃO FACEBOOK -->

</head>

<body class="Home">
	<header class="DesktopItem">
		<article>
			<div class="box-links">
				<a href="#menu-abas">Megaexperiência</a>
				<a href="#icones">Informações</a>
			</div>
			<div class="box-social">
				<a class="botaotopo" href="#ingressos">Comprar</a>
				<?php include 'assets/social.php'; ?>
			</div>
		</article>
	</header>

	<section id="principal">
		<img class="bg" src="<?php echo $images ?>bg.jpg">
		<article>
			<h1>ENCENADO NUM BELÍSSIMO SALÃO DE BAILE​<strong>A BELA E A FERA DINING EXPERIENCE​</strong></h1>
		</article>

		<h3 id="ancora-abas">
			Megaexperiência inédita no Brasil convida pessoas de todas as idades para um dos bailes mais famosos dos contos de fada. Prepare-se para viver momentos de fantasia cheios de sabor, música, tecnologia, dança, teatro e ilusionismo. A Bela e A Fera Experience é uma atração cheia de surpresas para encantar toda a família
		</h3>
		<a class="Btn-primary" href="#ingressos">Comprar</a>
	</section>

	<section id="menu-abas">
		<p id="megashow">			
			Após a recepção por nossa equipe devidamente caracterizada. Os visitante serão convidados ao salão real, onde o baile irá começar.  Depois de tomarem os seus lugares e realizarem seus primeiros pedidos, os funcionários da realeza levarão as delicias solicitadas já preparando o público para a segunda parte da experiência.​
			<br><br>
			Com a plateia em formato de restaurante, o show é uma releitura, adaptada da clássica história, originalmente escrita pela francesa Gabrielle-Suzanne Barbot em 1.740. Com dezenas de artistas, os convidados desse glamuroso evento podem esperar muita música, dança, teatro e ilusionismo, além de efeitos especiais visuais durante todo o percurso. Tudo isso enquanto se deliciam com uma experiência gastronômica desenvolvida especialmente para o evento. ​
			<br><br>
			O figurino é um show à parte. Com grande riqueza de detalhes, darão vida e realismo aos clássicos personagens Bela, Fera (que se transforma em príncipe), Candelabro, Relógio e muitos outros. Toda a equipe (recepcionistas, vendedores e garçons) também estará caracterizada com figurinos de época para que a imersão seja ainda mais completa.
			<br><br>
			Os ingressos de A Bela e A Fera Experience têm preços a partir de R$45,00 (couvert artístico). O evento atende a todas as regras de distanciamento social e higiene necessárias para sua realização.​
			<br><br>
			Os assentos são definidos por ordem de chegada. Temos dois palcos, sendo um deles 360°.<br>			
			Crianças a partir dos 24 meses são pagantes.
		</p>

		<video id='videolol' src="<?php echo $images ?>bela.mov" preload="auto" type="video/mp4" controls poster="<?php echo $images ?>bela_Moment.jpg"></video>
	</section>

	<div class="parceiros DesktopItem">
		<p style="text-align: center">MEDIA PARTNER OFICIAL</p>
		<img class="logo-parceiros" src="<?php echo $images ?>media-partner.png">
	</div>

	<section id="icones">
		<h1 class="">A BELA E A FERA EXPERIENCE</h1>

		<div class="menu-locais-links">
			<a class="active" local="pr">CURITIBA</a>
			<a class="" local="rs">PORTO ALEGRE</a>
		</div>

		<div class="local pr active">
			<div class="wrapper-card">
				<div class="card">
					<div class="img-wrapper">
						<img src="<?php echo $images ?>icon02.png">
					</div>
					<h2>JOCKEY PLAZA SHOPPING</h2>
				</div>
				<div class="card">
					<div class="img-wrapper">
						<img src="<?php echo $images ?>icon03.png">
					</div>
					<h2>DURAÇÃO - 75min</h2>
				</div>
			</div>
		</div>

		<div class="local rs">
			<div class="wrapper-card">
				<div class="card">
					<div class="img-wrapper">
						<img src="<?php echo $images ?>icon02.png">
					</div>
					<h2>PRAIA DE BELAS SHOPPING</h2>
				</div>
				<div class="card">
					<div class="img-wrapper">
						<img src="<?php echo $images ?>icon03.png">
					</div>
					<h2>DURAÇÃO - 75min</h2>
				</div>
			</div>
		</div>
	</section>

	<section id="valores">
		<div class="local pr active">
			<h1>HORÁRIOS E VALORES - PR</h1>
			<h2>Quinta e Sexta - 18h e 20h <br>Sáb e Dom - 10h30, 13h, 15h, 17h, 19h e 21h</h2>

			<div class="modelo-3">
				<table>
					<tr>
						<td class="cel-amarela">Dias e Sessões</td>
						<td class="cel-amarela">QUI e SEX - 16h, 18h e 20h</td>
					</tr>
					<tr>
						<td class="cel-azul">Magic Fast Pass (Acesso Exclusivo)</td>
						<td class="cel-verde">Acesso Normal</td>
					</tr>
					<tr>
						<td>Combo VIP</td>
						<td>Combo VIP</td>
					</tr>
					<tr>
						<td>Show, Entrada e Prato Principal</td>
						<td>Show, Entrada e Prato Principal</td>
					</tr>
					<tr>
						<td>De R$ 104,90 por R$ 74,90</td>
						<td>De R$ 94,90 por R$ 64,90</td>
					</tr>
				</table>
				
				<table>
					<tr>
						<td class="cel-amarela" rowspan="2" colspan="2">Dias e Sessões</td>
						<td class="cel-amarela" colspan="2">SÁB - 21h</td>
					</tr>
					<tr>
						<td class="cel-amarela" colspan="2">DOM - 19h e 21h</td>
					</tr>
					<tr>
						<td class="cel-azul" colspan="2">Magic Fast Pass (Acesso Exclusivo)</td>
						<td class="cel-verde" colspan="2">Acesso Normal</td>
					</tr>
					<tr class="colunas-4">
						<td>Combo Premium</td>
						<td>Combo VIP</td>
						<td>Combo Premium</td>
						<td>Combo VIP</td>
					</tr>
					<tr class="colunas-4">
						<td>Show, Entrada, Prato Principal e Sobremesa</td>
						<td>Show, Entrada, Prato Principal</td>
						<td>Show, Entrada, Prato Principal e Sobremesa</td>
						<td>Show, Entrada, Prato Principal</td>
					</tr>
					<tr class="colunas-4">
						<td>De R$ 119,90 por R$ 89,90</td>
						<td>R$ 79,90</td>
						<td>De R$ 109,90 por R$ 79,90</td>
						<td>R$ 69,90</td>
					</tr>
				</table>

				<table>
					<tr>
						<td class="cel-amarela" rowspan="2" colspan="2">Dias e Sessões</td>
						<td class="cel-amarela" colspan="2">SÁB - 13h, 15h, 17h e 19h</td>
					</tr>
					<tr>
						<td class="cel-amarela" colspan="2">DOM - 13h, 15h, 17h</td>
					</tr>
					<tr>
						<td class="cel-azul" colspan="2">Magic Fast Pass (Acesso Exclusivo)</td>
						<td class="cel-verde" colspan="2">Acesso Normal</td>
					</tr>
					<tr class="colunas-4">
						<td>Combo Premium</td>
						<td>Combo VIP</td>
						<td>Combo Premium</td>
						<td>Combo VIP</td>
					</tr>
					<tr class="colunas-4">
						<td>Show, Entrada, Prato Principal e Sobremesa</td>
						<td>Show, Entrada, Prato Principal</td>
						<td>Show, Entrada, Prato Principal e Sobremesa</td>
						<td>Show, Entrada, Prato Principal</td>
					</tr>
					<tr class="colunas-4">
						<td>De R$ 129,90 por R$ 99,90</td>
						<td>R$ 89,90</td>
						<td>De R$ 119,90 por R$ 89,90</td>
						<td>R$ 79,90</td>
					</tr>
				</table>

			</div>
		</div>

		<div class="local rs">
			<h1>HORÁRIOS E VALORES - RS</h1>
			<h2>Quinta e Sexta - 18h e 20h <br>Sáb e Dom - 10h30, 13h, 15h, 17h, 19h e 21h</h2>

			<div class="modelo-3">
				<table>
					<tr>
						<td class="cel-amarela">Dias e Sessões</td>
						<td class="cel-amarela">QUI e SEX - 16h, 18h e 20h</td>
					</tr>
					<tr>
						<td class="cel-azul">Magic Fast Pass (Acesso Exclusivo)</td>
						<td class="cel-verde">Acesso Normal</td>
					</tr>
					<tr>
						<td>Combo VIP</td>
						<td>Combo VIP</td>
					</tr>
					<tr>
						<td>Show, Entrada e Prato Principal</td>
						<td>Show, Entrada e Prato Principal</td>
					</tr>
					<tr>
						<td>De R$ 104,90 por R$ 74,90</td>
						<td>De R$ 94,90 por R$ 64,90</td>
					</tr>
				</table>

				<table>
					<tr>
						<td class="cel-amarela" rowspan="2" colspan="2">Dias e Sessões</td>
						<td class="cel-amarela" colspan="2">SÁB - 21h</td>
					</tr>
					<tr>
						<td class="cel-amarela" colspan="2">DOM - 19h e 21h</td>
					</tr>
					<tr>
						<td class="cel-azul" colspan="2">Magic Fast Pass (Acesso Exclusivo)</td>
						<td class="cel-verde" colspan="2">Acesso Normal</td>
					</tr>
					<tr class="colunas-4">
						<td>Combo Premium</td>
						<td>Combo VIP</td>
						<td>Combo Premium</td>
						<td>Combo VIP</td>
					</tr>
					<tr class="colunas-4">
						<td>Show, Entrada, Prato Principal e Sobremesa</td>
						<td>Show, Entrada, Prato Principal</td>
						<td>Show, Entrada, Prato Principal e Sobremesa</td>
						<td>Show, Entrada, Prato Principal</td>
					</tr>
					<tr class="colunas-4">
						<td>De R$ 119,90 por R$ 89,90</td>
						<td>R$ 79,90</td>
						<td>De R$ 109,90 por R$ 79,90</td>
						<td>R$ 69,90</td>
					</tr>
				</table>

				<table>
					<tr>
						<td class="cel-amarela" rowspan="2" colspan="2">Dias e Sessões</td>
						<td class="cel-amarela" colspan="2">SÁB - 13h, 15h, 17h e 19h</td>
					</tr>
					<tr>
						<td class="cel-amarela" colspan="2">DOM - 13h, 15h, 17h</td>
					</tr>
					<tr>
						<td class="cel-azul" colspan="2">Magic Fast Pass (Acesso Exclusivo)</td>
						<td class="cel-verde" colspan="2">Acesso Normal</td>
					</tr>
					<tr class="colunas-4">
						<td>Combo Premium</td>
						<td>Combo VIP</td>
						<td>Combo Premium</td>
						<td>Combo VIP</td>
					</tr>
					<tr class="colunas-4">
						<td>Show, Entrada, Prato Principal e Sobremesa</td>
						<td>Show, Entrada, Prato Principal</td>
						<td>Show, Entrada, Prato Principal e Sobremesa</td>
						<td>Show, Entrada, Prato Principal</td>
					</tr>
					<tr class="colunas-4">
						<td>De R$ 129,90 por R$ 99,90</td>
						<td>R$ 89,90</td>
						<td>De R$ 119,90 por R$ 89,90</td>
						<td>R$ 79,90</td>
					</tr>
				</table>

			</div>
		</div>

		<!-- <img class="mapa" src="<?php echo $images ?>mapa.jpg"> -->
	</section>

	<section id="ingressos">
		<h1 class="">ENTRADAS</h1>		
		<p class="aviso">
			O Evento seguirá as normas e decretos municipais em relação ao enfretamento da Covid-19, tais como solicitação de comprovante de vacinação e/ou o uso de máscaras de acordo com cada cidade e tem suas condições sujeitas às mudanças dos órgãos reguladores até a data de sua sessão.
		</p>
		
		<div class="wrapper-card">
			<div class="card">
				<a onclick="gtag_report_conversion('<?php echo $siteVendasPR ?>')" class="Btn" href="<?php echo $siteVendasPR ?>">
					<h2>Curitiba</h2>
				</a>
			</div>

			<div class="card">
				<a onclick="gtag_report_conversion('<?php echo $siteVendasRS ?>')" class="Btn" href="<?php echo $siteVendasRS ?>">
					<h2>Porto Alegre</h2>
				</a>
			</div>
		</div>

		<div class="box-social">
			<?php include 'assets/social.php'; ?>
		</div>
		<img class="logofooter" src="<?php echo $images ?>logo.png">
	</section>

	<?php include 'assets/footer.php'; ?>

	<a href="https://api.whatsapp.com/send?phone=5511963302724&amp;text=Oi,%20vim%20através%20do%20website%20A%20Bela%20e%20a%20Fera" target="_blank" id="Whatsapp"><i class="fab fa-whatsapp" aria-hidden="true"></i></a>

</body>

</html>