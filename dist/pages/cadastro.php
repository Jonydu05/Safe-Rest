<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<link href="../styles/estilo.css" rel="stylesheet" />
		<link rel="stylesheet" href="../styles/cadastro.css" />

		<link rel="icon" href="../assets/img/logo2.png" />

		<title>Cadastro | Login</title>
	</head>

	<body>
		<header id="header">
			<!-- prettier-ignore -->
			<div id="teste">
				<a href="index.php"><img src="../assets/img/logo2.png" alt="" id="logo" /></a>
				<a href="index.php"><pre id="safeRest">Safe
&amp;Rest</pre> </a>
			</div>

			<nav class="nav">
				<button aria-label="Abrir Menu" id="btn-mobile" aria-expanded="false" aria-controls="menu" aria-haspopup="true">
					<span id="hamburguer"></span>
				</button>
				<ul class="menu" role="menu">
					<li><a href="index.php">Início</a></li>
					<li><a href="asilos.php">Asilos</a></li>
					<li><a href="sobre.php">Sobre</a></li>
					<li><a href="contato.php">Contato</a></li>
					<li><a href="Login/register.php">Cadastro</a></li>
				</ul>
			</nav>
		</header>

		<div id="div-cadastro">
			<!-- Card cadastro -->

			<div class="card">
				<div class="card-title">
					<h2 class="card-heading">
						<span>Vamos começar,</span>
						<small>Deixe-nos criar sua conta :)</small>
					</h2>
				</div>

				<form class="card-form">
					<div class="input">
						<input type="text" class="input-field" name="nome" placeholder="José Euclides" required />
						<label class="input-label">Nome</label>
					</div>

					<div class="input">
						<input type="email" class="input-field" name="email" placeholder="jose.euclides@email.com" required />
						<label class="input-label">Email</label>
					</div>

					<div class="input">
						<input type="password" class="input-field" name="senha" required />
						<label class="input-label">Senha</label>
					</div>

					<div class="action">
						<button class="action-button">Cadastrar</button>
					</div>
				</form>

				<div class="card-info">
					<p>Ao se cadastrar, você concorda com nossos<a href="#">Termos e Condições</a></p>
				</div>
			</div>

			<!-- fim card cadastro -->

			<!-- car login  -->

			<div class="card" id="card-login">
				<div class="card-title">
					<h2 class="card-heading">
						<span>Bem-vindo de volta!</span>
					</h2>
				</div>

				<form class="card-form">
					<div class="input">
						<input type="email" class="input-field" name="email" placeholder="jose.euclides@email.com" required />
						<label class="input-label">Email</label>
					</div>

					<div class="input">
						<input type="password" class="input-field" name="senha" required />
						<label class="input-label">Senha</label>
					</div>

					<div class="action">
						<button class="action-button">Login</button>
					</div>
				</form>

				<div class="card-info">
					<p>
						<a href="#" class="link-asilos">Esqueci a senha</a>
					</p>
				</div>

				<!-- fim card login -->
			</div>
		</div>
		<!-- começo do rodapé -->
		<footer>
			<nav class="nav">
				<ul class="menu">
					<li><a href="index.php">Início</a></li>
					<li><a href="asilos.php">Asilos</a></li>
					<li><a href="sobre.php">Sobre</a></li>
					<li><a href="contato.php">Contato</a></li>
					<li><a href="Login/register.php">Cadastro</a></li>
				</ul>
			</nav>
			<div>
			<img src="../assets/img/logo3.png" alt="" />
			<p>2022 - Safe&amp;Rest &copy; Todos os direitos reservados</p>
			</div>
		</footer>
		<!-- fim do rodapé -->
		<script src="/src/menu.js"></script>
	</body>
</html>
