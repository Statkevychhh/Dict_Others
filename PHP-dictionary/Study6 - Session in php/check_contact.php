<?php
    session_start();

    unset($_SESSION['user_name']);
    unset($_SESSION['email']);
    unset($_SESSION['subject']);
    unset($_SESSION['message']);

    unset($_SESSION['error_username']);
    unset($_SESSION['error_email']);
    unset($_SESSION['error_subject']);
    unset($_SESSION['error_message']);

    function redirect() {
        header("Location: contact.php");
        exit;
    }

    $user_name = htmlspecialchars(trim($_POST['username']));
    $from = htmlspecialchars(trim($_POST['email']));
    $subject = htmlspecialchars(trim($_POST['subject']));
    $message = htmlspecialchars(trim($_POST['message']));

    $_SESSION['user_name'] = $user_name;
    $_SESSION['email'] = $from;
    $_SESSION['subject'] = $subject;
    $_SESSION['message'] = $message;

    if (strlen($user_name) <= 1) {
        $_SESSION['error_username'] = "Введіть правильне ім'я";
        redirect();
    }
    else if (strlen($from) <= 5) {
        $_SESSION['error_email'] = "Ви ввели неправильний email";
        redirect();
    }
    else if(strlen($subject) <= 5){
        $_SESSION['error_subject'] = "Тема повідомлення не менше 5-ти символів !";
        redirect();
    }
    else if(strlen($message) <= 15){
        $_SESSION['error_message'] = "Повідомлення не менше 15-ти символів !";
        redirect();
    }
    else {

    }