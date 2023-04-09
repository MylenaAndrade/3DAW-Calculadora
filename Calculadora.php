<?php 
    $v1= 0;
    $v2= 0;
    $result=0;
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
                echo "O Resultado de $v1 é " .$result;
                $result=sqrt($v2);
                echo " e o de $v2 é " .$result;
                break;
        }
    }
    if($calcular != "raiz"){
        echo "O Resultado e: " .$result;
    }
    
?>
