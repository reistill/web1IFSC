<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 15/08/2026</title>
</head>
<body>
    
    <?php 
    $turma = [
        ["nome" => "Ana L.", "curso" => "ADS", "nota" => 8.5],
        ["nome" => "Marcos Big", "curso" => "ADS", "nota" => 7.0],
        ["nome" => "Sofia F.", "curso" => "ADS", "nota" => 5.9],
        ["nome" => "Gabriel", "curso" => "ADS", "nota" => 8.0],
        ["nome" => "Rodrigo S.", "curso" => "ADS", "nota" => 9.5],
        ["nome" => "Erick", "curso" => "ADS", "nota" => 6.8]
    ];

    function conceito(float $nota) {
        if ($nota >= 9) return "A";
        if ($nota >= 7) return "B";
        return "C";
    }

    function situacao(float $nota) {
        if ($nota >= 6) {
            return "Aprovado";
        }
        return "Reprovado";
    }
    
    $somaNota = 0;
    $cursos = ["ADS" => 0];
    ?>

    <table border="1" cellpadding="6">
        <tr><th>Nome</th><th>Curso</th><th>Nota</th><th>Conceito</th><th>Situação</th></tr>

        <?php foreach ($turma as $aluno): 
        
            if(situacao($aluno["nota"]) === "Aprovado") {
                $cor = "background:#cfc";
            } else {
                $cor = "";
            }; 

            $somaNota += $aluno["nota"];

            if ($aluno["curso"] === "ADS") {
                $cursos["ADS"]++;
            }
            
        ?>

        <tr style="<?= $cor ?>">
            <td><?= $aluno["nome"] ?></td>
            <td><?= $aluno["curso"] ?></td>
            <td><?= $aluno["nota"] ?></td>
            <td><?= conceito($aluno["nota"]) ?></td>
            <td><?= situacao($aluno["nota"]) ?></td>
        </tr>

        <?php endforeach; ?>
    </table>
    
    <p>Média: <?= $somaNota/count($turma) ?></p>
    <p>Total: <?= count($turma) ?> alunos</p>
    <p>Curso ADS: <?= $cursos["ADS"] ?></p>
</body>
</html>