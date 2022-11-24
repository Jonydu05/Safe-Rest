<?php
// Inicialize a sessão
session_start();
 
// Verifique se o usuário já está logado, em caso afirmativo, redirecione-o para a página de boas-vindas
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: welcome.php");
    exit;
}
 
// Incluir arquivo de configuração
require_once "config.php";
 
// Defina variáveis e inicialize com valores vazios
$email = $password = "";
$email_err = $password_err = $login_err = "";
 
// Processando dados do formulário quando o formulário é enviado
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Verifique se o nome de usuário está vazio
    if(empty(trim($_POST["email"]))){
        $email_err = "Por favor, insira o nome de usuário.";
    } else{
        $email = trim($_POST["email"]);
    }
    
    // Verifique se a senha está vazia
    if(empty(trim($_POST["password"]))){
        $password_err = "Por favor, insira sua senha.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validar credenciais
    if(empty($email_err) && empty($password_err)){
        // Prepare uma declaração selecionada
        $sql = "SELECT id, username, email, password FROM users WHERE email = :email";
         
        if($stmt = $pdo->prepare($sql)){
            // Vincule as variáveis à instrução preparada como parâmetros
            $stmt->bindParam(":email", $param_email, PDO::PARAM_STR);
            
            // Definir parâmetros
            $param_email = trim($_POST["email"]);
            
            // Tente executar a declaração preparada
            if($stmt->execute()){
                // Verifique se o nome de usuário existe, se sim, verifique a senha
                if($stmt->rowCount() == 1){
                    if($row = $stmt->fetch()){
                        $id = $row["id"];
                        $username = $row["username"];
                        $email = $row["email"];
                        $hashed_password = $row["password"];
                        if(password_verify($password, $hashed_password)){
                            // A senha está correta, então inicie uma nova sessão
                            session_start();
                            
                            // Armazene dados em variáveis de sessão
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;  
                            $_SESSION["email"] = $email;                            
                            
                            // Redirecionar o usuário para a página de boas-vindas
                            header("location: ../index.php");
                        } else{
                            // A senha não é válida, exibe uma mensagem de erro genérica
                            $login_err = "Nome de usuário ou senha inválidos.";
                        }
                    }
                } else{
                    // O nome de usuário não existe, exibe uma mensagem de erro genérica
                    $login_err = "Nome de usuário ou senha inválidos.";
                }
            } else{
                echo "Ops! Algo deu errado. Por favor, tente novamente mais tarde.";
            }

            // Fechar declaração
            unset($stmt);
        }
    }
    
    // Fechar conexão
    unset($pdo);
}
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

		<title>Entrar</title>
	</head>

	<body>
		<header id="header">
			<!-- prettier-ignore -->
			<div id="teste">
				<a href="../index.php"><img src="../../assets/img/logo2.png" alt="" id="logo" /></a>
				<a href="../index.php"><pre id="safeRest">Safe
&amp;Rest</pre> </a>
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

		<div id="div-cadastro">
			<!-- card login  -->

			<div class="card" id="card-login">
				<div class="card-title">
					<h2 class="card-heading">
						<span>Bem-vindo de volta!</span>
					</h2>
				</div>

				<?php 
        if(!empty($login_err)){
            echo '<div class="alert alert-danger">' . $login_err . '</div>';
        }
        ?>

				<form class="card-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
					<div class="input">
						<input type="email" name="email" placeholder="jose.euclides@email.com" required  class="input-field <?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $email; ?>"/>
						<label class="input-label">Email</label>
						<span class="invalid-feedback"><?php echo $email_err; ?></span>
					</div>

					<div class="input">
						<input type="password" name="password" required class="input-field <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>"/>
						<label class="input-label">Senha</label>
						<span class="invalid-feedback"><?php echo $password_err; ?></span>
					</div>

					<div class="action">
						<input type="submit" class="action-button" value="Entrar"/>
					</div>
				</form>

				<div class="card-info">
					<p>Não tem uma conta? <a href="register.php">Inscreva-se agora</a>.</p>
				</div>
			</div>
				<!-- fim card login -->
		</div>

    <footer>
			<nav class="nav">
				<ul class="menu">
					<li><a href="../index.php">Início</a></li>
					<li><a href="../asilos.php">Residências</a></li>
					<li><a href="../sobre.php">Sobre</a></li>
					<li><a href="../contato.php">Contato</a></li>
					<li><a href="./register.php">Entrar</a></li>
				</ul>
			</nav>
			<div>
			<img src="../../assets/img/logo3.png" alt="" />
			<p>2022 - Safe&amp;Rest &copy; Todos os direitos reservados</p>
			</div>
		</footer>
		<!-- fim do rodapé -->
		<script src="../../../src/menu.js"></script>
	</body>
</html>