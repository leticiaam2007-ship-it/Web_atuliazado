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
justify-content: center; 
align-items: center;

 font-size: 30pt;

}
</style>
</head>
<body>


</html>
<div class= "container">

     
        <h1>Informe o número que você deseja descobrir a tabuada </h1>
        <form action="" method = "get" > 
            
        <label for="num"> Digite o número: </label>
        <input type="text" id="num" name="num" >
    
        <input type="submit" value = "Calcular">

        </form>
        

</form>

  <?php
//verificando se o número num foi enviado na requisição 
    if (!isset($_GET['num'])) {
        exit();
    }
  function tabuada($num){
    for ($i=0 ; $i<=10;$i++){
        echo "$num*$i=".$num*$i."<br>";

    }}

    tabuada($_GET["num"]);
  

      
    ?>
</div>
</body>
</html>


    
</body>
</html>


