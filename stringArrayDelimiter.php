<?php
// string to array
// $vegetables = explode(', ','brinjal, brocolli, carrot, capsicam,potato, sweet-potato,onion,ginger, lentil');
$vegetables = preg_split('/, |,/','brinjal, brocolli, carrot, capsicam,potato, sweet-potato,onion,ginger, lentil');         // for multiple delimiter
print_r($vegetables);
// var_dump($vegetables);

// array to string
$vegetablesString = join(', ', $vegetables);
// echo $vegetablesString;

echo count($vegetables);