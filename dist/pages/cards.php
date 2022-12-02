<?php
    $stmt = $pdo->query($query);
    $lista = $stmt->fetchAll(PDO::FETCH_NUM);
    $Quantlista = count($lista);
    for ($contagem = 0; $contagem < $Quantlista; $contagem++) {
        $lista[$contagem][11] = $lista[$contagem][11] / 10;
        $lista[$contagem][0]= $lista[$contagem][0]-1;
        echo ('<div class="card">
                <div class="card-header">
                    <img src="../assets/img/' . $lista[$contagem][0] . '/foto1.png" />
                </div>			
                <div class="card-body">
                    <span class="tag rating"><ion-icon name="star"></ion-icon>' . $lista[$contagem][11] . '</span>

                    <h3>' . $lista[$contagem][1] . '</h3>
                    
                    <p>' . substr($lista[$contagem][2], 0, 120) . '...</p>
                </div>
                <div class="actionsCard">
                    <button class="actions"><a href="http://localhost/Safe-rest/dist/pages/pg-residencial.php?residencial=' . $lista[$contagem][0] . '" class="link-asilos">Ver mais</a></button>
                    <button class="actions"><a href="' . $lista[$contagem][5] . '" target="_blank" class="link-asilos">Ver no Google Maps</a></button>
                </div>
            </div>');
    }
?>