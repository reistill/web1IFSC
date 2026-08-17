<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date</title>
</head>
<body>

    <?php
        
        $nome = "Joel";
        $idade = 20;
        $cidade = "Blumenau";

        echo "Olá meu nome é $nome, tenho $idade anos e moro em $cidade. <br>";

        $preco = 25.90;
        $quantidade = 3;
        $total = $preco * $quantidade;

        echo "<br>$total<br>";

        if ($idade % 2 == 0) {
            echo "Sua idade é par <br>";
        } else {
            echo "Sua idade é impar <br>";
        }


        if ($idade > 17) {
            echo "Você é adulto";
        } else {
            echo "Você é menor de idade";
        }

    ?>
</body>
</html>