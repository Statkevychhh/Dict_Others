<?php

function info() {
    echo "Info printed.<br>";
}

function pr($word) {
    echo "$word <br>";
}

function math($a, $b) {
    $res = $a + $b;
    pr($res);
}

function math2($a, $b) {
    return $a + $b;
}

$result = math2(5, 9);


function summary($array) {
    $sum = 0;
    foreach($array as $x){
        $sum += $x;
    }

    return $sum;
}

$summa = summary([1, 4, 7, 92, 34, 5]);


function some(){
    global $x;
    $x = 7;
}
$x = 5;
some();
echo $x.'<br>';   // 7


function click(){
    static $count;  // count = 0;
    $count++;
    echo $count.'<br>';
}

click();
click();
click();