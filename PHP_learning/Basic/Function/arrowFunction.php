<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrow Function</title>
</head>
<body>
    <?php
    // syntax : fn (parametre) => expression ; here "fn" is keyword and "=>" is arrow Used instead of { return ... }
    $sum = fn($a, $b) => $a + $b;
    echo $sum(3, 7);  // Output: 10
    echo "<br>";

    
    $factor = 10;
    $multiply = fn($n) => $n * $factor;
    $result = $multiply("2");
    echo $result;
    ?>
</body>
</html>