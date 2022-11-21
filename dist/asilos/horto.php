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
		<title>Clínica de Repouso Horto Florestal</title>
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
				<div><img src="../assets/img/horto/foto1.jpeg" alt="" /></div>
				<div><img src="../assets/img/horto/foto2.png" alt="" /></div>
				<div><img src="../assets/img/horto/foto3.png" alt="" /></div>
			</div>
			<div class="info">
				<h2 class="titulo">Clínica de Repouso Horto Florestal</h2>
				<p class="descricao">
					A Clínica de Repouso Horto Florestal, fundada em 1972 pelo médico Dr. Chafik Curi, cuida de pessoas em diferentes condições de saúde. Com amor, respeito e profissionalismo, oferece aos seus
					residentes um verdadeiro lar. É provavelmente a região urbana com maior densidade de área verde no município. Junta-se à vegetação das ruas e terrenos as extensas matas do Horto Florestal e
					do Parque Estadual da Cantareira, que ficam em volta - parte do parque pertence ao distrito vizinho Mandaqui.
				</p>
				<div class="contato">
					<p class="localizacao"><strong> Localização: </strong>Av. Luis Carlos Gentile de Laet, 452 - Horto Florestal – São Paulo</p>
					<ul>
						<li><ion-icon name="call-outline"></ion-icon> (11) 2203-0701 | (11) 2203-0801</li>
						<li><ion-icon name="logo-whatsapp"></ion-icon> (11) 93463-3205</li>
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
