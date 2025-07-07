<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>variable scope</title>
</head>
<body>
    <!-- variable scope : Global , Local and Static -->

    <?php
    //Global
    $Name = "Alamgir Rejvi";
    function name () {
        // using x inside this function will generate an error
        echo "<p>Variable x inside function is: $Name</p>"; 
    };
    name();
    echo "<p>Variable x outside function is: $Name</p>";
    echo "<br>";



    // local scope
    function b () {
        $lname = "Rejvi";
        echo $lname;
    }
    b();
    echo "<br>";
    ?>


    <!-- using "global" keyword -->
    <?php
    $a = 50;
    $b = 40;
    function letter () {
        $c = 0;
        global $a,$b,$c;
        $c = $a + $b;
    }
    letter();
    echo $c;
    echo "<br>";
    ?>


    <!-- using "static" keyword -->

    <?php
    function myTest() {
    static $x = 0;
    echo $x;
    $x++;
    }

    myTest();
    echo "<br>";
    myTest();
    echo "<br>";
    myTest();
    ?> 
</body>
</html>