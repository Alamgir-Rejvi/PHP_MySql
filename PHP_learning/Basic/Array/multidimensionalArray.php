<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Multidimensional Array</h1>

    <?php
    // two dimensional
    $university = array (
        array("cu",2015),
        array("sociology",2018),
        array("research" , "endless")
    );

    echo $university[1][0]; // output : sociology
    echo "<br>"
    ?>



    <?php
    // three dimensional
    $family = array(
        array("father" , "mother"),
        array (
            array("sister", "brother"),
            array("son" , "doughter"),
        )
        );

    echo $family[0][1]; // output : mother
    echo "<br>";
    echo $family[1][1][1]; // output : doughter
    echo "<br>";

    ?>

    <?php

    for ($r = 0; $r<=10; $r++){
        for( $col = 1; $col<= $r; $col++){
            echo "@";
    };
    echo "<br>";
    }
    ?>

</body>
</html>