<?php

    // SIMPLE ARRAY - Basic array
    $numbers = [1,28,6,2,57];
    $fruits = array('Apple','Bannana','Pineapple','Orange');

    // var_dump($numbers);
    // echo $fruits[1];

    // ASSOCIATIVE ARRAY - an array where you make the index
    $colors = [
        10 => 'blue',
        25 => 'red',
        37 => 'green'
    ];
    // echo $colors[10]; 

    $hex = [
        'blue' => '#141386',
        'red' => '#941211',
        'green' => '#176613'
    ];
    // echo $hex['blue'];

    $person = [
        'first_name' => 'Muddathir',
        'last_name' => 'Dawood',
        'email_address' => 'gmail@gmail.com'
    ];
    // echo $person['first_name'];

    $people = [
        [
            'first_name' => 'Muddathir',
            'last_name' => 'Dawood',
            'email' => 'gmail@gmail.com'
        ],
        [
            'first_name' => 'Ayyoob',
            'last_name' => 'Dawood',
            'email' => 'gmail@gmail.com'
        ],
        [
            'first_name' => 'Shouky',
            'last_name' => 'Dawood',
            'email' => 'gmail@gmail.com'
        ]
    ];
    // echo $people[1]['first_name'];
    var_dump(json_encode($people));