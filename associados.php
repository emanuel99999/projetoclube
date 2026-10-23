<?php
    include ('conexao.php');
    if ($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $nome = $_POST['txtnome'];
        $email = $_POST['txtemail'];
        $nascimento = $_POST['txtnasc'];
        $sql = "INSERT INTO associado(nome, email, nascimento) VALUES ('$nome', '$email', '$nascimento')";
        $executar = mysqli_query($conn, $sql);
        if ($executar) {
            echo "usuario cadatrado com sucesso!!";
        }
        else {
            echo "erro ao cadastrar o usuario";
        }




    }
mysqli_close($conn);
?>
