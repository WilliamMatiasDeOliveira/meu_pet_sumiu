<?php

namespace App\Functions;

class Helpers{

    public static function sanitaze_input($value){
        $clean =  htmlspecialchars(stripslashes(trim($value)));
        return $clean;
    }
}