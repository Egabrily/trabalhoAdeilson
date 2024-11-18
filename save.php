<?php

include 'connection.php';
$nome = $_POST['nome'];
$matricula = $_POST['matricula'];
$nota = $_POST['nota'];
$sql = mysqli_query($connectionBD, "INSERT INTO alunos(nome, matricula, nota) VALUES ('$nome', '$matricula','$nota')");

if ($sql){
    header('Location: list.php');

}

?>