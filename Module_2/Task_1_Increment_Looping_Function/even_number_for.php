<?php
    function printEvenNumber(int $start, int $end, int $step){
        $start+=1;
        for($i = $start; $i <= $end; $i += $step):
            if($i % 2 == 0):
                echo $i.PHP_EOL;
            endif;
        endfor;
    }

    printEvenNumber(1, 20, 2);