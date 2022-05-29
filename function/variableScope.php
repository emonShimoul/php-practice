<?php

/*
$name = "Earth";

function doSomething(){
    // global $name;                    // global scope
    // echo $name;
    echo $GLOBALS['name'];              // global scope
}
doSomething();
*/

/*
function doSomething(){
    $name = "Earth";                    // local scope
    echo $name;
}
doSomething();
// echo $name;
*/

function doSomething(){
    static $i;                          // static scope
    $i = $i ?? 0;
    $i++;
    echo $i;
    echo "\n";
}

function doExtra(){
    static $i;
    $i = $i ?? 0;
    $i++;
    echo $i;
    echo "\n";
}

doExtra();
doSomething();
doSomething();
doSomething();
doSomething();

doExtra();
doExtra();
doSomething();
doExtra();
doExtra();


