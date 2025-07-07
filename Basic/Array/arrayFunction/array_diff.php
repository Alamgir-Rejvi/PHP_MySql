<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array_diff function</title>
</head>
<body>
    <!-- example from real life -->
     
    <p>array_diff() compares two or more arrays and returns the values from the first array that are not present in the others.we use it when we want to find items that exist in one list but not in another.</p>
    <h2>Students who didn’t submit the assignment</h2>
    <?php
    $all_students = ["Alamgir", "Rejvi", "Farhana", "Rasel","Rafi"];
    $submitted = ["Farhana", "Rafi"];
    $not_submitted = array_diff($all_students, $submitted);
    print_r($not_submitted); // output : Array ( [0] => Alamgir [1] => Rejvi [3] => Rasel )
    ?>



    <p>It compares only values, not keys.If we want to compare keys, use array_diff_key()
    If we want to compare both keys and values, use array_diff_assoc()</p>




    <?php
    $product_feature = ["name" => "" , "model" => "" , "year" => "","ram" => "","rom" => ""];
    $reduced_feature = ["name" => "mobile","year" => "2017"];
    $present_feature = array_diff_key($product_feature,$reduced_feature);
    print_r($present_feature); // output : Array ( [model] => S7 [ram] => 4GB [rom] => 32GB )
    print_r("<br>");
    ?>



    <?php
    $product_feature = ["name" => "mobile" , "model" => "S7" , "year" => "2017","ram" => "4GB","rom" => "32GB"];
    $reduced_feature = ["name" => "mobile","year" => "2017"];
    $present_feature = array_diff_assoc($product_feature,$reduced_feature);
    print_r($present_feature); // output : Array ( [model] => S7 [ram] => 4GB [rom] => 32GB )
    ?>

</body>
</html>