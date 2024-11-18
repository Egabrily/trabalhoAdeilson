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

        <h1>Horário- </h1>
        <form action="save2.php" method="post">
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Nome" name="nome" id="">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="quant_aulas" name="quant_aulas" id="">
                </div>
                
                
            </div> <br>
                <div> 
                    <button type="submit" class="btn btn-outline-info">Salvar</button>
                </div>
           
        </form>

    </div>

   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>