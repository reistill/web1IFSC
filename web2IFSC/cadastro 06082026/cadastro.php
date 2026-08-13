<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula1 - Cadastro</title>
</head>
<body>
    
    <?php 
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $password = $_POST['pass'];


        $dados = [$nome, $email];
        $arquivo = "usuario.txt";

        $conteudo = implode(PHP_EOL, $dados);

        file_put_contents($arquivo, $dados);
    ?>

</body>
</html>