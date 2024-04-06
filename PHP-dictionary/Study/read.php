<?php
$file = file_get_contents('read.txt', true);
echo($file);


// comment1
#  comment2
/*
many-line comment
*/
$file = 'read.txt';
$current = file_get_contents($file);
$current .= "John Smith\n";
file_put_contents($file, $current);