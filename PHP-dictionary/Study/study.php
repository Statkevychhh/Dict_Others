<?php
    // define(MY_AGE, 24) ;  // constant
    // echo MY_AGE;
    echo M_PI . '<br>';
    echo M_E . '<br>';
 
    $num1 = 5;    // int
    $num2 = 7.8;   // float
    $str = 'Var1: ';   // string
    $str2 = '<br>Var2: ';
    $bool = false;   // boolean

    echo $str . $num1 . $str2 . $num2;


    $a = 0.6;
    $b = "0.8";
    echo "<br>" . $a + floatval($b) . '<br>';


    $x = 15;
    $y = 20;

    echo $x + $y . '<br>';
    echo $x - $y . '<br>';
    echo $x * $y . '<br>';
    echo $x / $y . '<br>';
    echo $y % $x . '<br>';

    $x += 10;
    echo $x . '<br>';
    $x++;
    echo $x . '<br>';

    echo abs(-22)."<br>";
    echo ceil(3.2)."<br>";
    echo floor(3.9)."<br>";
    echo round(3.5556734, 2)."<br>";
    echo mt_rand(1, 20).'<br>';
    echo min(2, 5, 7, 9, 8, 32, 6).'<br>';
    echo max(2, 5, 7, 9, 8, 32, 6).'<br>';
    // sin();  cos();  tg();  ctg().


    $str = "Hello";
    echo "VAR: " . $str . "<br>";

    echo "VAR: $str" . "<br>";
    echo 'VAR: $str' . "<br>";
    echo "<input type=\"submit\">" . "<br>";

    $length = strlen($str);
    echo $length . "<br>";
    $some = "   bread   " . "<br>";
    
    echo strtoupper(trim($some));
    echo strtolower(trim("   NouNaMe ")) . "<br>";
    echo md5("qwerty") . "<br>";



    $a = 3;
    if($a >= 5) {
        echo "a = 5";
    }

    $str = "Hello";
    if ($str == "Hello") {
        echo 'Yes' . "<br>";
    } else if ($str == "Hi.") {
        echo 'Yes 2.' . "<br>";
    } else {
        echo 'No' . "<br>";
    }

    $isWeatherGood = false;
    if ($str == "Man" || $isWeatherGood == false) {
        echo "Only one is true !" . "<br>";
    }

    if ($str == "Hello" & !$isWeatherGood) {
        echo "Both is true !" . "<br>";
    }


    $num = 6;
    switch($num) {
        case 5:
            echo "Var is 5 <br>";
            break;
        case 9:
            echo "Var is 9 <br>";
            break;
        case 6:
            echo "Var is 6 <br>";
            break;
    }

    switch($num) {
        case 5:
            echo "Var is 5 <br>";
            break;
        default:
            echo "Default work!  <br>";
    }



    $mass = array(4, 7 ,21, 9, 0, 1);
    $arr = [5, 7.98, "Artur", true];
    
    echo $mass[1] . "<br>";
    $mass[1] = 2;
    echo $mass[1] . "<br>";


    $list = [
        "age" => 50,
        "name" => "Alex",
        "hobby" => "Box",
    ];
    echo $list["age"] . "<br>";


    $matrix = [[1, 2, 3],
               [4, 5, 6],
               [7, 8, 9]];

    echo $matrix[0][2] . "<br>";;



    for($i = 0; $i < 10; $i++){
        echo $i."<br>";
    }


    $i = 1;
    while($i <=10){
        echo $i."<br>";
        $i++;
    }


    $i = 67;
    do {
        echo $i."<br>";
    } while($i < 10);


    for($el = 100; $el > 10; $el /= 2){
        if($el < 24)
            break;
        

        if($el % 2 == 0)
            continue;

        echo $el."<br>";
    }


    echo "List :".'<br>';
    $list2 = [5, 7, 3, 8, "some", 45.7];
    for($i = 0; $i < count($list2); $i++){
        echo $list2[$i].'<br>';
    }



    $list = ["age" => 40, "name" => "Artur", "hobby" => "Box"];
    foreach ($list as $item => $value){
        echo "Key: $item. Value: $value.<br>";
    }


    $mas = [5, 6, 8, 9];
    foreach($mas as $value){
        echo "Value: $value.<br>";
    }

    $mas = [5, 6, 8, 9];
    foreach($mas as $i => $value){
        echo "Key: $i. Value: $value.<br>";
    }
