<!-- criação visual do layout da tabela -->
<h4>Usuários Cadastrados</h4>

<table border="1" cellpadding="3">

    <tr>
        <th>ID</th>
        <th>Usuário</th>
        <th>Senha</th>
    </tr>

    <?php
    
    $sqlTodosUsuarios = "SELECT * FROM usuarios"; //selecionar a tabela de usuarios e cria uma query

    $resultadoTodosUsuarios = $conn->query($sqlTodosUsuarios); //executa a query

    while($linha = $resultadoTodosUsuarios->fetch_assoc()){ 

    // o fetch assoc percorre a tabela e armazena o valor ordenado

        echo "  <tr>
                    <td>". $linha['id'] . "</td>
                    <td>". $linha['usuario'] . "</td>
                    <td>". $linha['senha'] . "</td>
                </tr>
        ";

    }
    
    ?>

    


</table>