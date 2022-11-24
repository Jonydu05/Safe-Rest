<?php
// Inicialize a sessão
session_start();
 
// Verifique se o usuário está logado, caso contrário, redirecione para a página de login
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
 
// Incluir arquivo de configuração
require_once "config.php";
 
// Defina variáveis e inicialize com valores vazios
$new_password = $confirm_password = "";
$new_password_err = $confirm_password_err = "";
 
// Processando dados do formulário quando o formulário é enviado
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validar nova senha
    if(empty(trim($_POST["new_password"]))){
        $new_password_err = "Por favor insira a nova senha.";     
    } elseif(strlen(trim($_POST["new_password"])) < 6){
        $new_password_err = "A senha deve ter pelo menos 6 caracteres.";
    } else{
        $new_password = trim($_POST["new_password"]);
    }
    
    // Validar e confirmar a senha
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Por favor, confirme a senha.";
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($new_password_err) && ($new_password != $confirm_password)){
            $confirm_password_err = "A senha não confere.";
        }
    }
        
    // Verifique os erros de entrada antes de atualizar o banco de dados
    if(empty($new_password_err) && empty($confirm_password_err)){
        // Prepare uma declaração de atualização
        $sql = "UPDATE users SET password = :password WHERE id = :id";
        
        if($stmt = $pdo->prepare($sql)){
            // Vincule as variáveis à instrução preparada como parâmetros
            $stmt->bindParam(":password", $param_password, PDO::PARAM_STR);
            $stmt->bindParam(":id", $param_id, PDO::PARAM_INT);
            
            // Definir parâmetros
            $param_password = password_hash($new_password, PASSWORD_DEFAULT);
            $param_id = $_SESSION["id"];
            
            // Tente executar a declaração preparada
            if($stmt->execute()){
                // Senha atualizada com sucesso. Destrua a sessão e redirecione para a página de login
                session_destroy();
                header("location: login.php");
                exit();
            } else{
                echo "Ops! Algo deu errado. Por favor, tente novamente mais tarde.";
            }

            // Fechar declaração
            unset($stmt);
        }
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

  <title>Redefinir Senha</title>
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
          <span>Redefina sua senha aqui, <?php echo htmlspecialchars($_SESSION["username"]); ?>!</span>
        </h2>
      </section>

      <form class="card-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

        <section class="input">
          <input type="password" name="new_password"
            class="input-field<?php echo (!empty($new_password_err)) ? 'is-invalid' : ''; ?>"
            value="<?php echo $new_password; ?>" id="new-password" required>
          <label class="input-label" for="new-password">Nova Senha</label>
          <span class="invalid-feedback"><?php echo $new_password_err; ?></span>
        </section>

        <section class="input">
          <input type="password" id="confirm-password" name="confirm_password" required
            class="input-field <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>"/>
          <label class="input-label" for="confirm-password">Confirme a senha</label>
          <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
        </section>

        <section class="action">
          <input type="submit" class="action-button" id="btn-redefinir" value="Redefinir Senha">
        </section>

      </form>
      <section class="card-info">
        <ul>
          <li><a href="../index.php">Cancelar</a></li>
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