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
  <link rel="stylesheet" href="../styles/contato.css" />
  <link rel="stylesheet" href="../styles/home.css" />

  <link rel="icon" href="../assets/img/logo2.png" />
  <script src="https://kit.fontawesome.com/da55f0765a.js" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/scrollreveal"></script>
  <title>Início</title>
</head>

<body>
  <header id="header">
    <!-- prettier-ignore -->
    <div id="teste">
      <a href="index.php"><img src="../assets/img/logo2.png" alt="" id="logo" /></a>
      <a href="index.php">
        <pre id="safeRest">Safe
&amp;Rest</pre>
      </a>
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
        <li><a href="Login/register.php"><?php echo htmlspecialchars($_SESSION["username"]); ?></a></li>
      </ul>
    </nav>
  </header>

  <div class="wrapper">
    <main>
      <section class="module parallax parallax-1">
        <h1 class="area-1">Safe & Rest</h1>
      </section>

      <section class="module content">
        <div class="container area-2">
          <h2>Qual nosso objetivo?</h2>
          <p>
            Nosso objetivo é ajudar as pessoas que estão em dúvida, em qual casa de repouso escolher, disponibilizando
            algumas ferramentas que criamos, para auxiliá-las nesse processo - que acreditamos ser extramamente
            importante na vida dos idosos - para ter um grande leque de opções e não se arrepender e ter que trocar
            depois de ter contactado a residência desejada.
          </p>
          <p>
            Para isso criamos algumas ferramentas, que são, a pesquisa por residências, avaliações de clientes, entre
            outros.
          </p>
        </div>
      </section>

      <section class="module parallax parallax-2">
        <h1 class="area-3">É gratuito?</h1>
      </section>

      <section class="module content">
        <div class="container area-4">
          <h2>Como acessar?</h2>
          <p>
            Sim! É completamente gratuito! Tudo que você tem que fazer é clicar no botão abaixo e já vai poder ver as
            residências para terceira idade! <br>
            <span class="texto">PS: lá em cima, na barra de navegação também tem um botão para ver as residências para
              terceira idade :)</span>
          </p>
          <div class="container-btn">
            <button class="btn-asilo"><a href="asilos.php" class="link-asilos">Acessar</a></button>
          </div>
        </div>
      </section>
    </main>
  </div>

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
  <script src="../../src/scroll.js"></script>
  <script src="../../src/menu.js"></script>
  <script src="../../src/carousel-asilo.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>