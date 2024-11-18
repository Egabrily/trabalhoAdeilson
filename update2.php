<?php
    include 'connection.php';
    if(isset($_GET['id_materia'])){
        $id2 = $_GET['id_materia'];
        $sql2 = mysqli_query($connectionBD, "SELECT * FROM materia WHERE id_materia =$id2");
        $count2 = (is_array($sql2)) ? count($sql2) :1;
        if($count2){
            $n = mysqli_fetch_array($sql2);
            $nome = $n['nome'];
            $quant_aulas = $n['quant_aulas'];            


        }
    }
    if(isset($_POST['editar'])){
        $id2 = $_GET['id_materia'];
        $nome = $_POST['nome'];
        $quant_aulas = $_POST['quant_aulas'];
        $queryUpdate2 = "UPDATE materia SET nome = '$nome', quant_aulas = '$quant_aulas' WHERE id_materia = '$id2' ";

        $consulta2 = mysqli_query($connectionBD, $queryUpdate2);

        header('location:list2.php');
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Crud PHP</title>
</head>
<body>
<div class="container col-md-6 offset-md-3">

<h1>Atualizar Informações - PHP com MySQL</h1>
<form  method="post">
    <div class="row">
        <div class="col">
            <input type="text" class="form-control" placeholder="Nome" name="nome" id="">
        </div>
        <div class="col">
            <input type="text" class="form-control" placeholder="quant_aulas" name="quant_aulas" id="">
        </div>
        
        
    </div> <br>
        <div> 
            <button name="editar" type="submit"  class="btn btn-outline-primary">Salvar</button>
        </div>
   
</form>

</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
