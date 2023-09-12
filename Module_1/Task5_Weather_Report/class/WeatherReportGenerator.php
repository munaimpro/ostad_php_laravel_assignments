<?php
    class WeatherReportGenerator{
        static function generateWeatherReport($data){
            /* Receiving Value */
            $temperature = $data['temperature'];
            
            /* Empty validation */
            if(empty($temperature)){
                $message = "<div class='alert alert-danger'><strong>Error! </strong>Field must not be empty!</div>";
				return $message;
            } else{
                return $result = ($temperature < 0)? 0 : (($temperature > 0 && $temperature <= 25)? 1 : 2);
            }
        }
    }