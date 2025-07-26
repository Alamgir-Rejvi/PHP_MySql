<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Number</title>
   

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
    <h3>Prime Number</h3>
<form method = "post">
    Input a number : <br> <br>
    <input type="number" name = "number" placeholder = "enter your number" require> <br> <br>
    <input type="submit" name = "submit" value = "Submit">
</form>

<?php
if (isset($_POST['submit'])) {
    $collect = $_POST['number'];
    $divisor = 0;
    if ($collect <= 1) {
        echo  $collect . " is not a Prime or Composite Number";
        exit();
    }

    for ($i =2; $i < $collect; $i++) {
        if ($collect % $i == 0) {
            $divisor++;
            // echo $collect . " is a Composite Number";
            break;
        }
    }

    if ($divisor == 0) {
        echo $collect . " is a Prime Number";
    } else {
        echo $collect . " is a Composite Number";
    }
}
?>


</body>
</html>