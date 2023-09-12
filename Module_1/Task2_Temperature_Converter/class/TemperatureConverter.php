<?php
    class TemperatureConverter{
        static function convert_temperature($data){
            /* Receiving Value */
            $degree = $data['degree'];
            $type   = $data['type'];
            
            /* Empty validation */
            if(empty($degree) || empty($type)){
                $message = "<div class='alert alert-danger'><strong>Error! </strong>Field must not be empty!</div>";
				return $message;
            } else{
                if($type == "farenheit"){
                    return $celsius = ($degree - 32) / 1.8;
                } else{
                    return $farenheit = ($degree * 1.8) + 32;
                }
            }
        }
    }