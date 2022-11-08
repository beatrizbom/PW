<?php
    // Iniciar session
    
    session_start();
    
    // Incluir o servidor
    
    include_once("../servidor.php");

    if(isset($_SESSION['login'])){

?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <section class="col-md-2">

               
            </section>
            <section class="col-md-8">
                <h3 class="mt-5"> Cadastro de Livros </h2>

                    <form action="CadLivro.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="t"> Titulo: </label>
                            <input type="text" class="form-control" id="t" name="titulo" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="desc"> Descrição: </label>
                            <textarea name="desc" class="form-control" id="desc"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="arq"> Imagem da Capa: </label>
                            <div class="custom-file mb-3">

                                <input type="file" class="custom-file-input" id="arq" name="arq">
                                <label class="custom-file-label" for="arq">Procurar arquivo</label>

                            </div>
                        </div>

                        <div class="form-group">
                            <label for="ed">Editora: </label>
                            <select class="form-control" name="ed" id="ed">
                                <option> Selecione </option>
                            <?php 
                            $editora = " select * from tb_editora ";
                            
                            // Executar

                            // $resp = mysqli_query($banco, $editora);

                            $resp = $POO->query($editora);

                            // Visualizar os dados

                            // while($tabela = mysqli_fetch_array( $resp)){
                            //     echo "<option value = '" . $tabela["cod_ed"] . "'>" . $tabela["nome_ed"] . "</option>";
                            // } 

                            # POO

                            while($tabela = $resp->fetch_array()){
                                echo "<option value = '" . $tabela["cod_ed"] . "'>" . $tabela["nome_ed"] . "</option>";
                            }

                            ?>

                            </select>
                        </div>
                        <div class="form-group " style="width:30%">
                            <label for="valor">Valor: </label>

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">$</div>
                                </div>
                                <input type="text" class="form-control" id="valor" name="valor">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary"> Cadastrar </button>
                    </form>
            </section>

            <section class="col-md-2"></section>
        </div>
    </div>



</body>
<script src="../js/jquery-3.5.1.slim.min.js"></script>
<script src="../js/popper.min.js"></script>

</html>

<?php

    } else{
        header("location:index.php");
    }

    // Fechar o banco

    // mysqli_close($banco);
    
    # POO

    $POO->close();

?>