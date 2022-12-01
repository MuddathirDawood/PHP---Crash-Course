<?php

    /* --------------- OPERATORS --------------- */ 

    // < LESS THAN
    // > GREATER THAN
    // <= LESS THAN OR EQUAL TO
    // >= GREATER THAN OR EQUAL TO
    // == EQUAL TO
    // === IDENTICAL TO
    // != NOT EQUAL TO
    // !== NOT IDENTICAL TO

    /* --------------- IF Statements --------------- */ 

    /*
        IF STATEMENT SYNTAX
        if (condition){
            CODE
        }
    */

    $age = 12;
    
    // if($age >= 18){
    //     echo 'You are old enough to vote';
    // } else {
    //     echo 'Sorry, you are not old enough to vote';
    // }

    $t = date("H");

    // if ($t < 12) {
    //     echo 'Good Morning';
    // } elseif ($t < 17) {
    //     echo 'Good Afternoon';
    // } else {
    //     echo 'Good Evening';
    // }

    $posts = ['First Post'];

    // if (!empty($posts)) {
    //     echo 'Posts there is';
    // } else {
    //     echo 'Posts there is not';
    // }

    // echo !empty($posts) ? $posts[0] : 'Posts there is not';
    // $firstpost = !empty($posts) ? $posts[0] : 'Posts there is not';

    // $firstpost = $posts[0] ?? null;
    // echo $firstpost;

    $favcolor = 'yello';

    switch ($favcolor) {
        case 'blue':
            echo 'Your fav color is blue';
            break;
        case 'red':
            echo 'Your fav color is red';
            break;
        case 'green':
            echo 'Your fav color is green';
            break;    
        default:
        echo 'Your fav color is not red, blue or green';        
    }