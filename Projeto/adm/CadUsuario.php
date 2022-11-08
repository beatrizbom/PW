<?php

    session_start(); 

    // Incluir a conexão com o servidor

    include_once ("../servidor.php");

    // Referência de variaveis

    $nome = $_POST["nome"]; 
    $email = $_POST["log"];
    $senha = $_POST["sen"];

    // Inserindo valor no banco

    $sql = "insert into tb_usuario(nome_us, login_us, senha_us)";
    $sql .= " values('$nome', '$email', '" . md5($senha) . "')"; 

    // Executar

    $res = mysqli_query($banco, $sql);

      // Preciso saber se foi inserida no banco 

      if(mysqli_affected_rows($banco)){
        echo "<script type='text/javascript'>
       
        alert('Cadastro Realizado');
        
        </script>";
      }

?>