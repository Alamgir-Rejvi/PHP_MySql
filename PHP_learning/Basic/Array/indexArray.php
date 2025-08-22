<?php
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
        
    }

    ?>