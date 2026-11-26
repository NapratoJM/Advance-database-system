<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First Lecture</title>
</head>
<body>
    <body style="background-color: yellow;">
        <h1>
            <?php echo "<font color = 'red'><center>Program 2</center></font>" ?> 
</h1>
        <h3>
            <center><?php echo "<font color= 'blue'>Description: This program shows on how to use variable in PHP.</font>"; ?></center>
</h3>
    


<?php
    $num1 = 10;
    $num2 = 5;
    $pie = 3.1416;
    $result = true;
    $letter =  'a';
    $msg = "Hello";

     echo "Variable num1 contains " . $num1 . "<br>Variable num2 contains " . $num2;
     echo "<br>Variable pie contains " . $pie;
     echo "<br>Variable result contains " . $result;
     echo "<br>Variable letter contains " . $letter;
     echo "<br>Variable msg contains " . $msg;
    ?>

</body>
</html>