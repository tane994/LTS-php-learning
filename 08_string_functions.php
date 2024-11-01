<?php

$my_name = "Andrés Tanesini";

// String length
$num_letters = strlen($my_name);

// Substrings
$sub_str1 = substr($my_name, 0, 3);
$sub_str2 = substr($my_name, 3, 6);

// Finding position of a specific character within a string
$index_letter = strpos($my_name, 'é');

// Reverse string
$reversed_name = strrev($my_name);

// Lowercase string
$lowercase_str = strtolower($my_name);

// Replace surname of my girlfriend with mine
$my_girlfriend_name = "Giulia Masin";
$girlfriend_my_surname = str_replace("Masin", "Tanesini", $my_girlfriend_name);

print_r($girlfriend_my_surname);

echo "<h1>This language is not too bad</h1>";
echo "<script>console.log('Dollar sign before each variable is annoying though.');</script>";

// printf also works
printf("My name is %s and I am %d years old", $my_name, 30);
