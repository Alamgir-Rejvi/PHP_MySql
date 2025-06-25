<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // basic array .....(here using br tag is also referred)
    $person_infos = array("Alamgir", "Rejvi","01843433856", "Cumilla");

    echo "The number is : " .$person_infos[2] ."<br>"; // output : The number is : 01843433856
    // echo "<br>";


    // for displaying whole array
    echo implode(", ",$person_infos); // method 1;
    echo "<br>";

    var_dump ($person_infos); // method 2;
    echo "<br>";

    print_r($person_infos); // method 3; for debugging
    print_r("<br>");

    // using "count()" method for finding how many value/element is here
    echo count($person_infos); // output : 4


    $product_list [0] = "apple";
    $product_list [1] = "mango";
    $product_list [2] = "banana";
    $product_list [3] = "nut";

    var_dump($product_list);

    $product_count = count($product_list);
    echo $product_count ."<br>";


    echo $product_list [0];
    echo $product_list [1];
    echo $product_list [2];
    echo $product_list [3];


    for ($i = 0; $i< $product_count; $i++) {
        echo $i."<br>";
        echo $product_list;
    }
    ?>
</body>
</html>