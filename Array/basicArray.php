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




    // using [] bracket in array
    $pen = ["Matador", "Orbit", "Parker"];
            echo $pen[0]."<br>"; // Matador
            echo "<br>";




    // for displaying whole array
    // method 1;
    echo implode(", ",$person_infos); 
    echo "<br>";


     // method 2;
    var_dump ($person_infos);
    echo "<br>";

    // method 3; for debugging
    print_r($person_infos);
    print_r("<br>");

    

    // using "count()" method for finding how many value/element is here
    echo count($person_infos); // output : 4

    ?>
</body>
</html>