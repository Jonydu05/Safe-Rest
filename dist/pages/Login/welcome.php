<?php
// Inicialize a sessão
session_start();
 
// Verifique se o usuário está logado, se não, redirecione-o para uma página de login
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
 
require_once "config.php";

// Defina variáveis e inicialize com valores vazios
$username = $password = $confirm_password = $_SESSION["username"];;
$username_err = $password_err = $confirm_password_err = "";
$email = $_SESSION["email"];
$email_err = "";
 
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validar nome de usuário
    if(empty(trim($_POST["username"]))){
        $username_err = "Por favor coloque um nome de usuário.";
    } elseif(!preg_match('/^[a-zA-Z_ ]+$/', trim($_POST["username"]))){
        $username_err = "O nome de usuário pode conter apenas letras";
    } else{
        $username = trim($_POST["username"]);
    }

    // Validar email
    $email = $_POST["email"];
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    if(empty(trim($_POST["email"]))){
        $email_err = "Por favor insira um email.";     
    } elseif(filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email = trim($_POST["email"]);
    } else {
        $email_err = "O email é inválido";
    }
    
    // Verifique os erros de entrada antes de inserir no banco de dados
    if(empty($username_err) && empty($email_err)){
        
        $stmt = $pdo->prepare('UPDATE users SET username = :username, email = :email WHERE id = :id');
        $stmt->execute(array(
            ':id'   => $_SESSION["id"],
            ':username' => $username,
            ':email' => $email
        ));
        
        $_SESSION["username"] = $username;  
        $_SESSION["email"] = $email;


        
    }    
    // Fechar conexão
    unset($pdo);
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

  <title>Editar informações</title>
</head>

<body>
  <header id="header">
    <!-- prettier-ignore -->
    <div id="teste">
      <a href="../index.php"><img src="../../assets/img/logo2.png" alt="" id="logo" /></a>
      <a href="../index.php">
        <pre id="safeRest">Safe
&amp;Rest</pre>
      </a>
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
        <li><a href="./register.php"><?php echo htmlspecialchars($_SESSION["username"]); ?></a></li>
      </ul>
    </nav>
  </header>
  <main id="div-cadastro">
    <!-- Card cadastro -->
    <div class="card">
      <section class="card-title">
        <h2 class="card-heading">
          <span>Bem-vindo, <?php echo htmlspecialchars($_SESSION["username"]); ?>!</span>
          <small>Edite aqui suas informações de usuário</small>
        </h2>
      </section>

      <form class="card-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

        <section class="input">
          <input type="text" name="username"
            class="input-field <?php echo (!empty($username_err)) ? 'is-invalid' : ""; ?>"
            value="<?php echo $username; ?>" id="name">
          <label class="input-label" for="name">Nome</label>
          <span class="invalid-feedback"><?php echo $username_err; ?></span>
        </section>

        <section class="input">
          <input type="email" id="email" name="email" placeholder="jose.euclides@email.com" required
            class="input-field <?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $email; ?>" />
          <label class="input-label" for="email">Email</label>
          <span class="invalid-feedback"><?php echo $email_err; ?></span>
        </section>

        <section class="action">
          <input type="submit" class="action-button" id="btn-alterar" value="Alterar Dados">
        </section>

      </form>
      <section class="card-info">
        <ul>
          <li><a href="./reset-password.php">Redefinir senha</a></li>
          <li><a href="./logout.php">Sair da conta</a></li>
        </ul>
      </section>
    </div>
    <!-- fim card cadastro -->
  </main>
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
      <p>2022 - Safe&amp;Rest &copy; Todos os direitos reservados </p>
    </div>
  </footer>
  <!-- fim do rodapé -->
  <script src="../../../src/menu.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>