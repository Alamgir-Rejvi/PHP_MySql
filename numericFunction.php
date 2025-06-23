<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<!-- numeric : is_numeric() , round (), rand (min, max) -->
    <?php 

    // is_numeric()
    function num() {
    echo is_numeric(12);
    };
    num(); // is_numeric(12), which checks if the value 12 is numeric,then it returns true because 12 is indeed a numeric value. When you use echo in PHP on a boolean value: false becomes an empty string ("")

    echo "<br>";
    // var_dump (is_numeric(12));
    echo "<br>";


    //round ()
    function number() {
    echo round(12.332);
    };
    number();
    echo "<br>";

    // rand ()
    function num1() {
        echo rand(10,100);
        echo "<br>";
        echo ("Random Number : " . rand(10,100));
    }
    num1();
    ?>
</body>
</html>