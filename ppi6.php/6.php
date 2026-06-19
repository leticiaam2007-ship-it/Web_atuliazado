<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <div class="container">
        <h1>Informe um numero impar ou par</h1>
        <form method="Get">
        <input type="text" id="n" name="n">
        <label for="input"></label>
        <input type="submit" value="Submeter">
        </form>
        <?php 
        

        if (!isset($_GET["n"])) {
            exit();
        }
        $n=$_GET["n"];
        if ($n%2==0) {
            echo "O numero " .$n. " é par";
        }
        else{
            echo "O numero " .$n. " é impar";
        }

        ?>
    </div>

</body>
</html>