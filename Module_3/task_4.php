<?php
    /*-- Declearation & Initialization of studentGrades array --*/
    $studentGrades = [
        ['Math' => 85, 'English' => 90, 'Science' => 78],
        ['Math' => 89, 'English' => 70, 'Science' => 77],
        ['Math' => 88, 'English' => 80, 'Science' => 71]
    ];

    /*-- calculateGradeAvg() function --*/
    function calculateGradeAvg(array $studentGrades){
        foreach($studentGrades as $student => $grades):
            $sum = array_sum($grades); // Calculating sum for each student
            $totalItem = count($grades); // Calculating total subject for each student
            $average = number_format(($sum / $totalItem), 2); // Calculating average

            echo "Student ".($student + 1)."'s average grade : {$average}\n";
        endforeach;
    }

    calculateGradeAvg($studentGrades);