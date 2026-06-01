<?php// chamou meu fi php no bagui
    session_start();// abriu sessão

    include("infra/db/connect.php");// conecta com o db(banco de dados)

    if($_SERVER['REQUEST_METHOD'] == "POST"){ //se o metodo requirido for post, as linhas de codigo são executadas 

        $usuario = $_POST["usuario"]; //guarda os dados criados para o usuario
        $senha = $_POST["senha"]; //guarda os dados da senha do usuario
        
        $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha'";// cria uma query que seleciona dados do usuario e senha

        $resultado = $conn->query($sql);

        if ($resultado->num_rows > 0){
            $_SESSION["usuario"] = $usuario;
            header("Location: public/home.php");
            exit();
        }else{
            $erro = "Usuário ou senha inválidos!";
        }
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Sitema de Login Simples</h1>

    <form method="POST">
        <label>Usuário:</label>
        <input type="text" name="usuario">
        <br>
        <label>Senha:</label>
        <input type="password" name="senha">
        <br>
        <?php
        
            if(isset($erro)){
                echo $erro;
            };

            // esse erro serve ara alguma coisa
        
        ?>
        <br>
        <button type="submit">Entrar</button>
    </form>

</body>
</html>