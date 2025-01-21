<?php

    if($_SERVER['REQUEST_METHOD'] === 'GET'){
        $numero = isset($_GET['num']) && !empty($_GET['num']) ? (int)$_GET['num'] : -1;
        
        if($numero >= 0){
            $enviar = [];
        
            for($i = 1; $i <= 10;$i++){
                $enviar[] = [
                    'multiplicador' => $i,
                    'resultado' => $numero * $i
                ];
            };

            $query = http_build_query(['array' => $enviar, 'numero' => $numero]);
            header("Location:index.php?$query");
        }else{
            header("Location:index.php?numero=$numero");
        };
    }
?>