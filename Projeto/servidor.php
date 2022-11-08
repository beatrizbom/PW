<?php

    // Iremos fazer a conexão com o banco de dados nas formas:   
    // Procedural
    // Orientção Objeto
    // PDO - (PHP Data Object) 

    // ------------------------------------------------------------------

    define('servidor', 'localhost');
    define('usuario', 'root');
    define('senha', '');
    define('banco', 'miniphp');
    define('porta', '3306');

    // // Procedural

    //     // Função para fazer a conexão ao banco com os parâmetros

         $banco = mysqli_connect(servidor, usuario, senha, banco, porta);

    //     // Verificar se existe uma conexão com o servidor - Caso haja, mostra uma mensagem

    //mysqli_connect_erro() - Mostra uma mensagem (string) sobre o motivo de conexão
   // mysqli_conncet_errno() - Mostra um código ao ínves de string de erro 

        if(!$banco){
            die ("Falha na conexão - Causa: " . mysqli_connect_erro());
        } else {
            echo "Conexão Realizada com Sucesso!";
       }



    // PDO - Programação Orientação Objeto
    // - PHP tem uma classe chamada MYSQli que podemos programar de forma procedural conforme o 1° exemplo e agora direto com a classe

    # Criar uma instância

    $POO = new mysqli(servidor, usuario, senha, banco, porta);

    // Verificação se houve um erro de conexão

    if($POO->connect_error){
        die("Ocorreu uma falha" . $POO -> connect_errno);
    } 
    

?>