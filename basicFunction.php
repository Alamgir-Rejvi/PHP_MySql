<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<!-- function : string , number -->
    <?php 
    // string type function without parametre
    function first () {
        echo "This is a function";
    }
    first();
    echo "<br>";



    // number type function with parametre without return
    function add ($x , $y) {
        echo $x + $y;
    }
    add(3,4);
    echo "<br>";



    // number type function with parametre with return
    function adding ($x , $y) {
        return $x + $y;
    }
    echo adding(4,6);
    echo "<br>";



    // anonymous function
    $sum = function ($a, $b) {
        return $a + $b;
    };
    echo $sum (4,16);
    echo "<br>";
   

    //arrow function
    $info = fn () => "welcome to the arrow function";
    echo $info();
    echo "<br>";

    $infoo = fn ($a, $b) => $a + $b;
    echo $infoo(50,50);
    echo "<br>";
    ?>


</body>
</html>