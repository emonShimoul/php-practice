<?php

function printNumber($counter, $end, $stepping=1){
    if($counter > $end){
        return;
    }

    echo $counter."\n";
    $counter += $stepping;
    printNumber($counter, $end, $stepping);
}

printNumber(21, 37, 6);