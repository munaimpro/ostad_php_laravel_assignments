<?php
    $text = "The quick brown fox jumps over the lazy dog.";
    
    function manipulateString($text){
        echo str_replace("brown", "red", strtolower($text));
    }

    manipulateString($text);