<?php
    include_once ('config.php');
    include_once ('dados.php');
    $query='select * from residenciais';
    $stmt= $pdo->query($query);
    $lista= $stmt->fetchAll(PDO::FETCH_NUM);
    if($lista == null){
        $registros = [];
        $registros = $arr;
        $registros= count($registros);
        $x = [];
        for($y = 0; $y < $registros; $y++){
            for($cont = 0; $cont < 12; $cont++){
                $x[$cont] = $arr[$y][$cont];            
            }
            $query="
                    insert into residenciais(
                        nome, descricao, local, regiao, maps, telefone, whatsapp, email, desconto, num_vagas, avaliacao, quant_avaliacao
                    ) values(
                        '$x[0]', '$x[1]', '$x[2]', '$x[3]','$x[4]', '$x[5]', '$x[6]', '$x[7]', '$x[8]', '$x[9]', '$x[10]', '$x[11]'
                    )
                ";
            $pdo->exec($query);
        }
    }
?>