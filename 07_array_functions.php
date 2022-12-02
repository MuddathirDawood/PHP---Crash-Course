<?php

    $fruits = ['apple','bannana','pineapple','orange'];

    // GET LENGTH
    // echo count($fruits);

    // SEARCH ARRAY
    // var_dump(in_array('apple',$fruits));

    // ADD TO ARRAY
    $fruits[] = 'grape';
    array_push($fruits,'pear');
    array_unshift($fruits,'strawberry');

    // REMOVE FROM ARRAY
    array_pop($fruits);
    array_shift($fruits);
    // unset($fruits[1]);

    // SPLITTING
    // $chunked_array = array_chunk($fruits, 2);

    // print_r($chunked_array);

    // print_r($fruits);

    $arr1 = [1,2,3];
    $arr2 = [4,5,6];

    $arr3 = array_merge($arr1, $arr2);
    $arr4 = [...$arr1, ...$arr2];

    // print_r($arr4);
    
    $a = ['green','red','blue'];
    $b = ['apple','grape','banana'];

    $c = array_combine($a, $b);
    // print_r($c);
    $keys = array_keys($c);
    // print_r($keys);
    $flipped = array_flip($c);
    // print_r($flipped);

    $numbers = range(1, 20);
    // print_r($numbers);

    $newnumber = array_map(function($number){
        return "Number ${number}";
    }, $numbers);
    // print_r($newnumber);

    $lessThan10 = array_filter($numbers, fn($number) => $number <= 10);
    // print_r($lessThan10);

    $sum = array_reduce($numbers, fn($carry, $number)=> $carry + $number);
    var_dump($sum);