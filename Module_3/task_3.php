<?php
    /*-- Declearation & Initialization of grades array --*/
    $grades = [85, 92, 78, 88, 95];

    function sortGrades(array $grades){
        rsort($grades); // Sorting grades in descending order
        print_r($grades);
    }

    sortGrades($grades);