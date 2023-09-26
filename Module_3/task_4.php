<?php
    /*-- Declearation & Initialization of studentGrades array --*/
    $studentGrades = [
        'Student1' => ['Math' => 85, 'English' => 90, 'Science' => 78],
        'Student2' => ['Math' => 89, 'English' => 70, 'Science' => 77],
        'Student3' => ['Math' => 88, 'English' => 80, 'Science' => 71]
    ];

    /*-- calculateGradeAvg() function --*/
    function calculateGradeAvg(array $studentGrades){
        foreach($studentGrades as $sutent => $grades):
            $sum = array_sum($grades); // Calculating sum for each student
            $totalItem = count($grades); // Calculating total subject for each student
            $average = number_format(($sum / $totalItem), 2); // Calculating average

            echo "Student {$sutent}'s average grade : {$average}\n";
        endforeach;
    }

    calculateGradeAvg($studentGrades);