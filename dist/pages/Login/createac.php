<?php
    include_once ('config.php');
    include_once ('dados.php');
    $query="SELECT COUNT(*) 
            FROM INFORMATION_SCHEMA.COLUMNS 
            WHERE table_schema = 'test' 
            AND table_name = 'notas'
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
            for($cont = 0; $cont < 12; $cont++){
                $x[$cont] = $arr[$y][$cont];            
            }
            $query="ALTER TABLE `notas` ADD `$x[0]` VARCHAR(50) NOT NULL AFTER `id_usuario`";
            $pdo->exec($query);
        }
        $query="ALTER TABLE `notas` ADD `id` INT NOT NULL AUTO_INCREMENT AFTER `Vovó Teca`, ADD PRIMARY KEY (`id`)";
            $pdo->exec($query);
    }    
?>