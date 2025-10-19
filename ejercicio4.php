<?php
     $num1=$_POST["num1"];
        echo"<h2>TABLA DE DIVISIÓN DEL ", $num1, "</h2><br>";
     for ($i=1; $i <= 10 ; $i++) { 
                $result = $num1/$i;
                $division = number_format($result,2);
                echo "$num1 ÷ $i = $division <br>";
    }


?>