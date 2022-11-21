<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<link rel="stylesheet" href="../styles/estilo.css" />
		<link rel="stylesheet" href="../styles/asilos.css" />
		<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
		<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
		<link rel="icon" href="../assets/img/logo2.png" />
		<title>Residencial Vila dos sonhos</title>
	</head>

	<body>
		<header id="header">
			<!-- prettier-ignore -->
			<div id="teste">
			<a href="../pages/index.php"><img src="../assets/img/logo2.png" alt="" id="logo" /></a>
			<a href="../pages/index.php"><pre id="safeRest">Safe
&amp;Rest</pre> </a>
		</div>

			<nav class="nav">
				<button aria-label="Abrir Menu" id="btn-mobile" aria-expanded="false" aria-controls="menu" aria-haspopup="true">
					<span id="hamburguer"></span>
				</button>
				<ul class="menu" role="menu">
					<li><a href="../pages/index.php">Início</a></li>
					<li><a href="../pages/asilos.php">Asilos</a></li>
					<li><a href="../pages/sobre.php">Sobre</a></li>
					<li><a href="../pages/contato.php">Contato</a></li>
					<li><a href="../pages/login/register.php">Cadastro</a></li>
				</ul>
			</nav>
		</header>
		<!-- fim nav -->

		<div class="asilos">
			<div class="carousel">
				<div><img src="../assets/img/sonhos/foto1.png" alt="" /></div>
			</div>
			<div class="info">
				<h2 class="titulo">Residencial Vila dos sonhos</h2>
				<p class="descricao">
					Com mais de 15 anos, a Residencial Vila dos Sonhos oferece um cuidadoso e belo trabalho para pessoas idosas. Contamos, além de uma infraestrutura capacitada e aconchegante, uma equipe
					profissional e especializada para os melhores cuidados aos idosos. Saiba que aqui o idoso estará em um ambiente totalmente preparado, com amplo espaço, lhe proporcionando o máximo de
					conforto. <br />
					*Mandaqui é um bairro com bastante áreas verdes e com uma boa infraestrutura e qualidade de vida.
				</p>
				<div class="contato">
					<p class="localizacao"><strong> Localização: </strong>Av. Engenheiro Caetano Alvares, 6705 Mandaqui - São Paulo</p>
					<ul>
						<li><ion-icon name="call-outline"></ion-icon> (11) 2283-2934</li>
						<li><ion-icon name="logo-whatsapp"></ion-icon> (11) 99134-0222</li>
					</ul>
				</div>
			</div>
		</div>

		<!-- começo do rodapé -->
		<footer>
			<nav class="nav">
				<ul class="menu">
					<li><a href="../pages/index.php">Início</a></li>
					<li><a href="../pages/asilos.php">Asilos</a></li>
					<li><a href="../pages/sobre.php"> Sobre </a></li>
					<li><a href="../pages/contato.php"> Contato </a></li>
					<li><a href="../pages/login/register.php"> Cadastro </a></li>
				</ul>
			</nav>
			<div>
				<img src="../assets/img/logo3.png" alt="" />
				<p>2022 - Safe&amp;Rest &copy; Todos os direitos reservados</p>
			</div>
		</footer>

		<!-- fim do rodapé -->
		<script src="../../src/menu.js"></script>
		<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
		<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
		<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
		<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
		<script src="../../src/carousel-asilo.js"></script>
	</body>
</html>
