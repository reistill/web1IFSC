<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula1</title>
</head>
<body>

    <p>Acesso</p>
    <form action="index.php" method="post">
            
        <input type="text" name = "nome">
        <input type="text" name = "email">
        <input type="password" name = "pass">
        <input type="submit">

    </form>

    <p>Cadastro</p>
    <form action="cadastro.php" method="post">
            
        <input type="text" name = "nome">
        <input type="text" name = "email">
        <input type="password" name = "pass">
        <input type="submit">

    </form>
    <?php
        echo "<p>Este trecho foi gerado por PHP no servidor</p> \n";
        
        $n1 = 18;
        $n2 = 32;
        $n3 = $n1 + $n2; 

        echo "<p>A soma de " . $n1 . " + " . $n2 . " é: " . $n3 . "</p>";

    ?>
</body>
</html>