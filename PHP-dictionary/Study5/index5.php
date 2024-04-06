<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?=$title?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>

<body>
    <header>
        <a href="Study3.php">Головна</a></a> | 
        <a href="about3.php">Про нас</a>
    </header>

    <?php
        $file = fopen("text.txt", "w"); // w(write) - type of working with file 
        // "r" - read, "w" - write, "a" - append.

        fwrite($file, "Example text.\n");
        fwrite($file, "Hello.\n");
         
        fclose($file);



        $file = fopen("text.txt", "a"); // w(write) - type of working with file 
        // "r" - read, "w" - write, "a" - append.

        fwrite($file, "Example text2.\n");
        fwrite($file, "Hello2.\n");
         
        fclose($file);



        $filename2 = 'text.txt';
        $file2 = fopen($filename2, 'r');

        $content = fread($file2, filesize($filename2));

        fclose($file2);

        echo "<pre>$content</pre>".'<br>';
    ?>

    <?php
        file_put_contents("a.txt", "Puting of this text\n");
        $text = file_get_contents("a.txt");
        echo $text.'<br>';

        echo file_exists("a.txt").'<br>'; // show 1 - because file exists, else - " "
        rename("a.txt.", "new_name.txt"); // rename file

        unlink("text.txt");  // delete file

        echo __FILE__;
        echo '<br>';

        echo fileperms(__FILE__);  // show root of acсess
        chmod(__FILE__, 0777);
    ?>


    <footer>Всі права захищені &copy; 2050</footer>
</body>
</html>