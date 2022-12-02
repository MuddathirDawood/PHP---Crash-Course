<?php

    $string = 'Hello World';

    // LENGTH OF STRING
    echo strlen($string);

    // FIND THE POSTION OF THE FIRST OCCURENCE OF THE SUBSTRING IN A STRING
    echo strpos($string, 'o').' | ';

    // FIND THE POSTION OF THE LAST OCCURENCE OF THE SUBSTRING IN A STRING
    echo strrpos($string, 'o').' | ';
    
    // REVERSE THE STRING
    echo strrev($string).' | ';

    // ALL CHARS TO LOWERCASE
    echo strtolower($string).' | ';

    // ALL CHARS TO UPPERCASE
    echo strtoupper($string).' | ';
    
    // FIRST CHAR TO LOWERCASE
    echo ucwords($string).' | ';    

    // STRING REPLACE
    echo str_replace('World', 'Everyone', $string).' | ';

    // RETURN PORTION OF STRING SPECIFIED
    echo substr($string, 0, 5).' | ';
    echo substr($string, 5).' | ';

    // STARTS WITH
    if (str_starts_with($string, 'Hello')) {
        echo 'YES | ';
    }

    // ENDS WITH
    if (str_ends_with($string, 'ld')) {
        echo 'NO | ';
    }

    $string2 = '<script>alert(1)</script> | ';
    echo htmlspecialchars($string2);

    printf('%s likes to %s', 'Muddathir', 'code | ');
    printf('1+1 = %d | ', 1+1);