<?php
// Inicialize a sessão
session_start();

// Verifique se o usuário já está logado, em caso afirmativo, redirecione-o para a página de boas-vindas
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
	header("location: welcome.php");
	exit;
}

// Incluir arquivo de configuração
require_once "config.php";

// Defina variáveis e inicialize com valores vazios
$username = "";
$password = "";
$confirm_password = "";
$username_err = "";
$password_err = "";
$confirm_password_err = "";
$email = "";
$email_err = "";
$cpf = "";
$cpf_err = "";

// Processando dados do formulário quando o formulário é enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {

	// Validar nome de usuário
	if (empty(trim($_POST["username"]))) {
		$username_err = "Por favor coloque um nome de usuário.";
	} elseif (!preg_match('/^[a-zA-Z_ ãá]+$/', trim($_POST["username"]))) {
		$username_err = "O nome de usuário pode conter apenas letras";
	} else {
		$username = trim($_POST["username"]);
	}

	$cpf = $_POST["cpf"];
	if (empty(trim($_POST["cpf"]))) {
		$cpf_err = "Por favor coloque um nome de usuário.";
	} elseif (strlen($_POST["cpf"]) != 11) {
		$cpf_err = "erro ao inserir o CPF - Não informou os dígitos corretamente";
	} elseif (preg_match('/(\d)\1{10}/', $cpf)) {
		$cpf_err = "erro ao inserir o CPF - usuário inseriu uma sequência de dígitos repetidos";
	} else {
		for ($t = 9; $t < 11; $t++) {
			for ($d = 0, $c = 0; $c < $t; $c++) {
				$d += $cpf[$c] * (($t + 1) - $c);
			}
			$d = ((10 * $d) % 11) % 10;
			if ($cpf[$c] != $d) {
				$cpf_err = "erro ao inserir o CPF - CPF inválido";
			}
		}
		$query = "SELECT * FROM `users` WHERE cpf = '$cpf'";
		$stmt = $pdo->query($query);
		$lista = $stmt->fetchAll(PDO::FETCH_NUM);
		if ($lista != null) {
			$cpf_err = "Este cpf já está cadastrado.";
		} else {
			$cpfreal = $_POST["cpf"];
		}
	}

	// Validar email
	$email = $_POST["email"];
	$email = filter_var($email, FILTER_SANITIZE_EMAIL);
	if (empty(trim($_POST["email"]))) {
		$email_err = "Por favor insira um email.";
	} elseif (filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$sql = "SELECT id FROM users WHERE email = :email";

		if ($stmt = $pdo->prepare($sql)) {
			// Vincule as variáveis à instrução preparada como parâmetros
			$stmt->bindParam(":email", $param_email, PDO::PARAM_STR);

			// Definir parâmetros
			$param_email = trim($_POST["email"]);

			// Tente executar a declaração preparada
			if ($stmt->execute()) {
				if ($stmt->rowCount() == 1) {
					$email_err = "Este email já está cadastrado.";
				} else {
					$email = trim($_POST["email"]);
				}
			} else {
				echo "Ops! Algo deu errado. Por favor, tente novamente mais tarde.";
			}

			// Fechar declaração
			unset($stmt);
		}

	} else {
		$email_err = "O email é inválido";
	}

	// Validar senha
	if (empty(trim($_POST["password"]))) {
		$password_err = "Por favor insira uma senha.";
	} elseif (strlen(trim($_POST["password"])) < 6) {
		$password_err = "A senha deve ter pelo menos 6 caracteres.";
	} else {
		$password = trim($_POST["password"]);
	}

	// Validar e confirmar a senha
	if (empty(trim($_POST["confirm_password"]))) {
		$confirm_password_err = "Por favor, confirme a senha.";
	} else {
		$confirm_password = trim($_POST["confirm_password"]);
		if (empty($password_err) && ($password != $confirm_password)) {
			$confirm_password_err = "A senha não confere.";
		}
	}

	// Verifique os erros de entrada antes de inserir no banco de dados
	if (empty($username_err) && empty($cpf_err) && empty($email_err) && empty($password_err) && empty($confirm_password_err)) {

		// Prepare uma declaração de inserção
		$password = password_hash($password, PASSWORD_DEFAULT);

		$query = "
            insert into users(
                username, email, password, cpf
            ) values(
                '$username', '$email', '$password', '$cpfreal'
            )
        ";
		if ($pdo->exec($query)) {
			// Redirecionar para a página de login
			header("location: login.php");
		} else {
			echo "Ops! Algo deu errado. Por favor, tente novamente mais tarde.";
		}

	}
	// Fechar conexão
	unset($pdo);
}
include_once('login/src/ocultarErro.php');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<link rel="stylesheet" href="../../styles/estilo.css" />
	<link rel="stylesheet" href="../../styles/cadastro.css" />

	<link rel="icon" href="../../assets/img/logo2.png" />

	<title>Cadastro</title>
</head>

<body>
	<header id="header">
		<div id="teste">
			<a href="../index.php"><img src="../../assets/img/logo2.png" alt="" id="logo" /></a>
			<a href="../index.php"><img src="../../assets/img/logo5.png" id="tipografia" alt=""></a>
		</div>

		<nav class="nav" id="nav">
			<button aria-label="Abrir Menu" id="btn-mobile" aria-expanded="false" aria-controls="menu" aria-haspopup="true">
				<span id="hamburguer"></span>
			</button>
			<ul class="menu" role="menu">
				<li><a href="../index.php">Início</a></li>
				<li><a href="../asilos.php">Residências</a></li>
				<li><a href="../sobre.php">Sobre</a></li>
				<li><a href="../contato.php">Contato</a></li>
				<li><a href="./register.php">Entrar</a></li>
			</ul>
		</nav>
	</header>

	<main id="div-cadastro">
		<!-- Card cadastro -->
		<div class="card">
			<div class="card-title">
				<h2 class="card-heading">
					<span>Vamos começar,</span>
					<small>Deixe-nos criar sua conta :)</small>
				</h2>
			</div>

			<form class="card-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

				<div class="input">
					<input type="text" id="name" name="username" placeholder="José Euclides" required
						class="input-field <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>"
						value="<?php echo $username; ?>" />
					<label class="input-label" for="name">Nome</label>
					<span class="invalid-feedback">
						<?php echo $username_err; ?>
					</span>
				</div>

				<div class="input">
					<input type="number" id="cpf" name="cpf" placeholder="Digite CPF sem pontos ou traços" required
						class="input-field <?php echo (!empty($cpf_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $cpf; ?>" />
					<label class="input-label" for="name">CPF</label>
					<span class="invalid-feedback">
						<?php echo $cpf_err; ?>
					</span>
				</div>

				<div class="input">
					<input type="email" id="email" name="email" placeholder="jose.euclides@outlook.com" required
						class="input-field <?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $email; ?>" />
					<label class="input-label" for="email">Email</label>
					<span class="invalid-feedback">
						<?php echo $email_err; ?>
					</span>
				</div>

				<div class="input">
					<input type="password" id="password" name="password" required class="input-field" />
					<label class="input-label" for="password">Senha</label>
				</div>

				<div class="input">
					<input type="password" id="confirm-password" name="confirm_password" required
						class="input-field <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>"
						value="<?php echo $confirm_password; ?>" />
					<label class="input-label" for="confirm-password">Confirme a senha</label>
					<span class="invalid-feedback">
						<?php echo $confirm_password_err; ?>
					</span>
				</div>

				<div class="action">
					<input type="submit" class="action-button" id="btn-criar" value="Criar Conta" />
					<input type="reset" class="action-button" id="btn-apagar" value="Apagar Dados">
				</div>

			</form>
			<div class="card-info">
				<p>Ao se cadastrar, você concorda com nossos <a href="#">Termos e Condições</a></p>
				<p>Já tem uma conta? <a href="./login.php">Entre aqui</a></p>
			</div>
		</div>
		<!-- fim card cadastro -->
	</main>

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
				<img src="../../assets/img/logo3.png" alt="" class="img-footer">
			</div>
			<section id="section-footer">
				<div class="span-dashboard">
					<span>Tem uma Residência e quer cadastra-la?
						<a href="../dashboard/login-asilo.php" id="link-dashboard">Acesse aqui</a>
					</span>
				</div>
				<div class="span-dashboard">
					<span>2022 - Safe&amp;Rest &copy; Todos os direitos reservados.</span>
				</div>
			</section>
		</div>
	</footer>
	<!-- fim do rodapé -->
	<script src="../../../src/menu.js"></script>
</body>

</html>