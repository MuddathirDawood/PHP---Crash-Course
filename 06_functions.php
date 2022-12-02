<?php
    $y = 12;

    function registerUser($name){
        global $y;
        echo 'User: '. $name .' Registered <br>'.$y.'<br>';
    }
    registerUser('Muddathir');

    function sum($n1 = 9, $n2 = 5){     // Using = in an argument gives it a default value            
        return $n1 + $n2;
    }
    $number = sum(5,5);
    echo $number;

    $subtract = function($n1, $n2){
        return $n1 -$n2;
    };
    echo '<br>'.$subtract(9,6);

    $multiply = fn($n1, $n2) => $n1 * $n2;
    echo '<br>'.$multiply(8,5);