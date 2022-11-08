<?php

   session_start(); 

   // Arquivo de configuração do servidor;
   include("../servidor.php");

   // Pegar as referências de variáveis globais

   $login = $_POST['login'];
   $senha = $_POST['senha'];

   // echo $login . " " . $senha;

   $sql = "SELECT * FROM tb_usuario ";
   $sql .= " WHERE login_us = '" . $login . "' and senha_us = '" . md5($senha) . "' ";

   // echo $sql;

   // Executar a string feita em php e converte em comando sql 

   // $resultado = mysqli_query($banco, $sql);

   # Passando o comando acima para P.O.O

   $resultado = $POO->query($sql);


   // Saber o número de linha retornado 

   // echo mysqli_num_rows($resultado);

   # Passar o comando de linhas para P.O.O

   if($resultado->num_rows == 1){

      // A consulta no banco retorna 

      // $tabela = mysqli_fetch_array($resultado);

      # Passar o comando acima para P.O.O

      $tabela = $resultado->fetch_array();

      // echo $tabela['nome_us'];
      // echo $tabela['cod_us'];
      // echo $tabela['senha_us'];

      // Session

      $_SESSION['login']['id'] = $tabela['cod_us'];
      $_SESSION['login']['nome'] = $tabela['nome_us'];

      header("location: menu.php");

   } else{
      echo "<script type='text/javascript'>";
         echo " alert('Usuário não localizado!') ";
         echo " 
          Voltar();
          function Voltar(){
            location.href= 'index.php';
         } ";
      echo  "</script>";
   }

   // ------------------------------------------------------------------------------------------


   //  Verificar se o usuário  está  registrado no bancos de dados

   // 1º passo: fazer uma Query SQL em forma de string em php;

   //-> fazer  um arquivo externo, e ser vinculado

   // $sqLogin = "select * from tb_usuario ";
   // $sqLogin .= " where login_us = '" . $login . "' and  senha_us = '" . md5($senha) . "'" ;



   // Observar na tela a string se está com um consulta ao banco de dado corrento
   //    echo $sqLogin;



   // //2º passo: Executar a string php do query no banco de dados
   // /*
   //    https://www.php.net/manual/pt_BR/mysqli.query.php
   //    mysqli :: query
   //    mysqli_query 
   //    Executa uma consulta no banco de dados
   //    */
   // //--------------Procedural--------------------- 
   //    //mysqli_query(caminho, query );
   // $resposta = mysqli_query($link, $sqLogin);

   

   // // 3º passo:  Obtém o número de linhas em um resultado
   // /*
   //    https://www.php.net/manual/pt_BR/mysqli-result.num-rows.php
   //    num_rows
   //    mysqli_num_rows
   //    Obtém o número de linhas no conjunto de resultados


   //    */

   // $linha = mysqli_num_rows($resposta);

   
   // // 4º direcionar para pagina de cadastro;
   // /*

   // -- MySQLi_Result 
   //    Representa o conjunto de resultados da consulta feit ao banco de dados.

   //    **** Metodos ****

   //       $mode MYSQLI_ASSOC, MYSQLI_NUM, MYSQLI_BOTH.

   // -------------------------------------------------
   //    # mysqli_fetch_array
   //    # result->fetch_array
   //    Obtem uma linha do resultado como uma matriz associativa, numérica, ou ambas

   // ----------------------------------------------------------
   //       # mysqli_result::fetch_assoc
   //       # mysqli_fetch_assoc
   //       Obtem uma linha do conjunto de resultados como
   //       uma matriz associativa
   
   // ---------------------------------------------------------- 
   //       # mysqli_result::fetch_row
   //       # mysqli_fetch_row
   //          -Obtém uma linha do resultado como uma matriz numerada
   // ---------------------------------------------------------


   
   //       # mysqli_result::fetch_all
   //       # mysqli_fetch_all
   //       Obtém todas as linhas de resultado como uma 
   //          matriz associativa, uma matriz numérica ou ambos
      
   //       https://www.php.net/manual/pt_BR/mysqli-result.fetch-all.php
   
   //       Estilo orientado à objeto
   //       public mysqli_result :: fetch_all ( int $mode=MYSQLI_NUM ): array
   
   //       Estilo procedural
   //       mysqli_fetch_all ( mysqli_result $result , int $mode=MYSQLI_NUM ): array
   
   //       */

   // /*

   // if($linha == 1){

   //    $row = mysqli_fetch_array($resposta);

   //    //echo "usuário encontrado!";
   //    echo $_SESSION["login"]["id"] = $row["cod_us"];
   //    echo $_SESSION["login"]["nome"]= $row["nome_us"];
   // //  header("location:menu.php");

   //    mysqli_close($link);

   // }else{
   //    //header("location:index.php");
   // }
   // */
   // // ----------P.O.O ---------

   // $resul =   $OOP->query($sqLogin);
   // $linha =  $resul->num_rows;

   // if($linha == 1){

   //    $row = $resul->fetch_array();
   //    //echo "usuário encontrado!";
   //    print_r($row);
   //    echo $_SESSION["login"]["id"] = $row['cod_us'];
   //    echo $_SESSION["login"]["nome"]= $row['nome_us'];
   //    header("location:menu.php");

   //    $OOP->close();

   // }else{
   //    header("location:index.php");
   // }

?>
