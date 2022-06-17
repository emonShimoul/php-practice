<?php
$fruits = array('apple', 'banana', 'orange', 'plum', 'dates', 'mango');

$newFruits = array("jackfruit", "tamarind", "pineapple");
$someFruits = array_splice($fruits, -5, 4, $newFruits);

print_r($someFruits);
// original array is not changed using array_splice
print_r($fruits);