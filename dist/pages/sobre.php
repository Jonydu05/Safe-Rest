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
  <link rel="stylesheet" href="../styles/sobre.css" />

  <link rel="icon" href="../assets/img/logo2.png" />

  <script src="https://kit.fontawesome.com/da55f0765a.js" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/scrollreveal"></script>
  <title>Sobre Nós</title>
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
        <li><a href="Login/register.php"><?php echo htmlspecialchars($_SESSION["username"]); ?></a></li>
      </ul>
    </nav>
  </header>
  <main>
    <section class="module parallax parallax-1">
      <h1 class="area-1">Quem Somos?</h1>
    </section>

    <section class="module content">
      <div class="container area-2">
        <h2>Como começou?</h2>
        <p>O Safe & Rest, é um projeto que teve o início de seu desenvolvimento em 2022, quando um grupo de alunos da
          ETEC Albert Einstein começavam a
          fazer seu projeto de TCC. Hoje, propomos um espaço em que todos as pessoas possam ter um contato mais
          simplificado com Residências para terceira idade e casas de repouso da região, possibilitando uma conexão
          direta e uma hospedagem segura e confiável com os parceiros disponíveis.</p>
      </div>
      <div class="container area-2 quem-somos">
        <p>E para fazermos isso, agimos com base em:
        <ul>
          <li>Respeito</li>
          <li>Cuidado</li>
          <li>Carinho</li>
          <li>Atenção</li>
        </ul>
        </p>
      </div>
    </section>

    <section class="module parallax parallax-2">
      <h1 class="area-3">Nossa Equipe</h1>
    </section>

    <section class="module content section-pessoas">
      <div class="container area-4">
        <h2>Design e Mídias Sociais</h2>
        <div class="fotos">
          <div>
            <img src="../assets/img/pessoas/kaique.jpg" alt="Kaique" class="img-pessoas">
            <span>Kaique</span>
          </div>
          <div>
            <img src="../assets/img/pessoas/rafaela.jpg" alt="Rafaela" class="img-pessoas">
            <span>Rafaela</span>
          </div>
          <div>
            <img src="../assets/img/pessoas/henrique.jpg" alt="Henrique" class="img-pessoas">
            <span>Henrique</span>
          </div>
        </div>
      </div>

    </section>

    <section class="module content section-pessoas" id="section-pesquisa">
      <div class="container area-4">
        <h2>Pesquisa</h2>
        <div class="fotos">
          <div>
            <img src="../assets/img/pessoas/luiz.jpg" alt="Luiz" class="img-pessoas">
            <span>Luiz</span>
          </div>
          <div>
            <img src="../assets/img/pessoas/kauan.jpg" alt="Kauan" class="img-pessoas">
            <span>Kauan</span>
          </div>
          <div>
            <img src="../assets/img/pessoas/guilherme.jpg" alt="Guilherme" class="img-pessoas">
            <span>Guilherme</span>
          </div>
        </div>
        <div class="fotos">
          <div>
            <img src="../assets/img/pessoas/vinicius.jpg" alt="Vinícius" class="img-pessoas">
            <span>Vinícius</span>
          </div>
          <div>
            <img src="../assets/img/pessoas/diego.jpg" alt="Diego" class="img-pessoas">
            <span>Diego</span>
          </div>
        </div>
      </div>
      </div>
    </section>

    <section class="module content section-pessoas">
      <div class="container area-4">
        <h2>Programação</h2>
        <div class="fotos">
          <div>
            <img src="../assets/img/pessoas/henrique.jpg" alt="Henrique" class="img-pessoas">
            <span>Henrique</span>
          </div>
          <div>
            <img src="../assets/img/pessoas/rafael.jpg" alt="Rafael" class="img-pessoas">
            <span>Rafael</span>
          </div>
          <div>
            <img src="../assets/img/pessoas/joao.jpg" alt="João" class="img-pessoas">
            <span>João</span>
          </div>
        </div>
      </div>
    </section>

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
            <a href="dashboard/login-asilo.html" id="link-dashboard">Acesse aqui</a>
          </span>
        </div>
        <div class="span-dashboard">
          <span>2022 - Safe&amp;Rest &copy; Todos os direitos reservados.</span>
        </div>
      </section>
    </div>
  </footer>
  
  <!-- fim do rodapé -->
  <script src="../../src/scroll.js"></script>
  <script src="../../src/menu.js"></script>
</body>

</html>