<?php
// Inicialize a sessão
session_start();
 
// Verifique se o usuário está logado, se não, redirecione-o para uma página de login
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    $_SESSION["username"] = "Entrar";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<link href="../styles/estilo.css" rel="stylesheet" />
		<link rel="stylesheet" href="../styles/sobre.css" type="text/css" />

		<link rel="icon" href="../assets/img/logo2.png" />

		<script src="https://kit.fontawesome.com/da55f0765a.js" crossorigin="anonymous"></script>

		<title>Sobre Nós</title>
	</head>

	<body>
		<header id="header">
			<!-- prettier-ignore -->
			<div id="teste">
				<a href="../index.php"><img src="../assets/img/logo2.png" alt="" id="logo" /></a>
				<a href="../index.php"><pre id="safeRest">Safe
&amp;Rest</pre> </a>
			</div>

			<nav class="nav" id="nav">
				<button aria-label="Abrir Menu" id="btn-mobile" aria-expanded="false" aria-controls="menu" aria-haspopup="true">
					<span id="hamburguer"></span>
				</button>

				<ul class="menu" role="menu">
					<li><a href="index.php">Início</a></li>
					<li><a href="asilos.php">Residências</a></li>
					<li><a href="sobre.php">Sobre</a></li>
					<li><a href="contato.php">Contato</a></li>
					<li><a href="Login/register.php"><?php echo htmlspecialchars($_SESSION["username"]); ?></a></li>
				</ul>
			</nav>
		</header>

		<div id="info-sobre">
			<h2>Quem somos</h2>
			<div id="div-quem">
				<img src="../assets/img/logo4.png" alt="" id="img-quem" />
				<p id="txt-quem">
					O Safe & Rest, é um projeto que teve o início de seu desenvolvimento em 2022, quando um grupo de começavam a fazer seu projeto de TCC. <br>
					Hoje, propomos um espaço em que todos as pessoas possam ter um contato mais simplificado com Residências para terceira idade e casas de repouso da região, possibilitando uma conexão direta e uma hospedagem segura e
					confiável com os parceiros disponíveis.
				</p>
			</div>

			<h2>Fundadores</h2>

			<div class="pessoas">
				<div class="card">
					<div class="banner" id="diego"></div>
					<h2 class="name">Diego</h2>
				</div>
				<div class="card">
					<div class="banner" id="guilherme"></div>
					<h2 class="name">Guilherme</h2>
				</div>
				<div class="card">
					<div class="banner" id="henrique"></div>
					<h2 class="name">Henrique</h2>
				</div>
				<div class="card">
					<div class="banner" id="joao"></div>
					<h2 class="name">João</h2>
				</div>
				<div class="card">
					<div class="banner" id="kaique"></div>
					<h2 class="name">Kaique</h2>
				</div>
				<div class="card">
					<div class="banner" id="kauan"></div>
					<h2 class="name">Kauan</h2>
				</div>
				<div class="card">
					<div class="banner" id="luiz"></div>
					<h2 class="name">Luiz</h2>
				</div>
				<div class="card">
					<div class="banner" id="rafael"></div>
					<h2 class="name">Rafael</h2>
				</div>
				<div class="card">
					<div class="banner" id="rafaela"></div>
					<h2 class="name">Rafaela</h2>
				</div>
				<div class="card">
					<div class="banner" id="vinicius"></div>
					<h2 class="name">Vinícius</h2>
				</div>
			</div>
		</div>

		<!-- começo do rodapé -->
		<footer>
			<nav class="nav">
				<ul class="menu">
					<li><a href="index.php">Início</a></li>
					<li><a href="asilos.php">Residências</a></li>
					<li><a href="sobre.php">Sobre</a></li>
					<li><a href="contato.php">Contato</a></li>
					<li><a href="login/register.php">Entrar</a></li>
				</ul>
			</nav>
			<div>
				<img src="../assets/img/logo3.png" alt="" />
				<p>2022 - Safe&amp;Rest &copy; Todos os direitos reservados</p>
			</div>
		</footer>
		<!-- fim do rodapé -->
		<script src="../../src/menu.js"></script>
	</body>
</html>
