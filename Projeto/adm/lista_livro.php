<?php

    // Caminho do servidor
    
    include_once("../servidor.php");

?>

<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Lista de Livros </title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
        <script src="https://kit.fontawesome.com/99cca86418.js" crossorigin="anonymous"></script>
    </head>

    <body>
        <div class="container">
            <section class="col-md-2">
                
            </section>
            <section class="col-md-8">
                <h3 class="mt-5"> Lista de Livros </h3>

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Titulo</th>
                            <th scope="col">Valor</th>
                            <th scope="col"> Editar / Deletar </th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php

                        $sql = " SELECT cod_liv, titulo_liv, valor_liv FROM tb_livro ";

                        // Executar 

                        // $resp = mysqli_query($banco, $sql);

                        ## Passar para Programação Objeto 

                        $resp = $POO->query($sql);

                        while($tabela = mysqli_fetch_array($resp)){
                            echo "<tr>
                                <th scope = 'row'> " . $tabela["cod_liv"] . " </th>
                                <td> " . $tabela["titulo_liv"] . " </td>
                                <td> " . "R$" . number_format($tabela["valor_liv"], 2, ",", ".") . " </td>
                                <td> <i class='fa-solid fa-pen-to-square'></i><a href = 'altLivro.php?cod_liv=" . $tabela["cod_liv"] . "'> Editar </a> | <i class='fa-solid fa-trash'></i><a href = '#'><a href = 'delLivro.php?cod_liv=" . $tabela["cod_liv"] . "'> Deletar </a> </td>
                            </tr>";
                        }
                    
                    ?>
                        
                    </tbody>
                </table>
            </section>
            <section class="col-md-2"></section>

        </div>

    </body>
<script src="../js/jquery-3.5.1.slim.min.js"></script>
<script src="../js/popper.min.js"></script>

</html>

<?php 
    mysqli_close($banco);
?>