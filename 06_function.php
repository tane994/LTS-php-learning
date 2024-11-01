<?php

$y = 12;

/*
function registerUser()
{
    // To make a variable global we have to specify it
    global $y;
    echo $y;
    echo 'User registered';
}
*/

function registerUser($email)
{
    echo $email . " registered. <br>";
}

registerUser("toni_fischu@gmail.com");


// Default values
function modulo($n1 = 4, $n2 = 2)
{
    return $n1 % $n2;
}

echo modulo(10, 3) . "<br>";


// Assigning a function as a value
$more_complex_expression = function ($n1, $n2, $n3) {
    return ($n1 * $n2) - $n3;
};

echo $more_complex_expression(5, 2, 9);


// One liner function
$multiply = fn($n1, $n2) => $n1 * $n2;
