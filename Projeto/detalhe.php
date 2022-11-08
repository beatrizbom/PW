<?php
    include_once("servidor.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
        
        <title> Document </title>
    </head>

    <body>
        <div class="container mt-5">
            <?php 

                // Trazer as informações do produto 

                $sql = "SELECT * FROM `tb_livro` WHERE cod_liv = " . $_GET["cod_liv"];

                // Executar

                $resp = mysqli_query($banco, $sql);

                // Transformar em um array

                $tabela = mysqli_fetch_array($resp);

                echo "<img src='adm/" . $tabela["img_liv"] . "'>
                <br><br>
                <h3> " . $tabela["titulo_liv"] . " </h3>
                <br>
                <p> " . "<strong> Descrição: </strong>" . $tabela["desc_liv"] . " </p>
                <p> " . "<strong> Código Livro: </strong>" . $tabela["cod_liv"] . " </p>
                <p> " . "<strong> Código Editora: </strong>" . $tabela["cod_ed"] . " </p>
                <p> " . "<strong> Valor: </strong>" . number_format($tabela["valor_liv"], 2, ",", ".") . " </p>
                ";

            ?>
        </div>

        <script src="../js/jquery-3.5.1.slim.min.js"></script>
        <script src="../js/popper.min.js"></script>

    </body>
</html>

<?php 
    
    mysqli_close($banco);

?>