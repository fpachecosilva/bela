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
	<title><? echo $tituloPagina ?></title>
	<?php include 'assets/head.php'; ?>

	<meta property="og:title" content="<? echo $tituloPagina ?>" />
	<meta name="description" content="<? echo $descricaoCompartilhamento ?>" /> <!-- DESCRIÇÃO SEO GOOGLE -->
	<meta property="og:description" content="<? echo $descricaoCompartilhamento ?>" /> <!-- DESCRIÇÃO FACEBOOK -->

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
		<img class="bg" src="<? echo $images ?>bg.jpg">
		<article>
			<h1>DENTRO DE UM LINDO CASTELO<strong>A BELA E A FERA EXPERIENCE</strong> UNE ENTRETENIMENTO E GASTRONOMIA
			</h1>
		</article>

		<h3 id="ancora-abas">
			Megaexperiência inédita no Brasil convida pessoas de todas as idades para um dos bailes mais famosos dos contos de fada. Prepare-se para viver momentos de fantasia cheios de sabor, música, tecnologia, dança, teatro e ilusionismo. A Bela e A Fera Experience é uma atração cheia de surpresas para encantar toda a família
		</h3>
		<a class="Btn-primary" href="#ingressos">Comprar</a>
	</section>

	<section id="menu-abas">
		<p id="megashow">
			Ao chegar no estacionamento do Shopping, o visitante já se sentirá transportado para um lugar fantástico ao se deparar com o imponente castelo com em média 700mt² montado para receber A Bela e A Fera Experience. Toda a experiência começa ao entrar em um encantado foyer perfeito para incríveis registros fotográficos.
			<br><br>
			Após a recepção na entrada do castelo, os visitantes serão convidados ao baile real, que acontece dentro do salão principal. Após tomarem seus lugares, os funcionários da realeza passarão de mesa em mesa oferecendo o cardápio das delícias do dia e já preparando o público para o início da segunda parte da experiência.
			<br><br>
			Com a plateia em formato Dinner o show é uma releitura, adaptada da  clássica história, originalmente escrita pela francesa Gabrielle-Suzanne Barbot em 1740. Com dezenas de artistas, os convidados desse glamuroso evento podem esperar muita música, dança, teatro e ilusionismo, além de efeitos especiais visuais e olfativos durante todo o percurso. Tudo isso enquanto se deliciam com uma experiência gastronômica elaborada especialmente pela chef Ana Laura de Melo Guedes e Oliveira.
			<br><br>
			O figurino é um show à parte. Com grande riqueza de detalhes, darão vida e realismo aos clássicos personagens Bela, Fera (que se transforma em príncipe), Candelabro, Relógio e muitos outros. Toda a equipe (recepcionistas, vendedores e garçons) também estará caracterizada com figurinos de época para que a imersão seja ainda mais completa.
			<br><br>
			Os ingressos de A Bela e A Fera Experience têm preços a partir de R$50,00 (couvert artístico). O evento atende a todas as regras de distanciamento social e higiene necessárias para sua realização.
			<br><br>
			Os assentos são definidos por ordem de chegada. Temos dois palcos, sendo um deles 360°.<br>			
			Crianças a partir dos 24 meses são pagantes.
		</p>

		<video id='videolol' src="<? echo $images ?>bela.mov" preload="auto" type="video/mp4" controls poster="<? echo $images ?>bela_Moment.jpg"></video>
	</section>

	<section id="icones">
		<h1 class="">A BELA E A FERA EXPERIENCE</h1>

		<div class="menu-locais-links">
			<a class="active" local="rj">RIO DE JANEIRO</a>
		</div>

		<div class="local rj active">
			<div class="wrapper-card">
				<div class="card">
					<div class="img-wrapper">
						<img src="<? echo $images ?>icon02.png">
					</div>
					<h2>ESTACIONAMENTO VIA PARQUE SHOPPING</h2>
				</div>
				<div class="card">
					<div class="img-wrapper">
						<img src="<? echo $images ?>icon03.png">
					</div>
					<h2>DURAÇÃO - 75min</h2>
				</div>
			</div>
		</div>
	</section>


	<section id="valores">

		<div class="local rj active">
			<h1>HORÁRIOS E VALORES - RJ</h1>

			<h2>Quinta e Sexta - 18h e 20h <br>Sáb e Dom - 10h30, 13h, 15, 17h e 19h</h2>
			<table>
				<tr>
					<td class="first"></td>
					<td class="first">QUI-SEX</td>
					<td class="first">SÁB-DOM</td>
				</tr>

				<tr>
					<td class="first">Couvert Artistico</td>
					<td>R$ 00,00</td>
					<td>R$ 00,00</td>
				</tr>

				<tr>
					<td class="first">Promocional Couvert Art + Consumação</td>
					<td>R$ 00,00<br> (R$ 35 Couvert + R$ 45 consumação)</td>
					<td>R$ 00,00<br> (R$ 45 couvert + R$ 45 consumação)</td>
				</tr>
			</table>
		</div>
	</section>

	<section id="ingressos">
		<h1 class="">INGRESSOS</h1>
		
		<p class="aviso">
			Atendendo aos decretos municipais n°60.488 (São Paulo) e nº 49.335 (Rio de Janeiro) e portaria SMSA/SUS-BH Nº 0604/2021 (Belo Horizonte), o evento A Bela e a Fera Experience, solicitará ao público que irá assistir e viver a experiência , o comprovante de vacinação do cidadão contra a COVID-19 para o acesso aos eventos. O público poderá apresentar o comprovante físico de vacinação (carteirinha de vacinação), ou de forma digital disponível nas plataformas ConectSUS, que podem ser baixados na loja de aplicativos do seu smartphone
		</p>
		
		<div class="wrapper-card">
			<div class="card">
				<a onclick="gtag_report_conversion('<? echo $siteVendasRJ ?>')" class="Btn" href="<? echo $siteVendasRJ ?>">
					<h2>Rio de Janeiro</h2>
				</a>
			</div>
		</div>

		<!-- <div class="ingressostxt">
			<p>

			</p>
		</div> -->

		<div class="box-social">
			<?php include 'assets/social.php'; ?>
		</div>

		<img class="logofooter" src="<? echo $images ?>logo.png">

	</section>


	<?php include 'assets/footer.php'; ?>

	<a href="https://api.whatsapp.com/send?phone=5511963302724&amp;text=Oi,%20vim%20através%20do%20website%20A%20Bela%20e%20a%20Fera" target="_blank" id="Whatsapp"><i class="fab fa-whatsapp" aria-hidden="true"></i></a>

</body>

</html>