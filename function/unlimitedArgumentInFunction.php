<?php

function sum(...$number):int{
    $result = 0;
    for($i=0; $i<count($number); $i++){
        $result += $number[$i];
    }
    return $result;
}

echo sum(5,6,7,8,9,3,4,5,3,-10);