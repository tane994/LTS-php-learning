<?php

$users = ["Giulia", "Toni", "Julian", "Tedi"];

// Get length of array
$num_users = count($users);

// Search array
// var_dump(in_array("Giulia", $users));

// Add an element to array
$users[] = "Alessia";

// Or simply using push -> we can push multiple elements at the same time
array_push($users, "Cristiano", "Mirco");

// unshift -> put the element at the beginning of the array
array_unshift($users, "Tito");

// array_pop -> remove from the end
array_pop($users);

// array_shift -> remove first element
array_shift($users);

// array_chunk -> splittin array in two chunks
$chunked_array = array_chunk($users, 3);

// array_merge -> concatenate two arrays
$new_users = ["Konrad", "Pfeif", "Max"];
$merged_users = array_merge($users, $new_users);

// Spread operator can be used
$all_the_users = [...$merged_users, ...["Mirko", "Marco"]];
// print_r($all_the_users);

// Combining two arrays and making the first array values as keys for the second
$relationships = ["girlfriend", "mom", "best friend"];
$favourite_people = ["Giulia", "Jacqueline", "Julian"];
$combined_array = array_combine($relationships, $favourite_people);

// extract the keys
$keys = array_keys($combined_array);

// extract the values
$values = array_values($combined_array);

// array_flip -> we invert keys and values e.g Giulia: "Girlfriend"
$flipped = array_flip($combined_array);

// Compute an array of numbers from 1 to 20
$numbers = range(1, 20);

// using map -> in order to transform the $numbers array
$double_numbers_mult = array_map(fn($num) => $num * 2, $numbers);

// using filter 
$greater_than_twenty = array_filter($double_numbers_mult, fn($num) => $num > 20);
print_r($greater_than_twenty);

// using reduce -> sum of all the numbers
$sum = array_reduce($numbers, fn($carry, $num) => $carry + $num);
var_dump($sum);
