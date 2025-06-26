<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assosiate Array</title>
</head>
<body>

    <h1>2. Associative Array (with custom keys)</h1>
    <p>Associative array means it uses named keys (like "brand") instead of numeric indexes. we associate a name with each value. That's why it's called an associative array. <br> "=>" is called "double arrow operator".it Assigns a key to a value like "key" => "value"</p>

    <?php
    $mobile = array ("brand"=> "samsung", "model" => "S7", "year" => "2017");
    echo $mobile["brand"];
    echo "<br>";
    print_r($mobile);
    ?>
</body>
</html>