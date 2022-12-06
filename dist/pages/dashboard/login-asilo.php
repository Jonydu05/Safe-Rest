<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<link rel="stylesheet" href="../../styles/estilo.css" />
	<link rel="stylesheet" href="../../styles/add-residencia.css" />

	<link rel="icon" href="../../assets/img/logo2.png" />

	<title>Adicionar Residência</title>
</head>

<body>
	<header id="header">
		<div id="teste">
			<a href="../index.php"><img src="../../assets/img/logo2.png" alt="" id="logo" /></a>
			<a href="../index.php"><img src="../../assets/img/logo5.png" id="tipografia" alt="" /></a>
		</div>
		<!-- Começo nav -->
		<nav class="nav" id="nav">
			<button aria-label="Abrir Menu" id="btn-mobile" aria-expanded="false" aria-controls="menu" aria-haspopup="true">
				<span id="hamburguer"></span>
			</button>
			<ul class="menu" role="menu">
				<li><a href="../index.php">Início</a></li>
				<li><a href="../asilos.php">Residências</a></li>
				<li><a href="../sobre.php">Sobre</a></li>
				<li><a href="../contato.php">Contato</a></li>
				<li><a href="../login/welcome.php">Entrar</a></li>
			</ul>
		</nav>
	</header>
	<!-- Começo conteúdo -->
	<main class="container">
		<div id="container">
			<h1>Adicionar Residêncial</h1>
			<div class="underline">
			</div>
			<form action="mailto:saferestsr@gmail.com" method="post" id="contact_form">
				<div class="name">
					<label for="name"></label>
					<input type="text" placeholder="Nome" name="name" id="name_input" required>
				</div>
				<div class="email">
					<label for="email"></label>
					<input type="email" placeholder="Email" name="email" id="email_input" required>
				</div>
				<div class="message">
					<label for="message"></label>
					<textarea name="message"
						placeholder="Informe o título, descrição, local, região (caso esteja em SP) e formas de contato. Entraremos em contato."
						id="message_input" cols="30" rows="5" required></textarea>
				</div>
				<div class="submit">
					<input type="submit" value="Enviar" id="form_button" />
				</div>
			</form><!-- // End form -->
		</div><!-- // End #container -->
	</main>
	<!-- começo do rodapé -->
	<footer id="footer">
		<nav class="nav-footer">
			<ul class="menu-footer">
				<li><a href="../index.php" class="link-footer">Início</a></li>
				<li><a href="../asilos.php" class="link-footer">Residências</a></li>
				<li><a href="../sobre.php" class="link-footer">Sobre</a></li>
				<li><a href="../contato.php" class="link-footer">Contato</a></li>
			</ul>
		</nav>
		<div id="info-footer">
			<div>
				<img src="../../assets/img/logo3.png" alt="" class="img-footer" />
			</div>
			<section id="section-footer">
				<div class="span-dashboard">
					<span>2022 - Safe&amp;Rest &copy; Todos os direitos reservados.</span>
				</div>
			</section>
		</div>
	</footer>
	<!-- fim do rodapé -->
	<script src="../../../src/menu.js"></script>
	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>