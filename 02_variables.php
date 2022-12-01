<?php

    /* --------------- PHP Data Types --------------- */ 
    
    // STRING       Series of characters surrounded by quotes
    // INTEGER      Whole Numbers
    // FLOAT        Decimal Numbers
    // BOOLEAN      True/False
    // ARRAY        Special variable, which can hold more than one value
    // OBJECT       A Class
    // NULL         Empty Variable
    // RESOURCE     Special variable that holds a resource 

    /* --------------- Variable Rules --------------- */ 

    // Variables must be prefixed with $
    // Variables must start with a letter or the underscore character
    // Variables can't start with a number
    // Variables can only contain aplha-numeric characters and underscores( A-z, 0-9, _ )
    // Variables are case-sensitive
    
    $name = 'Bradley'; // STRING
    $age = 30; //INTEGER
    $has_kids = true; // BOOLEAN
    $cash_on_had = 1254.85; // FLOAT

    echo $name;
    echo $age." | ";
    echo $has_kids." | ";
    echo "R".$cash_on_had." | ";
    var_dump($has_kids)." | ";
    echo $name." is ".$age." years old | ";
    echo "${name} was ${age} years old | ";
    echo 5 + 5;
    $x = '5'+'5';
    var_dump($x);

    define('HOST','localhost'); // HOW TO MAKE AN CONSTANT
    define('DB_NAME','dev_db'); // HOW TO MAKE AN CONSTANT

    echo " | ".HOST." | ";
    echo DB_NAME;