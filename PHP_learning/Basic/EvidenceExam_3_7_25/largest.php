<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finding largest Number</title>

    <style>
        body {
            background:lightblue;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin: 5;
            padding: 10px;
            font-family: Arial, sans-serif;
        }
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        input[type="number"], input[type="submit"] {
            margin: 5px;
            padding: 10px;
            font-size: 18px;
        }
    </style>

</head>
<body>
    <h3>Finding largest Number</h3>
    
<form method = "post">
    Input numbers : <br> <br>
    <input type="number" name = "number1" placeholder = "input first number" require> <br> <br>
    <input type="number" name = "number2" placeholder = "input second number" require> <br> <br>
    <input type="number" name = "number3" placeholder = "input third number" require> <br> <br>
    <input type="submit" name = "submit" value = "Submit">
</form>

<?php
if (isset ($_POST['submit'])) {
    $a = (int) $_POST['number1'];
    $b = (int) $_POST['number2'];
    $c = (int) $_POST['number3'];

    if ($a > $b and $a > $c) {
        echo "The largest number is : " . $a . "<br>";
    } elseif ($b > $a and $b > $c) {
        echo "The largest number is : " . $b . "<br>";
    } else {
        echo "The largest number is : " . $c . "<br>";
    }

}
?>

</body>
</html>