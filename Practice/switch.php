<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Switch</h3>
    <?php
        $input = 5;
        switch ($input) {
            case 1:
                echo "Friday";
                break;
                
            case 2:
                echo "Saturday";
                break;
            case 3:
                echo "Sunday";
                break;
            case 4:
                echo "Monday";
                break;
            case 5:
                echo "Tuesday";
                break;
            case 6:
                echo "Wednessday";
                break;
            case 7:
                echo "Thursday";
                break;
            default:
                echo "Enter a Valid week day";
        }
        echo "<br>";
    ?>

    
    <?php
        $age = 13;
        switch (true) {
            case ($age >= 18):
                echo "You can Vote";
                break;
            case ($age < 18 && $age >=15) :
                echo "Wait for being eligible to Vote";
                break;
            default :
                echo "Eat Conplain to grow up";
        }
    ?>
</body>
</html>