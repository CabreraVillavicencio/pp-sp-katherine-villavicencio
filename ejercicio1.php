<?php
    $num1=$_POST["num1"];
    $num2=$_POST["num2"];

    if($num1>$num2){
        echo"$num1 es el número mayor. <br>";
        echo"$num2 es el número menor. <br>";
    } elseif ($num2>$num1){
        echo"$num2 es el número mayor. <br>"; 
        echo"$num1 es el número menor. <br>"; 
    } else {
        echo"Ambos números son iguales";
    }

    $total=$num1+$num2;
    $resultado=($total/2==0)?"Par":"Impar";
    echo"La suma de ambos números es: ", $total;
    echo"<br> Es un múmero: ", $resultado;


?>