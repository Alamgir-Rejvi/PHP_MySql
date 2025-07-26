<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Constant variable</h3>
    <?php
        // with define:
        define ("name","Mohammad Alamgir Rejvi");
        echo name ."<br>";

        // with define:
        define ("identy","Mohammad Alamgir");
        echo identy ."<br>";

        // with const :
        const number = 1843433856;
        echo number ."<br>";


        // applied on array:
        define ("arr",["Alamgir","Farhana","Nishad","Fahim"]);
        echo arr[1]."<br>";
        echo arr[1][3]."<br>";

        // applied on function:
        const fun = "Alamgir";
        function myTest() {
            echo fun;
        }
        myTest();
    ?>
</body>
</html>