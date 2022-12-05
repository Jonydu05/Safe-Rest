<?php
    include_once ('config.php');
    include_once ('dados.php');
    $query="SELECT COUNT(*) 
            FROM INFORMATION_SCHEMA.COLUMNS 
            WHERE table_schema = 'test' 
            AND table_name = 'comentar'
    ";
    $stmt= $pdo->query($query);
    $lista= $stmt->fetchAll(PDO::FETCH_NUM);
    if($lista[0][0] == 1){
        $registros = [];
        $registros = $arr;
        $registros= count($registros);
        $registros= $registros-1;
        $x = [];
        for($y = $registros; $y >= 0; $y--){
            for($cont = 0; $cont < 13; $cont++){
                $x[$cont] = $arr[$y][$cont];            
            }
            $query="ALTER TABLE `comentar` ADD `$x[0]` VARCHAR(300) NOT NULL AFTER `usuario`";
            $pdo->exec($query);
        }
        $query="ALTER TABLE `comentar` ADD `id` INT NOT NULL AUTO_INCREMENT AFTER `Vovó Zilda`, 
        ADD `created_at` DATETIME NULL DEFAULT CURRENT_TIMESTAMP AFTER `id`, ADD PRIMARY KEY (`id`)";
        $pdo->exec($query);
    }
    $query="SELECT COUNT(*) 
            FROM INFORMATION_SCHEMA.COLUMNS 
            WHERE table_schema = 'test' 
            AND table_name = 'avaliar'
    ";
    $stmt= $pdo->query($query);
    $lista= $stmt->fetchAll(PDO::FETCH_NUM);
    if($lista[0][0] == 1){
        $registros = [];
        $registros = $arr;
        $registros= count($registros);
        $registros= $registros-1;
        $x = [];
        for($y = $registros; $y >= 0; $y--){
            for($cont = 0; $cont < 13; $cont++){
                $x[$cont] = $arr[$y][$cont];            
            }
            $query="ALTER TABLE `avaliar` ADD `$x[0]` INT(5) NOT NULL AFTER `id_usuario`";
            $pdo->exec($query);
        }
        $query="ALTER TABLE `avaliar` ADD `id` INT NOT NULL AUTO_INCREMENT AFTER `Vovó Zilda`, 
                ADD PRIMARY KEY (`id`)";
        $pdo->exec($query);
    }   
    if($_SESSION["username"] != "Entrar"){
        $theuser= $_SESSION["id"];
        $query = "SELECT * FROM `avaliar` WHERE id_usuario = '$theuser'; ";
        $stmt = $pdo->query($query);
        $resultados= $stmt->fetchAll(PDO::FETCH_NUM);        
        if($resultados == null){
            $query= "INSERT INTO `avaliar`(`id_usuario`) VALUES ('$theuser')";
            $pdo->exec($query);
        }
    }
?>