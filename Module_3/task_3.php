<?php
    $grades = [85, 92, 78, 88, 95];

    function sortGrades(array $grades){
        rsort($grades);
        print_r($grades);
    }

    sortGrades($grades);