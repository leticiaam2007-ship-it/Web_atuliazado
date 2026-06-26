<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Soma de Números</title>
</head>
<body>

    <h2>Soma de Números</h2>

    <form method="post">
        <label>Digite os números separados por vírgula:</label><br><br>
        <input type="text" name="numeros" placeholder="Ex: 10,20,30,40" required>
        <br><br>
        <input type="submit" value="Calcular Soma">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $entrada = $_POST["numeros"];

        // Separa a string em um vetor
        $numeros = explode(",", $entrada);

        $soma = 0;

        foreach ($numeros as $numero) {
            $soma += (float) trim($numero);
        }

        echo "<h3>A soma é: $soma</h3>";
    }
    ?>

</body>
</html>