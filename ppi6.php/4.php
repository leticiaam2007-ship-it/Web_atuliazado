<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>

   .container{
    display:flex;
    height: 100vh;
    justify-content:center;
    align-items:center;
    font-size: 40pt;

   }

    </style>
    
     </head>
      <body>
      </body>
</html>
<div class= "container">

      <form method="Get">
        <h1>Informe o intervalo </h1>
        <label for="inputa"> Valor minimo </label>
        <input type="text" id="inputa" name="a" value="<?php if (isset($_GET["a"])) {echo $_GET["a"];}?>">

        <br>
        
        <label for="inputa"> Valor maximo </label>
        <input type="text" id="inputa" name="b" value="<?php if (isset($_GET["b"])) {echo $_GET["b"];}?>">


<br>
        <input type="submit" value = "Enviar">

</form>
<br>


              
                     <?php 
                     if (!isset($_GET["a"]) && !isset($_GET["b"])){
                        exit(); }

            if (trim ($_GET["a"])=="" || trim($_GET["b"])==""){
                exit();
            }


                         $valorminn=trim($_GET["a"]);
                         $valormax=trim($_GET["b"]);

                          $random=rand($valormax,$valorminn);
                         echo $random;

           ?>
    </div>
</body>
</html>