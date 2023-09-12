<?php
    class EvenOddChecker{
        static function checkEvenOdd($data){
            /* Receiving Value */
            $number = $data['number'];
            
            /* Empty validation */
            if(empty($number)){
                $message = "<div class='alert alert-danger'><strong>Error! </strong>Field must not be empty!</div>";
				return $message;
            } else{
                return $result = $number % 2;
            }
        }
    }