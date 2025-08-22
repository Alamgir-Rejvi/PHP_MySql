<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method  = "post">
        <input type="number" name  ="num1" placeholder = "Input first number" require>;
        <input type="number" name  ="num2" placeholder = "Input second number" require>;
        <input type="number" name  ="num3" placeholder = "Input third number" require>;
        <input type="submit" value ="Submit">
    </form>


    <?php
    if (isset($_POST["submit"])) {
        $a = $_POST['num1'];
        $b = $_POST['num2'];
        $c = $_POST['num3'];


        if ($a > $b and $a > $c) {
            echo "The largest Number is : " . $a;
        }elseif ($b > $a and $b > $c) {
            echo "The largest Number is : " . $b;
        } else {
            echo "The largest Number is : " . $c;
        }
    }
    ?>
</body>
</html>