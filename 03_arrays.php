<?php

$numbers = [1, 2, 3];
$fruits = array('apple', 'strawberry', 'banana');

// var_dump($fruits);
// var_dump($fruits[0]);

// Associative Array
$colors = [
    'red' => '#f00',
    'blue' => '#0f0'
];

echo $colors['red'];

// Bidimensional array
$people = [
    ['first_name' => 'Dimitry', 'last_name' => 'Bivol', 'email' => 'dm_bivol@gmail.com'],
    ['first_name' => 'Andre', 'last_name' => 'Ward', 'email' => 'sog_ward@gmail.com'],
    ['first_name' => 'Curtis', 'last_name' => 'Jackson', 'email' => 'this_is_50@gmail.com']
];

echo $people[0]['email'];
