<?php
    $num1=$_POST["num1"];
    $num2=$_POST["num2"];
    $num3=$_POST["num3"];

    $promedio=($num1+$num2+$num3)/3;

    $redondeado=number_format($promedio, 2);

    echo"El promedio es: ", $redondeado;

    if ($promedio<60) {
        echo"<br> REPROBO";
    }elseif ($promedio<75) {
        echo"<br> APROBÓ";
    }elseif ($promedio<90) {
        echo"<br> MUY BIEN";
    }else {
        echo"<br> EXCELENTE";
    }


?>