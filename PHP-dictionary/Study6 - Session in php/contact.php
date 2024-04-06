<?php
    session_start();
    $title = "Контакти";
    require_once "header.php";
    
?>


<h1 class="mt-5"><?=$title?></h1>

<form action="check_contact.php" method="post">
    <input type="text" name="username" value="<?=$_SESSION['user_name']?>" placeholder="Введіть ім'я" class="form-control">
    <div class="text-danger"><?=$_SESSION['error_username']?></div> <br>
    <input type="text" name="email" value="<?=$_SESSION['email']?>" placeholder="Введіть email" class="form-control">
    <div class="text-danger"><?=$_SESSION['error_email']?></div> <br>    
    <input type="text" name="subject" value="<?=$_SESSION['subject']?>" placeholder="Тема повідомлення" class="form-control">
    <div class="text-danger"><?=$_SESSION['error_subject']?></div> <br>
    <textarea name="message" placeholder="Ваше повідомлення" class="form-control"><?=$_SESSION['message']?></textarea>
    <div class="text-danger"><?=$_SESSION['error_message']?></div> <br>
    <button type="submit" class="btn btn-success">Відправити</button>
</form>


<?php


    require_once "footer.php";
?>