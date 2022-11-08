<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Menu </title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">


</head>

<body>
    <div class="container">
    <?php

        // Perguntar se está logado

        if(isset($_SESSION['login'])){

        // Colocar identificação de usuário:

        echo "<h1> Olá, " . utf8_encode($_SESSION['login']['nome']) . "</h1>"; 
    ?>
        <nav class="nav nav-pills flex-column flex-sm-row">
            <a class="flex-sm-fill text-sm-center nav-link" href="cadastro.php" target="link"> Cadastro de livros</a>
            <a class="flex-sm-fill text-sm-center nav-link" href="lista_livro.php" target="link"> Lista de Livros</a>
            <a class="flex-sm-fill text-sm-center nav-link" href="usuario.php" target="link"> Usuários </a>
            <a class="flex-sm-fill text-sm-center nav-link " href="sair.php" tabindex="-1" > Sair</a>
        </nav>

        <iframe  name="link" width="100%" height="1000px" frameborder="0" style="border: 0;"></iframe>

    </div>

    <?php

        } else{
            header("location:index.php");
        }

    ?>

</body>

<script src="../js/jquery-3.5.1.slim.min.js"></script>
<script src="../js/popper.min.js"></script>

</html>