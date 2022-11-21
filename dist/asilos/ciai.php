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
		<title>Centro Integrado de Atendimento ao Idoso</title>
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
				<div><img src="../assets/img/ciai/foto1.jpg" alt="" /></div>
				<div><img src="../assets/img/ciai/foto2.jpg" alt="" /></div>
				<div><img src="../assets/img/ciai/foto3.jpg" alt="" /></div>
			</div>
			<div class="info">
				<h2 class="titulo">Centro Integrado de Atendimento ao Idoso</h2>
				<p class="descricao">
					Criado há mais de 30 anos, o Centro Integrado de Atendimento ao Idoso se tornou uma referência em residência permanente de cuidados sênior em São Paulo. As suítes possuem infraestrutura
					completa para a saúde e o conforto dos hóspedes, as áreas de convivência são cercadas de natureza e o canto dos pássaros nos faz esquecer que estamos na cidade. O CIAI possui facilidades
					como restaurante, café e farmácia, entre outros. A agenda dos nossos hóspedes seniores é repleta de atividades para estimulação cognitiva, física e social, tudo isso orquestrado por uma
					equipe multidisciplinar, treinada para agir com profissionalismo, mas sem deixar o carinho e o afeto de lado. Seja bem-vindo (a) ao CIAI.
				</p>
				<div class="contato" id="contato-palmeiras">
					<p class="localizacao"><strong> Localização: </strong> R. Alfredo Mendes da Silva, 201 – Jardim Jussara, São Paulo</p>
					<ul>
						<li><ion-icon name="call-outline"></ion-icon> (11) 3751-4951</li>
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
