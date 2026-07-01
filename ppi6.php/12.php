<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Classificador de Triângulos</title>
    
    <style>
        
        .resultado {
            background-color: #f8f9fa;
            padding: 15px;
            border-left: 5px solid #28a745; 
            margin-top: 20px;
            border-radius: 4px;
        }
        .erro {
            border-left-color: #dc3545; 
        }
    </style>
</head>
<body>
    <h2>Classificador de Triângulos</h2>
    <p>Digite os tamanhos dos três lados para descobrir o tipo do triângulo.</p>
    
    <form action="" method="POST">
        <label>Lado A:</label><br>
        <input type="number" step="any" name="lado_a" required><br><br>

        <label>Lado B:</label><br>
        <input type="number" step="any" name="lado_b" required><br><br>

        <label>Lado C:</label><br>
        <input type="number" step="any" name="lado_c" required><br><br>

        <button type="submit">Verificar e Classificar</button>
    </form>

    <hr>

    <?php
        // Verifica se o usuário clicou no botão de enviar
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            
            // Pegando os valores digitados no formulário
            $a = $_POST['lado_a'];
            $b = $_POST['lado_b'];
            $c = $_POST['lado_c'];

            // 1º Passo: Verificar se os valores formam um triângulo
            // A soma de dois lados tem que ser SEMPRE maior que o terceiro lado
            if (($a + $b > $c) && ($a + $c > $b) && ($b + $c > $a)) {
                
                // 2º Passo: Classificar o triângulo
                if ($a == $b && $b == $c) {
                    $tipo = "Equilátero";
                    $descricao = "Todos os lados são iguais.";
                } elseif ($a == $b || $a == $c || $b == $c) {
                    $tipo = "Isósceles";
                    $descricao = "Dois lados são iguais e um é diferente.";
                } else {
                    $tipo = "Escaleno";
                    $descricao = "Todos os lados são diferentes.";
                }
                
                // Exibe o resultado com sucesso
                echo "<div class='resultado'>";
                echo "<h3>É um triângulo $tipo!</h3>";
                echo "<p>$descricao</p>";
                echo "</div>";

            } else {
                // Se não passar na regra matemática, exibimos um erro
                echo "<div class='resultado erro'>";
                echo "<h3>Não forma um triângulo!</h3>";
                echo "<p>A soma de dois lados não é maior que o terceiro. Esses valores não conseguem formar um triângulo fechado.</p>";
                echo "</div>";
            }
        }
    ?>

</body>
</html>