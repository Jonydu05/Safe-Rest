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
		<title>Gardenville</title>
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
				<div><img src="../assets/img/garden/foto1.jpg" alt="" /></div>
				<div><img src="../assets/img/garden/foto2.jpg" alt="" /></div>
				<div><img src="../assets/img/garden/foto3.jpg" alt="" /></div>
			</div>
			<div class="info">
				<h2 class="titulo">Gardenville</h2>
				<p class="descricao">
					Um residencial para idosos em todos os níveis de necessidades. Tudo aqui foi pensado e desenvolvido para que os moradores se sintam em casa. Por isso, nossas instalações e serviços foram
					desenhados para valorizar a privacidade e seu bem-estar individual. Nosso atendimento é personalizado de acordo com as necessidades e preferências pessoais de cada morador.
				</p>
				<div class="contato">
					<p class="localizacao"><strong> Localização: </strong> Rua Itá, 381 – Horto Florestal, São Paulo - Zona Norte</p>
					<ul>
						<li><ion-icon name="logo-whatsapp"></ion-icon> (11) 93463-5474</li>
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
