<?php
    include ('conexao.php');
    if ($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $nome = $_POST['txtnome'];
        $nascimento = $_POST['txtnasc'];
        $id_associado = $_POST['txtid_associado'];
        $sql = "INSERT INTO dependente(nome, nascimento, id_associado) VALUES ('$nome', '$nascimento', '$id_associado')";
        $executar = mysqli_query($conn,$sql);
        if ($executar) {
            echo "usuario cadatrado com sucesso!!";
        }
        else {
            echo "erro ao cadastrar o usuario";
        }




    }
mysqli_close($conn);
?>