<?php
$planet1 = 'Pluto';
$planet2 = 'Jupiter';
$arr = [1,2,3,4,5,6,7];

// echo $planet1," ", $planet2;

if ($planet1 == "earth"):
    echo "Human";
    echo PHP_EOL;
else:
    echo "Alien";
    echo PHP_EOL;
endif;

foreach($arr as $a):
    echo $a;
endforeach;

