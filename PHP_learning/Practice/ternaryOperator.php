<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditional Ternary Operator</title>
</head>
<body>
    <h2>Ternary</h2>
    <h3>Syntax</h3>
    <p>(condition) ? True statement : False statement</p>

    <?php
        $age = 24;
        ($age >= 25) ? $show = "Marraige" : $show = "Wait...";
        echo $show;
        echo "<br>";

        // this can be like :
        $age = 29;
        $show = ($age >= 25) ? "Marraige" : "Wait...";
        echo $show;
        echo "<br>";

        // this can be also like :
        $age = 22;
        $show = $age >= 25 ? "Marraige" : "Wait..."; //without ();
        echo $show;
        echo "<br>";

        // this can be also like :
        $age = 22;
        $show = "The result is : " . $age >= 25 ? "Marraige" : "Wait..."; //with concatenation ;
        echo $show;


    ?>
</body>
</html>