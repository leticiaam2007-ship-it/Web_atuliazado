<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Calculadora de IMC - Passo 2</title>
</head>
<body>
    <h2>Calculadora de IMC - Passo 2</h2>

    <?php
        // Recebendo os dados da página 1 via GET
        $nome = $_GET['nome'];
        $email = $_GET['email'];
    ?>

    <p>Olá, <?php echo $nome; ?>! Agora informe seu peso e altura.</p>

    <form action="pagina3.php" method="POST">
        
        <input type="hidden" name="nome" value="<?php echo $nome; ?>">
        <input type="hidden" name="email" value="<?php echo $email; ?>">

        <label>Peso em kg (ex: 70.5):</label><br>
        <input type="number" step="0.01" name="peso" required><br><br>

        <label>Altura em metros (ex: 1.75):</label><br>
        <input type="number" step="0.01" name="altura" required><br><br>

        <button type="submit">Calcular IMC</button>
    </form>
</body>
</html>