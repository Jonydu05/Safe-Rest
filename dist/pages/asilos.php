<?php
// Inicialize a sessão
session_start();

// Verifique se o usuário está logado, se não, redirecione-o para uma página de login
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
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
  <link rel="stylesheet" href="../styles/cards.css" />
  <link rel="stylesheet" href="../styles/filtro.css">

  <link rel="icon" href="../assets/img/logo2.png" />

  <title>Residências</title>
</head>

<body>
  <header id="header">
    <div id="teste">
      <a href="index.php"><img src="../assets/img/logo2.png" alt="" id="logo" /></a>
      <a href="index.php"><img src="../assets/img/logo5.png" id="tipografia" alt=""></a>
    </div>
    <!-- Começo nav -->
    <nav class="nav" id="nav">
      <button aria-label="Abrir Menu" id="btn-mobile" aria-expanded="false" aria-controls="menu" aria-haspopup="true">
        <span id="hamburguer"></span>
      </button>
      <ul class="menu" role="menu">
        <li>
          <form method="get" class="div-pesquisa">
            <input type="search" name="residencia" placeholder="Insira o nome da residência" id="input-pesquisa">
            <button type="submit" name="Buscar" id="btn-search"><ion-icon name="search-outline"></ion-icon></button>
          </form>
        </li>
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
  <!-- Fim header -->
  <section class="filtro">

    <button onclick="dropdown()" id="btn-filtro" class="limpar-filtro">
      Filtros<ion-icon name="chevron-down-outline"></ion-icon>
    </button>

    <div id="dropdown-filtro" class="dropdown-content">
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="form-filtro"
        id="filtro-desktop">

        <select name="avaliacao" id="avaliacao">
          <option value="" selected hidden>Selecione a avaliação</option>
          <option value="30">Mais de 3 estrela</option>
          <option value="40">Mais de 4 estrela</option>
          <option value="50">5 estrelas</option>
        </select>

        <select name="regiao" id="regiao">
          <option value="" selected hidden>Selecione a região</option>
          <option value="0">Fora de SP</option>
          <option value="1">Zona Leste</option>
          <option value="2">Zona Norte</option>
          <option value="3">Zona Oeste</option>
          <option value="4">Zona Sul</option>
        </select>
        <input type="submit" name="buscardados" value="Filtrar" class="btn-filtro">
      </form>
    </div>
    </div>
    <button class="limpar-filtro"><a href="asilos.php" class="link-asilo">Limpar filtro</a></button>
  </section>
  <!-- Começo conteúdo -->
  <main class="container">
    <?php
    include_once('Login/config.php');
    include_once('Login/insert.php');
    $close = '';
    $session['visual'] = "";

    if (isset($_GET['Buscar'])) {
      $close = '1';
      $nome = "%" . trim($_GET['residencia']) . "%";
      $query = "SELECT * FROM `residenciais` WHERE `nome` LIKE '$nome'";
      echo ('<section class="pesquisa-retorno"><h2>Resultado da busca: </h2></section>');
      include('cards.php');
      if ($lista == null) {
        echo ('<section class="pesquisa-retorno"><span>Não foi encontrado nenhum resultado pelo termo buscado.</span></section>');
      }
    }

    $local = ["Fora de SP", "Zona Leste", "Zona Norte", "Zona Oeste", "Zona Sul"];
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if ($_SESSION["username"] != "Entrar") {
        $aval = $_POST['avaliacao'];
        $regi = $_POST['regiao'];
        if ($aval != "" && $regi != "") {
          for ($rcont = 0; $rcont < 5; $rcont++) {
            for ($pcont = 30; $pcont < 60; $pcont++) {
              if ($aval == $pcont && $regi == $rcont) {
                $query = "SELECT * FROM `residenciais` WHERE regiao = '$local[$regi]'  AND avaliacao >= '$pcont' ORDER BY `residenciais`.`avaliacao` ASC";
                include('cards.php');
              }
            }
          }
        } elseif ($aval != "" && $regi == "") {
          for ($pcont = 30; $pcont < 60; $pcont++) {
            if ($aval == $pcont) {
              $query = "SELECT * FROM `residenciais` WHERE avaliacao >= '$pcont' ORDER BY `residenciais`.`avaliacao` ASC";
              include('cards.php');
            }
          }
        } elseif ($aval == "" && $regi != "") {
          for ($rcont = 0; $rcont < 5; $rcont++) {
            if ($regi == $rcont) {
              $query = "SELECT * FROM `residenciais` WHERE regiao = '$local[$regi]'";
              include('cards.php');
            }
          }
        } else {
          echo ('<section id="no-product"> <span> Nenhuma Residência encontrada </span> </section>');
        }
      } else {
        echo ('<section id="no-product"> <span> Para utilizar os filtros você deve-se cadastrar primeiro </span> </section>');
      }
    } else {
      if ($close != '1') {
        $query = 'select * from residenciais';
        include('cards.php');
      }
    }
    ?>
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
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script src="../../src/menu.js"></script>
  <script src="../../src/dropdown.js"></script>
</body>

</html>