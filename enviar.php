<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Cadastro de Aluno
    </title>

    <?php
        $nome=$_POST['txtNome'];
        $email=$_POST['txtEmail'];
        $cpf=$_POST['txtCpf'];
        ?>

</head>
<body>
    <h1>
        Cadastro de Aluno
    </h1>

    <form action="enviar.php" method="post">
        <label for="tNome">
            Nome:
        </label>
        <br/>
        <input <?php echo "value='$nome'";?> disabled>
        <br/>
        <br/>

        <label for="tEmail">
            Email:
        </label>
        <br/>
            <input <?php echo "value='$email'";?> disabled>
        <br/>  
        <br/>

        <label for="tCpf">
            C.P.F.:
        </label>
        <br/>
            <input <?php echo "value='$cpf'";?> disabled>
        <br/>
        <br/>
                  
        <button ><a href="index.html">VOLTAR</a></button>
    </form>
</body>
</html>
