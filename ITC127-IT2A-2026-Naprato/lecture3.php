<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lecture3</title>
</head>
<body>

<form action = "" method = "GET">
    Input number: <input type = "text" name = "txtinput1"><br>
    Input number: <input type = "text" name = "txtinput2"><br>
    <input type = "submit" name = "btnadd" value = "Add">
    <input type = "submit" name = "btnsubtract" value = "Subtract">
    <input type = "submit" name = "btnmultiply" value = "Multiply">
    <input type = "submit" name = "btndivide" value = "Divide">

    
</body>
</html>

<?php
    if(isset($_GET['btnadd'])) {
        $num1 = $_GET['txtinput1'];
        $num2 = $_GET['txtinput2'];
        $sum = $num1 + $num2;
        echo "<br><br>First number: " . $num1;
        echo "<br>Second number: " . $num2;
        echo "<br>Sum: " . $sum;
    }

    if(isset($_GET['btnsubtract'])) {
        $num1 = $_GET['txtinput1'];
        $num2 = $_GET['txtinput2'];
        $difference = $num1 - $num2;
        echo "<br><br>First number: " . $num1;
        echo "<br>Second number: " . $num2;
        echo "<br>difference number: " . $difference;
    }

    if(isset($_GET['btnmultiply'])) {
        $num1 = $_GET['txtinput1'];
        $num2 = $_GET['txtinput2'];
        $product = $num1 * $num2;
        echo "<br><br>First number: " . $num1;
        echo "<br>Second number: " . $num2;
        echo "<br>product number: " . $product;
    }

    if(isset($_GET['btndivide'])) {
        $num1 = $_GET['txtinput1'];
        $num2 = $_GET['txtinput2'];
        $quotient = $num1 / $num2;
        echo "<br><br>First number: " . $num1;
        echo "<br>Second number: " . $num2;
        echo "<br>quotient number: " . $quotient;
    }
?>