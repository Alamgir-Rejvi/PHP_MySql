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
echo "This is $color color <br>"; // output : This is red color.
echo "This is $Color color <br>"; // output : This is green color.
echo "This is $COLOR color <br>"; // output : This is blue color.
echo "This is " . $COLOR . " color" ; // with dot both side of variable can be declared.
echo "<br>";



// float
$_number = 234.3455; // variable can be declared with underscore sign in any place after $ but not with number
echo $_number; // output : 234.3455
echo "<br>";

$float_number = 444.3455;
echo $float_number; // output : 444.3455
echo "<br>";

$float_number_example = 367.533;
echo $float_number_example; // output : 367.533
echo "<br>";



// integer
$number = 32;
echo $number; // output : 32
echo "<br>";


// binary
$b = 0b101011;
echo $b; // output will be in integer : 43 
echo "<br>";


// hexadecimal
$h = 0x1F;
echo $h; // output will be in integer : 31
echo "<br>";



// octal
$oct = 05;
echo $oct; // output : 5 (octal 05 is decimal 5)
echo "<br>";


// boolean
$bool = true;
echo $bool; // output : 1
echo "<br>";



// object 
class Life {
    public $present = "nai"; //here "public" is a modifier, It can be accessed from anywhere (outside or inside the class)
}
$obj = new life(); // here class is called without parameters because the class has no constructor defined.
echo $obj->present;  // Outputs: nai
echo "<br>";



// object with constructor 
class Car {
    public $brand;

    public function __construct($brandName) {
        $this->brand = $brandName;
    }
}
$obj = new Car("Honda");
echo $obj->brand; // Outputs: Honda
echo "<br>";

?>

<!-- we can check what type of variable using var_dump() -->
 <?php
// octal
$oct = 05;
echo $oct; // output : 5 (octal 05 is decimal 5)
echo "<br>";
var_dump($oct); // output : int(5) becouse of being converted into decimal , that is an integer.
echo "<br>";
var_dump([2, 3, 56]);
echo "<br>";
?>

<!-- we can assign the same value to multiple variables in one line: -->
<?php
$a = $b = $c = "letter";

echo $a;
echo "<br>";
echo $b;
echo "<br>";
echo $c;

?>
</body>
</html>