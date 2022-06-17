<?php

// copy by value or deep copy
$person = array('fname'=>'Hello', 'lname'=>'World');

function printByValue($person){
    $person['fname'] .= " Changed";
    print_r($person); 
}
echo "Copy By Value: \n";
printByValue($person);
print_r($person);

// copy by reference or shallow copy
$person2 = array('fname'=>'Hello', 'lname'=>'World');

function printByReference(&$person2){
    $person2['fname'] .= " Changed";
    print_r($person2); 
}
echo "\nCopy By Reference: \n";
printByReference($person2);
print_r($person2);