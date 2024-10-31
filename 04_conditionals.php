<?php

$age = 19;

/*
if ($age >= 18) {
    echo "You are old enough to vote \r\n";
} else {
    echo "You cannot vote.";
}
*/

// "F" month in capital letter
// "H" hour
$time_of_the_day = date("H");

/*
if ($time_of_the_day < 12) {
    echo "Good morning sir";
} else if ($time_of_the_daytime >= 12 && $time_of_the_day < 19) {
    echo "Good afternoon sir";
} else {
    echo "Good evening sir";
}
*/

$posts = ["Best movies of 2024", "Get a bulletproof core"];

/*
if (!empty($posts)) {
    echo "There are posts to upload";
} else {
    echo "You should write some posts";
}
*/

// Ternary operator
echo !empty($posts) ? $posts[0] : "no posts.";
