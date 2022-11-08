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
        <table class="table table-bordered">
            
        <?php
        
            // Query para exibir o livros

            $sql = " SELECT `cod_liv`, `titulo_liv`, `valor_liv`, `img_liv` FROM `tb_livro` ";

            // Executar 

            $resp = mysqli_query($banco, $sql);

            // Exibir os itens do banco 

            $coluna = 0;

            while($tabela = mysqli_fetch_array($resp)){
                if($coluna == 0){
                    echo "<tr>";
                }
                if($coluna !=4){
                    echo " <td>

                <p>
                    <img src = 'adm/" . $tabela["img_liv"] . "'>
                </p>

                <h3> ". $tabela["titulo_liv"] ." </h3>

                <p> ". number_format($tabela["valor_liv"], 2, ",", ".") . " </p>

                <a href = 'detalhe.php?cod_liv=". $tabela["cod_liv"] ."'> Detalhe </a>

                ";
                echo " </td>";

                $coluna++;

                }else{
                    echo "</tr>";
                    $coluna = 0;
                }

                
            }

        ?>

        </table>

        </div>

        <script src="../js/jquery-3.5.1.slim.min.js"></script>
        <script src="../js/popper.min.js"></script>

    </body>
</html>