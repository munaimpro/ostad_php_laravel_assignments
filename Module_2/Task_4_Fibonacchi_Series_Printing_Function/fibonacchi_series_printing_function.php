<?php
    function printFibonacchi($limit){
        $number1 = 0;
        $number2 = 1;
        for($i = 0; $i < $limit; $i++):
            echo $number1." ";
            $number3 = $number1 + $number2;
            $number1 = $number2;
            $number2 = $number3;
        endfor;
    }

    printFibonacchi(15);

    
    