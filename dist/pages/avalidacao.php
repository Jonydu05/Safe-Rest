<?php
  session_start();
  include_once('Login/config.php');
  $query = "SELECT * FROM `notas` WHERE id_usuario = '$id_usuario'";
	$resultado= $pdo->exec($query);
  
  $session['resultado'] = $resultado;
  $session['visual']="positivo";  
  header("location: Pg-residencial.php");
?>