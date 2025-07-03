<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin: 0;
            font-family: Arial, sans-serif;
        }
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        input[type="number"], input[type="submit"] {
            margin: 2px;
            padding: 4px;
            font-size: 12px;
        }
    </style>
        
    
</head>
<body>
    <h3> Factorial Number </h3>
    <form method  = "post" id = "form">
        <label for="input">Input a Number</label>
        <input type="number" name = "input" placeholder ="Input"require>
        <input type="submit" name = "submit" value = "Submit">
    </form> <br>

    <?php
    if (isset($_POST ["submit"])) {
        $collect = (int)$_POST['input'];
        echo "Your input number is : " . $collect . "<br><br>";

        $multi = 1;
        for ($i = 1; $i <= $collect; $i++) 
            $multi = $multi * $i;
            echo "Factorial Result : " . $multi;
    }
    ?>

</body>
</html>





