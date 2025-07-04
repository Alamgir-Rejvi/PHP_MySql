<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giving Grade Value</title>
</head>

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

<body>
    <h3>Giving Grade Value</h3>
    
<form method = "post">
    Input Grade value : <br> <br>
    <input type="text" name = "grade" placeholder = "enter your grade" require> <br> <br>
    <input type="submit" name = "submit" value = "Submit">
</form>


<?php

if (isset ($_POST['submit'])) {
    $collect = $_POST['grade'];

    if ($collect == "A+") {
        echo "Outstanding" ;
    } 
    elseif ($collect == "A") {
        echo "Very Good" ;
    } elseif ($collect == "B") {
        echo "Good" ;
    } elseif ($collect == "C") {
        echo "Poor" ;
    } else{
        echo "Fail";
    }
}

?>
</body>
</html>