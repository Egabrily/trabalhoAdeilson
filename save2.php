<?php

include 'connection.php';
$nome = $_POST['nome'];
$quant_aulas = $_POST['quant_aulas'];
$sql = mysqli_query($connectionBD, "INSERT INTO materia (nome, quant_aulas) VALUES ('$nome', '$quant_aulas')");

if ($sql){
    header('Location: list2.php');

}

?>