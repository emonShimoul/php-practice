<?php

$n = 7;

for($i=$n, $fact=1; $i>1; $i--){
    $fact *= $i;
    // if($fact > 100){
    //     break;
    // }
}

printf("Factorial of %d is %d", $n, $fact);