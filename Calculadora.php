<?php 
    $v1= 0;
    $v2= 0;
    $result=0;
    $resultado=0;
    $calcular="somar";

    if($_SERVER["REQUEST_METHOD"]=="GET"){
        $v1=$_GET["valor1"];
        $v2=$_GET["valor2"];
        $calcular=$_GET["calcular"];

        switch($calcular){
            case "somar":
                $result=$v1 + $v2;
                break;
            case "subtrair":
                $result=$v1 - $v2;
                break;
            case "multiplicar":
                $result=$v1 * $v2;
                break;
            case "dividir":
                $result=$v1 / $v2;
                break;
            case "raiz":
                $result=sqrt($v1);
                break;
        }
    }
    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <style>
      form{
        text-align: center;
        margin-top: 15%;
        border: 2px dashed blue;
        padding: 30px;
        margin-left: 550px;
        margin-right: 550px;
        background-color: cornflowerblue;
        color: white;
        font-size: 20px;
      }

      select{
        margin: 10px;
      }

      .botao{
        background-color: violet;
        border-radius: 5px;
        padding: 2px;
        font-size: 12px;
      }
    </style>
</head>
<body>
    <form action="Calculadora.php" method="Get">
    <p>CALCULADORA</p>
    <select name="calcular">
        <option value="somar">Somar</option>
        <option value="subtrair">Subtrair</option>
        <option value="multiplicar">Multiplicar</option>
        <option value="dividir">Dividir</option>
        <option value="raiz">Raiz</option>
    </select>
    <br>
    <input type="number" name="valor1">
    <br><br>
    <input type="number" name="valor2">
    <br><br>
    <input type="submit" value="CALCULAR" class="botao">
    <br><br>
    <?php echo "O Resultado e: " .$result;?>
    </form>
</body>
</html>