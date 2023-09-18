<?php
    $number1 = 0;
    $number2 = 1;
    for($i = 0; $i < 10; $i++):
        if($number1 > 100):
            break; // Break the loop 
        endif;
        echo $number1." ";
        $number3 = $number1 + $number2;
        $number1 = $number2;
        $number2 = $number3;
    endfor;