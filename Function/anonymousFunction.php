<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anonymous Function</title>
</head>
<body>
    <?php
    // basic function
    function myPlan ($finishTime, $getJob, $maraige) {
        echo "I will finish the course in $finishTime , will get job in $getJob , then will $maraige.";
    }
    myPlan("2025", "any Software company" , "maraige");
    echo "<br>";


    // Anonymous Function
    $x = function($hi){
        echo "Hello $hi";
      };
    $x("world...."); // Hello world....
    echo "<br>";


    // Anonymous Function Using "use" to capture external variables
    $factor = 10;
    $multiply = function($n) use ($factor) { // Variable scope capturing: Manual using "use"
    return $n * $factor;
    };
    $result = $multiply("2");
    echo $result;
    ?>
</body>
</html>