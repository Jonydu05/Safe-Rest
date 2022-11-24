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
		<link rel="stylesheet" href="../styles/estilo.css" />
		<link rel="stylesheet" href="../styles/cards.css" />
		<link rel="icon" href="../assets/img/logo2.png" />
		<title>Residências</title>
	</head>
	<body>
		<header id="header">
			<!-- prettier-ignore -->
			<div id="teste">
				<a href="index.php"><img src="../assets/img/logo2.png" alt="" id="logo" /></a>
				<a href="index.php">
					<pre id="safeRest">Safe
&amp;Rest</pre> </a>
			</div>
			<!-- barra de pesquisa -->
			<div id="search">
				<input type="text" class="form-control" placeholder="Buscar..." id="searchInput" />
			</div>
			<!-- Começo nav -->
			<nav class="nav" id="nav">
				<button aria-label="Abrir Menu" id="btn-mobile" aria-expanded="false" aria-controls="menu" aria-haspopup="true">
					<span id="hamburguer"></span>
				</button>
				<ul class="menu" role="menu">
					<input type="text" class="form-control search-mobile" placeholder="Buscar..." id="inputMobile" />
					<li><a href="index.php">Início</a></li>
					<li><a href="asilos.php">Residências</a></li>
					<li><a href="sobre.php">Sobre</a></li>
					<li><a href="contato.php">Contato</a></li>
					<li><a href="Login/register.php"><?php echo htmlspecialchars($_SESSION["username"]); ?></a></li>
				</ul>
			</nav>
		</header>
		<!-- Começo conteúdo -->
		<main class="container">
			<div id="list"></div>
		</main>
		<!-- começo do rodapé -->
		<footer>
			<nav class="nav">
				<ul class="menu">
					<li><a href="index.php">Início</a></li>
					<li><a href="asilos.php">Residências</a></li>
					<li><a href="sobre.php">Sobre</a></li>
					<li><a href="contato.php">Contato</a></li>
					<li><a href="Login/register.php">Entrar</a></li>
				</ul>
			</nav>
			<div>
			<img src="../assets/img/logo3.png" alt="" />
			<p>2022 - Safe&amp;Rest &copy; Todos os direitos reservados</p>
			</div>
		</footer>
		<!-- fim do rodapé -->
		<script src="../../src/menu.js"></script>
		<script src="../app.js"></script>
		<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
		<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
	</body>
</html>
