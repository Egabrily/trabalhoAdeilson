<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $dbName = "horario";
    $connectionBD = mysqli_connect($server, $user, $password, $dbName);
    if(!$connectionBD){
        echo "Erro ao conectar ao banco!";
    }
    
?>