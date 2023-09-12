<?php
    class GradeCalculator{
        static function calculate_grade($data){
            /* Receiving Value */
            $score1 = $data['score1'];
            $score2 = $data['score2'];
            $score3 = $data['score3'];
            
            /* Empty validation */
            if(empty($score1) || empty($score2) || empty($score3)){
                $message = "<div class='alert alert-danger'><strong>Error! </strong>Field must not be empty!</div>";
				return $message;
            } else{
                return $average = ($score1 + $score2 + $score3) / 3;
            }
        }
    }