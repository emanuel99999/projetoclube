<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "clube_a";
    $conn = mysqli_connect ($hostname, $username, $password, $dbname);

    if ($conn){
        echo "Conexão estabelecida com sucesso";
    }
    else 
        die ("Conexão falhou".mysqli_connect_error());
?>