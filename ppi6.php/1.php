<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exemplo de Tags PHP</title>
</head>
<body>

    <?php
        $nomeAluno = "Carlos";
        $nota1 = 8.5;
        $nota2 = 9.0;
        
        $media = ($nota1 + $nota2) / 2;
    ?>

    <h2>Boletim Escolar</h2>
    
    <p>Aluno: <strong><?= $nomeAluno ?></strong></p>
    
    <p>Média Final: <strong><?php echo $media; ?></strong></p>

    <?php if ($media >= 7): ?>
        <p style="color: green;">Situação: Aprovado!</p>
    <?php else: ?>
        <p style="color: red;">Situação: Reprovado.</p>
    <?php endif; ?>

</body>
</html>