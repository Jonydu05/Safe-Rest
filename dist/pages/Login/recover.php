<?php
session_start();
require_once('src/PHPMailer.php');
require_once('src/SMTP.php');
require_once('src/Exception.php');
include_once('config.php');
// include_once('src/ocultarErro.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);
$now = date("His");
$codigo = md5($now);
$_SESSION['npass'] = $codigo;
$erro = "";

if (isset($_POST['Enviar'])) {
  $email = $_POST['email'];
  $_SESSION['emailcad'] = $email;
  $query = "SELECT email, id FROM users WHERE email = '$email'";
  $stmt = $pdo->query($query);
  $lista = $stmt->fetchAll(PDO::FETCH_NUM);

  if ($lista == null) {
    $erro = "Email não cadastrado";
  } else {
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
      $mail->Subject = 'Recuperacao de senha - Safe & Rest';
      $mail->Body = 'Nova senha: <b>' . $codigo . '</b>';
      $mail->AltBody = 'Nova senha: ' . $codigo;

      if ($mail->send()) {
        header("location: thepass.php");
      } else {
        echo 'Email nao enviado';
      }
    } catch (Exception $e) {
      echo "Erro ao enviar mensagem: {$mail->ErrorInfo}";
    }
  }
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

  <title>Recuperar senha</title>
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
    <div class="card">
      <section class="card-title">
        <h2 class="card-heading">
          <span>Recuperar senha através do Outlook!</span>
          <small>Informe o email cadastrado</small>
        </h2>
      </section>

      <form class="card-form" method="post">

        <section class="input">
          <input type="email" id="email" name="email" required class="input-field" />
          <label class="input-label" for="email">Digite o email cadastrado</label>
          <span class="invalid-feedback">
            <?php echo $erro ?>
          </span>
        </section>

        <section class="action">
          <input class="action-button" type="submit" value="Enviar" name="Enviar">
        </section>

      </form>
      <section class="card-info">
        <ul>
          <li><a href="./login.php">Cancelar</a></li>
        </ul>
      </section>
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