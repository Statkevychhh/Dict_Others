<?php 
    $title = "Про нас";
    require "header3.php";   // error - if no file
//  require_once "header.php";   // Лише один раз підключає файл
?>
<div class="container mt-2">
    <h1>Про нас</h1>

    <form action="check_post3.php" method="post"><br>
        <input type="text" name="username" placeholder="Введіть ім'я" class="form-control"><br>
        <input type="email" name="email" placeholder="Введіть email" class="form-control"><br>
        <input type="password" name="password" placeholder="Введіть пароль" class="form-control"><br>
        <textarea name="message" class="form-control" placeholder="Введіть текст"></textarea><br>
        <input type="submit" class="btn btn-success"></input>
    </form><br>
</div>
<?php 
    include "footer3.php";  // no show - if no file
//  include_once "header.php";   // Лише один раз підключає файл
?>