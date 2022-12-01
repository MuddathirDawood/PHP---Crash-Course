<?php

    /* --------------- FOR LOOP --------------- */ 

    /*
        FOR LOOP SYNTAX
        for (initialize; condition; increment){
            CODE
        }
    */

    // for ($x=0; $x <= 10; $x++) { 
    //     echo 'Number ' . $x . '<br>';
    // }

    /* --------------- WHILE LOOP --------------- */ 

    /*
        WHILE LOOP SYNTAX
        while (condition){
            CODE
        }
    */

    // $x = 1;

    // while ($x <= 15) {
    //     echo 'Number ' . $x . '<br>';
    //     $x++;
    // }

        /* --------------- DO WHILE LOOP --------------- */ 

    /*
        DO WHILE LOOP SYNTAX
        do {
            CODE   
        } while (condition)

        do...while loop will always execute the first block of code once, even if the condition is false.
    */

    // $x = 1;

    // do {
    //     echo 'Number ' . $x . '<br>';
    //     $x++;
    // } while ($x <= 5);

        /* --------------- FOR EACH LOOP --------------- */ 

    /*
        FOR EACH LOOP SYNTAX
        foreach ($array as $value){
            CODE
        }
    */

    // $posts = ['First Post', 'Second Post', 'Third Post'];

    // foreach ($posts as $index => $post) {
    //     echo $index . ' - ' . $post.'<br>';
    // }

    // $person = [
    //         'first_name' => 'Muddathir',
    //         'last_name' => 'Dawood',
    //         'email' => 'gmail@gmail.com'
    //     ];

    // foreach ($person as $key => $value) {
    //     echo "$key - $value<br>";
    // }