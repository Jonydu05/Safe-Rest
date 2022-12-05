<?php
// Inicialize a sessão
session_start();

// Verifique se o usuário está logado, se não, redirecione-o para uma página de login
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
	$_SESSION["username"] = "Entrar";
}
include_once('Login/config.php');
include_once('Login/createac.php');
$dado = $_GET['residencial'];
$query = 'select * from residenciais';
$stmt = $pdo->query($query);
$lista = $stmt->fetchAll(PDO::FETCH_NUM);
$casa = $lista[$dado][0];
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<link rel="stylesheet" href="../styles/estilo.css" />
	<link rel="stylesheet" href="../styles/asilos.css" />
	<link rel="stylesheet" href="../styles/comentarios.css" />

	<link rel="icon" href="../assets/img/logo2.png" />

	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

	<script src="https://kit.fontawesome.com/da55f0765a.js" crossorigin="anonymous"></script>

	<title>
		<?php echo $lista[$dado][1]; ?>
	</title>

</head>

<body>
	<header id="header">
		<div id="teste">
			<a href="index.php"><img src="../assets/img/logo2.png" alt="" id="logo" /></a>
			<a href="index.php"><img src="../assets/img/logo5.png" id="tipografia" alt="" /></a>
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
				<li>
					<a href="Login/register.php">
						<?php echo htmlspecialchars($_SESSION["username"]); ?>
					</a>
				</li>
			</ul>
		</nav>
	</header>
	<!-- fim nav -->
	<main class="asilos">
		<section class="carousel">
			<div>
				<?php echo ('<img src="../assets/img/' . $dado . '/foto1.png" />'); ?>
			</div>
			<div>
				<?php echo ('<img src="../assets/img/' . $dado . '/foto2.png" />'); ?>
			</div>
			<div>
				<?php echo ('<img src="../assets/img/' . $dado . '/foto3.png" />'); ?>
			</div>
		</section>

		<section class="info">

			<form method="POST" action="" enctype="multipart/form-data" id="form-estrela">
				<div class="estrelas">
					<input type="radio" id="vazio" name="estrela" value="" checked>

					<label for="estrela_um"><i class="fa"></i></label>
					<input type="radio" id="estrela_um" name="estrela" value="1">

					<label for="estrela_dois"><i class="fa"></i></label>
					<input type="radio" id="estrela_dois" name="estrela" value="2">

					<label for="estrela_tres"><i class="fa"></i></label>
					<input type="radio" id="estrela_tres" name="estrela" value="3">

					<label for="estrela_quatro"><i class="fa"></i></label>
					<input type="radio" id="estrela_quatro" name="estrela" value="4">

					<label for="estrela_cinco"><i class="fa"></i></label>
					<input type="radio" id="estrela_cinco" name="estrela" value="5">
				</div>
				<input type="submit" name="Cadastrar" value="Avaliar" id="avaliar">
			</form>

			<?php
      $query = 'select * from residenciais';
      $stmt = $pdo->query($query);
      $lista = $stmt->fetchAll(PDO::FETCH_NUM);
      $qnota = $lista[$dado][12];
      $tnona = $lista[$dado][11];
      $id_residencia = $lista[$dado][0];
      $nome = $lista[$dado][1];

      if (isset($_POST['Cadastrar'])) {
	      if ($_SESSION["username"] != "Entrar") {
		      if (!empty($_POST['estrela'])) {
			      $estrela = $_POST['estrela'];
			      $query = "UPDATE `avaliar` SET `$nome` = '$estrela' WHERE `avaliar`.`id_usuario` = '$theuser'";
			      $pdo->exec($query);
			      $_SESSION['msg'] = "<span class='success-feedback'>Avaliação cadastrada com sucesso. Sua nota foi " . $estrela . " estrelas.</span>";
			      $_SESSION['nota'] = "Sim";
		      } else {
			      $_SESSION['msg'] = "<span class='invalid-feedback'>Necessário selecionar pelo menos 1 estrela.</span>";
		      }
		      $query = "SELECT * FROM `avaliar` WHERE id_usuario = '$theuser'";
		      $stmt = $pdo->query($query);
		      $lista = $stmt->fetchAll(PDO::FETCH_NUM);
		      $notinha = $lista[0][$id_residencia];
		      $notafinal = (($qnota * $tnona) + ($notinha * 10)) / ($qnota + 1);
		      $notafinal = number_format($notafinal);
		      $qnotafinal = ($qnota + 1);
		      $query = "UPDATE `residenciais` 
									SET `avaliacao` = '$notafinal', `quant_avaliacao` = '$qnotafinal' 
									WHERE `residenciais`.`id` = '$id_residencia'";
		      $pdo->exec($query);
		      echo $_SESSION['msg'] . "<br>";
		      unset($_SESSION['msg']);
	      } else {
		      echo "<span class='invalid-feedback'>É necessário se cadastrar primeiro para comentar.</span>";
	      }
      }
      $query = 'select * from residenciais';
      $stmt = $pdo->query($query);
      $lista = $stmt->fetchAll(PDO::FETCH_NUM);
      ?>
			<h2 class="titulo">
				<?php echo $lista[$dado][1]; ?>
			</h2>
			<p class="descricao">
				<?php echo $lista[$dado][2]; ?>
			</p>
			<section class="contato">
				<p class="localizacao"><strong> Localização: </strong>
					<?php echo $lista[$dado][3]; ?>
				</p>
				<ul>
					<li>
						<ion-icon name="call-outline"></ion-icon>
						<?php echo $lista[$dado][6]; ?> <br />
					</li>
					<li>
						<ion-icon name="logo-whatsapp"></ion-icon>
						<?php echo $lista[$dado][7]; ?> <br />
					</li>
					<li>
						<ion-icon name="mail-outline"></ion-icon>
						<?php echo $lista[$dado][8]; ?> <br />
					</li>
				</ul>
			</section>
		</section>
		<section class="comentarios">
			<h2>Comentários</h2>
			<p>Compartilhe com os outros a sua opinião sobre esse Residêncial.</p>
			<form action="" method="post" autocomplete="off">
				<textarea name="comentario" id="comentario" required maxlength=""></textarea>
				<button type="submit" name="Enviar">
					<ion-icon name="send-sharp" id="btn-ion"></ion-icon>
				</button>
			</form>
			<div class="secao-usuarios">
				<?php
        if (isset($_POST['Enviar'])) {
	        if ($_SESSION["username"] != "Entrar") {
		        $logado = $_SESSION["username"];
		        $residencia = $lista[$dado][1];
		        $comentario = $_POST['comentario'];
		        $query = "INSERT INTO `comentar`(`usuario`, `$residencia`) VALUES ('$logado','$comentario')";
		        $pdo->exec($query);
		        echo "<br>";
	        } else {
		        echo "<span class='invalid-feedback'>É necessário se cadastrar primeiro para comentar.</span>";
	        }
        }
        $query = "SELECT * FROM `comentar`";
        $stmt = $pdo->query($query);
        $lista = $stmt->fetchAll(PDO::FETCH_NUM);
        $Quantlista = count($lista);
        for ($contagem = 0; $contagem < $Quantlista; $contagem++) {
	        if ($lista[$contagem][$casa] != null) {
		        echo "<div class='foto-nome'> <i class='fa-regular fa-user'></i> <b>" . $lista[$contagem][0] . "</b> </div> ";
		        echo "<div class='comentario-feito'> <span>" . $lista[$contagem][$casa] . "</span></div>";
	        }
        }
        ?>
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
				<img src="../assets/img/logo3.png" alt="" class="img-footer" />
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
	<script src="../../src/menu.js"></script>

	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
	<script src="https://code.jquery.com/jquery-3.6.1.min.js"
		integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
	<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	<script src="../../src/carousel-asilo.js"></script>
</body>

</html>