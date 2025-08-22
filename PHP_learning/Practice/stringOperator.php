<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Operator </title>
</head>
<body>
    <h3>String operator</h3>

    <!-- String Concatenation -->
    <?php
        $a = "Hello ";
        $a .= "This ";
        $a .= "is our world.";
        echo $a;
        echo "<br>";
    ?>

    <?php
    $x = "Hello";
    $y = "World";
    $z = "$x $y";
    echo $z;
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
        echo "<br>";
    ?>

    <?php
        $x = "John";
        echo "Hello $x"; // output : Hello John
        // without concatetion; Single quoted strings does not perform such actions, it returns the string like it was written, with the variable name:

        $x = "John";
        echo 'Hello $x'; // output : Hello $x

        echo strlen("Hello world!");
        echo str_word_count("Hello world!");
        echo strpos("Hello world!", "world");
        

        // Modify string
        $x = "Hello World!";
        echo strtoupper($x);

        $x = "Hello World!";
        echo strtolower($x);

        $x = "Hello World!";
        echo str_replace("World", "Dolly", $x);

        $x = "Hello World!";
        echo strrev($x);

        $x = " Hello World! ";
        echo trim($x); // The trim() removes any whitespace from the beginning or the end:


        // The PHP explode() function splits a string into an array
        $x = "Hello World!";
        $y = explode(" ", $x); //Use the print_r() function to display the result:
        print_r($y);
    ?>


    <?php
        // PHP - Slicing Strings
        $x = "Hello World!";
        echo substr($x, 6, 5);//6 is start index, 5 indicates next 5 index


        // Slice to the End
        $x = "Hello World!";
        echo substr($x, 6); // output : world!
    ?>

    <?php
    // Escape Character: An escape character is a backslash \ followed by the character you want to insert.
    $x = "We are the so-called \"Vikings\" from the north.";
    echo $x;

    $x = "Hello\nWorld";
    echo $x; 
    ?> 
</body>
</html>