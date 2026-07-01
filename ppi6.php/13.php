<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cálculos com Array</title>
    
    <style>
     
        .caixa-resultado {
            background-color: #e9ecef;
            padding: 15px;
            margin-top: 20px;
            border-radius: 8px;
            font-family: Arial, sans-serif;
        }
        .destaque {
            color: #0056b3;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h2>Análise de Números</h2>
    <p>Digite os números separados por vírgula para ver a mágica acontecer.</p>
    
    <form action="" method="POST">
        <label>Seus números (ex: 15, 8, 90, 3, 42):</label><br>
        <input type="text" name="lista_numeros" required style="width: 300px;"><br><br>

        <button type="submit">Calcular</button>
    </form>

    <hr>

    <?php
        // Verifica se o formulário foi enviado
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            
            // 1. Recebemos o texto digitado pelo usuário
            $texto_numeros = $_POST['lista_numeros'];

            // 2. Transformamos o texto em um Array
            // O comando 'explode' corta o texto toda vez que acha uma vírgula
            $array_numeros = explode(',', $texto_numeros);

            // 3. Fazemos os cálculos usando as funções prontas do PHP
            // array_sum: soma todos os itens do array
            // max: acha o maior valor
            // min: acha o menor valor
            $soma = array_sum($array_numeros);
            $maior = max($array_numeros);
            $menor = min($array_numeros);

            // Exibindo os resultados na tela
            echo "<div class='caixa-resultado'>";
            echo "<h3>Resultados:</h3>";
            echo "<ul>";
            
            // Usamos a função implode só para mostrar os números bonitinhos na tela de novo
            echo "<li><strong>Números informados:</strong> " . implode(", ", $array_numeros) . "</li>";
            echo "<li><strong>Soma total:</strong> <span class='destaque'>$soma</span></li>";
            echo "<li><strong>Maior número:</strong> <span class='destaque'>$maior</span></li>";
            echo "<li><strong>Menor número:</strong> <span class='destaque'>$menor</span></li>";
            
            echo "</ul>";
            echo "</div>";
        }
    ?>

</body>
</html>