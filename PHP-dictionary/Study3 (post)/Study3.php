<?php 
    $title = "Головна сторінка";
    require "header3.php";   // error - if no file
//  require_once "header.php";   // Лише один раз підключає файл
?>

<h1>Головна сторінка</h1></h1>

<?php 
    echo date('t F')."<br>";
    echo date('m-L H:i:s', time() | 100)."<br>";
    echo time()."<br>";

    echo date('m-d H:i:s', strtotime('now'))."<br>";
    echo date('m-d H:i:s', strtotime('+1 Hour'))."<br>";
    echo date('m-d H:i:s', strtotime('-1 Day'))."<br>";
    echo date('m-d H:i:s', strtotime('+1 Week -2 Day + 3 Minute'))."<br>";
 
    echo date('m-d H:i:s', strtotime('last Monday'))."<br>";
    echo date('m-d H:i:s', strtotime('next Month'))."<br>";


    echo "<br>";
    include "footer3.php";  // no show - if no file
//  include_once "header.php";   // Лише один раз підключає файл
?>