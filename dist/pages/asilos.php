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
    <!-- prettier-ignore -->
    <div id="teste">
      <a href="index.php"><img src="../assets/img/logo2.png" alt="" id="logo" /></a>
      <a href="index.php">
        <pre id="safeRest">Safe
&amp;Rest</pre>
      </a>
    </div>
    <!-- Começo nav -->
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
  <div class="filtro">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="form-filtro">
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
      <input type="submit" name="buscardados" value="Pesquisar" class="btn-filtro">
    </form>
  </div>
  <!-- Começo conteúdo -->
  <main class="container">
    <?php
		include_once('Login/config.php');
		include_once('Login/config.php');
		$local = ["Fora de SP", "Zona Leste", "Zona Norte", "Zona Oeste", "Zona Sul"];
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			if($_SESSION["username"] != "Entrar"){
				$aval = $_POST['avaliacao'];
				$regi = $_POST['regiao'];
				$erro;
				if ($aval != "" && $regi != "") {
					for ($rcont = 0; $rcont < 5; $rcont++) {
						for ($pcont = 30; $pcont < 60; $pcont++) {
							if ($aval == $pcont && $regi == $rcont) {
								$query = "SELECT * FROM `residenciais` WHERE regiao = '$local[$regi]'  AND avaliacao >= '$pcont' ORDER BY `residenciais`.`avaliacao` ASC";
								include_once('cards.php');
							}
						}
					}
				} elseif ($aval != "" && $regi == "") {
					for ($pcont = 30; $pcont < 60; $pcont++) {
						if ($aval == $pcont) {
							$query = "SELECT * FROM `residenciais` WHERE avaliacao >= '$pcont' ORDER BY `residenciais`.`avaliacao` ASC";
							include_once('cards.php');
						}
					} 
				} elseif ($aval == "" && $regi != "") {
					for ($rcont = 0; $rcont < 5; $rcont++) {
						if ($regi == $rcont) {
							$query = "SELECT * FROM `residenciais` WHERE regiao = '$local[$regi]'";
							include_once('cards.php');
						}
					} 
				} else{
					echo ('<section id="no-product"> <p> Residência não encontrada </p> </section>');
				}
			}else{
				echo ('<section id="no-product"> <p> Para utilizar os filtros você deve-se cadastrar primeiro </p> </section>');
			}
		} else {
			$query = 'select * from residenciais';
			include_once('cards.php');
		}
		?>
  </main>
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
  <script src="../../src/menu.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>