<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Palíndromo</h1>

 
    <form method="post">
        <label for="texto">Digite um texto:</label>
        <input type="text" name="texto" id="texto" required>
        <input type="submit" value="Calcular">
    </form>
<?php
 
//vamos verificar se a variavel %_GET['texto] existe se existir vamos pegar o valor dele e armazenar na variaveol $texto
if(isset($_POST['texto'])){
    $texto = $_POST['texto'];

    $tamanho= strlen($texto);
    $palindromo=($texto == strrev ($texto))? 'Sim' : 'Não';

    $vogais=preg_match_all('/[aeiou]/i', $texto, $matches);
    $consoantes=preg_match_all('/[bcdfghjklmnpqrstvwxyz]/i', $texto, $matches);


    //verificar se o texto é igual ao seu reverso
    if($texto == strrev($texto)){
        echo "<p>O texto é um palíndromo.</p>";
    }else{
        echo "<p>O texto não é um palíndromo.</p>";
    }
}
?>

<ul>

<li>Tamanho da String: <?php echo $tamanho; ?></li>
<li>É um palíndromo: <?php echo $palindromo; ?></li>
<li>O número de vogais: <?php echo $vogais; ?></li>
<li>O número de consoantes: <?php echo $consoantes; ?></li>


</ul>


</body>
</html>