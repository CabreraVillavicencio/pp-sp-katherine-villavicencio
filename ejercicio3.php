<?php

    $num1=$_POST["num1"];

    switch ($num1) {
        case 1:
            echo "Enero.";
            break;
        case 2:
            echo "Febrero.";
            break;
        case 3:
            echo "Marzo.";
            break;
        case 4:
            echo "Abril.";
            break;
        case 5:
            echo "Mayo.";
            break;
        case 6:
            echo "Junio.";
            break;
        case 7:
            echo "Julio.";
            break;
        case 8:
            echo "Agosto.";
            break;
        case 9:
            echo "Septiembre.";
            break;
        case 10:
            echo "Octubre.";
            break;
        case 11:
            echo "Noviembre.";
            break;
        case 12:
            echo "Diciembre.";
            break;
        default:
            echo "Este número esta fuera del rango solicitado, por favor ingresa otro numero del 1 al 12.";
            break;
        }
?>