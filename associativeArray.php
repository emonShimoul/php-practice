<?php

$students = [
    '12'=>'Hasan',
    '13'=>'Karim',
    '14'=>'Kamal',
    '15'=>'Jamal',
    'a'=>'alia',
    'b'=>'shraddha'
];

echo $students[12]."\n";
echo $students['b'];
echo "\n";

$foods = [
    'vegetables' => 'brinjal, brocolli, carrot, capsicam',
    'fruits' => 'orange, banana, apple',
    'drinks' => 'water, milk'
];

$foods['drinks'] = $foods['drinks'].", orange juice";
$foods['fruits'] .= ", mango";

// echo $foods['vegetables'];
echo "\nusing foreach loop: \n";
foreach($foods as $key=>$value){
    echo $key." = ".$value."\n";
}

$keys = array_keys($foods);
// print_r($keys);
echo "\nusing array_keys built-in function: \n";
for($i=0; $i<count($keys); $i++){
    echo $foods[$keys[$i]]."\n";
}


$values = array_values($foods);
// print_r($values);
echo "\nusing array_values built-in function: \n";
for($i=0; $i<count($values); $i++){
    echo $values[$i]."\n";
}