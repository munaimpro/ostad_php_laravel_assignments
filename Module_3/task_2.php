<?php
    /*-- Declearation & Initialization of numbers array --*/
    $numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    
    function removeEvenNumber($numbers){

        /*-- Removing even numbers using array_filter() function --*/
        return array_filter($numbers, function($values){
            return $values % 2 != 0;
        });

    }

    print_r(removeEvenNumber($numbers));