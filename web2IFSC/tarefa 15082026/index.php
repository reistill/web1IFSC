<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 15/08/2026</title>
</head>
<body>

    1) Fazer o Exemplo 7 da apostila (Pratica_Introducao_PHP.php, página 11)
    2) Fazer os Exercícios Finais da mesma apostila (página 12)
    3) Enviar a resolução em forma de pasta compactada (zip)
    
    <?php 
    $turma = [
        ["nome" => "Ana L.", "curso" => "ADS", "nota" => 8.5],
        ["nome" => "Marcos Big", "curso" => "ADS", "nota" => 7.0],
        ["nome" => "Sofia F.", "curso" => "ADS", "nota" => 6.2],
    ];

    function conceito($nota) {
        if ($nota >= 9) return "A";
        if ($nota >= 7) return "B";
        return "C";
    }
    ?>

    <table border="1" cellpadding="6">
        <tr><th>Nome</th><th>Curso</th><th>Nota</th><th>Conceito</th></tr>

    <?php foreach ($turma as $aluno): ?>
        <tr>
            <td><?= $aluno["nome"] ?></td>
            <td><?= $aluno["curso"] ?></td>
            <td><?= $aluno["nota"] ?></td>
            <td><?= conceito($aluno["nota"]) ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

    

</body>
</html>