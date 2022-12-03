<?php
    session_start();
    include_once('config.php');
    $_SESSION['npass'];
    $emailcadastrado= $_SESSION['emailcad'];
    $success= "";
    if (isset($_POST['Enviar'])){
        $nova= $_POST['newpassword']; 
        if($nova == $_SESSION['npass']){
            $query= "UPDATE users SET password = '$nova' WHERE email = '$emailcadastrado'";
            if($pdo->query($query)){
                $success= "Senha alterada";
            }
        }else{
            $success= "ERRO: Código diferente do que o enviado.";
        }
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
		<title>Login</title>
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

        <h1>Recuperar senha através do Outlook</h1>
        <form action="" method="POST">
            <label for="newpassword">Informe a nova senha enviada no seu email:</label><br>
            <input name="newpassword" id="newpassword" type="text"> <br><br>
            <input type="submit" name="Enviar" value="Enviar">
        </form>
        <?php 
            if($success == "Senha alterada"){
                echo "<br><br>".$success;
                sleep(10);
                header("location: login.php");
            }
        ?>

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