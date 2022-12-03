<?php
    session_start();
    require_once('src/PHPMailer.php');
    require_once('src/SMTP.php');
    require_once('src/Exception.php');
    include_once('config.php');
    
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    
    $mail = new PHPMailer(true);
    $now = date("His");
    $codigo = md5($now);
    $_SESSION['npass']= $codigo;
    $erro= "";
    
    if (isset($_POST['Enviar'])){
        $email= $_POST['email']; 
        $_SESSION['emailcad']= $email;
        $query= "SELECT email, id FROM users WHERE email = '$email'";
        $stmt = $pdo->query($query);
        $lista = $stmt->fetchAll(PDO::FETCH_NUM);

        if($lista == null){
            $erro= "Email não cadastrado";
        }else{
            try {
                $mail->isSMTP();
                $mail->Host = 'smtp-mail.outlook.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'SafeRestSR@outlook.com';
                $mail->Password = 'DescansoSeguro';
                $mail->Port = 587;    
                $mail->setFrom('SafeRestSR@outlook.com');
                $mail->addAddress($email);    
                $mail->isHTML(true);
                $mail->Subject = 'Recuperação de senha - Safe & Rest';
                $mail->Body = 'Nova senha: <b>'.$codigo.'</b>';
                $mail->AltBody = 'Nova senha: '.$codigo;
            
                if($mail->send()) {
                    header("location: thepass.php");
                } else {
                    echo 'Email nao enviado';
                }
            } catch (Exception $e) {
                echo "Erro ao enviar mensagem: {$mail->ErrorInfo}";
            }
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
		<title>Recuperar senha</title>
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
            <label for="email">Informe o email cadastrado</label><br>
            <input name="email" id="email" type="text"> <br><br>
            <input type="submit" name="Enviar" value="Enviar"><br>
            <?php echo $erro ?>
        </form>
        
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