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
  <br>
</form>

</body>
</html>