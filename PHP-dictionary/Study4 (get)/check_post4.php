<?php
$name = $_GET['username'];
$email = $_GET['email'];
$pass = $_GET['password'];

if(trim($name) == ""){
    echo "Ви не ввели ім'я користувача!";
}  else if (strlen(trim($name)) <= 1) {
    echo "Такого ім'я не існує!";
} else if(trim($email) == "" || trim($pass) == "" || trim($_GET['message'] == "")) {
    echo "Введіть всі дані!";
} else {
    // $_POST['password'] = md5($pass);  // sha1() - більш продвинута функція кеширування
    // echo "<h1>Всі дані</h1>";
    // foreach ($_POST as $key => $value){
    //     echo "<p>$value</p>";
    // }

    header('Location: new4.php');
    exit;
}