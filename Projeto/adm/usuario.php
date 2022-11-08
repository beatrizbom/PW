<?php
     
    // Iniciar session
    
    session_start();
    
    // Incluir o servidor
    
    include_once("../servidor.php");

    if(isset($_SESSION['login'])){

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
        <title> Cadastro de Usuários </title>
    </head>
    <body>

        <br><br><br>

        <!-- Formulário para o cadastro de funcionário para ter acesso ao site -->

        <form action="CadUsuario.php" method="post" enctype="multipart/form-data">
            <div class="form-group col-md-7">
                <label for="t"> Nome do usuário: </label>
                <input type="text" class="form-control" id="t" name="nome" placeholder="Exemplo 'José'">
            </div>

            <div class="form-group col-md-7">
                <label for="desc"> Email: </label>
                <input type="text" class="form-control" id="t" name="log" placeholder="josé@gmail.com">
            </div>

            <div class="form-group col-md-7">
                <label for="t"> Senha: </label>
                <input type="text" class="form-control" id="t" name="sen" placeholder="senhamaluca14">
            </div>

            <br>

            <button type="submit" class="btn btn-primary"> Cadastrar </button>
        </form>

    </body>
</html>

<script src="../js/jquery-3.5.1.slim.min.js"></script>
<script src="../js/popper.min.js"></script>

<?php

    } else{
        header("location:index.php");
    }

    // Fechar o banco

    mysqli_close($banco);

?>