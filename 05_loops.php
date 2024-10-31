<?php

$i = 0;

/*

For loop

for ($i = 0; $i < 10; $i++) {
    echo $i . "<br>";
}
*/

/*

While loop

while ($i <= 15) {
    echo "Number " . $i . "<br>";
    $i++;
}
*/

$posts = ["Best movies of 2024", "Get a bulletproof core"];

/*
foreach ($posts as $post) {
    echo $post . "<br>";
}
*/

foreach ($posts as $index => $post) {
    echo "[" . $index . "] " . $post . "<br>";
}
