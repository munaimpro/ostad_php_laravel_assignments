<?php
    /*-- Text initialization --*/
    $text = "The quick brown fox jumps over the lazy dog.";
    
    function manipulateString($text){
        /*-- Replacting 'brown' by 'red' --*/
        echo str_replace("brown", "red", strtolower($text));
    }

    manipulateString($text);