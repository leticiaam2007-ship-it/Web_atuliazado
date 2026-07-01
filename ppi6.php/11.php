<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Definir Intervalo</title>
    
    <style>
        .numero-destaque {
            background-color: #007BFF; 
            color: white;              
            padding: 8px 12px;         
            margin: 5px;             
            border-radius: 5px;        
            font-weight: bold;         
            display: inline-block;     
        }
    </style>
</head>
<body>
    <h2>Escolha um intervalo de números</h2>
    
    <form action="" method="POST">
        <label>Número inicial:</label><br>
        <input type="number" name="inicio" required><br><br>

        <label>Número final:</label><br>
        <input type="number" name="fim" required><br><br>

        <button type="submit">Mostrar Números</button>
    </form>

    <hr> <?php
        // Isso verifica se o formulário foi enviado (se o método POST foi acionado)
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            
            // Pegamos os números que o usuário digitou
            $inicio = $_POST['inicio'];
            $fim = $_POST['fim'];

            echo "<h3>Seus números:</h3>";

            if ($inicio <= $fim) {
                
                
                for ($i = $inicio; $i <= $fim; $i++) {
                    echo "<span class='numero-destaque'>$i</span>";
                }
                
            } else {
                // Mensagem de erro caso a pessoa coloque os números ao contrário
                echo "<p style='color: red;'>Ops! O número inicial não pode ser maior que o número final.</p>";
            }
        }
    ?>

</body>
</html>