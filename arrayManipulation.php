<?php

$students = [
    "rahim", "karim", 123, "monir"
];

$students[2] = "shafiq";

$n = count($students);
for($i=0; $i<$n; $i++){
    echo $students[$i]."\n";
}

// $student = array_pop($students);
$student = array_shift($students);

echo "\n";
$n = count($students);
for($i=0; $i<$n; $i++){
    echo $students[$i]."\n";
}

// two ways of adding element at the last position of an array
$students[] = "jamal";                    // add jamal at the last of array
array_push($students, "kamal");           // add kamal at the last of array

array_unshift($students, "salam");         // add kamal at the first of array
array_unshift($students, "balam"); 

echo "\n";
$n = count($students);
for($i=0; $i<$n; $i++){
    echo $students[$i]."\n";
}

/*
array_shift()         // remove the first element from array and return it.
array_unshift()       // add an element at the first position in an array.
array_pop()           // remove the last element from array and return it.
array_push()          // add an element at the last position in an array.
*/