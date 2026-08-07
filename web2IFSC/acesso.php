<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula1 - Acesso</title>
</head>
<body>
    
    <?php 
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $password = $_POST['pass'];

        if ($nome == "Juca" && $email == "juca@bol.com" && $password == 123456) {
            echo "<p>Logado!</p>"; 
        } else {
            echo "<p>Negado!</p>";
        }

        echo "<p>Nome: " . $nome . "</p> \n";
        echo "<p>Email: " . $email . "</p> \n";
        echo "<p>Pass: " . $password . "</p> \n";
    ?>
</body>
</html>