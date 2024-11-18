<?php 
include 'connection.php';
$id2 = $_GET["id_materia"];

if(isset($_GET['id_materia'])){
    $sqlDelete2 = mysqli_query($connectionBD, "DELETE FROM materia WHERE id_materia = {$id2}")
    or die (mysqli_error($connectionBD));

    header('location:list2.php');
}
?>;