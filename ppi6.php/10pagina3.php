<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado do IMC</title>
</head>
<body>
    <h2>Resultado do seu IMC</h2>

    <?php
        // Recebendo todos os dados do formulário anterior via POST
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $peso = $_POST['peso'];
        $altura = $_POST['altura'];

        // Calculando o IMC: Peso dividido pela (Altura x Altura)
        $imc = $peso / ($altura * $altura);

        // Formatando o IMC (2 casas decimais, vírgula no decimal, ponto no milhar)
        $imc_formatado = number_format($imc, 2, ',', '.');
    ?>

    <h3>Dados Coletados:</h3>
    <ul>
        <li><strong>Nome:</strong> <?php echo $nome; ?></li>
        <li><strong>E-mail:</strong> <?php echo $email; ?></li>
        <li><strong>Peso:</strong> <?php echo $peso; ?> kg</li>
        <li><strong>Altura:</strong> <?php echo $altura; ?> m</li>
    </ul>

    <h3>Seu IMC é: <?php echo $imc_formatado; ?></h3>
    
    <br>
    <a href="pagina1.php">Fazer um novo cálculo</a>

</body>
</html>