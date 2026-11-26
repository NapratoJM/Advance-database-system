<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lecture3</title>
</head>
<body>
    <form action="" method="GET">
        Input number: <input type="text" name="txtinput1"><br>
        Input number: <input type="text" name="txtinput2"><br>
        <input type="submit" name="btnadd" value="Add">
        <input type="submit" name="btnsubtract" value="Subtract">
        <input type="submit" name="btnmultiply" value="Multiply">
        <input type="submit" name="btndivide" value="Divide">
    </form>

    <?php
    function validateInput1() {
        $errorcount = 0;
        if (!isset($_GET['txtinput1']) || trim($_GET['txtinput1']) === '') {
            echo "<font color='red'>First number is empty.</font><br>";
            $errorcount++;
        } else if (!is_numeric($_GET['txtinput1'])) {
            echo "<font color='red'>First number is not a number.</font><br>";
            $errorcount++;
        }
        return $errorcount;
    }

    function validateInput2() {
        $errorcount = 0;
        if (!isset($_GET['txtinput2']) || trim($_GET['txtinput2']) === '') {
            echo "<font color='red'>Second number is empty.</font><br>";
            $errorcount++;
        } else if (!is_numeric($_GET['txtinput2'])) {
            echo "<font color='red'>Second number is not a number.</font><br>";
            $errorcount++;
        }
        return $errorcount;
    }

    // ADD
    if (isset($_GET['btnadd'])) {
        $error = validateInput1() + validateInput2();

        if ($error == 0) {
            $num1 = $_GET['txtinput1'];
            $num2 = $_GET['txtinput2'];
            $sum = $num1 + $num2;
            echo "<font color='blue'>First number: " . $num1 . "<br>Second number: " . $num2 . "<br>Sum: " . $sum . "</font>";
        }
    }

    // SUBTRACT
    if (isset($_GET['btnsubtract'])) {
        $error = validateInput1() + validateInput2();

        if ($error == 0) {
            $num1 = $_GET['txtinput1'];
            $num2 = $_GET['txtinput2'];
            $difference = $num1 - $num2;
            echo "<font color='blue'>First number: " . $num1 . "<br>Second number: " . $num2 . "<br>Difference: " . $difference . "</font>";
        }
    }

    // MULTIPLY
    if (isset($_GET['btnmultiply'])) {
        $error = validateInput1() + validateInput2();

        if ($error == 0) {
            $num1 = $_GET['txtinput1'];
            $num2 = $_GET['txtinput2'];
            $product = $num1 * $num2;
            echo "<font color='blue'>First number: " . $num1 . "<br>Second number: " . $num2 . "<br>Product: " . $product . "</font>";
        }
    }

    // DIVIDE
    if (isset($_GET['btndivide'])) {
        $error = validateInput1() + validateInput2();

        if ($error == 0) {
            $num1 = $_GET['txtinput1'];
            $num2 = $_GET['txtinput2'];

            if ($num2 == 0) {
                echo "<font color='red'>Cannot divide by zero.</font>";
            } else {
                $quotient = $num1 / $num2;
                echo "<font color='blue'>First number: " . $num1 . "<br>Second number: " . $num2 . "<br>Quotient: " . $quotient . "</font>";
            }
        }
    }
    ?>
</body>
</html>
