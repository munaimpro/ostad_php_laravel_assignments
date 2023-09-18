<?php
    /**
     * Summary of printEvenNumber function
     * @param int $start
     * @param int $end
     * @param int $step
     * @return void
     */
    function printEvenNumber(int $start, int $end, int $step){
        $start+=1;
        $i = $start;
        while( $i <= $end):
            if($i % 2 == 0):
                echo $i.PHP_EOL;
            endif;
            $i += $step;
        endwhile;
    }

    printEvenNumber(1, 20, 2);