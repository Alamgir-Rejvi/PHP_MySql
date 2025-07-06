<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Operator </title>
</head>
<body>
    <h3>String operator</h3>
    <?php
        $a = "Hello ";
        $a .= "This ";
        $a .= "is our world.";
        echo $a;
        echo "<br>";
    ?>

    <?php
        $a = "Hello ";
        $a .= "The Number is ";
        $a .= 500; // concatenation with numeric
        echo $a;
        echo "<br>";
    ?>
        
    <?php
        $a = "Hello ";
        $b .= $a . 3 . " is a ";
        $c .= $b . "prime number.";
        echo $c;
        
    ?>
</body>
</html>