<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar_associado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</head>
<body>
    
    <?php
    include ('conexao.php');
        if ($_SERVER["REQUEST_METHOD"]=="POST"){
            $id=intval($_POST['txtid']);
            $nome=$_POST['txtnome'];
            $email=$_POST['txtemail'];
            $nascimento=$_POST['txtnascimento'];
            $alterar="update associado set nome='$nome', email='$email', nascimento='$nascimento' where id='$id'";
            $executar_alterar=mysqli_query($conn, $alterar);
            if ($executar_alterar){
                echo "Associado alterado com sucesso";
            }
            else{
                echo "falha ao alterar";
            }
        }        
        else{
            $id_associado=$_GET['id'];
            $consulta="SELECT * FROM associado where id='$id_associado'";
            $executar_consulta=mysqli_query($conn, $consulta);
            $vetor=mysqli_fetch_array($executar_consulta);
        
    
    ?>
    <form action="editar_associado.php" method="POST"> 
        <h1 class="text-center">EDITAR ASSOCIADOS</h1><br>
        id:<input class="form-control" type="text" name="txtid" readonly value="<?php echo $vetor['id']?>"><br>
        nome: <input class="form-control" type="text" name="txtnome" value="<?php echo $vetor['nome']?>"><br>
        email: <input class="form-control" type="email" name="txtemail" value="<?php echo $vetor['email']?>"><br>
        nascimento: <input class="form-control" type="date" name="txtnascimento" value="<?php echo $vetor['nascimento']?>"><br> 
        <div class="text-center">    
            <input class="btn btn-primary" type="submit" value="Atualizar">
            <input class="btn btn-danger" type="reset" value="Cancelar">
        </div>    
    </form>
    <?php 
        }
        mysqli_close($conn);
    ?>

</body>
</html>