<?php
    class ComparisonTool{
        static function compareNumbers($data){
            /* Receiving Value */
            $number1 = $data['number1'];
            $number2 = $data['number2'];
            
            /* Empty validation */
            if(empty($number1) || empty($number2)){
                $message = "<div class='alert alert-danger'><strong>Error! </strong>Field must not be empty!</div>";
				return $message;
            } else{
                return $result = ($number1 > $number2)? 1 : 2;
            }
        }
    }