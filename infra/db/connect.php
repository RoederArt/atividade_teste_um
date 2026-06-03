<?php
    //cira as variaveis atribuindo valores as mesmas
    $host = "localhost";
    $user = "root";
    $pass = "root";
    $db = "sistema_simples_m1";

    $conn = new mysqli($host,$user,$pass,$db);//cria um caminho com o banco

    if($conn->connect_error){//verifica se a conexão foi bem sucedida
        die("Erro na conexão!");
    }else{
        echo "<script>console.log('Banco conectado com sucesso!')</script>";
    };

?>