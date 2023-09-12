<?php
    class SimpleCalculator{
        static function calculation($data){
            /* Receiving Value */
            $number1  = $data['number1'];
            $number2  = $data['number2'];
            $operator = $data['operator'];
            
            /* Calculation process */
            if($operator == "/" && $number2 == 0){
                return $result = "Error";
            } elseif($operator == "/" && $number2 != 0){
                return $result = $number1 / $number2;
            } elseif($operator == "%" && $number2 == 0){
                return $result = "Error";
            } elseif($operator == "%" && $number2 != 0){
                return $result = $number1 % $number2;
            } elseif($operator == "*"){
                return $result = $number1 * $number2;
            } elseif($operator == "+"){
                return $result = $number1 + $number2;
            } else{
                return $result = $number1 - $number2;
            }
        }
    }