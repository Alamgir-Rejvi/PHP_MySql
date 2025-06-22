<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
// types of variable in php : string, float, integer, binary, hexadecimal, octal, boolean, object, null, resource



// string
$color = "red"; // variable starts with $(dollor sign) and it is case sensitive 
$Color = "green";
$COLOR = "blue";
echo "This is $color color <br>"; // it will output : This is red color.
echo "This is $Color color <br>"; // it will output : This is green color.
echo "This is $COLOR color <br>"; // it will output : This is blue color.
echo "This is " . $COLOR . " color" ; // with dot both side of variable can be declared.
echo "<br>";



// float
$_number = 234.3455; // variable can be declared with underscore sign in any place after $ but not with number
echo $_number;
echo "<br>";

$float_number = 444.3455;
echo $float_number;
echo "<br>";

$float_number_example = 367.533;
echo $float_number_example;
echo "<br>";



// integer
$number = 32;
echo $number;
echo "<br>";


// binary
$b = 0b101011;
echo $b // output will be in integer : 43 



// // hexadecimal
// $h = 340x123345334325;
// echo $h;

// octal
// $oct = 05;
// echo $oct;

// boolean
$bool = true;
echo $bool;


// object 
$obj = 
?>
</body>
</html>