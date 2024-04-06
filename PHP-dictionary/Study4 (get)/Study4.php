<?php 
    $title = "Головна сторінка";
    require "header4.php";   // error - if no file
//  require_once "header.php";   // Лише один раз підключає файл
?>

<h1>Головна сторінка</h1></h1>

<?php 
    $list = [5, 7, 3, 6, 0, 8];
    print_r($list);
    echo '<br>';

    unset($list[1]);  // delete element of massive
    $list = array_values($list);  //  reset indexation of massive
    
    sort($list);  // sorting of massive
    rsort($list);  // reverse sorting of massive
    shuffle($list);  // unsorting elements of massive

    if(in_array(30, $list)== '') {
        echo 'Not found <br>';
    } else {
        echo 'Found <br>';
    }

    $arr = array_slice($list, 2, 3);  // sliceing of massive
    var_dump($arr) .'<br>';  // show elements of massive
    echo '<br>';

    $arr_1 = [5, 7];
    $arr_2 = [6, 8, 9];
    $arr_3 = array_merge($arr_1, $arr_2);

    $x = 10;
    echo gettype($x).'<br>';
    $y = floatval('10');
    echo gettype($x).'<br>';

    echo is_numeric($x).'<br>';  // 1 - because true, else ''
    $z = '10';
    echo is_numeric($x).'<br>';  // 1 - because true, else ''
    echo is_integer($z).'<br>';  // false - because it is string, else true
// is_double, is_array, is_string, is_integer, is_bool.

    $str = "Example:";
    echo strpos($str, 'pl');  // sliceing of massive with this element ('pl')
    
    $words = "john, bob, alex";
    $arr_words = explode(", ", $words);
    print_r($arr_words);
    echo "<br>";

    $new_array = implode(" | ", $arr_words);
    echo $new_array;
?>


<?php
    include "footer4.php";  // no show - if no file
//  include_once "header.php";   // Лише один раз підключає файл
?>