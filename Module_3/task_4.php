<?php
    $studentGrades = [
        'Student1' => ['Math' => 85, 'English' => 90, 'Science' => 78],
        'Student2' => ['Math' => 89, 'English' => 70, 'Science' => 77],
        'Student3' => ['Math' => 88, 'English' => 80, 'Science' => 71]
    ];

    function calculateGradeAvg(array $studentGrades){
        foreach($studentGrades as $sutent => $grades):
            $sum = array_sum($grades);
            $totalItem = count($grades);
            $average = $sum / $totalItem;

            echo "Student {$sutent}'s average grade : {$average}\n";
        endforeach;
    }

    calculateGradeAvg($studentGrades);