<?php

    session_start();

    // Deleter excluir uma sessão

    unset($_SESSION["login"]);

    // Direcionar para arquivo index

    header("location:index.php");

?>