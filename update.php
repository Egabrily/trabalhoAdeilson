
<?php
    include 'connection.php';
    if(isset($_GET['id_aluno'])){
        $id = $_GET['id_aluno'];
        $sql = mysqli_query($connectionBD, "SELECT * FROM alunos WHERE id_aluno=$id");
        $count = (is_array($sql)) ? count($sql) :1;
        if($count){
            $n = mysqli_fetch_array($sql);
            $nome = $n['nome'];
            $matricula = $n['matricula'];
            $nota = $n['nota'];


        }
    }
    if(isset($_POST['editar'])){
        $id = $_GET['id_aluno'];
        $nome = $_POST['nome'];
        $matricula = $_POST['matricula'];
        $nota = $_POST['nota'];
        $queryUpdate = "UPDATE alunos SET nome = '$nome', matricula = '$matricula', nota = '$nota' WHERE id_aluno = '$id'";

        $consulta = mysqli_query($connectionBD, $queryUpdate);

        header('location: list.php');
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
            <input type="text" class="form-control" placeholder="Matricula" name="matricula" id="">
        </div>
        <div class="col">
            <input type="number" class="form-control" placeholder="Nota" name="nota" id="">
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
