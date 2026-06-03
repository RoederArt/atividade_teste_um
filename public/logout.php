<?php

    session_start();
    session_destroy(); //finaliza e destroi os dados da sessão voltando para o login
    header("Location: ../index.php");
    exit();

?>