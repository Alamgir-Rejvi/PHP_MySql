<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
            background-color: lightblue;
            text - align : center;
        }
        #form {
            padding : 15px;
            background-color:lightgreen;
            justify-self: center;
        }
    </style>
</head>
<body>
    <form method = "post" id = "form">
        <label for="input">Input Your Score :</label> <br> <br>
        <input type="number" name = "input"> <br> <br>
        <input type="submit" value = "Submit Score">
    </form>


    <?php
    if ($_POST) {
        $grade = "";
        $score = (int) $_POST['input'];

        if ($score >= 90) {
            echo "Your Grade is : A ";
        }
        elseif ($score >= 80) {
            echo "Your Grade is : B ";
        }
        elseif ($score >= 70) {
            echo "Your Grade is : C ";
        }
        elseif ($score >= 60) {
            echo "Your Grade is : D ";
        } else {
            echo "Fail";
        }
    }
    ?>
</body>
</html>