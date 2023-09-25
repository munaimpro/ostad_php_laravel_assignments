<?php
    $numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    
    function removeEvenNumber($numbers){
        return array_filter($numbers, function($values){
            return $values % 2 != 0;
        });
    }

    print_r(removeEvenNumber($numbers));