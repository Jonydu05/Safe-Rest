<?php
session_start();
include_once('config.php');
$_SESSION['npass'];
$emailcadastrado = $_SESSION['emailcad'];
$success = "";
if (isset($_POST['Enviar'])) {
  $nova = $_POST['newpassword'];
  if ($nova == $_SESSION['npass']) {
    $query = "UPDATE users SET password = '$nova' WHERE email = '$emailcadastrado'";
    if ($pdo->query($query)) {
      $success = "Senha alterada";
    }
  } else {
    $success = "ERRO: Código diferente do que o enviado.";
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

  <title>Login</title>
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
      <section class="card-title" id="titulo-recuperar">
        <h2 class="card-heading">
          <span>Recuperar senha através do Outlook!</span>
          <small>Informe a nova senha enviada no seu email:</small>
        </h2>
      </section>

      <form class="card-form" method="post">

        <section class="input">
          <input type="password" id="newpassword" name="newpassword" class="input-field" required />
          <label class="input-label" for="newpassword">Digite a senha enviada:</label>
        </section>

        <section class="action">
          <input class="action-button" type="submit" value="Enviar" name="Enviar">
        </section>
      </form>

      <?php
      if ($success == "Senha alterada") {
        echo "<br><br>" . $success;
        sleep(10);
        header("location: login.php");
      }
      ?>

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