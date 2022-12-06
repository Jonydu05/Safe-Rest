<?php
// Inicialize a sessão
session_start();

// Verifique se o usuário está logado, se não, redirecione-o para uma página de login
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
  $_SESSION["username"] = "Entrar";
}
include_once('login/src/ocultarErro.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="stylesheet" href="../styles/estilo.css" />
  <link rel="stylesheet" href="../styles/contato.css" />

  <link rel="icon" href="../assets/img/logo2.png" />

  <title>Contate-nos</title>
</head>

<body>
  <header id="header">
    <div id="teste">
      <a href="index.php"><img src="../assets/img/logo2.png" alt="" id="logo" /></a>
      <a href="index.php"><img src="../assets/img/logo5.png" id="tipografia" alt=""></a>
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
        <li><a href="Login/register.php">
            <?php echo htmlspecialchars($_SESSION["username"]); ?>
          </a></li>
      </ul>
    </nav>
  </header>
  <main id="container-contato">

    <div id="contato">
      <h2>Também estamos em:</h2>
      <p>Nossas outras mídias de comunicação:</p>
      <ul>
        <li>
          <ion-icon name="logo-whatsapp"></ion-icon> (11) 12345 678
        </li>
        <li>
          <ion-icon name="logo-instagram"></ion-icon> <a href="https://www.instagram.com/saferest2022/"
            class="link-asilos" target="_blank">Nosso Instagram</a>
        </li>
        <li>
          <ion-icon name="logo-twitter"></ion-icon> <a href="https://twitter.com/SafeRest2022" class="link-asilos"
            target="_blank">Nosso Twitter</a>
        </li>
        <li>
          <ion-icon name="mail-outline"></ion-icon> saferestsr@gmail.com
        </li>
      </ul>
    </div>
    <div id="div-msg">
      <form class="form" action="mailto:saferestsr@gmail.com">
        <h2>CONTATE-NOS</h2>
        <p type="Nome:"><input type="text" placeholder="Seu nome..."></p>
        <p type="Email:"><input type="email" placeholder="Alguma forma para te contatar..."></p>
        <p type="Mensagem:"><input placeholder="Sua mensagem..."></p>
        <button type="submit">Enviar mensagem</button>
      </form>
    </div>
    <div id="local-contato">
      <h2>Estamos localizados em:</h2>
      <span>*Essa é a nossa empresa, não é um asilo</span>
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14635.059267066472!2d-46.6599827!3d-23.5049791!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1aeba7352c471254!2sEtec%20Albert%20Einstein!5e0!3m2!1spt-BR!2sbr!4v1666620443235!5m2!1spt-BR!2sbr"
        width="100%" height="300px" style="border: 0" allowfullscreen="" loading="lazyreferrerpolicy="
        no-referrer-when-downgrade"></iframe>
    </div>

  </main>
  <!-- começo do rodapé -->
  <footer id="footer">
    <nav class="nav-footer">
      <ul class="menu-footer">
        <li><a href="index.php" class="link-footer">Início</a></li>
        <li><a href="asilos.php" class="link-footer">Residências</a></li>
        <li><a href="sobre.php" class="link-footer">Sobre</a></li>
        <li><a href="contato.php" class="link-footer">Contato</a></li>
      </ul>
    </nav>
    <div id="info-footer">
      <div>
        <img src="../assets/img/logo3.png" alt="" class="img-footer">
      </div>
      <section id="section-footer">
        <div class="span-dashboard">
          <span>Tem uma Residência e quer cadastra-la?
            <a href="dashboard/login-asilo.php" id="link-dashboard">Acesse aqui</a>
          </span>
        </div>
        <div class="span-dashboard">
          <span>2022 - Safe&amp;Rest &copy; Todos os direitos reservados.</span>
        </div>
      </section>
    </div>
  </footer>
  <!-- fim do rodapé -->
  <script src="../../src/menu.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>